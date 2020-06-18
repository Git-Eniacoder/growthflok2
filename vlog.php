<?php error_reporting(E_ERROR | E_PARSE);?>
<?php
    $con = mysqli_connect("13.233.17.47","growthfolks","@Navneet1","growthfolks");
    $sql = "select * from growthfolks ORDER BY id DESC";
    $result = mysqli_query($con,$sql);
    $data = mysqli_fetch_all($result);
    // echo "<pre>";
    // print_r($parsed_json['vlog']);
    // die;
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
    <link
        href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&family=Lato:wght@300;400&display=swap"
        rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh3PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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

        <section class="container my-5">
            <div class="d-flex w-100 flex-wrap justify-content-start align-item-start">
            <?php for($i=0;$i<count($data);$i++){?>
                <div class="card m-3 w-24 border-0 card-blog" >
                       <a href="https://www.youtube.com/watch?v=<?php echo $data[$i][1] ?>"><img class="mb-3" src="<?php echo $data[$i][2] ?>" alt="Card image cap"></a>
                        <div class="card-body p-0">
                        <!-- <a href="" class="tags_links mb-4">Sex education</a> -->
                       <a href="https://www.youtube.com/watch?v=<?php echo $data[$i][1] ?>" class="text-dark"><h3 class="card-title mt-3"><?php echo $data[$i][4] ?></h3></a> 
                         <p class="card-text date-vlog"><?php echo $data[$i][3] ?></p>
                        
                       </div>   
                </div> 
            <?php } ?>
                  
           </div>
            
        </section>

        <!-- Pagination -->
        <!-- <section class="pagination">
            <div class="container">
                <div class="pagination_main">
                    <div class="pagination_main--left">
                         <div class="left left_move" id="gotoPre1_1">
                                <img src="./icons/left-arr.svg" alt="">
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
                                <img src="./icons/right-arr.svg" alt="">
                        </div> 
                    </div>
                </div>
            </div>
        </section> -->
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