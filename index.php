<?php
// error_reporting(E_ERROR | E_PARSE);
// $json_string = file_get_contents("http://growthfolks.in/blog/wp-json/wp/v2/posts?per_page=12&_embed");
// $parsed_json['blog'] = json_decode($json_string);
// $con = mysqli_connect("13.233.17.47", "growthfolks", "@Navneet1", "growthfolks");
// $sql = "select * from growthfolks order by date desc";
// $result = mysqli_query($con, $sql);
// $data = mysqli_fetch_all($result);

// echo "<pre>";
// print_r($parsed_json['blog']);
?>

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/extra.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Growth Folks: India's Largest Community of Growth Enthusiasts</title>

    <meta name="google-site-verification" content="9aLO63N0C8KTX2z-rlVGli9jmt4LCW95Kzbw2QH2sK0" />

</head>

<body>
    <style>
        .gallery_modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }

        /* Modal Content */
        .gallery_content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }

        /* The Close Button */
        .close_modal {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close_modal:hover,
        .close_modal:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .myslide_modal {
            display: none;
        }

        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        img {
            margin-bottom: -4px;
        }

        .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
        }

        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
    <?php require('./common/header.php') ?>
    <!-- Main Section -->
    <main>
        <section class="hero">
            <div class="hero_back">
                <div class="container">
                    <div class="hero_main">
                        <div class="hero_main--heading">
                            <div class="d-box-r"></div>
                            <div class="heading-box">
                                <h1 class="heading-box-h1">India's largest Community of Growth Enthusiast</h1>
                                <p class="heading-box-p">The fastest-growing community of marketers, growth hackers,
                                    entrepreneurs and enthusiasts</p>
                                <a href="https://www.facebook.com/groups/growthfolksofficial" target="_blank" class="heading-box-btn">Join Our Community</a>
                            </div>
                        </div>
                        <div class="hero_main--img">
                            <div class="img-sec-2">
                                <div class="d-box-l-1"></div>
                                <div class="hero_img-box">
                                    <img src="./images/img1.png" alt="" class="hero-img">
                                </div>
                                <div class="d-box-l-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- About Section -->
        <section class="about">
            <div class="container">

                <div class="about_main">
                    <div class="base_heading">
                        <p class="base_heading--title">ABOUT US</p>
                        <h2 class="base_heading--h2">We believe in growing together as a community!</h2>
                        <div class="base_heading--underline"></div>
                    </div>
                    <div class="about_main--detail">
                        <div class="about_main--detail-text">
                            <p>At Growth Folks, we truly believe in the transformative power of community and the ability of learning and growing together with the help of each other. Everyone is guessing. Marketers/Growth hackers are figuring out the best marketing strategies, or the tactics that will bring them right traffic or leads; Enthusiasts want to know how to get started; Companies and startups are looking for the best hacks around growth.</p>
                            <a href="./about.php" class="about-btn">Know More About Us <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.08 23.88" class="svg-arow">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                                width: 2%
                                            }
                                        </style>
                                    </defs>
                                    <title>arrow</title>
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <path class="cls-1" d="M24.08,18.83V1.63A1.42,1.42,0,0,0,23.57.54,1.43,1.43,0,0,0,22.45,0H5.25a1.43,1.43,0,1,0,0,2.87H19L.42,21.43a1.43,1.43,0,0,0,2,2L21.21,4.69V18.83a1.43,1.43,0,1,0,2.87,0Z" />
                                        </g>
                                    </g>
                                </svg></a>
                        </div>
                        <div class="about_main--detail-show">
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">8+</span>
                                    <span class="show_item--head-cap span-item">City Chapters</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">70+</span>
                                    <span class="show_item--head-cap span-item">Offline Events</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">750+</span>
                                    <span class="show_item--head-cap span-item">Active Members</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">180,000+</span>
                                    <span class="show_item--head-cap span-item">Organic Outreach</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">10+</span>
                                    <span class="show_item--head-cap span-item">Growth Webinars</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">3500+</span>
                                    <span class="show_item--head-cap span-item">Meetup Attendees</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section class="gallery">
            <div class="container">
                <div class="gallery_main">
                    <div class="gallery_main--sec g-sec-1">

                        <img src="./images/gallery-img2.png" onclick="openModal();currentSlide(1)" alt="" class="g-sec-1-img1 img-hover hover-shadow cursor">
                        <img src="./images/gallery-img1.png" alt="" onclick="openModal();currentSlide(2)" class="g-sec-1-img2 img-hover hover-shadow cursor">
                        <img src="./images/gallery-img-3.png" alt="" onclick="openModal();currentSlide(3)" class="g-sec-1-img3 img-hover hover-shadow cursor">

                    </div>
                    <div class="gallery_main--sec g-sec-2">
                        <img src="./images/gallery-sec2-img.png" alt="" onclick="openModal();currentSlide(4)" class="g-sec-2-img1 img-hover hover-shadow cursor">
                    </div>
                    <div class="gallery_main--sec g-sec-3 hover-shadow cursor">
                        <img src="./images/gallery-sec3-img1.png" alt="" onclick="openModal();currentSlide(5)" class="g-sec-3-img1 img-hover hover-shadow cursor">
                        <img src="./images/gallery-sec3-img2.png" alt="" onclick="openModal();currentSlide(6)" class="g-sec-3-img2 img-hover hover-shadow cursor">
                    </div>
                </div>
                <div id="myModal" onclick="closeModal()" class="modal gallery_modal">

                    <div class="modal-content gallery_content">
                        <span class="close close_modal cursor" onclick="closeModal()">&times;</span>
                        <div class="mySlides">
                            <div class="numbertext"> </div>
                            <img src="./images/gallery-img2.png" style="width:100%">
                        </div>

                        <div class="mySlides myslide_modal">
                            <div class="numbertext">2 / 6</div>
                            <img src="./images/gallery-img1.png" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <img src="./images/gallery-img-3.png" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <img src="./images/gallery-sec2-img.png" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <img src="./images/gallery-sec3-img1.png" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="./images/gallery-sec3-img2.png" style="width:100%">
                        </div>





                    </div>
                </div>
            </div>
        </section>

        <!-- Services -->

        <section class="services">
            <div class="container">
                <div class="services_main">
                    <div class="base_heading">
                        <p class="base_heading--title">OUR SERVICES</p>
                        <h2 class="base_heading--h2">Adding Value to Every Growth Professionals or Marketeer</h2>
                        <div class="base_heading--underline"></div>
                    </div>
                    <div class="services_main--text">
                        <p>From planning a kickass marketing strategy to starting a career in marketing, making an informed decision takes the right information from the right people. We strive to bridge the gap between growth leaders, marketers, enthusiasts, and give them a platform to learn, collaborate, create, and grow together.</p>
                    </div>

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval='false'>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <div class="services_main--comp">
                                    <div class="services_main--comp-item">
                                        <img src="./icons/events.svg" alt="" class="ser_item-img">
                                        <h3 class="ser_item-h">GrowthShops & Webinars</h3>
                                        <p class="ser_item-para">Interactive meetup sessions and workshops on a monthly basis with best in class growth leaders.</p>
                                    </div>
                                    <div class="services_main--comp-item">
                                        <img src="./icons/community.svg" alt="" class="ser_item-img">
                                        <h3 class="ser_item-h">Community Engagement</h3>
                                        <p class="ser_item-para">Easy access to the latest growth content, blogs, discussions, online events in the community</p>
                                    </div>
                                    <div class="services_main--comp-item">
                                        <img src="./icons/hackathon.svg" alt="" class="ser_item-img">
                                        <h3 class="ser_item-h">Growth Hackathons</h3>
                                        <p class="ser_item-para">One of its kind of Growth-Product hackathon to promote scalable solutions.</p>
                                    </div>
                                    <div class="services_main--comp-item">
                                        <img src="./icons/roadmap.svg" alt="" class="ser_item-img">
                                        <h3 class="ser_item-h">Growth Roadmap</h3>
                                        <p class="ser_item-para">Growth Consultation for your startup by Industry Experts</p>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="carousel-item">
							<div class="services_main--comp">
								<div class="services_main--comp-item">
									<img src="./images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Workshop2 & Meetups</h3>
									<p class="ser_item-para">Cupidatat quis nisi Lorem et occaecat qui mollit quis fugiat aliqua
										occaecat</p>
								</div>
								<div class="services_main--comp-item">
									<img src="./images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Community2 Engagement</h3>
									<p class="ser_item-para">Tllamco adipisicing ea nostrud magna proident sunt consequat do
										anim culpa in</p>
								</div>
								<div class="services_main--comp-item">
									<img src="./images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Growth2 Hackathones</h3>
									<p class="ser_item-para">Sunt sit ex excepteur id do id laborum do minim aliqua excepteur
										laborum</p>
								</div>
								<div class="services_main--comp-item">
									<img src="./images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Growth2 Roadmap</h3>
									<p class="ser_item-para">Irure eu velit proident dolore quis deserunt cupidatat amet ea sit
										eiusmod</p>
								</div>
							</div>
						</div> -->
                        </div>
                    </div>
                </div>
                <div class="bottom_bar">
                    <div class="bottom_bar--left">
                        <div class="page-btn">
                            <a href="./services.php">Explore Our Services <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.08 23.88" class="svg-arow">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                                width: 2%
                                            }
                                        </style>
                                    </defs>
                                    <title>arrow</title>
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <path class="cls-1" d="M24.08,18.83V1.63A1.42,1.42,0,0,0,23.57.54,1.43,1.43,0,0,0,22.45,0H5.25a1.43,1.43,0,1,0,0,2.87H19L.42,21.43a1.43,1.43,0,0,0,2,2L21.21,4.69V18.83a1.43,1.43,0,1,0,2.87,0Z" />
                                        </g>
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                    <div class="bottom_bar--right">
                        <!-- <div class="left left_move" id="gotoPre">
                                <img src="./icons/left-arr.svg" alt="">
                           </div> -->
                        <!-- <div class="right right_move"  id="gotoNext">
                                <img src="./icons/right-arr.svg" alt="">
                          </div>  -->
                    </div>
                </div>
        </section>

        <!-- Banner section -->
        <section class="banner index_banner">
            <div class="container">
                <div class="banner_main index_banner-main">
                    <h2>Did you find us helpful in any ways? Let's talk!</h2>
                    <p>Let us know more about your requirments and we'll be more than happy to help you.</p>
                    <button class="btn">Get In touch</button>
                </div>
            </div>
            <div class="banner_back banner_backindex"></div>
        </section>


        <!-- Resources -->
        <section class="resources">
            <div class="container">
                <div class="resources_main">
                    <div class="resources_main--banner">

                    </div>

                    <div class="resources_main--content">
                        <div class="base_heading">
                            <p class="base_heading--title">RESOURCES</p>
                            <h2 class="base_heading--h2">Content That Will Help You Upgrade</h2>
                            <div class="base_heading--underline"></div>
                        </div>
                        <div class="res_btn">
                            <a class="res_btn--link res_active" onclick="active_blog()" id="blog">Blogs</a>
                            <a class="res_btn--link" onclick="active_vlog()" id="vlog">Vlogs</a>
                        </div>
                    </div>
                    <div id="blog-view">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" data-interval='false'>
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <div class="resources_main--posts">
                                        <?php for ($i = 0; $i < 3; $i++) { ?>
                                            <div class="resources_post">
                                                <a href="<?php echo $parsed_json['blog'][$i]->link ?>"> <img src="<?php echo $parsed_json['blog'][$i]->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->medium->source_url; ?>" alt="" class="post_img"></a>
                                                <div class="tags">
                                                    <?php foreach ($parsed_json['blog'][$i]->_embedded->{'wp:term'}[0] as $value) { ?>
                                                        <a href="<?php echo $parsed_json['blog'][$i]->link ?>" class="tags_links"><?php echo $value->name; ?></a>
                                                    <?php } ?>
                                                </div>
                                                <a class="text-dark" href="<?php echo $parsed_json['blog'][$i]->link ?>">
                                                    <h3><?php echo $parsed_json['blog'][$i]->title->rendered; ?></h3>
                                                </a>
                                                <p class="date"><?php echo $parsed_json['blog'][$i]->date; ?> </p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="resources_main--posts">
                                        <?php for ($i = 3; $i < 6; $i++) { ?>
                                            <div class="resources_post">
                                                <a href="<?php echo $parsed_json['blog'][$i]->link ?>"> <img src="<?php echo $parsed_json['blog'][$i]->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->medium->source_url; ?>" alt="" class="post_img"></a>
                                                <div class="tags">
                                                    <?php foreach ($parsed_json['blog'][$i]->_embedded->{'wp:term'}[0] as $value) { ?>
                                                        <a href="<?php echo $parsed_json['blog'][$i]->link ?>" class="tags_links"><?php echo $value->name; ?></a>
                                                    <?php } ?>
                                                </div>
                                                <a class="text-dark" href="<?php echo $parsed_json['blog'][$i]->link ?>">
                                                    <h3><?php echo $parsed_json['blog'][$i]->title->rendered; ?></h3>
                                                </a>
                                                <p class="date"><?php echo $parsed_json['blog'][$i]->date; ?> </p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom_bar">
                            <div class="bottom_bar--left">
                                <div class="page-btn">
                                    <a href="./resources.php">See All Blogs <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.08 23.88" class="svg-arow">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #fff;
                                                        width: 2%
                                                    }
                                                </style>
                                            </defs>
                                            <title>arrow</title>
                                            <g id="Layer_2" data-name="Layer 2">
                                                <g id="Layer_1-2" data-name="Layer 1">
                                                    <path class="cls-1" d="M24.08,18.83V1.63A1.42,1.42,0,0,0,23.57.54,1.43,1.43,0,0,0,22.45,0H5.25a1.43,1.43,0,1,0,0,2.87H19L.42,21.43a1.43,1.43,0,0,0,2,2L21.21,4.69V18.83a1.43,1.43,0,1,0,2.87,0Z" />
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                            </div>
                            <div class="bottom_bar--right">
                                <!-- <img src="./images/left.svg" alt="" id="gotoPre1" class="left_move">
                            <img src="./images/right.svg" alt="" id="gotoNext1" class="right_move"> -->
                                <div class="left left_move" id="gotoPre1">
                                    <img src="./icons/left-arr.svg" alt="">
                                </div>
                                <div class="right right_move" id="gotoNext1">
                                    <img src="./icons/right-arr.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vlog-view">
                        <div id="carouselExampleIndicators1_1" class="carousel slide" data-ride="carousel" data-interval='false'>
                            <div class="carousel-inner ">
                                <div class="carousel-item">
                                    <div class="resources_main--posts">
                                        <?php for ($i = 0; $i < 3; $i++) { ?>
                                            <div class="resources_post">
                                                <a href="https://www.youtube.com/watch?v=<?php echo $data[$i][1] ?>"> <img src="<?php echo $data[$i][2] ?>" alt="" class="post_img"></a>
                                                <a class="text-dark" href="https://www.youtube.com/watch?v=<?php echo $data[$i][1] ?>">
                                                    <h3><?php echo $data[$i][4] ?></h3>
                                                </a>
                                                <p class="date"><?php echo $data[$i][3] ?><span></span></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="resources_main--posts">
                                        <?php for ($i = 3; $i < 6; $i++) { ?>
                                            <div class="resources_post">
                                                <a href="https://www.youtube.com/watch?v=<?php echo $data[$i][1] ?>"> <img src="<?php echo $data[$i][2] ?>" alt="" class="post_img"></a>
                                                <a class="text-dark" href="https://www.youtube.com/watch?v=<?php echo $data[$i][1] ?>">
                                                    <h3><?php echo $data[$i][4] ?></h3>
                                                </a>
                                                <p class="date"><?php echo $data[$i][3] ?><span></span></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom_bar">
                            <div class="bottom_bar--left">
                                <div class="page-btn">
                                    <a href="" class="index-res-btn">See All Blogs </a>
                                </div>
                            </div>
                            <div class="bottom_bar--right">
                                <div class="left left_move" id="gotoPre1_1">
                                    <img src="./icons/left-arr.svg" alt="">
                                </div>
                                <div class="right right_move" id="gotoNext1_1">
                                    <img src="./icons/right-arr.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </div>
        </section>


        <!-- Testimonials -->
        <section class="testimonial">
            <div class="container">
                <div class="testimonial_main">

                    <div class="base_heading">
                        <p class="base_heading--title">TESTIMONIAL</p>
                        <h2 class="base_heading--h2">Our community makes us who we are!</h2>
                        <div class="base_heading--underline"></div>
                    </div>
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval='false'>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <div class="testimonial_main--items">

                                    <div class="testimonial_item">
                                        <div class="testimonial_item--head">
                                            <div class="head--img">
                                                <img src="./images/Prateeka.png" alt="">
                                            </div>
                                            <div class="head--title">
                                                <h3 class="ser_item-h">Prateeka Kamath</h3>
                                                <p>Marketing Consultant</p>
                                            </div>
                                        </div>
                                        <div class="testimonial_item--bottom">
                                            <p>I am glad that I found a community of curious, smart and well-informed growth professionals to help! It's been a massive learning journey for all of us, full of excitement, support and innovation. Kudos, team!</p>
                                        </div>
                                    </div>

                                    <div class="testimonial_item">
                                        <div class="testimonial_item--head">
                                            <div class="head--img">
                                                <img src="./imgs2/Aaaditya.png" alt="">
                                            </div>
                                            <div class="head--title">
                                                <h3 class="ser_item-h">Aditya Sheth</h3>
                                                <p>Content & SEO, Venngage</p>
                                            </div>
                                        </div>
                                        <div class="testimonial_item--bottom">
                                            <p>From the deep yet narrow member list to the organic conversations within the community; I’ve find myself mostly inspired, sometimes motivated and almost always better at what I do: growth. Growth folks is the the index card or cheatsheet on how you should build your own communities. Rooting for Ayush & Co!</p>
                                        </div>
                                    </div>


                                    <div class="testimonial_item">
                                        <div class="testimonial_item--head">
                                            <div class="head--img">
                                                <img src="./imgs2/Devyani.png" alt="">
                                            </div>
                                            <div class="head--title">
                                                <h3 class="ser_item-h">Devyani Saxena</h3>
                                                <p>Asst. Manager - Marketing & Ops at Simpl</p>
                                            </div>
                                        </div>
                                        <div class="testimonial_item--bottom">
                                            <p>It has been 1.5 years that I know of GrowthFolks, been attending their offline meetups & participating in online activities. Highly recommend to all growth enthusiasts & professionals to join in, connect and share this space. More power to the team!</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="testimonial_main--items">

                                    <div class="testimonial_item">
                                        <div class="testimonial_item--head">
                                            <div class="head--img">
                                                <img src="./images/Soumyadip.png" alt="">
                                            </div>
                                            <div class="head--title">
                                                <h3 class="ser_item-h">Soumyadip Banerjee</h3>
                                                <p>SEO & Growth at Ampliz</p>
                                            </div>
                                        </div>
                                        <div class="testimonial_item--bottom">
                                            <p>I feel extremely glad that such a community exists, where growth enthusiasts like me feel at home. Be it the online group, the monthly events (Growth Shop) or the newest venture (Growth Huddle) - Growth Folks has something for everyone.</p>
                                        </div>
                                    </div>

                                    <div class="testimonial_item">
                                        <div class="testimonial_item--head">
                                            <div class="head--img">
                                                <img src="./images/Shiva.png" alt="">
                                            </div>
                                            <div class="head--title">
                                                <h3 class="ser_item-h">Shivaprakash K M</h3>
                                                <p>Product Marketing Manager at Zeta</p>
                                            </div>
                                        </div>
                                        <div class="testimonial_item--bottom">
                                            <p>GrowthFolks has built an engaged community of marketers and growth professionals that help each other out in solving real world business problems. They have built a platform where professionals network and learn from each other.</p>
                                        </div>
                                    </div>


                                    <div class="testimonial_item">
                                        <div class="testimonial_item--head">
                                            <div class="head--img">
                                                <img src="./images/Pulkit.png" alt="">
                                            </div>
                                            <div class="head--title">
                                                <h3 class="ser_item-h">Pulkit Thakur</h3>
                                                <p>Experience Strategy Consultant at IBM iX</p>
                                            </div>
                                        </div>
                                        <div class="testimonial_item--bottom">
                                            <p>The best part about this community is the diversity in the experience of people you get to interact with. I am immensely proud to be an active member of this community as I have surely made a lot marketeers friends for life.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom_bar">
                        <div class="bottom_bar--left">
                            <div class="page-btn">
                                <a href="https://www.facebook.com/groups/growthfolksofficial" target="_blank">Join Our Community <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.08 23.88" class="svg-arow">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #fff;
                                                    width: 2%
                                                }
                                            </style>
                                        </defs>
                                        <title>arrow</title>
                                        <g id="Layer_2" data-name="Layer 2">
                                            <g id="Layer_1-2" data-name="Layer 1">
                                                <path class="cls-1" d="M24.08,18.83V1.63A1.42,1.42,0,0,0,23.57.54,1.43,1.43,0,0,0,22.45,0H5.25a1.43,1.43,0,1,0,0,2.87H19L.42,21.43a1.43,1.43,0,0,0,2,2L21.21,4.69V18.83a1.43,1.43,0,1,0,2.87,0Z" />
                                            </g>
                                        </g>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="bottom_bar--right">
                            <!-- <img src="./images/left.svg" alt="" id="gotoPre2" class="left_move" >
                            <img src="./images/right.svg" alt="" id="gotoNext2" class="right_move" > -->
                            <div class="left left_move" id="gotoPre2">
                                <img src="./icons/left-arr.svg" alt="">
                            </div>
                            <div class="right right_move" id="gotoNext2">
                                <img src="./icons/right-arr.svg" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Client -->
        <!-- <section class="client">
            <div class="container">
                <div class="client_head">
                    <p>OUR CLIENTS</p>
                </div>

                <div class="client_gallery">
                    <div class="client_gallery--left">
                        <div class="left left_move" id="gotoPre3">
                            <img src="./icons/left-arr.svg" alt="">
                        </div>
                    </div>
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" data-interval='false'>
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <div class="client_gallery--mid">
                                    <?php for ($i = 0; $i < 6; $i++) { ?>
                                        <div class="gallery-item"><img src="./images/Logo/<?php echo $i ?>.png" alt="" srcset="" class="client-img"></div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="client_gallery--mid">
                                    <?php for ($i = 6; $i < 12; $i++) { ?>
                                        <div class="gallery-item"><img src="./images/Logo/<?php echo $i ?>.png" alt="" srcset="" class="client-img"></div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="client_gallery--right">
                        <div class="right right_move" id="gotoNext3">
                            <img src="./icons/right-arr.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section> -->

        <!-- Client -->
        <section class="client">

            <div class="container">
                <div class="client_head">
                    <p>OUR CLIENTS</p>
                </div>

                <div class="client_gallery">
                    <div class="client_gallery--left">
                        <!-- <img src="./images/left.svg" id="gotoPre3" alt=""> -->
                        <div class="left left_move" id="gotoPre3">
                            <img src="./icons/left-arr.svg" alt="">
                        </div>
                    </div>

                    <div class="container">

                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" data-interval='false'>
                            <div class="carousel-inner ">

                                <div class="carousel-item active">

                                    <div class="row">
                                        <?php for ($i = 0; $i < 6; $i++) { ?>
                                            <div class="col-md-2 logos-box">
                                                <div class="gallery-item"><img src="./images/Logo/<?php echo $i ?>.png" alt="" srcset="" class="client-img"></div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>


                                <div class="carousel-item ">

                                    <div class="row">
                                        <?php for ($i = 6; $i < 12; $i++) { ?>
                                            <div class="col-md-2 logos-box">
                                                <div class="gallery-item"><img src="./images/Logo/<?php echo $i ?>.png" alt="" srcset="" class="client-img"></div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="client_gallery--right">
                        <!-- <img src="./images/right.svg" id="gotoNext3" alt=""> -->
                        <div class="right right_move" id="gotoNext3">
                            <img src="./icons/right-arr.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- End Client -->
    </main>


    <!-- Footer Section -->
    <?php require('./common/footer.php') ?>
</body>

</html>
<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>
<script>
    $("#gotoNext").click(() => $("#carouselExampleIndicators").carousel("next"));
    $("#gotoPre").click(() => $("#carouselExampleIndicators").carousel("prev"));
    $("#gotoNext1").click(() => $("#carouselExampleIndicators1").carousel("next"));
    $("#gotoPre1").click(() => $("#carouselExampleIndicators1").carousel("prev"));
    $("#gotoNext1_1").click(() => $("#carouselExampleIndicators1_1").carousel("next"));
    $("#gotoPre1_1").click(() => $("#carouselExampleIndicators1_1").carousel("prev"));
    $("#gotoNext2").click(() => $("#carouselExampleIndicators2").carousel("next"));
    $("#gotoPre2").click(() => $("#carouselExampleIndicators2").carousel("prev"));
    $("#gotoNext3").click(() => $("#carouselExampleIndicators3").carousel("next"));
    $("#gotoPre3").click(() => $("#carouselExampleIndicators3").carousel("prev"));
</script>
<script>
    $('#vlog-view').hide();
    $(document).ready(function() {
        $("#blog").click(function() {
            $("#blog-view").show(800);
            $("#vlog-view").hide(800);
        });
    });
    $("#vlog").click(function() {
        $("#blog-view").hide(800);
        $("#vlog-view").show(800);
        $(".resources_post").first().show("fast", function showNext() {
            $(this).next(".resources_post").show("fast", showNext);
        });
    });

    function active_blog() {

        $('#vlog').removeClass("res_active");
        $('#blog').addClass("res_active");
        $('.index-res-btn').text('See All Blogs');

    }

    function active_vlog() {
        $('#blog').removeClass("res_active");
        $('#vlog').addClass("res_active");
        $('.index-res-btn').text('See All Vlogs');
    }
</script>

<script>
    $('.nav-item').removeClass("nav-active");
    $('#home').addClass("nav-active");
</script>
<script>
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>

<div class="modal fade" id="model2" role="dialog">
    <div class="modal-dialog modal-sm">
        <div style="border:none" class="modal-content">
            <div style="background: rgb(32, 122, 106); " class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <p class="text-success text-center">Thank you for submitting your request. </p>
            </div>

        </div>
    </div>
</div>s
<?php
if (!isset($_GET['id'])) {
    $message = " ";
} else {
    echo "<script>$('#model2').modal('show');</script>";
    echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>';
}
?>