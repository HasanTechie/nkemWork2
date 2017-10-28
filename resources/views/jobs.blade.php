@include ('header')

<!-- Page Sub Menu
    ============================================= -->
<div id="page-menu" class="no-sticky">

    <div id="page-menu-wrap">

        <div class="container clearfix">

            <div class="menu-title"><span>ExpressResource</span></div>


        </div>

    </div>

</div><!-- #page-menu end -->

<!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Latest Jobs</h1>
        <span>Showcase of Our Awesome Jobs</span>
        {{--<ol class="breadcrumb">--}}
        {{--<li><a href="#">Home</a></li>--}}
        {{--<li class="active">Portfolio</li>--}}
        {{--</ol>--}}
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Portfolio Filter
            ============================================= -->
            <ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

                {{--<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>--}}
                {{--<li><a href="#" data-filter=".pf-icons">Icons</a></li>--}}
                {{--<li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>--}}
                {{--<li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>--}}
                {{--<li><a href="#" data-filter=".pf-media">Media</a></li>--}}
                {{--<li><a href="#" data-filter=".pf-graphics">Graphics</a></li>--}}

            </ul><!-- #portfolio-filter end -->

            <div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
                <i class="icon-random"></i>
            </div>

            <div class="clear"></div>

            <!-- Portfolio Items
            ============================================= -->
            <div id="portfolio" class="portfolio grid-container portfolio-1 clearfix">

                <article class="portfolio-item pf-media pf-icons clearfix">
                    <div class="portfolio-image">
                        <a href="/job">
                            <img src="images/portfolio/1/4.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="/job" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="/job">Backend Web Devloper</a></h3>
                        <span>at <a href="#">Google</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla
                            debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                        <ul class="iconlist">
                            <li><i class="icon-ok"></i> <strong>Skills:</strong> Laravel, VueJS, CSS3</li>
                            <li><i class="icon-ok"></i> <strong>Posted on:</strong> 12th January, 2014</li>
                            <li><i class="icon-ok"></i> <strong>By:</strong> John Doe</li>
                        </ul>
                        <a href="/job" class="button button-3d noleftmargin">View Job Details</a>
                    </div>
                </article>

                <article class="portfolio-item pf-illustrations clearfix">
                    <div class="portfolio-image">
                        <a href="/job">
                            <img src="images/portfolio/1/5.jpg" alt="Locked Steel Gate">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="/job" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="/job">Senior Engineer</a></h3>
                        <span>at <a href="#">Github</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla
                            debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                        <ul class="iconlist">
                            <li><i class="icon-ok"></i> <strong>Skills:</strong> Python, CSS3, jQuery</li>
                            <li><i class="icon-ok"></i> <strong>Posted on:</strong> 14th February, 2014</li>
                            <li><i class="icon-ok"></i> <strong>By:</strong> Mary Jane</li>
                        </ul>
                        <a href="/job" class="button button-3d noleftmargin">View Job Details</a>
                    </div>
                </article>

                <article class="portfolio-item pf-media pf-icons clearfix">
                    <div class="portfolio-image">
                        <a href="/job">
                            <img src="images/portfolio/1/4.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="/job" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="/job">Backend Web Devloper</a></h3>
                        <span>at <a href="#">Google</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla
                            debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                        <ul class="iconlist">
                            <li><i class="icon-ok"></i> <strong>Skills:</strong> Laravel, VueJS, CSS3</li>
                            <li><i class="icon-ok"></i> <strong>Posted on:</strong> 12th January, 2014</li>
                            <li><i class="icon-ok"></i> <strong>By:</strong> John Doe</li>
                        </ul>
                        <a href="/job" class="button button-3d noleftmargin">View Job Details</a>
                    </div>
                </article>

                <article class="portfolio-item pf-illustrations clearfix">
                    <div class="portfolio-image">
                        <a href="/job">
                            <img src="images/portfolio/1/5.jpg" alt="Locked Steel Gate">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="/job" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="/job">Senior Engineer</a></h3>
                        <span>at <a href="#">Github</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla
                            debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                        <ul class="iconlist">
                            <li><i class="icon-ok"></i> <strong>Skills:</strong> Python, CSS3, jQuery</li>
                            <li><i class="icon-ok"></i> <strong>Posted on:</strong> 14th February, 2014</li>
                            <li><i class="icon-ok"></i> <strong>By:</strong> Mary Jane</li>
                        </ul>
                        <a href="/job" class="button button-3d noleftmargin">View Job Details</a>
                    </div>
                </article>

                <article class="portfolio-item pf-media pf-icons clearfix">
                    <div class="portfolio-image">
                        <a href="/job">
                            <img src="images/portfolio/1/4.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="/job" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="/job">Backend Web Devloper</a></h3>
                        <span>at <a href="#">Google</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla
                            debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                        <ul class="iconlist">
                            <li><i class="icon-ok"></i> <strong>Skills:</strong> Laravel, VueJS, CSS3</li>
                            <li><i class="icon-ok"></i> <strong>Posted on:</strong> 12th January, 2014</li>
                            <li><i class="icon-ok"></i> <strong>By:</strong> John Doe</li>
                        </ul>
                        <a href="/job" class="button button-3d noleftmargin">View Job Details</a>
                    </div>
                </article>

                <article class="portfolio-item pf-illustrations clearfix">
                    <div class="portfolio-image">
                        <a href="/job">
                            <img src="images/portfolio/1/5.jpg" alt="Locked Steel Gate">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="/job" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="/job">Senior Engineer</a></h3>
                        <span>at <a href="#">Github</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla
                            debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                        <ul class="iconlist">
                            <li><i class="icon-ok"></i> <strong>Skills:</strong> Python, CSS3, jQuery</li>
                            <li><i class="icon-ok"></i> <strong>Posted on:</strong> 14th February, 2014</li>
                            <li><i class="icon-ok"></i> <strong>By:</strong> Mary Jane</li>
                        </ul>
                        <a href="/job" class="button button-3d noleftmargin">View Job Details</a>
                    </div>
                </article>

                <article class="portfolio-item pf-media pf-icons clearfix">
                    <div class="portfolio-image">
                        <a href="/job">
                            <img src="images/portfolio/1/4.jpg" alt="Open Imagination">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="/job" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="/job">Backend Web Devloper</a></h3>
                        <span>at <a href="#">Google</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla
                            debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                        <ul class="iconlist">
                            <li><i class="icon-ok"></i> <strong>Skills:</strong> Laravel, VueJS, CSS3</li>
                            <li><i class="icon-ok"></i> <strong>Posted on:</strong> 12th January, 2014</li>
                            <li><i class="icon-ok"></i> <strong>By:</strong> John Doe</li>
                        </ul>
                        <a href="/job" class="button button-3d noleftmargin">View Job Details</a>
                    </div>
                </article>

                <article class="portfolio-item pf-illustrations clearfix">
                    <div class="portfolio-image">
                        <a href="/job">
                            <img src="images/portfolio/1/5.jpg" alt="Locked Steel Gate">
                        </a>
                        <div class="portfolio-overlay">
                            <a href="images/portfolio/full/5.jpg" class="left-icon" data-lightbox="image"><i
                                        class="icon-line-plus"></i></a>
                            <a href="/job" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="/job">Senior Engineer</a></h3>
                        <span>at <a href="#">Github</a></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla
                            debitis vitae temporibus enim sed. Optio, reprehenderit, ex.</p>
                        <ul class="iconlist">
                            <li><i class="icon-ok"></i> <strong>Skills:</strong> Python, CSS3, jQuery</li>
                            <li><i class="icon-ok"></i> <strong>Posted on:</strong> 14th February, 2014</li>
                            <li><i class="icon-ok"></i> <strong>By:</strong> Mary Jane</li>
                        </ul>
                        <a href="/job" class="button button-3d noleftmargin">View Job Details</a>
                    </div>
                </article>

            </div><!-- #portfolio end -->

        </div>

    </div>

</section><!-- #content end -->

@include ('footer')