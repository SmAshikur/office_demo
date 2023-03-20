@extends('back.main')
@section('content')
    <div class="container-fluid">
                <form action="{{route('about.update', ['about' => $about->id])}}" method="POST" enctype="multipart/form-data">@csrf @method('PUT')
                    <div class="row mb-5 pt-5">
                        <h3>Create New Education Record</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 px-5">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" id="title" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label>Designition</label>
                                <input type="text" class="form-control" name="position" id="title" value="{{$about->position}}">
                            </div>
                            <div class="form-group">
                                <label>Sub Designition</label>
                                <input type="text" class="form-control" name="sub_position" id="title" value="{{$about->sub_position}}">
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
                        </div>
                        <div class="col-md-6 px-5">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>Resume</label>
                                    <input type="file" class="form-control" name="pdf" id="title">
                                </div>
                                <div class="col-md-6 pt-4">
                                    <a href="{{Storage::url($about->pdf)}}" class=" "> view Resume</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" id="title" value="{{$about->phone}}">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" id="title" value="{{$about->address}}">
                            </div>
                            <div class="form-group">
                                <label>skye</label>
                                <input type="text" class="form-control" name="skype" id="title" value="{{$about->skype}}">
                            </div>
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob" value="{{$about->dob}}" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
    </div>
@endsection