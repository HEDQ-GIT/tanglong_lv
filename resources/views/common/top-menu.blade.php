{!! Html::style("css/headermenu.css") !!}

<script>
    $('#slide-menu-btn').click(function(){
        $('body').toggleClass('menu-active');
    });
</script>
<nav id="slide-menu">
    <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="service.html">SERVICE</a></li>
        <li><a href="#">PROMOTION</a></li>
        <li><a href="portfolio.html">PORTFOLIO</a></li>
        <li><a href="contact.html">CONTACT</a></li>
    </ul>
</nav>

<section id="header-bar">
    <div id="logo">TANGLONG</div>
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
    <a id="slide-menu-btn" class="glyphicon glyphicon-align-justify"></a>
</section>