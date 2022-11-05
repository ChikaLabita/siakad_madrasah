@include('partials.main')
@include('partials.nav')
<header class="bg-success py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">Madrasah Hebat Bermartabat</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Generasi Milenial Berakhlakul Karimah</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-light btn-lg px-4 me-sm-3" href="/contact">
                            <strong>Let's Join!</strong></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-4 my-5"
                    src="{{url('/img/10.jpg')}}" alt="Image" /></div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h2 class="fw-bolder mb-0">Mengapa Harus Sekolah Islami? </h2>
            </div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-collection"></i></div>
                        <h2 class="h5">Investasi Dunia Akhirat.</h2>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos labore cumque
                            nisi quo exercitationem deleniti maxime vero, sequi commodi molestiae iste excepturi ratione
                            dolores ut est accusantium facilis, sit adipisci?</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-building"></i></div>
                        <h2 class="h5">Pelajaran Agama Yang Lebih Intensif.</h2>
                        <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, illum
                            quasi. Nihil voluptatibus fuga accusamus, veniam laudantium velit rem tempore ut, esse
                            consequatur sed sunt, ducimus et. Optio, explicabo dolorem?</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-toggles2"></i></div>
                        <h2 class="h5">Dilatih Berakhlakul Karimah</h2>
                        <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat iure sit velit
                            excepturi. Magnam, dolores autem quidem obcaecati velit vero modi perspiciatis eius dolore
                            quia rem similique deserunt excepturi sint!</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-toggles2"></i></div>
                        <h2 class="h5">Kurikulum Pendidikan Yang Lengkap</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores eveniet nam
                            corrupti facilis repellat harum, incidunt impedit culpa ab debitis, sit sint rerum ducimus
                            pariatur id voluptatibus quaerat vero quo?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial section-->
<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">Rasulullah ﷺ bersabda : </div>
                    <div class="fs-4 mb-4 fst-italic">طَلَبُ الْعِلْمِ فَرِيضَةٌ عَلَى كُلِّ مُسْلِمٍ</div>
                    <div class="fs-4 mb-4 fst-italic">”Menuntut ilmu itu wajib atas setiap muslim”. (HR. Ibnu Majah.
                        Dinilai shahih oleh Syaikh Albani dalam Shahih wa Dha’if Sunan Ibnu Majah no. 224)</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                        <div class="fw-bold">
                            Admin01
                            <span class="fw-bold text-primary mx-1">/</span>
                            Admin, Hehe
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Prestasi</h2>
                    <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{url('/img/12.jpg')}}" alt="Image" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Kegiatan Pembelajaran</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Sementara Dummy Dulu</h5>
                        </a>
                        <p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita
                            debitis maxime itaque beatae, amet placeat sint quibusdam dignissimos excepturi laboriosam
                            iste optio quas ad impedit minima laborum culpa aperiam repudiandae.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d"
                                    alt="..." />
                                <div class="small">
                                    <div class="fw-bold">Kelly Rowan</div>
                                    <div class="text-muted">March 12, 2022 &middot; 6 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="{{url('/img/13.jpg')}}" alt="Image" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Kegiatan Pembelajaran</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Sementara Dummy Dulu</h5>
                        </a>
                        <p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
                            dolorum iste, quisquam nesciunt dignissimos porro debitis temporibus, unde soluta
                            cupiditate, natus beatae facere fugiat similique iusto est rem. Perspiciatis, assumenda.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d"
                                    alt="..." />
                                <div class="small">
                                    <div class="fw-bold">Josiah Barclay</div>
                                    <div class="text-muted">March 23, 2022 &middot; 4 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <video controls>
                        <source src="{{ url('/img/1.mp4') }}" type="video/mp4">
                    </video>
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Ekstrakulikuler</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                            <h5 class="card-title mb-3">Sementara Dummy Dulu</h5>
                        </a>
                        <p class="card-text mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ex
                            harum, omnis soluta natus eos exercitationem totam obcaecati accusantium nisi unde. Dolorum
                            suscipit, quisquam enim quae debitis laborum voluptates fuga!</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d"
                                    alt="..." />
                                <div class="small">
                                    <div class="fw-bold">Evelyn Martinez</div>
                                    <div class="text-muted">April 2, 2022 &middot; 10 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <aside class="bg-success bg-gradient rounded-5 p-5 p-sm-5 mt-5">
            <div
                class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">Menerima Siswa Didik Baru.</div>
                    <div class="text-white-50">Hubungi kontak kami : | Kunjungi kantor kami : </div>
                </div>
                <!--div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" placeholder="Email address..."
                            aria-label="Email address..." aria-describedby="button-newsletter" />
                        <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                    </div>
                    <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                </div-->
            </div>
        </aside>
    </div>
</section>
@include('partials.footer')