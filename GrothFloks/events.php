<?php
$json_string = file_get_contents("https://graph.facebook.com/v7.0/1024689994349720/events/?fields=category,is_online,start_time,end_time,place,type,cover,maybe_count,name&access_token=EAADrR9GcnwIBACajKzZALd2vsv5MvEnLQ7lxFVeZCrIOlHT8AuUBt3vPDAroOnv4zSZAqYBYnVXtEAPZBXmnuTU9hDmgKJgCZBaJP4wo1n4znnZAUzAraRw7bAZAWb9ZBYCPLy64wcZBtD7lrojIemBTUYlC8JdZCCZBk79K3CT18NgE0CYJWhjneNR");
$parsed_json = json_decode($json_string);
//echo "Total Posts :".count($parsed_json->data);
$months=Array('01'=>'January',
			  '02'=>'February',
			  '03'=>'March',
			  '04'=>'April',
			  '05'=>'May',
			  '06'=>'June',
			  '07'=>'July',
			  '08'=>'August',
			  '09'=>'September',
			  '10'=>'October',
			  '11'=>'November',
			  '12'=>'December');
			  
function convert_seconds($seconds) 
{
	$dt1 = new DateTime("@0");
	$dt2 = new DateTime("@$seconds");
	//return $dt1->diff($dt2)->format('%a days, %h hours, %i minutes and %s seconds');
	return $dt1->diff($dt2)->format(' %h H: %i M');
}
set_error_handler(function ($severity, $message, $file, $line) {
    return "Online";
});
/*
for($i=0; $i<count($parsed_json->data); $i++){
	echo "<br><br><h1>Post ".$i."</h1><br>";
	echo "Description: ".$parsed_json->data[$i]->description."<br>";
	echo "Start time: ".$parsed_json->data[$i]->start_time."<br>";
	echo "End time: ".$parsed_json->data[$i]->end_time."<br>";
	echo "time: ".explode("T",$parsed_json->data[$i]->start_time)[1]."<br>";
	echo "date: ".explode("T",(explode("-",$parsed_json->data[$i]->start_time)[2]))[0]."<br>";
	echo "month: ".$months[explode("-",$parsed_json->data[$i]->start_time)[1]]."<br>";
	echo "year: ".explode("-",$parsed_json->data[$i]->start_time)[0]."<br>";
	echo "day: ".date('l',strtotime($parsed_json->data[$i]->end_time))."<br>";
	echo "duration: ".convert_seconds(strtotime($parsed_json->data[$i]->end_time)-strtotime($parsed_json->data[$i]->start_time))."<br>";
    echo "name: ".$parsed_json->data[$i]->name."<br>";
    echo "Category: ".$parsed_json->data[$i]->category."<br>";
    echo "Online: ".$parsed_json->data[$i]->is_online."<br>";
    echo "City: ".$parsed_json->data[$i]->place->location->city."<br>";
    echo "Image: ".$parsed_json->data[$i]->cover->source."<br>";
    echo "id: ".$parsed_json->data[$i]->id."<br>";
}
*/

?>
<?php require('./common/header.php') ?>



    <!-- Main -->
    <main>

        <section class="herobar">
            <div class="herobar_main">
                <div class="container">
                    <h1>Events</h1>
                </div>
            </div>
        </section>

        <section class="blog_post">
            <div class="container">
                <div class="blog_post--toggel">
                    <div class="blog_post--toggel-btn">
                        <span><a href="">All</a></span>
                    </div>
                    <div class="blog_post--toggel-btn">
                        <span><a href="">Upcomming</a></span>
                    </div>
                    <div class="blog_post--toggel-btn">
                        <span><a href="">Past</a></span>
                    </div>
                </div>
                
                <!-- Events -->
			<?php
			for($i=0; $i<count($parsed_json->data); $i++){
               try{
                $city=$parsed_json->data[$i]->place->location->city;
                }
               catch(customException $e){
                 $city="online";
               }
               if($parsed_json->data[$i]->is_online)
               {
                   $online="Online";
               }
               else{
                   $online="Offline";
               }

             echo '<div class="blog_post--events">
		            <div class="blog_post--events-item">
                        <div class="item-img-box">
                            <img height="240" src="'.$parsed_json->data[$i]->cover->source.'" alt="" class="item-img">
                        </div>
                        <div class="item-content">
                            <div class="item-content-h2">
                                <h2>'.$parsed_json->data[$i]->name.'</h2>
                            </div>
                            <div class="item-content-data">
                                <div class="data-set">
                                    <span class="data-head">Date & day</span>
                                    <p>'.explode("T",(explode("-",$parsed_json->data[$i]->start_time)[2]))[0].' '.$months[explode("-",$parsed_json->data[$i]->start_time)[1]].' '.date('l',strtotime($parsed_json->data[$i]->end_time)).'</p>
                                </div>
                                <div class="data-set">
                                    <span class="data-head">Time & Duration</span>
                                    <p>'.explode("+",explode("T",$parsed_json->data[$i]->start_time)[1])[0].','.convert_seconds(strtotime($parsed_json->data[$i]->end_time)-strtotime($parsed_json->data[$i]->start_time)).'</p>
                                </div>
                                <div class="data-set">
                                    <span class="data-head">Location</span>
                                    <p>'.$city.'</p>
                                </div>
                                <div class="data-set">
                                    <span class="data-head">Event Type</span>
                                    <p>'.$parsed_json->data[$i]->category.'</p>
                                </div>
                                <div class="data-set">
                                    <span class="data-head">Medium</span>
                                    <p>'.$online.'</p>
                                </div>
                                <div class="data-set">
                                    <span class="data-head">registration</span>
                                    <p>4000 Rs.</p>
                                </div>
                            </div>
                            <div class="item-content-btn">
                              <a href="https://facebook.com/'.$parsed_json->data[$i]->id.'">  <button class="btn">Book Now</button></a   >
                            </div>

                        </div>
                    </div>

                </div>';
			}
			?>
                <!-- end Event sec -->
                <!-- Events -->

        </section>

             <!-- Pagination -->
             <section class="pagination">
            <div class="container">
                <div class="pagination_main">
                    <div class="pagination_main--left">
                        <img src="../images/left.svg" alt="">
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
                        <img src="../images/right.svg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pagination -->





    </main>


    <!-- Footer Section -->
    <?php require('./common/footer.php') ?>

    <script src="../js/app.js"></script>
</body>

</html>