<?php
  include('./partials/header.php');
  ?>







  <section class="container-fluid p-0">

    <div id="carouselExampleControls" class="carousel slide"
      data-ride="carousel">
      <div class="carousel-inner slider">
        <div class="carousel-item active">
          <img src="./images/3615.jpg" class="d-block w-100 slider" alt="img">
        </div>
        <div class="carousel-item">
          <img src="./images/slider1.jpg" class="d-block w-100 slider"
            alt="img">
        </div>
        <div class="carousel-item">
          <img src="./images/slider2.jpg" class="d-block w-100 slider"
            alt="img">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls"
        role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls"
        role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </section>


  <!-- cards started -->

  <div class="container-fluid p-0">
    <div class="card pb-0 pt-4 card-box">
      <div class="row no-gutters">
        <div class="col-md-4 text-center my-5">
          <img src="./images/pandit-img.jpg" class="rounded-circle" alt="img">
          <h2 class="text-center mt-3 mr-2 font-weight-bolder">Acharya Manav
            Bhatt</h2>
          <img src="./images/paytm-logo.png" class="paytm-logo" alt="img">
          <h5 class="text-center mt-2 mr-2 font-weight-bold"> <i class="fas
              fa-phone-square-alt"></i> &nbsp;+91 9320001212</h5>
        </div>



        <div class="col-md-8 mb-3">
          <div class="card-body">
            <h1 class="card-title mt-4 card-hover-text">What we do it ?</h1>

            <p class="card-text card-hover-text">This is a wider card with
              supporting text Lorem ipsum dolor sit amet consectetur adipisicing
              elit. Ipsam at possimus officiis cupiditate quod, corrupti
              laboriosam placeat rerum accusamus. Earum quam doloribus nostrum
              provident laboriosam odio! Ut, blanditiis odit. Quam vitae unde
              inventore aperiam.</p>

            <h2 class="card-title card-hover-text">Matchmaking</h2>
            <p class="card-text">This is a wider card with supporting text Lorem
              ipsum dolor sit amet consectetur adipisicing elit. Ipsam at
              possimus officiis cupiditate quod, corrupti laboriosam placeat
              rerum accusamus. Earum quam doloribus nostrum provident laboriosam
              odio! Ut, blanditiis odit. Quam vitae unde inventore aperiam.</p>
            <h2 class="card-title card-hover-text">Hororrscope & Prediction</h2>
            <p class="card-text">This is a wider card with supporting text Lorem
              ipsum dolor sit amet consectetur adipisicing elit. Ipsam at
              possimus officiis cupiditate quod, corrupti laboriosam placeat
              rerum accusamus. Earum quam doloribus nostrum provident laboriosam
              odio! Ut, blanditiis odit. Quam vitae unde inventore aperiam.</p>
            <h2 class="card-title card-hover-text">Hororrscope & Prediction</h2>
            <p class="card-text">This is a wider card with supporting text Lorem
              ipsum dolor sit amet consectetur adipisicing elit. Ipsam at
              possimus officiis cupiditate quod, corrupti laboriosam placeat
              rerum accusamus. Earum quam doloribus nostrum provident laboriosam
              odio! Ut, blanditiis odit. Quam vitae unde inventore aperiam.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid p-0">
      <img src="./images/slider2.jpg" class="w-100" alt="">
    </div>
  </div>


  <div class="container mb-3 mt-5">

    <div class="text-center">
      <h1 class="font-weight-bolder">
        All Pooja's
      </h1>

    </div>
    <div class="text-center">
      <div class="card-line mt-3"></div>
    </div>


    <div class="row justify-content-center">


      <?php

        $all_images= array("img1.jpg"=>"Contrary to popular belief, Lorem Ipsum
        is not simply random text. It has roots in a piece of classical Latin
        literature from 45 BC, making it over 2000 years old. Richard
        McClintock, a Latin professor at Hampden-Sydney College in Virginia,
        looked up one of the more obscure Latin words",
        "img2.jpg"=>"Contrary to popular belief, Lorem Ipsum is not simply
        random text. It has roots in a piece of classical Latin literature from
        45 BC, making it over 2000 years old. Richard McClintock, a Latin
        professor at Hampden-Sydney College in Virginia, looked up one of the
        more obscure Latin words, consectetur,","img3.jpg"=>"Contrary to popular
        belief, Lorem Ipsum is not simply random text. It has roots in a piece
        of classical Latin literature from 45 BC, making it over 2000 years old.
        Richard McClintock, a Latin professor at Hampden-Sydney College in
        Virginia, looked up one of the more obscure Latin words, consectetur,",
        "img4.jpg"=>"Contrary to popular belief, Lorem Ipsum is not simply
        random text. It has roots in a piece of classical Latin literature from
        45 BC, making it over 2000 years old. Richard McClintock, a Latin
        professor at Hampden-Sydney College in Virginia, looked up one of the
        more obscure Latin words, consectetur,",
        "img5.jpg"=>"Contrary to popular belief, Lorem Ipsum is not simply
        random text. It has roots in a piece of classical Latin literature from
        45 BC, making it over 2000 years old. Richard McClintock, a Latin
        professor at Hampden-Sydney College in Virginia, looked up one of the
        more obscure Latin words, consectetur,",
        "img6.jpg"=>"Contrary to popular belief, Lorem Ipsum is not simply
        random text. It has roots in a piece of classical Latin literature from
        45 BC, making it over 2000 years old. Richard McClintock, a Latin
        professor at Hampden-Sydney College in Virginia, looked up one of the
        more obscure Latin words, consectetur,",
        "img7.jpg"=>"Contrary to popular belief, Lorem Ipsum is not simply
        random text. It has roots in a piece of classical Latin literature from
        45 BC, making it over 2000 years old. Richard McClintock, a Latin
        professor at Hampden-Sydney College in Virginia, looked up one of the
        more obscure Latin words, consectetur,",
        "img8.jpg"=>"Contrary to popular belief, Lorem Ipsum is not simply
        random text. It has roots in a piece of classical Latin literature from
        45 BC, making it over 2000 years old. Richard McClintock, a Latin
        professor at Hampden-Sydney College in Virginia, looked up one of the
        more obscure Latin words, consectetur,",
        "img9.jpg"=>"Contrary to popular belief, Lorem Ipsum is not simply
        random text. It has roots in a piece of classical Latin literature from
        45 BC, making it over 2000 years old. Richard McClintock, a Latin
        professor at Hampden-Sydney College in Virginia, looked up one of the
        more obscure Latin words, consectetur,",
        );

        $imagecount=count($all_images);

        foreach($all_images as $x=>$x_value){

        echo"

        <div class='col-lg-3 col-md-8 col-sm-12 m-4'>

          <div class='card card-border' style='width: 18rem;'>
            <img src='"
              .'./all_puja/'.$x." '
              height='200' width='100%' class='p-3'>
            <div class='card-body'>
              <p class='card-text'>.$x_value.</p>
            </div>
          </div>

        </div>






        ";

        }



        ?>



      </div>
      <div class="text-center">
        <div class="card-line mt-3"></div>
      </div>





    </div>














    <!-- banner-section-ends -->

    <?php
  include('./partials/footer.php');
  ?>

  </body>

</html>