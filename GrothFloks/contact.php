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
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <title>GrothFloks services</title>
   </head>
   <body>
      <?php require('./common/header.php') ?>
      <!-- Main -->
      <main>
         <section class="herobar">
            <div class="herobar_main">
               <div class="container">
                  <h1>Get In Touch</h1>
               </div>
            </div>
            <div class="contact">
               <div class="container">
                  <div class="contact_main">
                     <div class="contact_main--content">
                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" data-interval='false'>
                           <div class="carousel-inner ">
                              <div class="carousel-item active">
                                 <div>
                                    <div class="base_heading">
                                       <!-- <p class="base_heading--title">ABOUT US</p> -->
                                       <h2 class="base_heading--h2">India's largest Community of Growth Enthusiast</h2>
                                       <div class="base_heading--underline"></div>
                                       <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                    <div class="list" style="margin-bottom:5px;">
                                       <div class="list--item">
                                          <div class="list--item-dashed"></div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, </p>
                                       </div>
                                       <div class="list--item">
                                          <div class="list--item-dashed"></div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, </p>
                                       </div>
                                       <div class="list--item">
                                          <div class="list--item-dashed"></div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, </p>
                                       </div>
                                       <hr>
                                    </div>
                                 </div>
                              </div>
                              <div class="carousel-item ">
                                 <div>
                                    <div class="base_heading">
                                       <!-- <p class="base_heading--title">ABOUT US</p> -->
                                       <h2 class="base_heading--h2">India's largest Community of Growth Enthusiast</h2>
                                       <div class="base_heading--underline"></div>
                                       <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                    <div class="list" style="margin-bottom:5px;">
                                       <div class="list--item">
                                          <div class="list--item-dashed"></div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, </p>
                                       </div>
                                       <div class="list--item">
                                          <div class="list--item-dashed"></div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, </p>
                                       </div>
                                       <div class="list--item">
                                          <div class="list--item-dashed"></div>
                                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, </p>
                                       </div>
                                       <hr>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bottom_bar--right">
                           <div class="left left_move" id="gotoPre">
                              <img src="../icons/left-arr.svg" alt="">
                           </div>
                           <div class="right right_move"  id="gotoNext">
                              <img src="../icons/right-arr.svg" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="contact_main--form">
                        <form action="contact_to_excel.php" method="post">
                           <div class="tag">
                              <label for="">Name</label>
                              <input name="name" type="text" required>
                           </div>
                           <div class="email">
                              <div class="tag tag-1">
                                 <label for="">Email Address</label>
                                 <input name="email" type="email" required>
                              </div>
                              <div class="tag tag-2">
                                 <label for="">Mobile</label>
                                 <input name="mobile" type="text" required>
                              </div>
                           </div>
                           <div class="tag">
                              <label for="">Subject</label>
                              <select name="subject" id="">
                                 <option value="demo_subject"></option>
                              </select>
                           </div>
                           <div class="tag">
                              <label for="">Description</label>
                              <textarea name="description" id="" cols="30" rows="4" required></textarea>
                           </div>
                           <div class="tag">
                              <button class="btn">Book Now</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
      </main>
      <script>
         $('.nav-item').removeClass("nav-active");
         
      </script>
      <script>
         $("#gotoNext").click(() => $("#carouselExampleIndicators3").carousel("next"));
         $("#gotoPre").click(() => $("#carouselExampleIndicators3").carousel("prev"));
      </script>
      <?php require('./common/footer.php') ?>
      
   </body>
</html>