{{-- @extends('layouts.apps') --}}
{{-- @section('content') --}}
    <div class="container bg-light" id="resume">
        <div class="text-center mb-5 pt-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->
                        <a class="btn btn-primary px-4 py-3" href="#!">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </a>
                    </div>
                    <!-- Experience Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5" data-aos="fade-right">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">October 2021 - Present</div>
                                        <div class="small fw-bolder">Web Developer and Backend Developer</div>
                                        <div class="small text-muted">PT. Wahana Ottomitra Mutiartha Tbk</div>
                                        <div class="small text-muted">Jakarta, Indonesia</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        I participate in building an internal website with features such as master, report, mapping, and business trips using Laravel, JavaScript, Bootstrap, and PostgresSql. Additionally, I serve as a backend developer for a mobile application using Laravel and PostgresSql.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Experience Card 2-->
                    <div class="card shadow border-0 rounded-4 mb-5" data-aos="fade-left">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-primary fw-bolder mb-2">Januari 2021 - October 2021</div>
                                        <div class="small fw-bolder">independent project</div>
                                        <div class="small text-muted">-</div>
                                        <div class="small text-muted">West Sumatera, Indonesia</div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>For the past 10 months, I have been working on an independent project, which consists of an information system (PHP native, MySQL, JavaScript, Bootstrap), and an e-ticket system (Laravel, Bootstrap, PostgreSQL)</div></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    <!-- Education Card 1-->
                    <div class="card shadow border-0 rounded-4 mb-5" data-aos="slide-up">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2021</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">Camp404</div>
                                            <div class="small text-muted">Jakarta, Indonesia</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Bootcamp</div>
                                            <div class="small text-muted">Basic Web Programming and Laravel 8</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>In this bootcamp, I studied Basic Web Programming for one month in May, focusing on (HTML, JavaScript, CSS).<br> 
                                    Below is the link to the certificate: <a href="https://camp404.com/public/cert/CCPR225B13098G5FGBF">Basic Web Programming</a> <br>

                                    Afterwards, I delved into basic Laravel 8 (Laravel, Bootstrap, Github). <br>
                                     Here is the link to the certificate: <a href="https://camp404.com/public/cert/CCPR225B13104WHO97T">Laravel 8</a></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow border-0 rounded-4 mb-5" data-aos="slide-up">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">2017 - 2020</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">UPI YPTK Padang</div>
                                            <div class="small text-muted">Padang, West Sumatera</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">Bachelor of Computer Science</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8"><div>My major is Computer Engineering. Throughout my studies, I have learned the fundamentals of several programming languages, including PHP native, Java, CSS, JavaScript, MySQL, and C++. Additionally, I have chosen to focus on artificial intelligence to sharpen my logical skills.</div></div>
                            </div>
                        </div>
                    </div>
                    <!-- Education Card 2-->
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5" data-aos="fade-in">
                        <div class="card-body p-5">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Problem Solving</div></div>
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Database Management</div></div>
                                    <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Rest API</div></div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel Frameworks</div></div>
                                </div>
                            </div>
                            <!-- Languages list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                    <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div></div>
                                    <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">MySQL</div></div>
                                    <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PostgresSQL</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
{{-- @endsection --}}