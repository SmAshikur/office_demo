<section class="section" id="resume">
    <div class="container">
        <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="mt-2">
                            <h4>Expertise</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach (DB::table('expertises')->get() as $data)
                        <h6 class="title text-danger">
                           @if(isset($data->from)) {{date('Y', strtotime($data->from))??''}} @endif - 
                           @if(isset($data->to)) {{date('Y', strtotime($data->to))}} @else Present @endif
                        </h6>
                        <P>{{$data->title}}</P>
                        <P class="subtitle">{{$data->des}}.</P>
                        <hr> 
                        @endforeach
                       
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="mt-2">
                            <h4>Education</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach (DB::table('education')->get() as $data)
                        <h6 class="title text-danger">
                            @if(isset($data->from)) {{date('Y', strtotime($data->from))??''}} @endif - 
                            @if(isset($data->to)) {{date('Y', strtotime($data->to))}} @else Present @endif
                        </h6>
                        <P>{{$data->title}}</P>
                        <P class="subtitle">{{$data->des}}</P>
                        <hr>
                        @endforeach 
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                   <div class="card-header">
                        <div class="pull-left">
                            <h4 class="mt-2">Skills</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        @foreach (DB::table('skills')->where('skill_or_lang','=','skill')->get() as $data)
                        <h6>{{$data->title}}</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar myProgress bg-danger" role="progressbar" progress="{{$data->percent}}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card">
                   <div class="card-header">
                        <div class="pull-left">
                            <h4 class="mt-2">Languages</h4>
                            <span class="line"></span>  
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        @foreach (DB::table('skills')->where('skill_or_lang','!=','skill')->get() as $data)
                       <h6>{{$data->title}}</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="{{$data->percent}}" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>