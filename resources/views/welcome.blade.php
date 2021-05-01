<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Covid Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css1/bootstrap.min.css">
        <!-- style css1 -->
        <link rel="stylesheet" href="css1/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css1/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images1/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS1 -->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css1/font-awesome.css">
        <link rel="stylesheet" href="css1/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>

    <body class="main-layout">
    <style>
        .buttons {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            text-align: center;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            /*   padding: 2em 0em; */
        }

        .btn {
            letter-spacing: 0.1em;
            cursor: pointer;
            font-size: 14px;
            font-weight: 400;
            line-height: 45px;
            max-width: 160px;
            position: relative;
            text-decoration: none;
            text-transform: uppercase;
            width: 100%;
        }
        .btn:hover {
            text-decoration: none;
        }

        /*btn_background*/
        .effect01 {
            color: #FFF;
            border: 4px solid #000;
            box-shadow:0px 0px 0px 1px #000 inset;
            background-color: #000;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease-in-out;
        }
        .effect01:hover {
            border: 4px solid #666;
            background-color: #FFF;
            box-shadow:0px 0px 0px 4px #EEE inset;
        }

        /*btn_text*/
        .effect01 span {
            transition: all 0.2s ease-out;
            z-index: 2;
        }
        .effect01:hover span{
            letter-spacing: 0.13em;
            color: #333;
        }

        /*highlight*/
        .effect01:after {
            background: #FFF;
            border: 0px solid #000;
            content: "";
            height: 155px;
            left: -75px;
            opacity: .8;
            position: absolute;
            top: -50px;
            -webkit-transform: rotate(35deg);
            transform: rotate(35deg);
            width: 50px;
            transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);/*easeOutCirc*/
            z-index: 1;
        }
        .effect01:hover:after {
            background: #FFF;
            border: 20px solid #000;
            opacity: 0;
            left: 120%;
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
        }
    </style>

        <div class="loader_bg">
            <div class="loader"><img src="images1/loading.gif" alt="#"/></div>
        </div>
        <!-- end loader -->
        <!-- coronata -->
        <div class="coronata">
            <div class="container">
                <div class="row d_flex grid">
                    <div class="col-md-7">
                        <div class="coronata_img text_align_center">
                            <figure><img src="images1/corona.png" alt="#"/></figure>
                        </div>
                    </div>
                    <div class="col-md-5 oder1">
                        <div class="titlepage text_align_left">
                            <h2>Coronavirus what it is?</h2>
                            <p>Coronaviruses are a family of viruses known for containing strains that cause potentially deadly diseases in mammals and birds.
                                In humans they're typically spread via airborne droplets of fluid produced by infected individuals.</p>
                        </div>
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    <div class="buttons">
                                        <div class="container">
                                            @auth
                                                <a href="{{ url('/dashboard') }}" class="btn effect01" target="_blank"><span>Dashboard</span></a>

                                            @else
                                                <a href="{{ route('login') }}" class="btn effect01" target="_blank"><span>Login</span></a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}" class="btn effect01" target="_blank"><span>Register</span></a>

                                                @endif
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end coronata -->

        <!-- protect -->
        <div class="protect">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage text_align_center">
                            <h2>How to Protect Yourself</h2>
                            <p>when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="protect_bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!--  Demos -->
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="protect_box text_align_center">
                                        <div class="desktop">
                                            <i><img src="images1/pro1.png" alt="#"/></i>
                                            <h3> Wear Mask</h3>
                                            <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="protect_box text_align_center">
                                        <div class="desktop">
                                            <i><img src="images1/pro2.png" alt="#"/></i>
                                            <h3> Wash Your Hands</h3>
                                            <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="protect_box text_align_center">
                                        <div class="desktop">
                                            <i><img src="images1/pro3.png" alt="#"/></i>
                                            <h3> Stay at Home</h3>
                                            <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end protect -->
        <!-- cases -->
        <div class="cases">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage text_align_center ">
                            <h2>Coronavirus Variants</h2>
                            <p>any of a group of RNA viruses that cause a variety of diseases in humans and other animals.</p>
                        </div>
                    </div>
                </div>
                <div class="row d_flex">
                    <div class=" col-md-4">
                        <div class="latest text_align_center">
                            <figure><img src="images1/cases1.png" alt="#"/></figure>
                            <div class="nostrud">
                                <h3>UK Variant</h3>
                                <p>The COVID-19 variant (B.1.1.7) has 23 mutations. B.1.1.7 appears to have substantially increased transmissibility - in medicine, transmissibility is a synonym for basic reproduction number and refers to transmission - compared to other variants and has grown quickly to become the dominant variant in much of Britain. The VOC-202012/01 variant was first detected in the UK and was first sequenced in the UK in September 2020.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4">
                        <div class="latest text_align_center">
                            <figure><img src="images1/cases2.png" alt="#"/></figure>
                            <div class="nostrud">
                                <h3>South African Variant</h3>
                                <p>The South African variant, like the new UK variant, contains a mutation known as N501Y which is believed to make the virus more contagious than older variants. The South African variant also contains other mutations of concern, including E484K and K417N. These two mutations are thought to explain why the South African variant appears to be better able to evade neutralising antibody responses by the body.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-4">
                        <div class="latest text_align_center">
                            <figure><img src="images1/cases3.png" alt="#"/></figure>
                            <div class="nostrud">
                                <h3>Brazil Variant</h3>
                                <p>	This variant has 17 mutations, including 3 located in the S protein. Scientists have reported the Brazil coronavirus variant appears more contagious and may evade immunity provided by past infection. The VUI-202101/01 variant was first detected in Brazil and was first sequenced in the UK in November 2020. Reports from Manaus - hit hard by the P.1 variant - suggest VUI-202101/01 could be up to twice as transmissible as earlier Covid infections</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript files-->
        <script src="js1/jquery.min.js"></script>
        <script src="js1/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script src="js1/owl.carousel.min.js"></script>
        <script src="js1/custom.js"></script>
    </body>
</html>
