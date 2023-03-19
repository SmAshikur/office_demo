<section class="section bg-custom-gray" id="portfolio">
    <div class="container">
        <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
        <div class="portfolio">
            <div class="filters">
                <a href="#" data-filter=".new" class="active">
                    New
                </a>
                <a href="#" data-filter=".advertising">
                    Advertising
                </a>
                <a href="#" data-filter=".branding">
                    Branding
                </a>
                <a href="#" data-filter=".web">
                    Web
                </a>
            </div>
            <div class="portfolio-container"> 
                @foreach (DB::table('portfolios')->get() as $data)
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{asset('images/'.$data->image)}}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free boootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{asset('images/'.$data->image)}}"></a>
                                <div class="text-holder">
                                    <h6 class="title">{{$data->title}}</h6>
                                    <p class="subtitle">{{$data->sub_title}}</p>
                                </div>
                            </div>   
                        </div>             
                    </div>
                @endforeach
            </div> 
        </div>  
    </div>            
</section>