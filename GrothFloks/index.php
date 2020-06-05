<?php require('./common/header.php') ?>
<?php
    $json_string = file_get_contents("https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/growth-folks");
    $parsed_json['blog'] = json_decode($json_string);
    $json_string = file_get_contents("https://www.googleapis.com/youtube/v3/search?key=AIzaSyCE5GTdzhiouSn2ssUKplnLgIgDVlGedjY&channelId=UC4NoSzAHBhkKbfa6YPFyVNA&part=snippet,id&order=date&maxResults=20");
    $parsed_json['vlog'] = json_decode($json_string);
    // echo "<pre>";
    // print_r($parsed_json['blog']);
?>
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
                                <p class="heading-box-p">Sub Text will be written here and we need to ask ayush for
                                    providing us the content</p>
                                <a href="#" class="heading-box-btn">Join Our Community</a>
                            </div>
                        </div>
                        <div class="hero_main--img">
                            <div class="d-box-l-1"></div>
                            <div class="hero_img-box">
                                <img src="../images/img1.png" alt="" class="hero-img">
                            </div>
                            <div class="d-box-l-2"></div>
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
                        <h2 class="base_heading--h2">India's largest Community of Growth Enthusiast</h2>
                        <div class="base_heading--underline"></div>
                    </div>
                    <div class="about_main--detail">
                        <div class="about_main--detail-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae aliquid aut, eligendi
                                iure ratione tenetur doloribus maiores ea blanditiis dignissimos sint aspernatur optio
                                nemo nostrum! Ipsum tempore totam illo quasi ipsam rerum, provident aliquam deleniti
                                saepe minus tempora assumenda culpa ex laudantium blanditiis voluptatibus! Corrupti,
                                similique iste. Officiis, delectus accusamus?</p>
                            <a href="#" class="about-btn">Know More About Us <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.08 23.88" class="svg-arow"><defs><style>.cls-1{fill:#fff; width: 2%}</style></defs><title>arrow</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M24.08,18.83V1.63A1.42,1.42,0,0,0,23.57.54,1.43,1.43,0,0,0,22.45,0H5.25a1.43,1.43,0,1,0,0,2.87H19L.42,21.43a1.43,1.43,0,0,0,2,2L21.21,4.69V18.83a1.43,1.43,0,1,0,2.87,0Z"/></g></g></svg></a>
                        </div>
                        <div class="about_main--detail-show">
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">9+</span>
                                    <span class="show_item--head-cap span-item">City Caption</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">60+</span>
                                    <span class="show_item--head-cap span-item">Offline Events</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">72+</span>
                                    <span class="show_item--head-cap span-item">Active Members</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">180+</span>
                                    <span class="show_item--head-cap span-item">Organic Outreach</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">750+</span>
                                    <span class="show_item--head-cap span-item">Growth Enthusiast</span>
                                </div>
                            </div>
                            <div class="show_item">
                                <div class="show_item--head">
                                    <span class="show_item--head-num span-item">2500+</span>
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
                        <!-- <div class="g-sec-1-img1">

                        </div>
                        <div class="g-sec-1-img2">

                        </div>
                        <div class="g-sec-1-img3">

                        </div> -->

                        <img src="../images/gallery-img2.png" alt="" class="g-sec-1-img1 img-hover">
                        <img src="../images/gallery-img1.png" alt="" class="g-sec-1-img2 img-hover">
                        <img src="../images/gallery-img-3.png" alt="" class="g-sec-1-img3 img-hover">

                    </div>
                    <div class="gallery_main--sec g-sec-2">
                        <img src="../images/gallery-sec2-img.png" alt="" class="g-sec-2-img1 img-hover">
                    </div>
                    <div class="gallery_main--sec g-sec-3">
                        <img src="../images/gallery-sec3-img1.png" alt="" class="g-sec-3-img1 img-hover">
                        <img src="../images/gallery-sec3-img2.png" alt="" class="g-sec-3-img2 img-hover">
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s, when an unknown Lorem Ipsum has been
                            the industry's standard dummy text ever.</p>
                    </div>
					
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval='false'>
                     <div class="carousel-inner ">
                        <div class="carousel-item active">
							<div class="services_main--comp">
								<div class="services_main--comp-item">
									<img src="../images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Workshops & Meetups</h3>
									<p class="ser_item-para">Cupidatat quis nisi Lorem et occaecat qui mollit quis fugiat aliqua
										occaecat</p>
								</div>
								<div class="services_main--comp-item">
									<img src="../images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Community Engagement</h3>
									<p class="ser_item-para">Tllamco adipisicing ea nostrud magna proident sunt consequat do
										anim culpa in</p>
								</div>
								<div class="services_main--comp-item">
									<img src="../images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Growth Hackathones</h3>
									<p class="ser_item-para">Sunt sit ex excepteur id do id laborum do minim aliqua excepteur
										laborum</p>
								</div>
								<div class="services_main--comp-item">
									<img src="../images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Growth Roadmap</h3>
									<p class="ser_item-para">Irure eu velit proident dolore quis deserunt cupidatat amet ea sit
										eiusmod</p>
								</div>
							</div>
					</div>
					
						<div class="carousel-item">
							<div class="services_main--comp">
								<div class="services_main--comp-item">
									<img src="../images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Workshop2 & Meetups</h3>
									<p class="ser_item-para">Cupidatat quis nisi Lorem et occaecat qui mollit quis fugiat aliqua
										occaecat</p>
								</div>
								<div class="services_main--comp-item">
									<img src="../images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Community2 Engagement</h3>
									<p class="ser_item-para">Tllamco adipisicing ea nostrud magna proident sunt consequat do
										anim culpa in</p>
								</div>
								<div class="services_main--comp-item">
									<img src="../images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Growth2 Hackathones</h3>
									<p class="ser_item-para">Sunt sit ex excepteur id do id laborum do minim aliqua excepteur
										laborum</p>
								</div>
								<div class="services_main--comp-item">
									<img src="../images/events-1.png" alt="" class="ser_item-img">
									<h3 class="ser_item-h">Growth2 Roadmap</h3>
									<p class="ser_item-para">Irure eu velit proident dolore quis deserunt cupidatat amet ea sit
										eiusmod</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
                <div class="bottom_bar">
                    <div class="bottom_bar--left">
                        <div class="page-btn">
                            <a href="">Explore Our Services <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.08 23.88" class="svg-arow"><defs><style>.cls-1{fill:#fff; width: 2%}</style></defs><title>arrow</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M24.08,18.83V1.63A1.42,1.42,0,0,0,23.57.54,1.43,1.43,0,0,0,22.45,0H5.25a1.43,1.43,0,1,0,0,2.87H19L.42,21.43a1.43,1.43,0,0,0,2,2L21.21,4.69V18.83a1.43,1.43,0,1,0,2.87,0Z"/></g></g></svg></a>
                        </div>
                    </div>
                    <div class="bottom_bar--right">
                           <div class="left left_move" id="gotoPre">
                                <img src="../images/left_svg_arro.svg" alt="">
                            </div>
                            <div class="right right_move"  id="gotoNext">
                                <img src="../images/right_svg_arro.svg" alt="">
                            </div> 
                    </div>
            </div>
        </section>

        <!-- Banner section -->
            <section class="banner index_banner">
                <div class="container">
                    <div class="banner_main index_banner-main">
                        <h2>Did you find us helpful in any or the other ways?</h2>
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
                            <h2 class="base_heading--h2">Content That Will Help You In Upgrade</h2>
                            <div class="base_heading--underline"></div>
                        </div>
                        <div class="res_btn">
                            <a  class="res_btn--link" id="blog" >Blogs</a>
                            <a  class="res_btn--link" id="vlog">Vlogs</a>
                        </div>
                    </div>
					<div id="blog-view">
					  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" data-interval='false'>
						 <div class="carousel-inner ">
							<div class="carousel-item">
								<div class="resources_main--posts">
								<?php
								for($i=0;$i<3;$i++){
								echo	'<div class="resources_post">
										<a href="'.$parsed_json['blog']->items[$i]->link.'"><img src="'.$parsed_json['blog']->items[$i]->thumbnail.'" alt="" class="post_img"></a>
										<div class="tags">';
								for($j=0; $j<count($parsed_json['blog']->items[$i]->categories); $j++)
								{ 
                                    echo '<a href="" class="tags_links">'.$parsed_json['blog']->items[$i]->categories[$j].'</a>';
                                }
								echo '</div>
									<h3>'.$parsed_json['blog']->items[$i]->title.'</h3>
										<p class="date">'.$parsed_json['blog']->items[$i]->pubDate.'<span> 3 min read</span></p>
									</div>';
								}?>
								</div>
							</div>
							<div class="carousel-item active">
								<div class="resources_main--posts">
								<?php
									for($i=3;$i<6;$i++){
									echo	'<div class="resources_post">
											<a href="'.$parsed_json['blog']->items[$i]->link.'"><img src="'.$parsed_json['blog']->items[$i]->thumbnail.'" alt="" class="post_img"></a>
											<div class="tags">';
									for($j=0; $j<count($parsed_json['blog']->items[$i]->categories); $j++)
									{ 
										echo '<a href="" class="tags_links">'.$parsed_json['blog']->items[$i]->categories[$j].'</a>';
									}
									echo'</div>
										<h3>'.$parsed_json['blog']->items[$i]->title.'</h3>
											<p class="date">'.$parsed_json['blog']->items[$i]->pubDate.'<span> 3 min read</span></p>
										</div>';
									}
								?>
								</div>
							</div>
						</div>
					</div>
					<div class="bottom_bar">
                        <div class="bottom_bar--left">
                            <div class="page-btn">
                                <a href="">See All Blogs <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.08 23.88" class="svg-arow"><defs><style>.cls-1{fill:#fff; width: 2%}</style></defs><title>arrow</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M24.08,18.83V1.63A1.42,1.42,0,0,0,23.57.54,1.43,1.43,0,0,0,22.45,0H5.25a1.43,1.43,0,1,0,0,2.87H19L.42,21.43a1.43,1.43,0,0,0,2,2L21.21,4.69V18.83a1.43,1.43,0,1,0,2.87,0Z"/></g></g></svg></a>
                            </div>
                        </div>
                        <div class="bottom_bar--right">
                            <!-- <img src="../images/left.svg" alt="" id="gotoPre1" class="left_move">
                            <img src="../images/right.svg" alt="" id="gotoNext1" class="right_move"> -->
                            <div class="left left_move" id="gotoPre1">
                                <img src="../images/left_svg_arro.svg" alt="">
                            </div>
                            <div class="right right_move" id="gotoNext1">
                                <img src="../images/right_svg_arro.svg" alt="">
                            </div> 
                        </div>
                    </div>					
				</div>
					<div id="vlog-view">
					  <div id="carouselExampleIndicators1_1" class="carousel slide" data-ride="carousel" data-interval='false'>
						 <div class="carousel-inner ">
							<div class="carousel-item">
								<div class="resources_main--posts">
								<?php for($i=0;$i<3;$i++){
									
									echo '<div class="resources_post">
										<iframe id="ytplayer" type="text/html" width="100%" height="150%"
										src="https://www.youtube.com/embed/'.$parsed_json['vlog']->items[$i]->id->videoId.'?autoplay=1"
										frameborder="0"></iframe>
									</div>';
								}
									?>
								</div>
							</div>
							<div class="carousel-item active">
								<div class="resources_main--posts">
								<?php for($i=0;$i<3;$i++){
									
									echo '<div class="resources_post">
										<iframe id="ytplayer" type="text/html" width="100%" height="150%"
										src="https://www.youtube.com/embed/'.$parsed_json['vlog']->items[$i]->id->videoId.'?autoplay=1"
										frameborder="0"></iframe>
									</div>';
								}
									?>
								</div>
							</div>
						</div>
					</div>
                 <div class="bottom_bar">
                        <div class="bottom_bar--left">
                            <div class="page-btn">
                                <a href="">See All Blogs </a>
                            </div>
                        </div>
                        <div class="bottom_bar--right">
                            <div class="left left_move" id="gotoPre1_1">
                                <img src="../images/left_svg_arro.svg" alt="">
                            </div>
                            <div class="right right_move" id="gotoNext1_1">
                                <img src="../images/right_svg_arro.svg" alt="">
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
                        <h2 class="base_heading--h2">Adding Value to Every Growth Professionals or Marketeer</h2>
                        <div class="base_heading--underline"></div>
                    </div>
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval='false'>
					<div class="carousel-inner ">
						<div class="carousel-item active">
							<div class="testimonial_main--items">

								<div class="testimonial_item">
									<div class="testimonial_item--head">
										<div class="head--img">
											<img src="../images/boy-img1.png" alt="">
										</div>
										<div class="head--title">
											<h3 class="ser_item-h">Workshops & Meetups</h3>
											<p>Founder at Commmunity Folks</p>
										</div>
									</div>
									<div class="testimonial_item--bottom">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
											unknown printer took a galley of type and scrambled it to make a type specimen book.
											Lorem Ipsum has been the industry's</p>
									</div>
								</div>

								<div class="testimonial_item">
									<div class="testimonial_item--head">
										<div class="head--img">
											<img src="../images/boy-img1.png" alt="">
										</div>
										<div class="head--title">
											<h3 class="ser_item-h">Mitchell Cooper</h3>
											<p>Founder at Commmunity Folks</p>
										</div>
									</div>
									<div class="testimonial_item--bottom">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
											unknown printer took a galley of type and scrambled it to make a type specimen book.
											Lorem Ipsum has been the industry's</p>
									</div>
								</div>


								<div class="testimonial_item">
									<div class="testimonial_item--head">
										<div class="head--img">
											<img src="../images/boy-img1.png" alt="">
										</div>
										<div class="head--title">
											<h3 class="ser_item-h">Bernard Nguyen</h3>
											<p>Founder at Commmunity Folks</p>
										</div>
									</div>
									<div class="testimonial_item--bottom">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
											unknown printer took a galley of type and scrambled it to make a type specimen book.
											Lorem Ipsum has been the industry's</p>
									</div>
								</div>

							</div>
						</div>
						
												<div class="carousel-item">
							<div class="testimonial_main--items">

								<div class="testimonial_item">
									<div class="testimonial_item--head">
										<div class="head--img">
											<img src="../images/boy-img1.png" alt="">
										</div>
										<div class="head--title">
											<h3 class="ser_item-h">Workshops & Meetups</h3>
											<p>Founder at Commmunity Folks</p>
										</div>
									</div>
									<div class="testimonial_item--bottom">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
											unknown printer took a galley of type and scrambled it to make a type specimen book.
											Lorem Ipsum has been the industry's</p>
									</div>
								</div>

								<div class="testimonial_item">
									<div class="testimonial_item--head">
										<div class="head--img">
											<img src="../images/boy-img1.png" alt="">
										</div>
										<div class="head--title">
											<h3 class="ser_item-h">Mitchell Cooper</h3>
											<p>Founder at Commmunity Folks</p>
										</div>
									</div>
									<div class="testimonial_item--bottom">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
											unknown printer took a galley of type and scrambled it to make a type specimen book.
											Lorem Ipsum has been the industry's</p>
									</div>
								</div>


								<div class="testimonial_item">
									<div class="testimonial_item--head">
										<div class="head--img">
											<img src="../images/boy-img1.png" alt="">
										</div>
										<div class="head--title">
											<h3 class="ser_item-h">Bernard Nguyen</h3>
											<p>Founder at Commmunity Folks</p>
										</div>
									</div>
									<div class="testimonial_item--bottom">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
											unknown printer took a galley of type and scrambled it to make a type specimen book.
											Lorem Ipsum has been the industry's</p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

                    <div class="bottom_bar">
                        <div class="bottom_bar--left">
                            <div class="page-btn">
                                <a href="">Join Our Community <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.08 23.88" class="svg-arow"><defs><style>.cls-1{fill:#fff; width: 2%}</style></defs><title>arrow</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M24.08,18.83V1.63A1.42,1.42,0,0,0,23.57.54,1.43,1.43,0,0,0,22.45,0H5.25a1.43,1.43,0,1,0,0,2.87H19L.42,21.43a1.43,1.43,0,0,0,2,2L21.21,4.69V18.83a1.43,1.43,0,1,0,2.87,0Z"/></g></g></svg></a>
                            </div>
                        </div>
                        <div class="bottom_bar--right">
                            <!-- <img src="../images/left.svg" alt="" id="gotoPre2" class="left_move" >
                            <img src="../images/right.svg" alt="" id="gotoNext2" class="right_move" > -->
                            <div class="left left_move" id="gotoPre2">
                                <img src="../images/left_svg_arro.svg" alt="">
                            </div>
                            <div class="right right_move" id="gotoNext2">
                                <img src="../images/right_svg_arro.svg" alt="">
                            </div> 
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Client -->
        <section class="client">
            <div class="container">
                <div class="client_head">
                    <p>OUR CLIENTS</p>
                </div>

                <div class="client_gallery">
                    <div class="client_gallery--left">
                        <!-- <img src="../images/left.svg" id="gotoPre3" alt=""> -->
                        <div class="left left_move" id="gotoPre3">
                                <img src="../images/left_svg_arro.svg" alt="">
                        </div>
                    </div>
				<!-- <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" data-interval='false'> -->
					<!-- <div class="carousel-inner "> -->
						<!-- <div class="carousel-item active">	 -->
                        <div class="client_gallery--mid">
                            <div class="gallery-item"></div>
                            <div class="gallery-item"></div>
                            <div class="gallery-item"></div>
                            <div class="gallery-item"></div>
                            <div class="gallery-item"></div>
                        </div>
						<!-- </div> -->
						<!-- <div class="carousel-item ">	 -->
							<!-- <div class="client_gallery--mid">
								<div class="gallery-item"></div>
								<div class="gallery-item"></div>
								<div class="gallery-item"></div>
								<div class="gallery-item"></div>
								<div class="gallery-item"></div>
							</div> -->
						<!-- </div> -->
					<!-- </div>	 -->
				<!-- </div>	 -->
						
                    <div class="client_gallery--right">
                        <!-- <img src="../images/right.svg" id="gotoNext3" alt=""> -->
                        <div class="right right_move" id="gotoNext3">
                                <img src="../images/right_svg_arro.svg" alt="">
                        </div> 
                    </div>
                </div>

            </div>
        </section>

        <!-- End Client -->
    </main>


    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer_main">
                <div class="footer_main--head">
                    <div class="footer_main--head-sec f-sec-1">
                        <div class="head">
                            <div class="head_logo">
                                <img src="../details/logo.png" alt="" class="logo">
                            </div>
                            <div class="head_icons">
                                <a href=""><img src="../images/facebook.png" alt="" class="s-icon"></a>
                                <a href=""><img src="../images/instagram.png" alt="" class="s-icon"></a>
                                <a href=""><img src="../images/twitter.png" alt="" class="s-icon"></a>
                                <a href=""><img src="../images/linkedin.png" alt="" class="s-icon"></a>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p>+ 91 9986 440124</p>
                            <p>contactus@growtfolks.com</p>
                        </div>

                    </div>
                    <div class="footer_main--head-sec f-sec-2">
                        <div class="head">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li><a href="">Services</a></li>
                                <li><a href="">Events</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Let’s Collab</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer_main--head-sec f-sec-1">
                        <div class="head">
                            <h3>Newsletter</h3>
                        </div>
                        <div class="bottom">
                            <div class="bottom">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <div class="newsletter-box">
								<form method="POST" action="newsletter_to_excel.php" >
                                    <input type="text" name="mail" class="newsletter-inp" placeholder="jhoneDoe@gmail.com">
                                    <button type="submit"  class="newsletter-btn">Get NewsLetter</button>
								</form>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_main--bottom">
                    <div class="footer_main--bottom-design">
                        <p>Design By eniacoder</p>
                    </div>
                    <div class="footer_main--bottom-design">
                          <a href="">Terms and Condition</a>
                            <span>|</span>
                            <a href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    <script src="../js/app.js"></script>
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
            $(document).ready(function(){
            $("#blog").click(function(){
                $("#blog-view").show(800);
                $("#vlog-view").hide(800);
        });
            });
            $("#vlog").click(function(){
                $("#blog-view").hide(800);
                $("#vlog-view").show(800);
                $( ".resources_post" ).first().show( "fast", function showNext() {
            $( this ).next( ".resources_post" ).show( "fast", showNext );
            });
            });
        </script>     


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>