<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function get_all_news(){        
        $all_news = News::withoutTrashed()->orderBy('id','Asc')->paginate(4);
        return view('home', compact('all_news'));
    }

    public function get_news(){
        $news_id = \request('news_id');
        $row = News::find($news_id);
        return view('post',compact('row'));
    }
    public function create_new(){
        return view('add-new');
    }
    public function add_news(){
        $this->validate(\request(), [
            'title' =>'required',
            'disc'=>'required',
            'contents'=>'required',
            'add_by'=>'required',
            'status'=>'required'
            ],[],[
            'title' =>'News Title',
            'disc'=>'Discription',
            'contents'=>'News Contents',
            'add_by'=>'User',
            'status'=>'News Status'
        ]);

        News::create([
            'title'=>\request()->title,
            'disc'=>\request()->disc,
            'contents'=>request()->contents,
            'add_by'=>\request()->add_by,
            'status'=>\request()->status
        ]);

        return back(); // return to previse page
    }

    public function delete_news($id){
        $news_obj = News::find($id);
        $news_obj->forceDelete();
        return back();
    }
    public function soft_delete_news($id){
        News::destroy($id);
        return back();
    }

    public function restore(){
        $obj = News::withTrashed();
        $obj->restore();
        return back();
    }
}
