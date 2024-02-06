{{-- @extends('layouts.apps')
@section('content') --}}
    <section class="" id="project">
        <div class="container bg-light">
            <div class="text-center mb-5 pt-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5" data-aos="flip-right">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Backend Developer Terminate Online</h2>
                                    <p>The project involves the online submission of resignation letters through a mobile application. Employees can submit their resignation requests via the mobile app, and there is a hierarchical approval process that must be followed until the request is marked as complete. The system is developed using the Laravel framework and utilizes JSON responses.</p>
                                </div>
                                <img class="img-fluid" style="max-width: 400px" src="{{ asset('/') }}assets/img/terminate.jpeg" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5" data-aos="flip-left">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Business trip project</h2>
                                    <p>The business trip project involves the development of an admin website with several features, including Masters, Business Trips (aside from work assignments), Reports, and Work Assignment Reservations. The project is built using Laravel 10, and the data transfer process from the frontend to the backend is facilitated using Ajax.</p>
                                </div>
                                <img class="img-fluid" style="max-height: 500px" src="{{ asset('/') }}assets/img/w2u.png" alt="..." />
                            </div>
                        </div>
                    </div>
                    {{-- project card 3 --}}
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5" data-aos="flip-right">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Jobdesc project</h2>
                                    <p>
                                        In this project, I have implemented several features on the admin website, including Master, Mapping Position, and Report. The project is developed using Laravel 10, and the data retrieval process from the frontend to the backend is facilitated using Ajax</p>
                                </div>
                                <img class="img-fluid" style="max-height: 500px" src="{{ asset('/') }}assets/img/w2u.png" alt="..." />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
{{-- @endsection --}}