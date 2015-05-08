<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<title>TangLong Services</title>
<link rel="icon" type="image/png" href="../favicon.ico">

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/css/headermenu.css" />
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/service.css">

<script src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/modernizr.js"></script>

<script>
    $(function () {
        $('#slide-menu-btn').click(function(){
            $('body').toggleClass('menu-active');
        });
    });
</script>

</head>
<body>
<nav id="slide-menu">
    <a id="slide-menu-btn" class="glyphicon glyphicon-align-justify"></a>
    <ul>
        <li><a href="{{ url('/') }}">HOME</a></li>
        <li><a href="{{ url('/about') }}">ABOUT</a></li>
        <li><a href="{{ url('/services') }}">SERVICE</a></li>
        <li><a href="{{ url('/promotions') }}">PROMOTION</a></li>
        <li><a href="{{ url('/works') }}">PORTFOLIO</a></li>
        <li><a href="{{ url('/contact') }}">CONTACT</a></li>
    </ul>
</nav>

<section id="coming">
    <section class="banner">
        <img src="/img/team3.jpg" alt="" class="banner-cover" style="height: 650px; width: 1281.94444444444px; margin: 0px 0px 0px -1.97222222222229px; transform: translateY(132.6px);">
        <i class="arrow-scroll-white"></i>

        {{--<section id="header-bar">--}}
            {{--<div id="logo">TANGLONG LOGO</div>--}}
            {{--<nav id="menu">--}}
                {{--<a href="{{ url('/') }}" class="home-btn menu-btn"><span class="hover-anim" data-hover="HOME">HOME</span></a>--}}
                {{--<a href="{{ url('/about') }}" class="about-btn menu-btn"><span class="hover-anim" data-hover="ABOUT">ABOUT</span></a>--}}
                {{--<a href="{{ url('/services') }}" class="service-btn menu-btn"><span class="hover-anim" data-hover="SERVICE">Service</span></a>--}}
                {{--<a href="{{ url('/promotions') }}" class="promo-btn menu-btn"><span class="hover-anim" data-hover="PROMOTION">PROMOTION</span></a>--}}
                {{--<a href="{{ url('/works') }}" class="portfolio-btn menu-btn"><span class="hover-anim" data-hover="PORTFOLIO">PORTFOLIO</span></a>--}}
                {{--<a href="{{ url('/contact') }}" class="contact-btn menu-btn"><span class="hover-anim" data-hover="CONTACT">CONTACT</span></a>--}}
            {{--</nav>--}}
            {{--<nav id="auth-menu">--}}
                {{--<a href="#" class="login-btn menu-btn"><span class="hover-anim" data-hover="简体中文">简体中文&nbsp;</span></a>--}}
            {{--</nav>--}}
        {{--</section>--}}
        <section id="header-bar">
            <div id="logo">TANGLONG LOGO</div>
            <nav id="menu">
                <a href="{{LL::getLocalizedURL(null, '/') }}" class="home-btn menu-btn">
                    <span class="hover-anim" data-hover="{{trans('messages.HOME')}}">{{trans('messages.HOME')}}</span></a>
                <a href="{{LL::getLocalizedURL(null, 'about') }}" class="about-btn menu-btn">
                    <span class="hover-anim" data-hover="{{trans('messages.ABOUT')}}">{{trans('messages.ABOUT')}}</span></a>
                <a href="{{LL::getLocalizedURL(null, 'services') }}" class="service-btn menu-btn">
                    <span class="hover-anim" data-hover="{{trans('messages.SERVICE')}}">{{trans('messages.SERVICE')}}</span></a>
                <a href="{{LL::getLocalizedURL(null, 'promotions') }}" class="promo-btn menu-btn">
                    <span class="hover-anim" data-hover="{{trans('messages.PROMOTION')}}">{{trans('messages.PROMOTION')}}</span></a>
                <a href="{{LL::getLocalizedURL(null, 'works') }}" class="portfolio-btn menu-btn">
                    <span class="hover-anim" data-hover="{{trans('messages.PORTFOLIO')}}">{{trans('messages.PORTFOLIO')}}</span></a>
                <a href="{{LL::getLocalizedURL(null, 'contact') }}" class="contact-btn menu-btn">
                    <span class="hover-anim" data-hover="{{trans('messages.CONTACT')}}">{{trans('messages.CONTACT')}}</span></a>
            </nav>
            <nav id="auth-menu">
                @if(LL::getCurrentLocale() == 'en')
                    <a href="{{LL::getLocalizedURL('zh') }}" class="login-btn menu-btn"><span class="hover-anim" data-hover="{{trans('messages.LANG')}}">{{trans('messages.LANG')}}</span></a>
                @elseif(LL::getCurrentLocale() == 'zh')
                    <a href="{{LL::getLocalizedURL('en') }}" class="login-btn menu-btn"><span class="hover-anim" data-hover="{{trans('messages.LANG')}}">{{trans('messages.LANG')}}</span></a>
                @endif
            </nav>
        </section>

        <div id="header-info">
            <h1>We Know Design by Heart</h1>
            <p>Let our professionals build and promote your business as unique as you</p>
        </div>

    </section>

    <section class="punchlines" id="anchor-1" data-to-animate="">
        <div class="center">
            <h1 class="title">A tool for collectors of any kind !</h1>
            <ul>
                <li class="first">
                    <figure><img src="/img/punchline-1.svg" alt=""></figure>
                    <h3>A complete tool</h3>
                    <p>We are supplying you a <strong>complete</strong> tool that will allow you to bring your collection to another level.</p>
                </li>
                <li>
                    <figure><img src="/img/punchline-2.svg" alt=""></figure>
                    <h3>Universe diversity</h3>
                    <p>Find and explore a bunch of collectibles through <strong>multiple</strong> and <strong>various</strong> universes of collection.</p>
                </li>
                <li>
                    <figure><img src="/img/punchline-3.svg" alt=""></figure>
                    <h3>Easy-to-use</h3>
                    <p>Thanks to its <strong>easy-to-use</strong> and <strong>clean</strong> interface, it has never been so easy to handle your collections.</p>
                </li>
                <li class="last">
                    <figure><img src="/img/punchline-4.svg" alt=""></figure>
                    <h3>Quickly handy</h3>
                    <p>No instructions needed... Thanks to its carefully thought ergonomy, everybody will be able to take advantage of it.</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="insert expose" id="anchor-2" data-to-animate="">
        <div class="center">
            <figure>
                <img src="/img/expose.svg" alt="">
            </figure>
            <div class="wrap">
                <article class="text">
                    <h2>Expose your collectibles</h2>
                    <p>Squireel is a service that will allow you, collectors, to expose every of your collections inside a community of passionnated people like you. They are valuable and deserve to be promoted and shared.</p>
                    <p>Create your collections, add pictures of your collectibles, detail, push online and share, it's so easy.</p>
                    <p>Of course, you will be able to catalogue your collectibles <strong>privately</strong> to show them to selected people.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="insert universe" data-to-animate="">
        <div class="center">
            <figure>
                <img src="/img/universe.svg" alt="">
            </figure>
            <div class="wrap">
                <article class="text">
                    <h2>Universe diversity</h2>
                    <p>We want to create an <strong>inevitable</strong> tool for every collectors. From stamps, through figurines, to cars, this service could be apply to every universe of collection.</p>
                    <p>Each universe will have its own gate, allowing us to centralize its collectors in one and only community without mixing them with collectors of parallel universes.</p>
                    <p>For the official release, a first gate will allow you to discover collections of <strong>mangas, video games, consoles, movies, series and comics</strong>.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="insert exploration" data-to-animate="">
        <div class="center">
            <figure>
                <img src="/img/exploration.svg" alt="">
            </figure>
            <div class="wrap">
                <article class="text">
                    <h2>Explore collections</h2>
                    <p>Collectors, fans or just curious? You will have the opportunity to explore a variety of collections.</p>
                    <p>Search for a user, a collection or a particular item and browse this catalog of collectibles according to your desires and your curiosity.</p>
                    <p>Not a collection owner ? You don't know what to collect ? It might be an opportunity for you to find the desire and inspiration to create your own collection on Squireel.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="insert sharing" data-to-animate="">
        <div class="center">
            <figure>
                <img src="/img/sharing.svg" alt="">
            </figure>
            <div class="wrap">
                <article class="text">
                    <h2>Share your passion</h2>
                    <p>Don't hesitate anymore and be even more proud of your collectibles by showing them to everyone.</p>
                    <p>Thanks to social networks and our service, if you desire, share your collections and get precious feedback by enthusiasts, curious and others.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="insert support" id="anchor-4" data-to-animate="">
        <div class="center">
            <figure>
                <img src="/img/support.svg" alt="">
            </figure>
            <div class="wrap">
                <article class="text">
                    <h2>Support the project</h2>
                    <p>Our project needs your support to continue to move forward and achieve its goal.</p>
                    <p>If you want to help and support us in creating a strong community and an efficient and comprehensive service, you can bring your building block.</p>
                    <p><strong>Share your discovery</strong> with your family and friends and follow the progress of the project on social networks.</p>
                    <ul>
                        <li class="first">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.squireel.com" class="button" onclick="ga(&#39;send&#39;, &#39;click&#39;, &#39;Facebook&#39;, &#39;Partage-Facebook&#39;, &#39;http://www.squireel.com&#39;)" ;="">
                                Share on Facebook                                    </a>
                        </li>
                        <li>or</li>
                        <li class="last">
                            <a href="https://twitter.com/intent/tweet?url=http://www.squireel.com&text=@squireelcom,%20a%20service%20for%20collectors%20to%20discover%20very%20soon%20-%20&hashtags=service,collection,squireel&" class="button" onclick="ga(&#39;send&#39;, &#39;click&#39;, &#39;Twitter&#39;, &#39;Partage-Twitter&#39;, &#39;http://www.squireel.com&#39;);">
                                Share on Twitter                                    </a>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="copy">
        © 2014 TANGLONG DESIGN
    </section>
</section>

{{--<script src="js/jquery.js"></script>--}}
<script src="/js/video.js"></script>
<script src="/js/easing.js"></script>
<script src="/js/coming.js"></script>

</body></html>