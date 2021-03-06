<?php session_start();
$date = date_create();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"

    <!ATTLIST tag myAttri CDATA #IMPLIED>


    <html lang="en">

        <head>

            <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                        <meta name="description" content="">
                            <meta name="author" content="">

                                <title>Plunder</title>

                                <!-- Bootstrap Core CSS -->
                                <link href="css/bootstrap.min.css" rel="stylesheet">

                                    <!-- Custom CSS -->
                                    <link href="css/grayscale.css" rel="stylesheet">
                                        <link href="css/bootstrap-select.css" rel="stylesheet">

                                            <!-- Custom Fonts -->
                                            <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                                                <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
                                                    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

                                                        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                                        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                                                        <!--[if lt IE 9]>
                                                            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                                                            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                                                        <![endif]-->

                                                        </head>

                                                        <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

                                                            <!-- Navigation -->
                                                            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                                                                <div class="container">
                                                                    <div class="navbar-header">
                                                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                                                                            <i class="fa fa-bars"></i>
                                                                        </button>
                                                                        <a class="navbar-brand page-scroll" href="#page-top">
                                                                            <i class="glyphicon glyphicon-home"></i>  <span class="light">HOME</span>
                                                                        </a>
                                                                    </div>

                                                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                                                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                                                                        <ul class="nav navbar-nav">
                                                                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                                                                            <li class="hidden">
                                                                                <a href="#page-top"></a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="page-scroll" href="#about">About</a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="page-scroll" href="#startnow">Start Now</a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="page-scroll" href="#notice">Notice</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- /.navbar-collapse -->
                                                                </div>
                                                                <!-- /.container -->
                                                            </nav>

                                                            <!-- HOME TOP -->
                                                            <header class="intro">
                                                                <div class="intro-body">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-md-8 col-md-offset-2">
                                                                                <h1 class="brand-heading">Plunder</h1>
                                                                                <h5>Weather Underground</h5>
                                                                                <h6>Cities</h6>
                                                                                <p class="intro-text">This web UI Plunders <u>wunderground.com</u>
                                                                                    <br/>for a list of all the places in the world.</p>
                                                                                <a href="#startnow" class="btn btn-circle page-scroll" title="Start Now!">
                                                                                    <i class="fa fa-angle-double-down animated"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </header>

                                                            <!-- About Section -->
                                                            <section id="about" class="container content-section text-center" style="padding-top: 60px;">
                                                                <div class="row">
                                                                    <div class="col-lg-8 col-lg-offset-2">
                                                                        <h2>The Plunder Project</h2>
                                                                        <p>lgjnlhgllxkdfmjgfxklghkfxkglghxflkmlkfx xfgjkl jfsgoj sfghjsfg fgj oisfgojlkj'gh gkjikjhfah;hadf adfhkhfdjkhjakhjhffjfja ka jjsadkljf jufioaj d.</p>
                                                                        <p>jjhjhljuh jhujhjlfd  hlf hjhfjsjgd sgdf sgd dsjkhsjdhjhsdahldsah sdhf sh shdj shd sd sdh jsdhaeguweh sh hij a m a goood borysdf dsfah asdhfdsh dsh</p>
                                                                        <p>djsghaflhsad jplinder plubeder djasklfkasdj asdjfdklas sjd </p>
                                                                        <p>lgjnlhgllxkdfmjgfxklghkfxkglghxflkmlkfx xfgjkl jfsgoj sfghjsfg fgj oisfgojlkj'gh gkjikjhfah;hadf adfhkhfdjkhjakhjhffjfja ka jjsadkljf jufioaj d.</p>
                                                                        <p>jjhjhljuh jhujhjlfd  hlf hjhfjsjgd sgdf sgd dsjkhsjdhjhsdahldsah sdhf sh shdj shd sd sdh jsdhaeguweh sh hij a m a goood borysdf dsfah asdhfdsh dsh</p>
                                                                        <p>djsghaflhsad jplinder plubeder djasklfkasdj asdjfdklas sjd </p>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                            <!-- START NOW Section -->
                                                            <section id="startnow" class="content-section text-center" style="padding-top: 60px;">

                                                                <!-- #########################################################################-->
                                                                <div class="row">
                                                                    <div class="col-md-4"></div>
                                                                    <div class="col-md-4">
                                                                        <div  style="padding: 2px;">
                                                                            <div id="custom_carousel" style="border: 1px solid #219ab3; height: 550px; overflow-y: scroll" class="carousel slide" data-ride="carousel" data-interval="false">
                                                                                <div class="controls">
                                                                                    <ul class="nav">    
                                                                                        <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><small>Get Places by Alphabet</small></a></li>
                                                                                        <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><small>Hot Searches</small></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <!-- Wrapper for slides -->
                                                                                <div class="carousel-inner">
                                                                                    <div class="item active">
                                                                                        <div class="container-fluid">
                                                                                            <div class="row">

                                                                                                Click on a character to get all the places starting with that character.
                                                                                                <br/><br/>
                                                                                                <span style="display: none;" id="showalpha" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<small>Go Back to alphabets</small></span>                                                               <br/>
                                                                                                <br/>
                                                                                                <span qstring="a" class="btn btn-default btn-lg narrowdown"><span class="network-name">A</span></span> 
                                                                                                <span qstring="b" class="btn btn-default btn-lg narrowdown"><span class="network-name">B</span></span>   
                                                                                                <span qstring="c" class="btn btn-default btn-lg narrowdown"><span class="network-name">C</span></span>
                                                                                                <span qstring="d" class="btn btn-default btn-lg narrowdown"><span class="network-name">D</span></span>   <br/><br/>
                                                                                                <span qstring="e" class="btn btn-default btn-lg narrowdown"><span class="network-name">E</span></span>   
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">F</span></span>  
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">G</span></span>   
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">H</span></span>   <br/><br/>
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">I</span></span>   
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">J</span></span>  
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">K</span></span>   
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">L</span></span>   <br/><br/>
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">M</span></span>  
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">N</span></span>   
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">O</span></span>
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">P</span></span>   <br/><br/>
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">Q</span></span> 
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">R</span></span>   
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">S</span></span>   
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">T</span></span>   <br/><br/>
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">U</span></span>  
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">V</span></span>  
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">W</span></span>  
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">X</span></span>   <br/><br/>
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">Y</span></span>  
                                                                                                <span class="btn btn-default btn-lg narrowdown"><span class="network-name">Z</span></span>  <br/><br/> 
                                                                                                <div class="row extrabtn">
                                                                                                    <span class="btn btn-default btn-lg narrowdown "><span class="network-name">0</span></span>  
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">1</span></span>   
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">2</span></span>
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">3</span></span>   <br/><br/>
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">4</span></span> 
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">5</span></span>   
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">6</span></span>   
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">7</span></span>   <br/><br/>
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">8</span></span>  
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">9</span></span>  <br/><br/>
                                                                                                    <span class="btn btn-default btn-lg narrowdown"><span class="network-name">" "</span></span>  <br/><br/>  
                                                                                                </div>


                                                                                            </div>
                                                                                        </div>            
                                                                                    </div> 
                                                                                    <div class="item">
                                                                                        <div class="container-fluid">
                                                                                            <div class="row">
                                                                                                <div>
                                                                                                    Hot Searches, click to get list of places starting with these strings.
                                                                                                    <br/>
                                                                                                    <span class="btn btn-default btn-lg" style="width:200px;"><span class="network-name">New</span></span>   <br/><br/>
                                                                                                    <span class="btn btn-default btn-lg" style="width:200px;"><span class="network-name">Old</span></span>   <br/><br/>
                                                                                                    <span class="btn btn-default btn-lg" style="width:200px;"><span class="network-name">North</span></span>   <br/><br/>
                                                                                                    <span class="btn btn-default btn-lg" style="width:200px;"><span class="network-name">South</span></span>   <br/><br/>
                                                                                                    <span class="btn btn-default btn-lg" style="width:200px;"><span class="network-name">East</span></span>   <br/><br/>
                                                                                                    <span class="btn btn-default btn-lg" style="width:200px;"><span class="network-name">West</span></span>   <br/><br/>
                                                                                                    <span class="btn btn-default btn-lg" style="width:200px;"><span class="network-name">Greater</span></span>   <br/><br/>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div> 
                                                                                    </div>
                                                                                    <div class="item ">
                                                                                        <div class="container-fluid">
                                                                                            <div class="row">
                                                                                                <input id="identifier" type="hidden" value="<?php echo md5(session_id().date_format($date,'U')); ?>"/>
                                                                                                <div class="controls">
                                                                                                    <ul class="nav">    
                                                                                                        <li style="border-top:1px #219ab3 solid" data-target="#custom_carousel" class="active"><a>
                                                                                                                <span id="searching">P l u n d e r i n g.&nbsp;.&nbsp;.</span><br/>
                                                                                                                <span id="currentString">"aa"</span>
                                                                                                            </a></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <canvas class="loader" width="200" height="200"></canvas> 
                                                                                            </div>
                                                                                            <div class="row" id="plundercontent">                                            
                                                                                            </div>
                                                                                        </div>            
                                                                                    </div> 
                                                                                    <!-- End Carousel Inner -->
                                                                                </div>
                                                                            </div>
                                                                            <!-- End Carousel -->
                                                                        </div>
                                                                    </div>

                                                                    <!-- #########################################################################-->
                                                            </section>

                                                            <!-- Notice Section -->
                                                            <section id="notice" class="container content-section text-center" style="padding-top: 60px;">
                                                                <div class="row">
                                                                    <div class="col-lg-8 col-lg-offset-2">
                                                                        <h2>This project is not intended to infringe copyright</h2>
                                                                        <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                                                                        <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                                                                        </p>
                                                                        <ul class="list-inline banner-social-buttons">
                                                                            <li>
                                                                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                            <!-- Footer -->
                                                            <footer>
                                                                <div class="container text-center">
                                                                    <p>Copyright &copy; Your Website 2014</p>
                                                                </div>
                                                            </footer>


                                                            <!-- jQuery -->
                                                            <script src="js/jquery.js"></script>

                                                            <!-- Bootstrap Core JavaScript -->
                                                            <script src="js/bootstrap.min.js"></script>

                                                            <!-- Plugin JavaScript -->
                                                            <script src="js/jquery.easing.min.js"></script>

                                                            <!-- Custom Theme JavaScript -->
                                                            <script src="js/grayscale.js"></script>
                                                            <script src="js/bootstrap-select.js"></script>
                                                            <script src="js/plunder.js"></script>
                                                            <script src="js/jquery.classyloader.js"></script>
                                                            <script src="js/controls.js"></script>

                                                            <script>

                                                                $(document).ready(function () {
                                                                    intializeLoader();
                                                                });
                                                            </script>
                                                        </body>

                                                        </html>
