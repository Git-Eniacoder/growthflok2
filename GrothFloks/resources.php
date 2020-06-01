<?php require('./common/header.php') ?>
    <!-- Main -->
    <main>
        
        <!-- Header Section -->
        <section class="herobar">
            <div class="herobar_main">
                <div class="container">
                    <h1>Resources</h1>
                </div>
            </div>
        </section>

        <section class="blog_post">
            <div class="container">
                <div class="blog_post--toggel">
                    <div id="blog" class="blog_post--toggel-btn activeBtn">
                        <span><a>Blogs</a></span>
                    </div>
                    <div id="vlog" class="blog_post--toggel-btn">
                        <span><a>Vlogs</a></span>
                    </div>
                </div>


                <div id="blog-view" class="blog_post--items">
<?php
$json_string = file_get_contents("https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/growth-folks");
$parsed_json['blog'] = json_decode($json_string);
$json_string = file_get_contents("https://www.googleapis.com/youtube/v3/search?key=AIzaSyCE5GTdzhiouSn2ssUKplnLgIgDVlGedjY&channelId=UC4NoSzAHBhkKbfa6YPFyVNA&part=snippet,id&order=date&maxResults=20");
$parsed_json['vlog'] = json_decode($json_string);
// echo "<pre>";
// print_r($parsed_json['blog']);

?>
            <?php for($i=0; $i<count($parsed_json['blog']->items); $i++){ ?>
                   <a href="<?php echo $parsed_json['blog']->items[$i]->link ; ?>"> <div class="resources_post">
                        <img src="<?php echo $parsed_json['blog']->items[$i]->thumbnail; ?>" alt="" class="post_img">
                        <div class="tags">
                            <?php for($j=0; $j<count($parsed_json['blog']->items[$i]->categories); $j++){ ?>
                            <a href="" class="tags_links"><?php echo $parsed_json['blog']->items[$i]->categories[$j]; ?></a>
                            <?php } ?>
                        </div>
                        <h3><?php echo $parsed_json['blog']->items[$i]->title; ?></h3>
                        <p class="date"><?php echo $parsed_json['blog']->items[$i]->pubDate; ?> · <span> 3 min read</span></p>
                    </div>
                            </a>
            <?php }?>
                    
                </div>
                <div id="vlog-view" class="blog_post--items">

                <?php for($i=0; $i<count($parsed_json['blog']->items); $i++){ ?>
                 <div class="resources_post">
                 <iframe id="ytplayer" type="text/html" width="100%" height="100%"
                src="https://www.youtube.com/embed/<?php echo $parsed_json['vlog']->items[$i]->id->videoId ?>?autoplay=1"
                frameborder="0"></iframe>                    </div>
            <?php }?>
                </div>
            </div>
        </section>

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
                                    <input type="text" class="newsletter-inp" placeholder="jhoneDoe@gmail.com">
                                    <button  class="newsletter-btn">Get NewsLetter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_main--bottom">
                    <div class="footer_main--bottom-design">

                    </div>
                    <div class="footer_main--bottom-design">

                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="../js/app.js"></script>   
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
</body>
</html>