@extends('back.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="row mb-5 pt-5">
                <h3>Create New Skill</h3>
           </div>
            <div class="row">
                <div class="col px-5">
                    <form action="{{route('skill.store')}}" method="POST" enctype="multipart/form-data">@csrf 
                        <div class="form-group">
                            <label>Skill Name </label>
                            <input type="text" class="form-control" name="title" id="title" >
                        </div>
                        <div class="form-group">
                            <label>Percentage </label>
                            <input type="text" class="form-control" name="percent" id="title" >
                        </div>
                        <div class="form-group">
                            <label> </label>
                            <input type="hidden" class="form-control" name="skill_or_lang" id="title" value="skill" >
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row mb-5 pt-5">
                <h3>Add New Language Skill</h3>
           </div>
            <div class="row">
                <div class="col px-5">
                    <form action="{{route('skill.store')}}" method="POST" enctype="multipart/form-data">@csrf 
                        <div class="form-group">
                            <label>Language Name </label>
                            <input type="text" class="form-control" name="title" id="title" >
                        </div>
                        <div class="form-group">
                            <label>Percentage </label>
                            <input type="text" class="form-control" name="percent" id="title" >
                        </div>
                        <div class="form-group">
                            <label> </label>
                            <input type="hidden" class="form-control" name="skill_or_lang" id="title" value="lan" >
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection