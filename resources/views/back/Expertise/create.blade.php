@extends('back.main')
@section('content')
<div class="container">
    <div class="row mb-5 pt-5">
         <h3>Create New Expertise</h3>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{route('expertise.store')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="form-group">
                    <label>Title*</label>
                    <input type="text" class="form-control" name="title" id="title" required>
                </div>
                <div class="form-group">
                    <label>Description*</label>
                    <textarea type="text" class="form-control" name="des" rows="3" cols="3" required></textarea>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label>Icon</label>
                        <input type="file" class="form-control" name="icon" id="title">
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('images/')}}" style="height:100px;">
                    </div>

                </div>

               <div class="row">
                    <div class="form-group col">
                        <label>From*</label>
                        <input type="date" class="form-control" name="from"  required>
                    </div>

                    <div class="form-group col">
                        <label>To</label>
                        <input type="date" class="form-control" name="to"  >
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