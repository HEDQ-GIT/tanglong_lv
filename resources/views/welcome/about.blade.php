<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <title>ekoo about</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/headermenu.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/about.css" />

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $(".rslides").responsiveSlides({
                speed: 800
            });

            $('.pager-link').on('click', function(e){
                $('.pager-link').removeClass('active');
                $(this).addClass('active');
                $('.visible').removeClass('visible');
                var id = $(this).attr('id');
                $('#bx_' + id).addClass('visible');
                e.preventDefault();
            });
        });
    </script>
</head>
<body>
<section class="header-bar">
    <div id="logo">TANGLONG LOGO</div>
    <nav id="menu">
        <a href="index.html" class="home-btn menu-btn"><span class="hover-anim" data-hover="HOME">HOME</span></a>
        <a href="about.html" class="about-btn menu-btn"><span class="hover-anim" data-hover="ABOUT">ABOUT</span></a>
        <a href="service.html" class="service-btn menu-btn"><span class="hover-anim" data-hover="SERVICE">Service</span></a>
        <a href="#" class="promo-btn menu-btn"><span class="hover-anim" data-hover="PROMOTION">PROMOTION</span></a>
        <a href="portfolio.html" class="portfolio-btn menu-btn"><span class="hover-anim" data-hover="PORTFOLIO">PORTFOLIO</span></a>
        <a href="contact.html" class="contact-btn menu-btn"><span class="hover-anim" data-hover="CONTACT">CONTACT</span></a>
    </nav>
    <nav id="auth-menu">
        <a href="#" class="login-btn menu-btn"><span class="hover-anim" data-hover="简体中文">简体中文</span></a>
    </nav>
</section>

<ul id="slider" class="rslides">
    <li>
        <div class="image" style="background-image: url('img/slider1_bg.jpg');"/>
        <h1>Tang Long Design<span>Advertising Design Studio</span></h1>
        <h6>We dream, explore, create and craft progressive visual experiences</h6>
    </li>
    <li>
        <div class="image" style="background-image: url('img/slider2_bg.jpg');"/>
        <h1>Design Folk<span>Advertising Design Studio</span></h1>
        <h6>We dream, explore, create and craft progressive visual experiences</h6>
    </li>
    <li>
        <div class="image" style="background-image: url('img/slider3_bg.jpg');"/>
        <h1>Design Folk<span>Advertising Design Studio</span></h1>
        <h6>We dream, explore, create and craft progressive visual experiences</h6>
    </li>
</ul>

<section id="desc" class="wp2 animated fadeInDown">
    <h1 class="title">Company profile</h1>
    <p class="description">
        Web designing companies Singapore come up with impressive solutions and our company has gained eminence with its up to the mark services and products. We are striving to gain popularity based on the web related products and solutions and tend to become one of the most reputed companies in the country or may be beyond! Our web development companies in Singapore has gained lately quite a lot of popularity as a web design and development company.
        <br/><br/>
        Ekoo Lab provides a myriad of interactive media services to suit your needs. These include web & mobile design, development & hosting with capabilities that includes flash micro-sites, professional Search Engine Optimization (SEO) services, custom web applications, mobile applications, online marketing campaigns (incorporating e-mail and mobile marketing) and Content Management Systems (CMS).
        At Ekoo Lab, web designs are built with PHP, CSS, Javascript, Actionscript and AJAX programming. We also provide static designs for brochures and yearbooks as well as printing services for all your print collaterals. Most importantly, Ekoo Lab is committed towards providing professional and affordable web designs and print media that are tailor-made to suit your businesses’ needs.
        <br/><br/>
        Ekoo Lab provides a myriad of interactive media services to suit your needs. These include web & mobile design, development & hosting with capabilities that includes flash micro-sites, professional Search Engine Optimization (SEO) services, custom web applications, mobile applications, online marketing campaigns (incorporating e-mail and mobile marketing) and Content Management Systems (CMS).
        At Ekoo Lab, web designs are built with PHP, CSS, Javascript, Actionscript and AJAX programming. We also provide static designs for brochures and yearbooks as well as printing services for all your print collaterals. Most importantly, Ekoo Lab is committed towards providing professional and affordable web designs and print media that are tailor-made to suit your businesses’ needs.
    </p>
</section>

<section class="capabilities section">
    <div class="wrapper">
        <h1>Our Capabilities</h1>
        <div class="whyslidesection">
            <div class="wrapper" id="bx-pager">
                <a id="0" href="" class="active pager-link">
                    <div>
                        <img class="capicon" src="http://paradoxcreates.com/wp-content/themes/paradox/img/icon-strategy.png">
                        <h1>Strategy</h1>
                    </div>
                </a>
                <a id="1" href="" class="pager-link">
                    <div>
                        <img class="capicon" src="http://paradoxcreates.com/wp-content/themes/paradox/img/icon-identity.png">
                        <h1>Identity</h1>
                    </div>
                </a>
                <a id="2"href="" class="pager-link">
                    <div>
                        <img class="capicon" src="http://paradoxcreates.com/wp-content/themes/paradox/img/icon-print.png">
                        <h1>Print</h1>
                    </div>
                </a>
                <a id="3" href="" class="pager-link">
                    <div>
                        <img class="capicon" src="http://paradoxcreates.com/wp-content/themes/paradox/img/icon-digital.png">
                        <h1>Digital</h1>
                    </div>
                </a>
                <a id="4" href="" class="pager-link">
                    <div>
                        <img class="capicon" src="http://paradoxcreates.com/wp-content/themes/paradox/img/icon-packaging.png">
                        <h1>Packaging</h1>
                    </div>
                </a>
            </div>
            <div class="wrapper bxouter">
                <div class="bx-wrapper">
                    <div class="bx-viewport">
                        <ul class="bxslider">
                            <li id="bx_0" class="visible">
                                <div class="text">Strategy determines the direction for everything you do. Through research and discovery, we’ll help you get a clear picture of who you are and what you’re trying to achieve. And then we can find your unique voice.</div>
                            </li>
                            <li id="bx_1">
                                <div class="text">Establishing a strong visual brand identity is essential to communicating who you are. We’ll help you through the process from logo creation or rebranding, to establishing standards for consistency.</div>
                            </li>
                            <li id="bx_2">
                                <div class="text">Everyone needs something they can hold: stationery, brochures, postcards, annual reports, etc. We’ll help you create pieces that make a lasting impression and reinforce the story you’re telling.</div>
                            </li>
                            <li id="bx_3">
                                <div class="text">To stay in the game these days, an online presence is key. We’ll help you communicate your message in the world of websites, e-newsletters, apps, social media, and whatever they think of next.</div>
                            </li>
                            <li id="bx_4">
                                <div class="text">The quality, design and functionality of a package can make or break a product. If your brand centers on a packed good, we’ll work together to create packaging that is on point with your strategy and visual branding.</div>
                            </li>
                        </ul>
                    </div>
                    <div class="bx-controls bx-has-controls-direction">
                        <div class="bx-controls-direction">
                            <a class="bx-prev" href=""></a>
                            <a class="bx-next" href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features">
    <h1 class="title">Why choose us ?</h1>
    <ul id="svc-list">
        <li class="wp2 animated fadeInDown">
            <div>
                <div class="svc-img svc-icon purple">
                    <i class="fa fa-flash"></i>
                </div>
                <div class="svc-desc">
                    <h4 class="purple">A Personal Experience</h4>
                    <p>Visit our office and meet our design consultants Account Executives and Developers. All in-house, we don’t outsource! Direct Communication is important. </p>
                </div>
            </div>
        </li>
        <li class="wp2 animated fadeInDown">
            <div>
                <div class="svc-img svc-icon green">
                    <i class="fa fa-heart"></i>
                </div>
                <div class="svc-desc">
                    <h4 class="green">A Professional Experience</h4>
                    <p>We treat you how we would like to be treated. We deliver effective business solutions that emphasise simplicity – no complicated technical jargon! ​​</p>
                </div>
            </div>
        </li>
        <li class="wp2 animated fadeInDown">
            <div>
                <div class="svc-img svc-icon blue">
                    <i class="fa fa-flash"></i>
                </div>
                <div class="svc-desc">
                    <h4 class="blue">An Affordable Experience</h4>
                    <p>We never surprise you with hidden fees. Our fixed price quotes mean what we first quote is what you pay. Our prices are a true reflection of the finishing result – the highest quality work at the lowest possible prices.​</p>
                </div>
            </div>
        </li>
        <li class="wp2 animated fadeInDown">
            <div>
                <div class="svc-img svc-icon yellow">
                    <i class="fa fa-flash"></i>
                </div>
                <div class="svc-desc">
                    <h4 class="yellow">A Personal Experience</h4>
                    <p>Visit our office and meet our design consultants Account Executives and Developers. All in-house, we don’t outsource! Direct Communication is important.</p>
                </div>
            </div>
        </li>
        <li class="wp2 animated fadeInDown">
            <div>
                <div class="svc-img svc-icon pink">
                    <i class="fa fa-heart"></i>
                </div>
                <div class="svc-desc">
                    <h4 class="pink">A Professional Experience</h4>
                    <p>We treat you how we would like to be treated. We deliver effective business solutions that emphasise simplicity – no complicated technical jargon!​​</p>
                </div>
            </div>
        </li>
        <li class="wp2 animated fadeInDown">
            <div>
                <div class="svc-img svc-icon red">
                    <i class="fa fa-desktop"></i>
                </div>
                <div class="svc-desc">
                    <h4 class="red">An Affordable Experience</h4>
                    <p>We never surprise you with hidden fees. Our fixed price quotes mean what we first quote is what you pay.</p>
                </div>
            </div>
        </li>
    </ul>
</section>
<section id="copy">
    © 2014 TANGLONG DESIGN
</section>
<script src="js/waypoints.min.js"></script>
</body>
</html>