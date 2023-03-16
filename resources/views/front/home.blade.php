<header class="header">
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
            <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Print Resume</button>
        </div>
    </div>
</header>