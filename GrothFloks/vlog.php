<?php error_reporting(E_ERROR | E_PARSE);?>
<?php
    $json_string = file_get_contents("https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/growth-folks");
    $parsed_json['blog'] = json_decode($json_string);
    $json_string = file_get_contents("https://www.googleapis.com/youtube/v3/search?key=AIzaSyASMCXnqPPfhnShDhr7zUDel9NAITa0HqA&channelId=UCAI1rofJTx9oH8GKJfPYSNA&part=snippet,id&order=date&maxResults=20");
    $parsed_json['vlog'] = json_decode($json_string);
    // echo "<pre>";
    // print_r($parsed_json['blog']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&family=Lato:wght@300;400&display=swap"
        rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>GrothFloks services</title>
</head>

<body>
<?php require('./common/header.php') ?>
    <!-- Main -->
    <main>
        
        <!-- Header Section -->
        <section class="herobar">
            <div class="herobar_main">
                <div class="container">
                    <h1>Vlogs</h1>
                </div>
            </div>
        </section>

        <section class="blog_post">
            <div class="container">
                <div class="blog_post--toggel">
                    <!-- <div id="blog" onclick="active_blog()" class="blog_post--toggel-btn res_blog_active">
                        <span><a>Blogs</a></span>
                    </div> -->
                    <!-- onclick="active_vlog()" -->
                    <div id="vlog" class="blog_post--toggel-btn">
                        <span><a>Vlogs</a></span>
                    </div>
                </div>


                <!-- <div id="blog-view" class="blog_post--items">
                    <?php for($i=0; $i<count($parsed_json['blog']->items); $i++){ ?>
                        <a href="<?php echo $parsed_json['blog']->items[$i]->link ; ?>"> 
                            <div class="resources_post">
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
                </div> -->
                <div id="vlog-view" class="blog_post--items">
                    <?php for($i=0; $i<count($parsed_json['vlog']->items)-1; $i++){ ?>
                            <div class="resources_post">
                            <a href="<?php echo "https://www.youtube.com/watch?v=".$parsed_json['vlog']->items[$i]->id->videoId; ?>">         
                                <img src="<?php echo "https://img.youtube.com/vi/".$parsed_json['vlog']->items[$i]->id->videoId."/hqdefault.jpg" ; ?>" alt="" class="post_img"></a>
                                <h3><?php echo $parsed_json['vlog']->items[$i]->snippet->title; ?></h3>
                                <p class="date"><?php echo $parsed_json['vlog']->items[$i]->snippet->publishTime; ?> · <span> 3 min read</span></p>
                            </div>
                        
                    <?php }?>
                </div>
            </div>
        </section>

        <!-- Pagination -->
        <section class="pagination">
            <div class="container">
                <div class="pagination_main">
                    <div class="pagination_main--left">
                         <div class="left left_move" id="gotoPre1_1">
                                <img src="../icons/left-arr.svg" alt="">
                        </div>
                    </div>
                    <div class="pagination_main--mid">

                        <div class="page_number">
                           <a href=""><span class="page_number-text">1</span></a> 
                        </div>
                        <div class="page_number">
                            <span class="page_number-text">2</span>
                        </div>
                        <div class="page_number">
                            <span class="page_number-text">3</span>
                        </div>
                        <div class="page_number">
                            <span class="page_number-text">4</span>
                        </div>
                            
                    </div>
                    <div class="pagination_main--right">
                        <div class="right right_move" id="gotoNext1_1">
                                <img src="../icons/right-arr.svg" alt="">
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pagination -->

    </main>
    <?php require('./common/footer.php') ?>
    </body>
</html>
    

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

<script>
    $('.nav-item').removeClass("nav-active");
    $('#resources').addClass("nav-active");
</script>

<script>
    $('.nav-item').removeClass("nav-active");
    $('#resources').addClass("nav-active");
    function active_blog(){
        $('#vlog').removeClass("res_blog_active");
        $('#blog').addClass("res_blog_active");   
    }
    function active_vlog(){
        $('#blog').removeClass("res_blog_active");
        $('#vlog').addClass("res_blog_active");   
    }
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>