           @extends('frontend.main_master')
           @section('main')
           <!-- banner-area -->
            <section class="banner">
                <div class="container custom-container">
                    <div class="row align-items-center justify-content-center justify-content-lg-between">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="banner__img text-center text-xxl-end">
                                <img src=" {{ asset('frontend/assets/img/banner/sltlogo.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="banner__content">
                                <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>Science Laboratory Technology</span> <br> Bauchi State University Gadau.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll__down">
                    <a href="#aboutSection" class="scroll__link">Scroll down</a>
                </div>
                <div class="banner__video">
                    <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="popup-video"><i class="fas fa-play"></i></a>
               
            </section>
            <!-- banner-area-end -->

                <!-- about-area -->
                <section id="aboutSection" class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <ul class="about__icons__wrap">
                                <li>
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/biotech.png') }}" alt="XD">
                                </li>
                                <li>
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/microbiology.png') }}" alt="Skeatch">
                                </li>
                                <li>
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/biochemistry.png') }}" alt="Illustrator">
                                </li>
                                <li>
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/sltlogo.png') }}" alt="Hotjar">
                                </li>
                                <li>
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/hod2.png') }}" alt="Invision">
                                </li>
                                <li>
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/ismail.png') }}" alt="Photoshop">
                                </li>
                                <li>
                                    <img class="light" src="{{ asset('frontend/assets/img/icons/group.png') }}" alt="Figma">
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="about__content">
                                <div class="section__title">
                                    <span class="sub-title">About Science Lab Tech </span>
                                    <h2 class="title">Science Lab Tech, Faculty of science |Bauchi State University Gadau</h2>
                                </div>
                                <div class="about__exp">
                                    <div class="about__exp__icon">
                                        <img src="assets/img/icons/about_icon.png" alt="">
                                    </div>
                                    <div class="about__exp__content">
                                    </div>
                                </div>
                                <p class="desc">I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer</p>
                                <a href="about.html" class="btn">Download my resume</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- services-area -->
            <section class="services">
                <div class="container">
                    <div class="services__title__wrap">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="section__title">
                                    <span class="sub-title">S L T Options</span>
                                    <h2 class="title">Science Lab Tech option</h2>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-4">
                                <div class="services__arrow"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-0 services__active">
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img src="assets/img/images/services_img01.jpg" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="assets/img/icons/services_light_icon01.png" alt="">
                                        <img class="dark" src="assets/img/icons/services_icon01.png" alt="">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">BioTechnology</a></h3>
                                    <p>Biotechnology Option Be like....</p>
                                    <ul class="services__list">
                                        <li>molecular Biology</li>
                                        <li>molecular Biology</li>
                                        <li>molecular Biology</li>
                                        <li>molecular Biology</li>
                                    </ul>
                                    <a href="#" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img src="assets/img/images/services_img02.jpg" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="assets/img/icons/services_light_icon02.png" alt="">
                                        <img class="dark" src="assets/img/icons/services_icon02.png" alt="">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">BioChemistry</a></h3>
                                    <p>BioChemistry Option Be like.....</p>
                                    <ul class="services__list">
                                        <li>Plant BioChemistry</li>
                                        <li>Plant BioChemistry</li>
                                        <li>Planty BioChemistry</li>
                                        <li>Planty BioChemistry</li>
                                    </ul>
                                    <a href="#" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img src="assets/img/images/services_img03.jpg" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="assets/img/icons/services_light_icon03.png" alt="">
                                        <img class="dark" src="assets/img/icons/services_icon03.png" alt="">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">MicroBiology</a></h3>
                                    <p>MicroBiology Option Be like......</p>
                                    <ul class="services__list">
                                        <li>fungi</li>
                                        <li>Bacteria</li>
                                        <li>Lab</li>
                                        <li>Algea</li>
                                    </ul>
                                    <a href="#" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="services__item">
                                <div class="services__thumb">
                                    <a href="services-details.html"><img src="assets/img/images/services_img04.jpg" alt=""></a>
                                </div>
                                <div class="services__content">
                                    <div class="services__icon">
                                        <img class="light" src="assets/img/icons/services_light_icon04.png" alt="">
                                        <img class="dark" src="assets/img/icons/services_icon04.png" alt="">
                                    </div>
                                    <h3 class="title"><a href="services-details.html">Physics Electronic</a></h3>
                                    <p>BioChemistry Option Be like......</p>
                                    <ul class="services__list">
                                        <li>Thermal Physics</li>
                                        <li>Electronics</li>
                                        <li>physics</li>
                                        <li>live wave</li>
                                    </ul>
                                    <a href="#" class="btn border-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
