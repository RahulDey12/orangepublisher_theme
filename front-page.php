<?php get_header(); ?>
    <!-- Banner Section -->
    <section class="orange-homepage-banner">
        <div class="container-fluid">
            <div class="row justify-content-center banner-main">
                <div class="col-10 col-md-8 banner-content">
                    <h1 class="orange-banner-heading text-center">Stories to tell? Life to remember?</h1>
                    <p class="orange-banner-sub-heading text-center">Publish your story and make it a bestseller.</p>

                    <div class="orange-banner-form row justify-content-center">
                        <select id="bannerServiceCat" class="col-md-3 p-0 mr-3">
                            <option value="kolkata">Kolkata</option>
                            <option value="bihar">Bihar</option>
                        </select>
                        <select id="bannerService" class="col-md-5 p-0">
                            <option value="q1">Quistion One</option>
                            <option value="q2">Quistion Two</option>
                        </select>
                    </div>
                </div>

                <!-- Bottom Shape -->
                <svg width="0" height="0">
                    <clipPath id="clipBanner">
                        <path d="M0,163c0,0,192.6-99.59,849-29c76.62,8.24,152.689,14.971,227.62,19.98c76.62,8.24,152.69,14.97,227.62,19.979
	c3.43,0.69,348.59,14.95,615.76-49.72"/>
                    </clipPath>
                </svg>
                <img src="<?php echo get_template_directory_uri() ?>/assets/src/images/banner-shape.png" alt="banner-shape" class="banner-shape">
            </div>
        </div>
    </section>
    <div class="bkg-paper-texture">
        <!-- About Section -->
        <section class="orange-about-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 orange-about-video">
                        <div class="embed-responsive embed-responsive-4by3 video-main">
                            <video src="<?php echo get_template_directory_uri() ?>/assets/src/videos/about_video_4by3.mp4" class="embed-responsive-item"></video>
                            <div class="overlay"></div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/src/images/play-icon.svg" alt="Play Icon" class="play-icon">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 orange-about-content">
                        <div class="heading">
                            <h2 class="about-main-heading">About <span>Services</span></h2>
                            <p class="about-sub-heading">Lorem Ipsum Dummy Text Lorem Ipsum</p>

                            <span class="heading-span"></span>
                            <span class="heading-span2"></span>
                        </div>

                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus  aece nase ndisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Risus commodo viverram aecenas.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus  aece nase ndisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Risus commodo viverram aecenas.</p>

                            <a href="#" class="orange-about-sec-button" title="Read More">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- New Books Section -->
        <section class="orange-new-book-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="section-heading">
                        <h2 class="main-heading">Discover Your <span>New Books</span></h2>
                        <p class="sub-heading">Lorem Ipsum Dummy Text</p>
                    </div>

                    <div class="orange-new-book-cat-heading container-fluid d-none d-md-block">
                        <div class="new-book-cat-title-section col-12 col-xl-10 mx-auto">
                            <ul>
                                <li class="new-book-cat-title active"><a href="#">New Releases</a></li>
                                <li class="new-book-cat-title"><a href="#">Coming soon</a></li>
                                <li class="new-book-cat-title"><a href="#">Best Sellers</a></li>
                                <li class="new-book-cat-title"><a href="#">Award Winners</a></li>
                                <li class="new-book-cat-title"><a href="#">Selected For You</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="orange-new-book-cat-content d-none d-md-block">
                        <div id="new-book-cat1" class="books row m-0">
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-1.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-2.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-3.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-4.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-5.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-6.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-1.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-2.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-3.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-4.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-5.jpg" alt=""></div>
                            <div class="book col-md-2"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/book-6.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Self Publish Section -->
    <section class="orange-self-pulish-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-heading">
                    <h2 class="main-heading">How to <span>Self Publish</span> Your Book</h2>
                    <p class="sub-heading">Lorem Ipsum Dummy Text</p>
                </div>

                <div class="orange-steps">
                    <div class="step">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/src/images/icon-submit.svg" alt="">
                        <p>Submit your Completed manuscript</p>
                    </div>
                    <div class="step">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/src/images/icon-review.svg" alt="">
                        <p>Editorial review & approval</p>
                    </div>
                    <div class="step">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/src/images/icon-package.svg" alt="">
                        <p>Choose your Package</p>
                    </div>
                    <div class="step">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/src/images/icon-payment.svg" alt="">
                        <p>Sign Contract & Make Payment</p>
                    </div>
                    <div class="step">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/src/images/icon-publish.svg" alt="">
                        <p>Your Book is Published!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section class="orange-homepage-contact">
        <div class="heading">
            <h2>Sign up to Start Publishing Now</h2>
        </div>
        <form action="">
            <div class="form-container container">
                <input type="text" placeholder="Enter Name">
                <input type="email" name="" id="" placeholder="Enter Email">
                <input type="text" placeholder="Enter Subject">
                <input type="tel" name="" id="" placeholder="Phone Number">
                <button type="submit">Publish My Book</button>
            </div>
        </form>
    </section>
    <!-- Partner Section -->
    <section class="orange-partner-section d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col logo"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/Paytm_logo.png" alt=""></div>
                <div class="col logo"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/SnapDeal_logo.png" alt=""></div>
                <div class="col logo"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/amazon_logo.png" alt=""></div>
                <div class="col logo"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/Shopclues_logo.png" alt=""></div>
                <div class="col logo"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/flipkart_logo.png" alt=""></div>
                <div class="col logo"><img src="<?php echo get_template_directory_uri() ?>/assets/src/images/ebay_logo.png" alt=""></div>
            </div>
        </div>
    </section>
    <!-- Sell Book Section -->
    <section class="orange-sell-book-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-heading">
                    <h2 class="main-heading">Sell your book <span>worldwide</span></h2>
                    <p class="sub-heading">Maximise your book's sales potential. Reach readers all over the world.</p>
                </div>
            </div>
        </div>
        <div class="orange-sell-book-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 image-side">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/src/images/sell_book_sec_image.png" alt="">
                    </div>
                    <div class="col-lg-6 text-side">
                        <ul class="points">
                            <li class="point">
                                <h3 class="point-heading">Publish and sell in both Print and eBook formats</h3>
                                <p class="point-desc">Don’t restrict your book to just one format. Sell in print and eBook formats all over the world.</p>
                            </li>
                            <li class="point">
                                <h3 class="point-heading">Publish and sell in both Print and eBook formats</h3>
                                <p class="point-desc">Don’t restrict your book to just one format. Sell in print and eBook formats all over the world.</p>
                            </li>
                            <li class="point">
                                <h3 class="point-heading">Publish and sell in both Print and eBook formats</h3>
                                <p class="point-desc">Don’t restrict your book to just one format. Sell in print and eBook formats all over the world.</p>
                            </li>
                        </ul>
                        <div class="button-section">
                            <a href="#" class="button">Dummy Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Seller Section -->
    <section class="orange-best-seller">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/src/images/best-seller.png" alt="">
                    </div>
                    <div class="content">
                        <div class="row p-0">
                            <div class="col-md-5 left">
                                <h2>House of Indie Best-Sellers</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sodales nibh enim. Maecenas accumsan nisl et lectus tempus, a faucibus augue porttitor. Vivamus sit amet elit fermentum elit dictum maximus a vel tortor. Suspendisse vel tellus eget arcu auctor pulvinar. Cras non mauris sed mauris tristique ullamcorper ut egestas lorem. In at nisi ut purus tempus sollicitudin. Fusce volutpat tempor magna sit amet semper. Morbi nunc risus, iaculis nec dignissim ut, hendrerit nec dui. Proin nec nisi sapien.</p>
                                <p>Vestibulum a elit a est semper dignissim. Sed eget eros eget sem posuere commodo vitae eu risus. Morbi volutpat ligula vehicula, pulvinar.</p>

                                <a href="#" class="button">Dummy Button</a>
                            </div>
                            <div class="col-md-7 right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call Section -->
    <section class="orange-call-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="heading">
                        <h2 class="main-heading">Lorem Ipsum Dummy Text <span>worldwide</span></h2>
                        <p class="sub-heading">Lorem Ipsum is simply dummy text type industry.</p>
                    </div>
                    <div class="button-section">
                        <a href="">Call Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section -->
    <section class="orange-testimonial-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="heading">
                    <h2 class="main-heading">our client testimonials</h2>
                    <p class="sub-heading">Here are many variations of passages of Lorem Ipsum</p>
                </div>

                <div class="carousel slide col-12 col-md-11 col-lg-8 mt-5" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active testimonial">
                            <div class="text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="carousel-item testimonial">
                            <div class="text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                        <div class="carousel-item testimonial">
                            <div class="text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>