<div class="container-fluid">
    <div id="about" class="row about-section">
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">Who am I ?</h3>
            <span class="line mb-5"></span>
            <h5 class="mb-3">A  {{$about->position}} Located In Our Lovely Earth</h5>
            <p class="mt-20">{{$about->des}}</p>
            <a href="{{Storage::url($about->pdf)}}" class="btn btn-outline-danger"><i class="icon-down-circled2 "></i>Download My CV</a>
        </div>
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">Personal Info</h3>
            <span class="line mb-5"></span>
            <ul class="mt40 info list-unstyled">
                <li><span>Birthdate</span> : {{ $about->dob }}</li>
                <li><span>Email</span> : {{$user->email}}</li>
                <li><span>Phone</span> : +  {{ $about->phone }}</li>
                <li><span>Skype</span> :  {{ $about->skype }} </li>
                <li><span>Address</span> :  {{ $about->address }}</li>
            </ul>
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
        </div>
        <div class="col-lg-4 about-card">
            <h3 class="font-weight-light">My Expertise</h3>
            <span class="line mb-5"></span>
            @foreach (DB::table('expertises')->get() as $data)
            <div class="row">
                <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                <div class="col-10 ml-auto mr-3">
                    <h6>{{$data->title}}</h6>
                        <p class="subtitle"> exercitat Repellendus,  corrupt.</p>
                    <hr>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</div>