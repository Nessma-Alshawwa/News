@extends('layouts.main')

@section('MainContent')
<section class="contact-area mb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading style-2">
                    <h4>ADD NEWS</h4>
                    <div class="line"></div>
                </div>
                <div>
                    <p>
                    @if($errors->any())
                        <ul>@foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    </p>
                </div>

                <!-- ADD Form Area -->
                <div class="contact-form-area mt-50">
                    <form method="post" action="{!! route('add_news') !!}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" name="title" placeholder="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="disc">Discription*</label>
                            <input type="text" name="disc" placeholder="Discription" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contents">Content*</label>
                            <textarea name="contents" placeholder="Content" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="add_by">User*</label>
                            <input type="text" name="add_by" placeholder="User" class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="status">
                                <option value="active">active</option>
                                <option value="not_active">not_active</option>
                            </select>
                        </div>
                        <button class="btn vizew-btn mt-30" type="submit" value="Add News">Add News</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop