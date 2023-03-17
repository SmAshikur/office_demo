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
                        <h6 class="title text-danger">2017 - Present</h6>
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
                        <h6 class="title text-danger">2017 - Present</h6>
                        <P>B.E Computer Engineering</P>
                        <P class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error corrupti recusandae obcaecati odit repellat ducimus cum, minus tempora aperiam at.</P>
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
                       <h6>hTL5 &amp; CSS3</h6>
                       <!-- <div class="progress-bar">
                        <div class="progress myProgress" progress="80"></div>
                      </div>
                      <h6>hTL5 &amp; CSS3</h6>
                      <div class="progress-bar">
                       <div class="progress myProgress" progress="50"></div>
                     </div> -->
                      
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="90" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>JavaScript</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="70" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>PHP</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="60" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>SQL</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="50" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Laborum</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="60" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Tempora</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="59" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
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
                       <h6>English</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="80" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>French</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="50" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h6>Spanish</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar myProgress bg-danger" role="progressbar" progress="70" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>