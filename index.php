<?php
	session_start();
	if(!$_SESSION['auth'])
    {
		#echo "Unauthorised user";
		header('location:index.html');
	}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

   
    <meta charset="utf-8">
    <title>Web Surfers</title>
    <meta name="description" content="">
    <meta name="author" content="">

   
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">
        <div class="row">

            
            <nav class="s-header__nav">
                <ul>
                <li class="current"><a class="smoothscroll" href="index.php">Websurfers.</a></li>
                    <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
                    <li><a class="smoothscroll" href="#services">Activities</a></li>
                    <li><a class="smoothscroll" href="#portfolio">Registration</a></li>
                    <li><a class="smoothscroll" href="#blog">Feedback</a></li>
                    <li><a class="smoothscroll" href="#about">Review</a></li>
                    <li><a class="smoothscroll" href="#contact">Contact</a></li>
                </ul>
            </nav>

            <a class="s-header__menu-toggle" href="#0" title="Menu">
                <span class="s-header__menu-icon"></span>
            </a>

        </div> <!-- end row -->
    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="h12.jpeg" data-natural-width="3000" data-natural-height="2000">

        <div class="s-home__content">

            <div class="s-home__slider">

                <div class="s-home__slide s-home__slide--1">
                    <div class="row">
                        <div class="column large-12 s-home__slide-text">
                            <h2>
                            Hello, we are <span>Web Surfers</span>.
                            Please scroll down to find the Activities we have....
                            </h2>
                        </div>
                    </div>
                </div> <!-- end s-home__slide -->

                <div class="s-home__slide s-home__slide--2">
                    <div class="row">
                        <div class="column large-12 s-home__slider-text">
                            <h2>
                            Live in the <a href="#portfolio" title="">Sunshine,</a> Swim the
                            <a href="#contact" title="">Sea,</a> Drink the <a href="#portfolio" title=""> Wild Air..</a>
                            </h2>
                        </div>
                    </div>
                </div> <!-- end s-home__slide -->

            </div> <!-- end s-home__slider -->

        </div> <!-- end s-home__content -->

        <div class="s-home__nav-arrows">
            <div class="s-home__arrow-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"/></svg>
            </div>
            <div class="s-home__arrow-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"/></svg>
            </div>
        </div> <!-- end s-home__nav-arrows -->

        <div class="s-home__line"></div>

    </section> <!-- end s-home -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services target-section s-dark">

        <div class="row section-head">
            <div class="column large-3 medium-12" data-aos="fade-up">
                <h2>Activities</h2>
                <p class="desc">Our list of awesome Activities.</p>
            </div>

            <div class="column large-8 medium-12 align-x-right" data-aos="fade-up">
                <p class="lead">
                    When springtime rolls around here in Seattle, those intermittent beautiful days make us start longing for summertime in the PNW. Unfortunately for us, we’ve got a few more weeks of wet and wintry weather to get through, which has us dreaming about sun-kissed beaches at slightly more southern latitudes.
                </p>
            </div>
        </div> <!-- end section-head -->

        <div class="row block-large-1-3 block-medium-1-2 block-tab-full services-list">

            <div class="column services-item" data-aos="fade-up">
                <h5> Concert</h5>
                <p>
                    Connect with your kids, your friends and your family while taking part in the concerts at the coast in GOA Beach. Featuring well-known music performers in the C-Spire Concert Series at The Wharf, and ever-popular music events such as the Hangout Music Festival on the GOA Beach. We invite you to soak up the sun and our southern hospitality as you adjust to our relaxed pace.
                </p>
            </div> <!-- end services-item -->

            <div class="column services-item" data-aos="fade-up">
                <h5>Movie Night</h5>
                <p>
                    Goa Beach Club is known as glitzy day club, with relaxed vibes, crystal clear water and plenty of fun in the moon. It is also offering an outdoor night movie concept that has an amazing and exclusive view, with that cool ocean breeze and the crashing waves as the backing soundtrack. We invite you to soak up the moon and our southern hospitality as you adjust to our relaxed pace.
                </p>
            </div> <!-- end services-item -->

            <div class="column services-item" data-aos="fade-up">
                <h5>Beach Party</h5>
                <p>
                    Being the party capital of India, a Club Party in Goa has to be lit in every way. The state indulges in crazy celebration on all its beaches, clubs and resorts, giving the visitors epic memories to cherish for life. If you are planning for your private Party in Goa, you got to know about the best places to enjoy with your friends or partner.
                </p>
            </div> <!-- end services-item -->

            <div class="column services-item" data-aos="fade-up">
                <h5>Surfing</h5>
                <p>
                    Goa is particularly suitable for surfing in the dry season, where the combination of the two most important factors for all breakwaters prevail — deserted beaches and a favorable wind. Because of the longstretched coastal areas, the "Far North" gives the impression that no one in the sea is bathing. It is ideal with gentle waves, and some places are exceptionally good for surfing.
                </p>
            </div> <!-- end services-item -->

            <div class="column services-item" data-aos="fade-up">
                <h5>Beach Rides</h5>
                <p>
                    Goa is all about water and fun for water lovers. The hot summer season and beautiful beaches obviously call for some interesting water sports in Goa. We have a list of water activities for all the water lovers that are so much fun to do. Seawater is always an attraction for its lovers. They always get curious when they come near the sea and eagerly want to know about the life of aquatic creatures.
                </p>
            </div> <!-- end services-item -->

            <div class="column services-item" data-aos="fade-up">
                <h5>Paragliding</h5>
                <p>
                    Another  one water activities in goa  which is adventurous and amazing. In this activity you fly behind the boat like a kite. You are tied to boat and balloon, during paragliding boat is running in speed and it is amazing experience even in boat. It is a mixed activity of air and water.During Parasailing you can view a beautiful sea of Goa and beyond. There is water everywhere and you can’t move your eyes from this beautiful view. 
                </p>
            </div> <!-- end services-item -->

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- portfolio
    ================================================== -->
    <section id="portfolio" class="s-portfolio target-section">

        <div class="row section-head">
            <div class="column large-3 medium-12" data-aos="fade-up">
                <h2>Registration</h2>
                <p class="desc">Check out our latest Activities.</p>
            </div>

            <div class="column large-8 medium-12 align-x-right" data-aos="fade-up">
                <p class="lead">
                    For the beachcomber that’s already built every sandcastle imaginable and has given up on flying kites (we get it—they’re hard!), here are 6 unusual beach activities guaranteed to get you off the beach towel and in on some real-deal fun in the beach.
                </p>
            </div>
        </div> <!-- end section-head -->

        <div class="row block-large-1-3 block-medium-1-2 block-mob-full folio-list">

            <div class="column folio-item" data-aos="fade-up">
                <a href="#modal-01" class="folio-item__thumb" data-lity>
                    <img src="images/portfolio/concert.jpg" 
                         srcset="images/portfolio/concert.jpg 1x, 
                                 images/portfolio/concert@2x.png 2x" alt="">
                    <span class="folio-item__text">
                        Concert
                    </span>
                </a>
            </div> <!-- end folio-item -->

            <div class="column folio-item" data-aos="fade-up">
                <a href="#modal-02" class="folio-item__thumb" data-lity>
                    <img src="images/portfolio/movie night.png" 
                         srcset="images/portfolio/movie night.png 1x, 
                                 images/portfolio/movie night@2x.jpg 2x" alt="">
                    <span class="folio-item__text">
                        Movie Night
                    </span>
                </a>
            </div> <!-- end folio-item -->

            <div class="column folio-item" data-aos="fade-up">
                <a href="#modal-03" class="folio-item__thumb" data-lity>
                    <img src="images/portfolio/beach party.jpg" 
                         srcset="images/portfolio/beach party.jpg 1x, 
                                 images/portfolio/beach party@2x.jpg 2x" alt="">
                    <span class="folio-item__text">
                        Beach Party
                    </span>
                </a>
            </div> <!-- end folio-item -->

            <div class="column folio-item" data-aos="fade-up">
                <a href="#modal-04" class="folio-item__thumb" data-lity>
                    <img src="images/portfolio/surfing.jpg" 
                         srcset="images/portfolio/surfing.jpg 1x, 
                                 images/portfolio/surfing@2x.jpg 2x" alt="">
                    <span class="folio-item__text">
                        Surfing
                    </span>
                </a>
            </div> <!-- end folio-item -->

            <div class="column folio-item" data-aos="fade-up">
                <a href="#modal-05" class="folio-item__thumb" data-lity>
                    <img src="images/portfolio/beach rides.jpg" 
                         srcset="images/portfolio/beach rides.jpg 1x, 
                                 images/portfolio/beach rides@2x.jpg 2x" alt="">
                    <span class="folio-item__text">
                        Beach Rides
                    </span>
                </a>
            </div> <!-- end folio-item -->

            <div class="column folio-item" data-aos="fade-up">
                <a href="#modal-06" class="folio-item__thumb" data-lity>
                    <img src="images/portfolio/paragliding.jpg" 
                         srcset="images/portfolio/paragliding.jpg 1x, 
                                 images/portfolio/paragliding@2x.jpg 2x" alt="">
                    <span class="folio-item__text">
                        paragliding
                    </span>
                </a>
            </div> <!-- end folio-item -->

        </div> <!-- end folio-list -->


        <!-- Modal Popup
        =========================================================== -->
        <div id="modal-01" class="modal-popup lity-hide">

            <img src="images/portfolio/gallery/concert.jpg" alt="" />

            <div class="modal-popup__desc">
                <h5>Concert</h5>
                <ul>
                 <li>Activity location: GOA Beach</li>
                    
               <li> Activity Time: Between 7:00 PM to 10:00 PM</li>
                    
                  <li> Activity day:Sunday </li>
                    
                </ul>
            </div>
            <a href="karthik\concert\CONCERT.html" class="modal-popup__details">Registration link</a>

        </div> <!-- end modal-01 -->

        <div id="modal-02" class="modal-popup lity-hide">

            <img src="images/portfolio/gallery/movie night.jpg" alt="" />

            <div class="modal-popup__desc">
                <h5>Movie Night</h5>
                <ul>
                    <li>Activity location: GOA Beach</li>
                       
                  <li> Activity Time: Between 7:00 PM to 11:00 PM</li>
                       
                     <li> Activity day: Everyday </li>
                       
                     <li>Batch size : 20 Members </li>
                   </ul>
            </div>

            <a href="karthik\movie night\MOVIE.html" class="modal-popup__details">Registration link</a>

        </div><!-- end modal-02 -->

        <div id="modal-03" class="modal-popup lity-hide">

            <img src="images/portfolio/gallery/beach party.jpg" alt="" />

            <div class="modal-popup__desc">
                <h5>Beach Party</h5>
                <ul>
                    <li>Activity location: GOA Beach</li>
                       
                  <li> Activity Time: Between 8:00 PM to 11:00 PM</li>
                       
                     <li> Activity day: Friday </li>
                       
                     <li>Batch size : 30 Members </li>
                   </ul>
            </div>

            <a href="karthik\beach party\BEACH.html" class="modal-popup__details">Registration link</a>

        </div><!-- end modal-03 -->

        <div id="modal-04" class="modal-popup lity-hide">

            <img src="images/portfolio/gallery/surfing.jpg" alt="" />

            <div class="modal-popup__desc">
                <h5>Surfing</h5>
                <ul>
                    <li>Activity location: GOA Beach</li>
                       
                  <li> Activity Time: Between 4:00 AM to 7:00 AM </li>
                       
                     <li> Activity day: Everyday </li>
                       
                     <li>Age Limit : Above 10 years </li>
                   </ul>
            </div>

            <a href="karthik\surfing\SURFING.html" class="modal-popup__details">Registration link</a>

        </div><!-- end modal-04 -->

        <div id="modal-05" class="modal-popup lity-hide">

            <img src="images/portfolio/gallery/beach rides.jpg" alt="" />

            <div class="modal-popup__desc">
                <h5>Beach Rides</h5>
                <ul>
                    <li>Activity location: GOA Beach</li>
                       
                  <li> Activity Time: Between 8:00 AM to 5:00 PM </li>
                       
                     <li> Activity day: Everyday </li>
                       
                     <li>Age Limit : Above 10 years </li>
                   </ul>
            </div>

            <a href="karthik\beach rides\WATER RIDE.html" class="modal-popup__details">Registration link</a>

        </div><!-- end modal-05 -->

        <div id="modal-06" class="modal-popup lity-hide">

            <img src="images/portfolio/gallery/paragliding.jpg" alt="" />

            <div class="modal-popup__desc">
                <h5>paragliding</h5>
                <ul>
                    <li>Activity location: GOA Beach</li>
                       
                  <li> Activity Duration: 15-20 minutes </li>
                       
                     <li> Activity day: Everyday </li>
                       
                     <li>Age Limit : Above 18 years </li>
                   </ul>
            </div>

            <a href="karthik\paragliding\paragliding.html" class="modal-popup__details">Registration link</a>

        </div><!-- end modal-06 -->

    </section> <!-- end s-portfolio -->


    <!-- blog
    ================================================== -->
    <section id="blog" class="s-blog target-section s-dark">

        <div class="row section-head">
            <div class="column large-3 medium-12" data-aos="fade-up">
                <h2>Feedback</h2>
            </div>
        </div> <!-- end section-head -->

        <!-- Blog Entries -->
        <div class="blog-entries">

            <article class="blog-entry" data-aos="fade-up">

                <div class="row blog-entry__header">

                    <div class="column large-9 w-1000-stack blog-entry__title">
                        <h3 class="h2"><a href="blog-single.html">IT doesn’t matter where you go in life, as long as you go to the beach...</a></h3>
                    </div>

                    <div class="column large-3 w-1000-stack blog-entry__meta">
                        <span class="blog-entry__date">february 10, 2021</span>
                        <span class="blog-entry__byline">By Nazneen R</span> 
                    </div>
                </div> <!-- end blog-entry__header -->

                <div class="row">

                    <div class="column large-9 w-1000-stack blog-entry__content">
                        <p>
                            Very clean beach and less crowded than Baga beach and Calangute beach...Very fine sand and families can throughly freak out.Only problem don't ever go for Parasailing in the evening when the water is choppy it becomes extremely dangerous with boats literally tilting and the people who organise this fool you by saying it is totally safe because they do not wish to refund money..But for one's own safety do not venture for any water sports in choppy waters.</p>
                    </div>

                </div>

            </article> <!-- end blog-entry -->

            <article class="blog-entry" data-aos="fade-up">

                <div class="row blog-entry__header">
                   

                    <div class="column large-9 w-1000-stack blog-entry__title">
                        <h3 class="h2"><a href="blog-single.html">To go out with the setting sun on an empty beach is to truly embrace your solitude...
                           
                        </a></h3>
                    </div>

                    <div class="column large-3 w-1000-stack blog-entry__meta">
                        <span class="blog-entry__date">June 08, 2020</span>
                        <span class="blog-entry__byline">By Shikamaru Nara</span> 
                    </div>
                </div> <!-- end blog-entry__header -->

                <div class="row">

                    <div class="column large-9 w-1000-stack blog-entry__content">
                        <p>
                            Easily one among the best beaches of Goa..!! Less crowded with decent crowd and what a view..!! Don't miss this of you're staying in North Goa. Baga, Calangute beaches are a bit crowded but if you're looking for relaxation, go to Candolim beach, rent a sun bed and relax with the view..!!</p>
                    </div>

                </div>

            </article> <!-- end blog-entry -->

            <article class="blog-entry" data-aos="fade-up">

                <div class="row blog-entry__header">

                    <div class="column large-9 w-1000-stack blog-entry__title">
                        <h3 class="h2"><a href="blog-single.html">
                            Life’s a beach, and I’m just playing in the sand...
                        </a></h3>
                    </div>

                    <div class="column large-3 w-1000-stack blog-entry__meta">
                        <span class="blog-entry__date">June 05, 2020</span>
                        <span class="blog-entry__byline">By Sasuke Uchiha</span> 
                    </div>
                </div> <!-- end blog-entry__header -->

                <div class="row">

                    <div class="column large-9 w-1000-stack blog-entry__content">
                        <p>
                            My preferred beach in North Goa ... Candolim beach, clean, serene, lot of options to eat, shop and have fun with family. We were staying close to the beach and visited often at different times of the day to play, enjoy nature, watch the sunset and watch the waves ... Lot of shacks, good food , great music ... you can walk upto Sinquerim beach and come back to the main road from Taj Fort Aguada/ Holiday village hotel side. Waiting to be back at the beach ....</p>
                    </div>

                </div>

            </article> <!-- end blog-entry -->

        </div> <!-- end blog entries -->
       

    </section> <!-- end s-blog -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row section-head">
            <div class="column large-3 medium-12" data-aos="fade-up">
                <h2>Review</h2>
                <p class="desc">Sky Above,Sand below,Peace within...</p>
            </div>

            <div class="column large-8 medium-12 align-x-right" data-aos="fade-up">
                <p class="lead">
                Advice from the Ocean: Be shore of yourself. Come out of your shell. Take time to coast. Avoid pier pressure. Sea life’s beauty. Don’t get so tide down on work that you miss out on life’s beautiful waves.
                </p>
            </div>
        </div> <!-- end section-head -->

        <div class="row">
            <div class="column" data-aos="fade-up">
            <iframe width="1200px" height="700px" frameborder="0" src="https://momento360.com/e/u/a077baae881c49bc8df961dd8e63ddc6?utm_campaign=embed&utm_source=other&heading=305.7&pitch=22.5&field-of-view=75&size=medium" ></iframe>
            </div>
        </div>
      
    </section>
    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact target-section s-dark">

        <div class="row section-head">
            <div class="column large-3 medium-12">
                <h2>Contact us</h2>
                <p class="desc">Get in touch with us.</p>
            </div>
        </div> <!-- end section-head -->

        <div class="row s-contact__content">

            <div class="column large-7 medium-12">
                <h3 class="display-1">
                   If you are interested in donating for the cleanliness and development of the beach....
                </h3>

                <div class="s-contact__email-us">
                    <a href="karthik\original.html" class="btn btn--primary h-full-width">Donate Here</a>
                </div>
            </div>

            <div class="column large-4 medium-12 s-contact__info-blocks">
                <div class="row">
                    <div class="column large-12 medium-6 tab-12">
                        <div class="s-contact__info-block">
                            
                            <span class="s-contact__info-block-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"/><path d="M11.42 21.814a.998.998 0 001.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"/></svg>
                            </span>
        
                            <h5>Find us here</h5>
                            <p>
                            Calangute Village, North Goa <br>
                             GOA <br>
                             403516, India
                            </p>
                        </div> <!-- end s-contact__info-block -->
                    </div>

                    <div class="column large-12 medium-6 tab-12">
                        <div class="s-contact__info-block">
                            <span class="s-contact__info-block-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M17.707 12.293a.999.999 0 00-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 000-1.414l-4-4a.999.999 0 00-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 000-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 00-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 00.912-.271L17 14.414 19.586 17l-2.006 2.005z"/></svg>
                            </span>
        
                            <h5>Say hello</h5>
                            <p>
                            Goa_beach@gmail.com <br>
                            +91 697 543 2345 <br>
                            +91 847 622 8001
                            
                            </p>
                        </div> <!-- end s-contact__info-block -->
                    </div>
                </div> <!-- end row -->
            </div> <!-- end s-contact__info-blocks -->

        </div> <!-- end s-contact__content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">
        <div class="row">
            <div class="column large-4 medium-6 w-1000-stack s-footer__social-block">
                <ul class="s-footer__social">
                    <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
            </div>

        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z"/></svg>
            </a>
        </div> <!-- end ss-go-top -->
      <form align="right" name="form1" method="post" action="logout.php">
        <label>
          <input name="submit2" type="submit" id="submit2" value="log out">
        </label>
      </form>
    </footer>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>