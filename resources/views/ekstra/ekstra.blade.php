@include('partials.main')
@include('partials.nav')
<div class="container">
    <br>
    <div class="card">
        <div class="card-header text-center bg-success text-white"><strong>Galeri</strong></div>
        <div class="card-body">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{url('/img/11.jpg')}}" style="object-fit:contain; width:200px; height:400px;"
                            class="d-block w-100" alt="Image">
                        <div class="carousel-caption d-none d-md-block text-white">
                            <h5>Kegiatan Pembelajaran</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{url('/img/9.jpg')}}" style="object-fit:contain; width:200px; height:400px;"
                            class="d-block w-100" alt="Image">
                        <div class="carousel-caption d-none d-md-block text-white">
                            <h5>Kegiatan Pembelajaran</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('/img/10.jpg')}}" style="object-fit:contain; width:200px; height:400px;"
                            class="d-block w-100" alt="Image">
                        <div class="carousel-caption d-none d-md-blocktext-white">
                            <h5>Kegiatan Pembelajaran</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-md-4 mb-3">
                    <a href="{{url('/img/10.jpg')}}"><img src="{{url('/img/9.jpg')}}" alt="Image"
                            class="fluid img-thumbnail"></a>
                </div>
                <div class="col-sm-6 col-md-4 mb-3">
                    <a href="{{url('/img/11.jpg')}}"><img src="{{url('/img/11.jpg')}}" alt="Image"
                            class="fluid img-thumbnail"></a>
                </div>
                <div class="col-sm-6 col-md-4 mb-3">
                    <a href="{{url('/img/12.jpg')}}"><img src="{{url('/img/12.jpg')}}" alt="Image"
                            class="fluid img-thumbnail"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 mb-3">
                    <a href="{{url('/img/10.jpg')}}"><img src="{{url('/img/10.jpg')}}" alt="Image"
                            class="fluid img-thumbnail"></a>
                </div>
                <div class="col-sm-6 col-md-4 mb-3">
                    <a href="{{url('/img/11.jpg')}}"><img src="{{url('/img/13.jpg')}}" alt="Image"
                            class="fluid img-thumbnail"></a>
                </div>
                <div class="col-sm-6 col-md-4 mb-3">
                    <a href="{{url('/img/12.jpg')}}"><img src="{{url('/img/14.jpg')}}" alt="Image"
                            class="fluid img-thumbnail"></a>
                </div>
            </div>
            <h2>Kegiatan Ekstrakulikuler : Al-Banjari</h2>
            <video width="360" height="240" controls>
                <source src="{{ url('/img/1.mp4') }}" type="video/mp4">
            </video>
        </div>

    </div>
</div>
@include('partials.footer')