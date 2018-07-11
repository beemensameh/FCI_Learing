<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/welcome/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/media-queries.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome/magnific-popup.css') }}">

    <!-- Script
    ================================================== -->
    <script src="{{ asset('js/welcome/modernizr.js') }}"></script>

    <!-- Favicons
     ================================================== -->
    <link rel="shortcut icon" href="{{ asset('image/welcome/favicon.png') }}" >

</head>

<body>

<!-- Header
================================================== -->
<header id="home">

    <nav id="nav-wrap">

        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

        <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#resume">Resume</a></li>
            {{-- <li><a class="smoothscroll" href="#portfolio">Works</a></li> --}}
            @auth
                <li><a href="{{ url('/home') }}">Home</a></li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                {{--<li><a href="#register">Register</a></li>--}}
            @endauth
        </ul> <!-- end #nav -->

    </nav> <!-- end #nav-wrap -->

    <div class="row banner">
        <div class="banner-text">
            <h1 class="responsive-headline">FCI Assuit University</h1>
            <h3>
                {{--I'm a Manila based <span>graphic designer</span>, <span>illustrator</span> and <span>webdesigner</span> creating awesome and
                effective visual identities for companies of all sizes around the globe. Let's <a class="smoothscroll" href="#about">start scrolling</a>
                and learn more--}}
                <a class="smoothscroll" href="#about"></a>
            </h3>
            <hr />

        </div>
    </div>

    <p class="scrolldown">
        <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
    </p>

</header> <!-- Header End -->


<!-- About Section
================================================== -->
<section id="about">

    <div class="row">

        <div class="three columns">

            <img class="profile-pic"  src="{{ asset('image/welcome/portfolio/logo.jpg') }}" alt="" />
            {{--<img alt="" src="{{ asset('image/welcome/portfolio/coffee.jpg') }}">--}}
        </div>

        <div class="nine columns main-col">

            <h2>About FCI</h2>

            <p>
            <ul>
                <li>The study is based on the credit hours system. The credit hours are a unit of study measurement to determine the weight of the course. The lecture should be one hour or two hours, three or four hours.
                </li>
                <li>A bachelor's degree in any discipline requires a student to successfully pass 144 credit hours for at least eight semesters, divided into four levels of study. In case the student is selected for a sub-specialization in addition to the main specialization, he must successfully pass 15 additional credit hours of the sub-specialization requirements</li>
                    <li>The student must specify the major specialization as well as the sub-specialization if he wishes after successfully passing a total of 72 credit hours and can not be changed without the approval of the College Council</li>
             <li>The college follows the credit hours system, which is based on the fact that the basic unit is the curriculum, not the academic year, and the evaluation system is based on the grade in each course with points system</li>
            </ul>
            </p>

            <div class="row">

                <div class="columns contact-details">

                    <h2>Contact Details</h2>
                    <p class="address">
                        <span>Affair Number</span><br>
                        <span>0882423381</span><br>
                        <span> <a href="http://www.aun.edu.eg/faculty_computer_information/">FCI WebSite</a></span>
                        <br>
                        <span> <a href="http://www.aun.edu.eg">Assiut University WebSite</a></span>

                    </p>

                </div>


            </div> <!-- end row -->

        </div> <!-- end .main-col -->

    </div>

</section> <!-- About Section End-->


<!-- Resume Section
================================================== -->
<section id="resume">

    <!-- Education
    ----------------------------------------------- -->
    <div class="row education">

        <div class="three columns header-col">
            <h1><span>Education</span></h1>
        </div>

        <div class="nine columns main-col">

            <div class="row item">

                <div class="twelve columns">

                    <h3>Faculty Mission</h3>
                    {{--<p class="info">Master in Graphic Design <span>&bull;</span> <em class="date">April 2007</em></p>--}}

                    <p>
                        The mission of the college is to serve students and the community,
                        through the provision of distinctive education and innovative research, in the fields of computer science, information systems and technology. And multimedia, developing the student's personality to make him able to participate in building a knowledge-based economy, and desirous of innovating and loving To work together and to be aware of the values of continuing education and self-learning, able to compete locally,
                        regionally and internationally in the labour market, and to interact creatively with society and entrepreneurs.
                    </p>

                </div>

            </div> <!-- item end -->

            <div class="row item">

                <div class="twelve columns">

                    <h3>Faculty Vision</h3>
                    {{--<p class="info">B.A. Degree in Graphic Design <span>&bull;</span> <em class="date">March 2003</em></p>--}}

                    <p>
                        The Faculty of Computing and Information aspires to be a leading research educational
                        institution in the field of computerization and community development in the light
                        of global quality standards.
                    </p>

                </div>

            </div> <!-- item end -->
            <div class="row item">

                <div class="twelve columns">

                    <h3>Faculty Goals</h3>
                    {{--<p class="info">B.A. Degree in Graphic Design <span>&bull;</span> <em class="date">March 2003</em></p>--}}

                    <p>
                    <ul type="square">
                        <li >
                           Development of educational programmes in the light of approved academic standards.
                        </li>
                        <li>
                            Continuous development of education and learning opportunities for students and upgrading of graduates.
                        </li>
                        <li>Upgrading the teaching staff and the auxiliary body.</li>
                        <li>Continuous development of scientific research and scientific activities.

                           </li>
                        <li>Development of postgraduate studies.</li>
                    </ul>


                    </p>

                </div>

            </div> <!-- item end -->

        </div> <!-- main-col end -->

    </div> <!-- End Education -->




</section> <!-- Resume Section End-->


{{--<!-- Portfolio Section--}}
{{--================================================== -->--}}
{{--<section id="portfolio">--}}

    {{--<div class="row">--}}

        {{--<div class="twelve columns collapsed">--}}

            {{--<h1>Check Out Some of My Works.</h1>--}}

            {{--<!-- portfolio-wrapper -->--}}
            {{--<div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">--}}

                {{--<div class="columns portfolio-item">--}}
                    {{--<div class="item-wrap">--}}

                        {{--<a href="#modal-01" title="">--}}
                            {{--<img alt="" src="{{ asset('image/welcome/portfolio/khaled.jpg') }}">--}}
                            {{--<div class="overlay">--}}
                                {{--<div class="portfolio-item-meta">--}}
                                    {{--<h5>Prof Khaled</h5>--}}
                                    {{--<p>Illustrration</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="link-icon"><i class="icon-plus"></i></div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div> <!-- item end -->--}}

                {{--<div class="columns portfolio-item">--}}
                    {{--<div class="item-wrap">--}}

                        {{--<a href="#modal-02" title="">--}}
                            {{--<img alt="" src="{{ asset('image/welcome/portfolio/hosny.jpg') }}">--}}
                            {{--<div class="overlay">--}}
                                {{--<div class="portfolio-item-meta">--}}
                                    {{--<h5>Prof Hosni</h5>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="link-icon"><i class="icon-plus"></i></div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div> <!-- item end -->--}}

                {{--<div class="columns portfolio-item">--}}
                    {{--<div class="item-wrap">--}}

                        {{--<a href="#modal-03" title="">--}}
                            {{--<img alt="" src="{{ asset('image/welcome/portfolio/tayser.jpg') }}">--}}
                            {{--<div class="overlay">--}}
                                {{--<div class="portfolio-item-meta">--}}
                                    {{--<h5>prof Tayser</h5>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="link-icon"><i class="icon-plus"></i></div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div> <!-- item end -->--}}

                {{--<div class="columns portfolio-item">--}}
                    {{--<div class="item-wrap">--}}

                        {{--<a href="#modal-04" title="">--}}
                            {{--<img alt="" src="{{ asset('image/welcome/portfolio/adel.jpg') }}">--}}
                            {{--<div class="overlay">--}}
                                {{--<div class="portfolio-item-meta">--}}
                                    {{--<h>Prof Adel</h></h5>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="link-icon"><i class="icon-plus"></i></div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div> <!-- item end -->--}}

                {{--<div class="columns portfolio-item">--}}
                    {{--<div class="item-wrap">--}}

                        {{--<a href="#modal-05" title="">--}}
                            {{--<img alt="" src="{{ asset('image/welcome/portfolio/fawzy.jpg') }}">--}}
                            {{--<div class="overlay">--}}
                                {{--<div class="portfolio-item-meta">--}}
                                    {{--<h5>Farmer Boy</h5>--}}
                                    {{--<p>Branding</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="link-icon"><i class="icon-plus"></i></div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div> <!-- item end -->--}}

                {{--<div class="columns portfolio-item">--}}
                    {{--<div class="item-wrap">--}}

                        {{--<a href="#modal-06" title="">--}}
                            {{--<img alt="" src="{{ asset('image/welcome/portfolio/taloba.jpg') }}">--}}
                            {{--<div class="overlay">--}}
                                {{--<div class="portfolio-item-meta">--}}
                                    {{--<h5>Girl</h5>--}}
                                    {{--<p>Photography</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="link-icon"><i class="icon-plus"></i></div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div> <!-- item end -->--}}

                {{--<div class="columns portfolio-item">--}}
                    {{--<div class="item-wrap">--}}

                        {{--<a href="#modal-07" title="">--}}
                            {{--<img alt="" src="{{ asset('image/welcome/portfolio/marghany.jpg') }}">--}}
                            {{--<div class="overlay">--}}
                                {{--<div class="portfolio-item-meta">--}}
                                    {{--<h5>Origami</h5>--}}
                                    {{--<p>Illustrration</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="link-icon"><i class="icon-plus"></i></div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div> <!-- item end -->--}}

                {{--<div class="columns portfolio-item">--}}
                    {{--<div class="item-wrap">--}}

                        {{--<a href="#modal-08" title="">--}}
                            {{--<img alt="" src="{{ asset('image/welcome/portfolio/retrocam.jpg') }}">--}}
                            {{--<div class="overlay">--}}
                                {{--<div class="portfolio-item-meta">--}}
                                    {{--<h5>Retrocam</h5>--}}
                                    {{--<p>Web Development</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="link-icon"><i class="icon-plus"></i></div>--}}
                        {{--</a>--}}

                    {{--</div>--}}
                {{--</div>  <!-- item end -->--}}

            {{--</div> <!-- portfolio-wrapper end -->--}}

        {{--</div> <!-- twelve columns end -->--}}


        {{--<!-- Modal Popup--}}
         {{----------------------------------------------------------------- -->--}}

        {{--<div id="modal-01" class="popup-modal mfp-hide">--}}

            {{--<img class="scale-with-grid" src="{{ asset('image/welcome/portfolio/modals/khaled.jpg') }}" alt="" />--}}

            {{--<div class="description-box">--}}
                {{--<h4>Prof Khaled</h4>--}}
                {{--<p>Vice Dean for Community Services and Environmental Development of Faculty of Computers and Information ,--}}
                    {{--Head of Department of Multimedia , Faculty of Computers and Information ,--}}
                    {{--Associate Professor in Department of Computer Science , Faculty of Computers and Information , Assiut University--}}

                {{--</p>--}}
                {{--<span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>--}}
            {{--</div>--}}

            {{--<div class="link-box">--}}

                {{--<a class="popup-modal-dismiss">Close</a>--}}
            {{--</div>--}}

        {{--</div><!-- modal-01 End -->--}}

        {{--<div id="modal-02" class="popup-modal mfp-hide">--}}

            {{--<img class="scale-with-grid" src="{{ asset('image/welcome/portfolio/modals/hosny.jpg') }}" alt="" />--}}

            {{--<div class="description-box">--}}
                {{--<h4>Prof Hosni</h4>--}}
                {{--<p>Head of Department of Information Technology , Faculty of Computers and Information , Assiut University--}}
                    {{--of Assiut University--}}
                    {{--Professor in Department of Information Technology , Faculty of Computers and Information , ??Assiut University</p>--}}
                {{--<span class="categories"><i class="fa fa-tag"></i>Branding, Web Development</span>--}}
            {{--</div>--}}

            {{--<div class="link-box">--}}

                {{--<a class="popup-modal-dismiss">Close</a>--}}
            {{--</div>--}}

        {{--</div><!-- modal-02 End -->--}}

        {{--<div id="modal-03" class="popup-modal mfp-hide">--}}

            {{--<img class="scale-with-grid" src="{{ asset('image/welcome/portfolio/modals/tayser.jpg') }}" alt="" />--}}

            {{--<div class="description-box">--}}
                {{--<h4>Prof Tayser</h4>--}}
                {{--<p>Vice Dean for Graduate Studies and Research of Department of Information Systems , Faculty of Computers and Information ,--}}
                    {{--Head of Department of Information Systems , Faculty of Computers and Information ,--}}
                    {{--Professor in Department of Information Systems , Faculty of Computers and Information , ??Assiut University</p>--}}
                {{--<span class="categories"><i class="fa fa-tag"></i>Branding</span>--}}
            {{--</div>--}}

            {{--<div class="link-box">--}}

                {{--<a class="popup-modal-dismiss">Close</a>--}}
            {{--</div>--}}

        {{--</div><!-- modal-03 End -->--}}

        {{--<div id="modal-04" class="popup-modal mfp-hide">--}}

            {{--<img class="scale-with-grid" src="{{ asset('image/welcome/portfolio/modals/adel.jpg') }}" alt="" />--}}

            {{--<div class="description-box">--}}
                {{--<h4>Prof Adel</h4>--}}
                {{--<p>Dean of , Faculty of Computers and Information , Assiut University--}}
                    {{--Head of Department of Computer Science , Faculty of Computers and Information ,--}}
                    {{--Arab Universities affairs Coordinator of ,--}}
                    {{--Professor in Department of Computer Science , Faculty of Computers and Information , Assiut University</p>--}}
                {{--<span class="categories"><i class="fa fa-tag"></i>Photography</span>--}}
            {{--</div>--}}

            {{--<div class="link-box">--}}

                {{--<a class="popup-modal-dismiss">Close</a>--}}
            {{--</div>--}}

        {{--</div><!-- modal-04 End -->--}}

        {{--<div id="modal-05" class="popup-modal mfp-hide">--}}

            {{--<img class="scale-with-grid" src="{{ asset('image/welcome/portfolio/modals/fawzy.jpg') }}" alt="" />--}}

            {{--<div class="description-box">--}}
                {{--<h4>Farmer Boy</h4>--}}
                {{--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
                {{--<span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>--}}
            {{--</div>--}}

            {{--<div class="link-box">--}}



                {{--<a class="popup-modal-dismiss">Close</a>--}}
            {{--</div>--}}

        {{--</div><!-- modal-05 End -->--}}

        {{--<div id="modal-06" class="popup-modal mfp-hide">--}}

            {{--<img class="scale-with-grid" src="{{ asset('image/welcome/portfolio/modals/taloba.jpg') }}" alt="" />--}}

            {{--<div class="description-box">--}}
                {{--<h4>Girl</h4>--}}
                {{--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
                {{--<span class="categories"><i class="fa fa-tag"></i>Photography</span>--}}
            {{--</div>--}}

            {{--<div class="link-box">--}}

                {{--<a class="popup-modal-dismiss">Close</a>--}}
            {{--</div>--}}

        {{--</div><!-- modal-06 End -->--}}

        {{--<div id="modal-07" class="popup-modal mfp-hide">--}}

            {{--<img class="scale-with-grid" src="{{ asset('image/welcome/portfolio/modals/marghany.jpg') }}" alt="" />--}}

            {{--<div class="description-box">--}}
                {{--<h4>Origami</h4>--}}
                {{--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
                {{--<span class="categories"><i class="fa fa-tag"></i>Branding, Illustration</span>--}}
            {{--</div>--}}

            {{--<div class="link-box">--}}

                {{--<a class="popup-modal-dismiss">Close</a>--}}
            {{--</div>--}}

        {{--</div><!-- modal-07 End -->--}}

        {{--<div id="modal-08" class="popup-modal mfp-hide">--}}

            {{--<img class="scale-with-grid" src="{{ asset('image/welcome/portfolio/modals/m-retrocam.jpg') }}" alt="" />--}}

            {{--<div class="description-box">--}}
                {{--<h4>Retrocam</h4>--}}
                {{--<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>--}}
                {{--<span class="categories"><i class="fa fa-tag"></i>Webdesign, Photography</span>--}}
            {{--</div>--}}

            {{--<div class="link-box">--}}

                {{--<a class="popup-modal-dismiss">Close</a>--}}
            {{--</div>--}}

        {{--</div><!-- modal-01 End -->--}}


    {{--</div> <!-- row End -->--}}

{{--</section> <!-- Portfolio Section End-->--}}


<!-- Testimonials Section
================================================== -->
<section id="testimonials">

    <div class="text-container">

        <div class="row">

            <div class="two columns header-col">

                <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

                <div class="flexslider">

                    <ul class="slides">

                        <li>
                            <blockquote>
                                <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                                    to do what you believe is great work. And the only way to do great work is to love what you do.
                                    If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
                                </p>
                                <cite>Steve Jobs</cite>
                            </blockquote>
                        </li> <!-- slide ends -->

                        <li>
                            <blockquote>
                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                    Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                                    nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                </p>
                                <cite>Mr. Adobe</cite>
                            </blockquote>
                        </li> <!-- slide ends -->

                    </ul>

                </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

        </div> <!-- row ends -->

    </div>  <!-- text-container ends -->

</section> <!-- Testimonials Section End-->

<!-- footer
================================================== -->
<footer>

    <div class="row">



        <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

    </div>

</footer> <!-- Footer End-->

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/welcome/jquery-1.10.2.min.js') }}"><\/script>')</script>
<script type="text/javascript" src="{{ asset('js/welcome/jquery-migrate-1.2.1.min.js') }}"></script>

<script src="{{ asset('js/welcome/jquery.flexslider.js') }}"></script>
<script src="{{ asset('js/welcome/waypoints.js') }}"></script>
<script src="{{ asset('js/welcome/jquery.fittext.js') }}"></script>
<script src="{{ asset('js/welcome/magnific-popup.js') }}"></script>
<script src="{{ asset('js/welcome/init.js') }}"></script>


</body>

</html>