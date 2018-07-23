<div class="menuBar">
	<nav class="navbar navbar-default ">
		<div class="container p0">
			<div class="navbar-header">
				<div class="logo">
					<a href="index.html" class="navbar-brand">
						<img src="assets/images/logo.png" alt="Homepage logo">
						<span>thx</span>
					</a>
				</div>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#navbar-menu">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>
			</div>
			<div class="navbar-right">

				<div id="navbar-menu" class="collapse navbar-collapse ">
					<ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown"
							   role="button" aria-expanded="false" title="Home">HOME</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.html">HOME CHARITY</a></li>
								<li><a href="ecology.html">HOME ECOLOGY</a></li>
								<li><a href="404.html">404 ERROR PAGE</a></li>
								<li><a href="login.html">LOGIN &nbsp;|&nbsp; REGISTER</a></li>
							</ul>
						</li>
                        <li class="dropdown features-menu">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-expanded="false" title="Features">FEATURES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="features.html" >FEATURES PAGE</a></li>
                                <li><a href="gallery.html" >GALLERY PAGE</a></li>
                            </ul>

                        </li>
						<li><a href="about-us.html" class="about-us" title="About us">ABOUT US</a></li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown"
							   role="button" aria-expanded="false" title="Our causes">OUR CAUSES</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="our-causes.html">OUR CAUSES LIST</a></li>
								<li><a href="our-causes-2-columns.html">OUR CAUSES 2 COLUMNS</a></li>
								<li><a href="our-causes-3-columns.html">OUR CAUSES 3 COLUMNS</a></li>
                                <li><a href="single-causes.html">SINGLE CAUSES</a></li>
                            </ul>
						</li>
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown"
							   role="button" aria-expanded="false" title="News">NEWS</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="news.html">NEWS LIST</a></li>
								<li><a href="news-2-columns.html">NEWS 2 COLUMNS</a></li>
								<li><a href="news-3-columns.html">NEWS 3 COLUMNS</a></li>
								<li><a href="blog-single.html">SINGLE POST</a></li>
							</ul>
						</li>
						<li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-expanded="false" title="Shop">SHOP</a>
                            <ul class="dropdown-menu" role="menu">
                                <li ><a href="shop.html">SHOP PAGE</a></li>
                                <li ><a href="shop-product.html">SHOP PRODUCT</a></li>
                            </ul>
                        </li>
						<li class="last"><a href="contact.html" class="contact" title="Contact">CONTACT</a></li>
					</ul>
				</div>

			</div>
		</div>
	</nav>
</div>

<script>
    "use strict";
    // ===================== Menu Bar ======================
     $(document).ready(function(){
    var pathname = window.location.pathname;
    var page = pathname.split(/[/ ]+/).pop();
    var menuItems = $('#navbar-menu a');
    menuItems.each(function(){
        var mi = $(this);
        var miHrefs = mi.attr("href");
        var miParents = mi.parents('li');
        if(page == miHrefs) {
            miParents.addClass("active").siblings().removeClass('active');
        }
    });
     });
</script>

