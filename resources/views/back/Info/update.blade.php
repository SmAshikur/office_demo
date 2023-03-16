@extends('back.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route('about.update', ['about' => $about->id])}}" method="POST" enctype="multipart/form-data">@csrf @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="title" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label>Designition</label>
                        <input type="text" class="form-control" name="position" id="title" value="{{$about->position}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class="form-control" name="des" rows="3" cols="3">{{$about->des}}</textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Cover Image</label>
                            <input type="file" class="form-control" name="cover_image" id="title">
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('images/'.$about->cover_image)}}" style="height:100px;">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Profile Image</label>
                            <input type="file" class="form-control" name="profile_image" id="profile_image ">
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('images/'.$about->profile_image)}}" style="height:100px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Resume</label>
                        <input type="file" class="form-control" name="pdf" id="title">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection