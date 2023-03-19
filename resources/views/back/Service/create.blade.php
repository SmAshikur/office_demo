@extends('back.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="" method="POST" enctype="multipart/form-data">@csrf @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="title" >
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control" name="des" rows="3" cols="3"></textarea>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Cover Image</label>
                        <input type="file" class="form-control" name="icon" id="title">
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('images/')}}" style="height:100px;">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection