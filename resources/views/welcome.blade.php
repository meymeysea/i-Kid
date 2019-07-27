<!DOCTYPE html>
<html lang="en">

<head>
    

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>i-Kid</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="{{asset('css/style5.css')}}" rel="stylesheet">
    <link href="{{asset('css/agency.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/agency.css')}}" rel="stylesheet">
    <link href="{{asset('css/booksCss.css')}}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">i-Kid</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                   
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    

                    <!-- log in register -->

                    <li>
                             @if (Route::has('login'))
                        
                            @auth
                                <a href="{{ url('/home') }}">Profile</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                            @endauth
                    
                    @endif
                    </li>
                    <li>
                        @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To i-kid!</div>
                <div class="intro-heading">Let's have fun while studying</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Enjoy our services</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">

                    <span class="fa-stack fa-4x">
                        <img src="img/vocabulary1.png" class="img-responsive" alt="">
                        <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                    </span>
                    <h4 class="service-heading">Vocabularies</h4>
                    <p class="text-muted">Check out the our vocabulaires in English and Japanese.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="img/library1.png" class="img-responsive" alt="">
                    </span>
                    <h4 class="service-heading">Books</h4>
                    <p class="text-muted">Given you the top selling books for download. Many to choose from and enjoy the reading.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <img src="img/jigsaw1.png" class="img-responsive" alt="">
                    </span>
                    <h4 class="service-heading">Games</h4>
                    <p class="text-muted">There is flashcard game and picture dictionary for kids to play. Have fun and learn at the same time!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Study the way you want.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/vocab.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Learn Vocabularies</h4>
                        <p class="text-muted">English and Japaneses</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/quiz.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>PLay game</h4>
                        <p class="text-muted">Review what you have learnt</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/book.gif" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Books</h4>
                        <p class="text-muted">Read any books here</p>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- About Section -->
    

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">We are here to deliver best service.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/5.jpg" class="img-responsive img-circle" alt="">
                        <h4>Sea Meymey</h4>
                        <p class="text-muted">Back-End developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/4.jpg" class="img-responsive img-circle" alt="">
                        <h4>Long Sokonthmealea</h4>
                        <p class="text-muted">Front-End developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">We are year two student who dedicated ourselves to make kids feel at ease to learn.</p>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Contact Section -->
    
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" saria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
               

                <div class="tab">
                  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
                  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                  <button class="tablinks" onclick="openCity(event, '')">Paris</button>
                  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
                </div>

                <div id="London" class="tabcontent">
                  <h3>London</h3>
                  <p>London is the capital city of England.</p>
                </div>

                <div id="Paris" class="tabcontent">
                  <h3>Paris</h3>
                  <p>Paris is the capital of France.</p> 
                </div>

                <div id="Tokyo" class="tabcontent">
                  <h3>Tokyo</h3>
                  <p>Tokyo is the capital of Japan.</p>
                </div>

                <script>
                function openCity(evt, cityName) {
                  var i, tabcontent, tablinks;
                  tabcontent = document.getElementsByClassName("tabcontent");
                  for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                  }
                  tablinks = document.getElementsByClassName("tablinks");
                  for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                  }
                  document.getElementById(cityName).style.display = "block";
                  evt.currentTarget.className += " active";
                }

                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
                </script>

                 
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
            <div id="headerbook">

                <div id="text">
                    <h1>Book Center</h1>
                </div>  
            </div>
            <div id="pic"><img src="books/welcome.jpg" height="120px" width="300px">
                <h3 style="font-family: lena">Book Collection</h3>
                <hr align="center" width="170">
                <br><i>Provide you with the latest epub books for<br> download and ENJOY READING!!</i>
            </div>
            <br>
            <div id="bcover">
                <a href="books/Jenny_Han_-_To_All_The_Boys_I_39_ve_Loved_Before_Book_1.epub" download>
                    <img src="books/cover-1.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20" >
                </a>
                <a href="books/Jenny_Han_-_P_S_I_Still_Love_You_Book_2.epub" download>
                    <img src="books/cover0.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20" >
                </a>
                <a href="books/Always_and_Forever_Lara_Jean_-_Jenny_Han.epub" download>
                    <img src="books/cover1.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20" >
                </a>
                <a href="books/Everything, Everything - Nicola Yoon.epub" download>
                    <img src="books/cover2.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20" border="1" style="border-color: black">
                </a>
                <a href="books/The Sun Is Also a Star - Nicola Yoon.epub" download>
                    <img src="books/cover3.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20">
                </a>
                <a href="books/5th Wave, The - Rick Yancey.epub" download> 
                    <img src="books/cover4.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20">
                </a>
                <a href="books/Infinite Sea, The - Rick Yancey.epub" download> 
                    <img src="books/cover5.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20">
                </a>
                <a href="books/Last Star, The - Rick Yancey.epub" download>
                    <img src="books/cover6.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20">
                </a>
                <a href="books/Holding Up the Universe - Jennifer Niven.epub" download>
                    <img src="books/cover7.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20">
                </a>
                <a href="books/All the Bright Places - Jennifer Niven.epub" download>
                    <img src="books/cover8.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20">
                </a>
                <a href="books/Dreamology - Lucy Keating.epub" download>
                    <img src="books/cover9.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20">
                </a>
                <a href="books/Crooked Kingdom - Leigh Bardugo.epub" download>
                    <img src="books/cover10.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20">
                </a>
                <a href="books/Did I Mention I Miss You_ - Estelle Maskame.epub" download>
                    <img src="books/cover11.jpg" alt="Always" width="200" height="260" hspace="30" vspace="20">
                </a>
                <br>
                <hr align="center" width="500">
                <h2 style="font-family: lena" align="center">More to be added soon.<br>Stay Tuneee!!!</h2>
            <br><br><br>
                
            </div>




            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/golden-preview.jpg" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/escape-preview.jpg" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">

                            <button>hello</button>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.jpg" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <script src="{{asset('js/agency.min.js')}}"></script>

</body>

</html>
