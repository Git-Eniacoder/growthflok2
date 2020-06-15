<?php

$json_string = file_get_contents("https://www.googleapis.com/youtube/v3/search?key=AIzaSyBDMaJx0iqfE7dub6OZItotJpvG6jfj3G4&channelId=UC9vW0PibNosIhW4nVDfq9OA&part=snippet,id&order=date&maxResults=20");
    $parsed_json['vlog'] = json_decode($json_string);

    $con = mysqli_connect("13.233.17.47","growthfolks","@Navneet1","growthfolks");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }


$id = $parsed_json['vlog']->items[1]->id->videoId;
    $sql = "Select id from growthfolks where video_url='$id'";
    $result = $con->query($sql);



for($i=0; $i<count($parsed_json['vlog']->items); $i++)
{
    $id = $parsed_json['vlog']->items[$i]->id->videoId;

    $sql = "Select id from growthfolks where video_url='$id'";
    $result = $con->query($sql);
    if($result->num_rows <= 0){
        $video = $parsed_json['vlog']->items[$i]->id->videoId;
        
        $title = $parsed_json['vlog']->items[$i]->snippet->title;
        $date = $parsed_json['vlog']->items[$i]->snippet->publishTime;
        $thumb = $parsed_json['vlog']->items[$i]->snippet->thumbnails->medium->url;
        $push = "insert into growthfolks (video_url,thumb,date,title) values('$video','$thumb','$date','$title')";
        if ($con->query($push) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $con->error;
          }
    }
}
?>