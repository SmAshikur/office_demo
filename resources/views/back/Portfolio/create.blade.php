@extends('back.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">@csrf 
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="cat" id="title">
                        <option value="new">New</option>
                        <option value="adverstising">ADVERSTISING</option>
                        <option value="brand">Branding</option>
                        <option value="web">Web</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" id="title" >
                </div>
                <div class="form-group">
                    <label>Sub Title</label>
                    <input type="text" class="form-control" name="sub_title" id="title" >
                </div>
                {{-- <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" class="form-control" name="des" rows="3" cols="3"></textarea>
                </div> --}}
                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Cover Image</label>
                        <input type="file" class="form-control" name="image" id="title">
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