@if(isset($about->profile_image))
<header class="header" style="
    background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{asset('images/'.$about->profile_image)}});
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{asset('images/'.$about->profile_image)}});
">
{{-- front/assets/imgs/header.jpg --}}
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-9">
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul> 
            </div> 
        </div>
        <div class="header-content">
            <h4 class="header-subtitle" >Hello, I am</h4>
            <h1 class="header-title">{{$user->name}}</h1>
            <h6 class="header-mono" >{{$about->position}}| Developer</h6>
            <a href="{{Storage::url($about->pdf)}}" class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</a>
        </div>
    </div>
</header>
@else
<header class="header" style="
    background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{asset('front/assets/imgs/header.jpg')}});
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{asset('front/assets/imgs/header.jpg')}});
">
{{-- front/assets/imgs/header.jpg --}}
    <div class="container">
        <div class="row">
            <div class="col-md-3 offset-md-9">
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul> 
            </div> 
        </div>
        <div class="header-content">
            <h4 class="header-subtitle" >Hello, I am</h4>
            <h1 class="header-title">{{$user->name}}</h1>
            <h6 class="header-mono" >{{$about->position}}| Developer</h6>
            <a href="{{Storage::url($about->pdf)}}" class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</a>
        </div>
    </div>
</header>
@endif