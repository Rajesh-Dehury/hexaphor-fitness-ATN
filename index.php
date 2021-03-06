<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
       
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/custom-styles.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/component.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        <div class="header-wrapper">
            <div class="container">
                <div class="logo">
                    <h1>bizname</h1>
                </div>
            <div class="menu">
                <div class="navbar">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <i class="fw-icon-th-list"></i>
                        </a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li>
                                    <div class="site-name">
                                        <h1>bizname</h1>
                                    </div>
                                </li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                </div>
            </div>
            </div>
        </div>
        <div class="banner">
            <div class="container">
                    <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item">
                                <div class="carousel-caption">
                                    <h2>hasellus ultrices nulla quis nibh</h2><br>
                                    <h1>Morbi in sem quis dui placerat ornare</h1>
                                    <div class="shadow"><img src="img/shadow.png" alt=""></div>
                                </div>
                                <img src="img/banner-image.png" alt="">
                            </div>
                            <div class="item">
                                <div class="carousel-caption">
                                    <h2>hasellus ultrices nulla quis nibh</h2><br>
                                    <h1>Morbi in sem quis dui placerat ornare</h1>
                                    <div class="shadow"><img src="img/shadow.png" alt=""></div>
                                </div>
                                <img src="img/banner-image.png" alt="">
                            </div>
                            <div class="item active">
                                <div class="carousel-caption">
                                    <h2>hasellus ultrices nulla quis nibh</h2><br>
                                    <h1>Morbi in sem quis dui placerat ornare</h1>
                                    <div class="shadow"><img src="img/shadow.png" alt=""></div>
                                </div>
                                <img src="img/banner-image.png" alt="">
                            </div>
                        </div>
                        <a data-slide="prev" href="#myCarousel" class="carousel-control left"><i class="fw-icon-chevron-left"></i></a>
                        <a data-slide="next" href="#myCarousel" class="carousel-control right"><i class="fw-icon-chevron-right"></i></a>
                    </div>
                    </div>
                </div>
                <div class="featured-blocks">
                    <div class="container">
                        <div class="row-fluid">
                            <div class="span4">
                                <div class="block">
                                    <div class="icon">
                                    <i class="fw-icon-user"></i>
                                    </div>
                                    <h1>ipsum dolor sit amet</h1>
                                    <p>Pellentesque lacinia mi nisi, id auctor sem ornare sed. Vivamus vitae facilisis metus. Praesent placerat enim velit</p>
                                    <a href="#myModal" role="button" class="btn" data-toggle="modal">pop up</a>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="block">
                                    <div class="icon">
                                    <i class="fw-icon-flag"></i>
                                    </div>
                                    <h1>Sed placerat leo</h1>
                                    <p>Jolentesque lacinia mi nisi, id auctor sem ornare sed. Vivamus vitae facilisis metus. Praesent placerat enim velit</p>
                                    <a href="#myModal" role="button" class="btn" data-toggle="modal">pop up</a>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="block">
                                    <div class="icon">
                                    <i class="fw-icon-camera"></i>
                                    </div>
                                    <h1>Pellen tesque lacinia</h1>
                                    <p>Curinentesque lacinia mi nisi, id auctor sem ornare sed. Vivamus vitae facilisis metus. Praesent placerat enim velit</p>
                                    <a href="#myModal" role="button" class="btn" data-toggle="modal">pop up</a>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <h2>Pellen tesque lacinia</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis sed mauris a accumsan. Phasellus quis scelerisque lacus. Aenean nec orci sit amet justo interdum ullamcorper eget eu diam. Integer dictum sem eu adipiscing cursus. Suspendisse posuere dui eu dignissim fermentum. .</p>
                      <p>Phasellus adipiscing porttitor metus, eget commodo mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut hendrerit ante. Phasellus viverra ligula tortor, ut sodales elit tempus eu. Vestibulum mattis sed purus at laoreet. Proin mattis, ante vel adipiscing porttitor, orci elit venenatis nibh, at molestie tortor dolor sit amet urna.  .</p>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="featured-heading">
                    <div class="container">
                        <ul class="grid effect-8" id="grid">
                            <li><h1>Integer vitae est viverra elementum</h1>
                        <h2>Integer luctus vestibulum orci velpo</h2></li>
                        </ul>
                        
                        <div class="h-divider">
                            <div class="icon1"><i class="fw-icon-star"></i></div>
                        </div>
                        <div class="row-fluid">
                            <ul class="grid effect-3" id="grid">
                                <li class="span6">
                                    <div class="block">
                            <img src="img/img1.png" alt="">
                            <h1>ipsum dolor sit amet</h1>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse auctor urna id justo adipiscing, vel egestas sem scelerisque. Sed sed nulla dignissim magna ultricies scelerisque. Duis suscipit tellus nisi, gravida hendrerit nisi feugiat vitae faliclisis metus placerat enim.</p>
                            <a href="#" class="btn">More</a>
                        </div>
                                </li>
                                <li class="span6">
                                    <div class="block">
                            <img src="img/img1.png" alt="">
                            <h1>Vivamul dolorem inputions quinto</h1>
                            <p>Jolem aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse auctor urna id justo adipiscing, vel egestas sem scelerisque. Sed sed nulla dignissim magna ultricies scelerisque. Duis suscipit tellus nisi, gravida hendrerit nisi feugiat vitae faliclisis metus placerat enim.</p>
                            <a href="#" class="btn">More</a>
                        </div>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="featured-images">
                    <div class="container">
                        <h1>In eget augue eget mauris</h1>
                        <h2>Lorem luctus vestibulum</h2>
                        <div class="hh-divider"></div>
                        <div class="row-fluid">
                            <ul class="grid effect-3" id="grid">
                                <li class="span2">
                                    <div class="user-info">
                                        <img src="img/img3.png" alt="">
                                        <h1>John doe</h1>
                                        <p class="last">Duis suscipit tellus nisi, gravida hendrer</p>
                                        <ul>
                                            <li><a href="#"><i class="fw-icon-facebook"></a></i></li>
                                            <li><a href="#"><i class="fw-icon-twitter"></a></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="span2">
                                    <div class="user-info">
                                    <img src="img/img4.png" alt="">
                                    <h1>Amada</h1>
                                    <p class="last">Duis suscipit tellus nisi, gravida hendrer</p>
                                    <ul>
                                        <li><a href="#"><i class="fw-icon-facebook"></a></i></li>
                                        <li><a href="#"><i class="fw-icon-twitter"></a></i></li>
                                    </ul>
                                </div>
                                </li>
                                <li class="span2">
                                    <div class="user-info">
                                    <img src="img/img5.png" alt="">
                                    <h1>Peter</h1>
                                    <p class="last">Duis suscipit tellus nisi, gravida hendrer</p>
                                    <ul>
                                        <li><a href="#"><i class="fw-icon-facebook"></a></i></li>
                                        <li><a href="#"><i class="fw-icon-twitter"></a></i></li>
                                    </ul>
                                </div>
                                </li>
                                <li class="span2">
                                    <div class="user-info">
                                    <img src="img/img6.png" alt="">
                                    <h1>Kate</h1>
                                    <p class="last">Duis suscipit tellus nisi, gravida hendrer</p>
                                    <ul>
                                        <li><a href="#"><i class="fw-icon-facebook"></a></i></li>
                                        <li><a href="#"><i class="fw-icon-twitter"></a></i></li>
                                    </ul>
                                </div>
                                </li>
                                <li class="span2">
                                    <div class="user-info">
                                    <img src="img/img7.png" alt="">
                                    <h1>Johny</h1>
                                    <p class="last">Duis suscipit tellus nisi, gravida hendrer</p>
                                    <ul>
                                        <li><a href="#"><i class="fw-icon-facebook"></a></i></li>
                                        <li><a href="#"><i class="fw-icon-twitter"></a></i></li>
                                    </ul>
                                </div>
                                </li>
                                <li class="span2">
                                    <div class="user-info">
                                    <img src="img/img8.png" alt="">
                                    <h1>winslet</h1>
                                    <p class="last">Duis suscipit tellus nisi, gravida hendrer</p>
                                    <ul>
                                        <li><a href="#"><i class="fw-icon-facebook"></a></i></li>
                                        <li><a href="#"><i class="fw-icon-twitter"></a></i></li>
                                    </ul>
                                </div>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="footer-wrapper">
                    <div class="container">
                        <div class="site-footer">
                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="block">
                                        <h1>ipsum dolor</h1>
                                        <ul>
                                            <li><a href="#">Duis suscipit tellus nisigra</a></li>
                                            <li><a href="#">Lorem ipsum dolor sit </a></li>
                                            <li><a href="#">Cras elementum justo sed</a></li>
                                            <li><a href="#">Sed in nulla a quam </a></li>
                                            <li><a href="#">Donec a sem vehicula</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="block">
                                        <h1>Aenean eteros</h1>
                                        <ul>
                                            <li><a href="#">Cuis suscipit tellus nisigra</a></li>
                                            <li><a href="#">Korem ipsum dolor sit </a></li>
                                            <li><a href="#">Dras elementum justo sed</a></li>
                                            <li><a href="#">Eed in nulla a quam </a></li>
                                            <li><a href="#">Fonec a sem vehicula</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="block">
                                        <h1>Nulla nonmi</h1>
                                        <ul>
                                            <li><a href="#">Luis suscipit tellus nisigra</a></li>
                                            <li><a href="#">Oorem ipsum dolor sit </a></li>
                                            <li><a href="#">Uras elementum justo sed</a></li>
                                            <li><a href="#">Ted in nulla a quam </a></li>
                                            <li><a href="#">Nonec a sem vehicula</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="block">
                                        <h1>Phasellus cons</h1>
                                        <ul>
                                            <li>
                                                
                                                    <i class="fw-icon-mobile-phone icon2"></i>
                                                
                                                <div class="info">
                                                <span>Call Us</span><br><a href="#">(000) 7777 77777</a>
                                                </div>
                                            </li>
                                            <li>
                                                
                                                    <i class="fw-icon-envelope-alt icon2"></i>
                                                
                                                <div class="info">
                                                <span>Mail Us</span><br><a href="#">info@companyname.com</a>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copy-rights">
                            Copyright (c) websitename. All rights reserved. Designed by :  <strong><a href="http://www.alltemplateneeds.com">  www.alltemplateneeds.com</a></strong><br>Images From . <a href="http://www.photorack.net"> www.photorack.net </a>/<a href="http://www.wallcoo.net"> www.wallcoo.net</a>
                        </div>
                    </div>
                </div>
        

        
       <script src="js/jquery-1.9.1.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
    <script src="js/imagesloaded.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/AnimOnScroll.js"></script>
    
    <script>
      new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.2
      } );
    </script>
<script>
$('#myCarousel').carousel({
    interval: 1800
});
</script>

    </body>
</html>
