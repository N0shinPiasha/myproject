<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Event Magnet </title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php require('inc/links.php');?>
	<style> 
        .availability-form{
            margin-top: -50px;
            z-index: 3;
            position: relative;
        }
        @media screen and( ,ax-width:575px){
            .availability-form{
            margin-top: 25px;
            padding:0 35px;

           }
        }

	</style>
</head>

<body>
	<?php require('inc/header.php'); ?>
    <!-- carousel -->
    <div class="container-fluid px-lg-4 mt-4">
		<div class="swiper swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="image/carousel/pic1.jpg"class="w-100 d-block"/>
				</div>
				<div class="swiper-slide">
					<img src="image/carousel/pic.jpeg"class="w-90 d-block"/>
				</div>
				<div class="swiper-slide">
					<img src="image/carousel/th.jpg"class="w-80 d-block" />
				</div>
			</div> 

		</div>
	</div>
    <!-- check availbility form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-l2 bg-white shadow p-3 rounded">
                <h5 class='mb-4'>Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label"style='font-weight:500;'>Check in</label>
							<input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label"style='font-weight:500;'>Check out</label>
							<input type="date" class="form-control shadow-none">
                        </div>
                        <!-- <div class="col-lg-2 mb-3">
                            <label class="form-label"style='font-weight:500;'>Adult</label> -->
                            <!-- <select class="form-selectshadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select> -
                        </div> -->
                        <!-- <div class="col-lg-2 mb-3">
                            <label class="form-label"style='font-weight:500;'>CHILDREN</label>
                            <select class="form-selectshadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select> -->

                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type='submit'class='btn text-white shadow-none custom-bg'>SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- rooms"col-lg-4 col-md-6 my-3" egula holo jegula pashapashi venues  -->
    <!-- venuessssssssss -->
    <h2 class='mt-5 pt-4 mb-4 text-center  fw-bold h-font  font-style: italic'>OUR VENUES</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
             <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                <img src="image/carousel/pic.jpeg" class="card-img-top" >
                <div class="card-body">
                    <h5 >luxury venue</h5>
                    <h6 class='mb-4'>BDT 60k per day</h6>
                    <div class="features mb-4">
                        <h6 class mb-1>Features</h6>
                        <span class="badge bg-light text-dark text-wrap lh-base">loc:DHANMONDI</span>
                        <span class="badge bg-light text-dark text-wrap lh-base"> SIZE:300 SQFT</span>
                        <span class="badge bg-light text-dark text-wrap lh-base">Standard:LUXURY</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class mb-1>Rating</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">BOOK NOW</a>
                    <a href="about.php" class="btn btn-sm btn-outline-dark  shadow-none">More details</a>
                    </div>
                    <p class="card-text"></p>
                </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
             <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                <img src="image/carousel/pic.jpeg" class="card-img-top" >
                <div class="card-body">
                    <h5 >luxury venue</h5>
                    <h6 class='mb-4'>BDT 60k per day</h6>
                    <div class="features mb-4">
                        <h6 class mb-1>Features</h6>
                        <span class="badge bg-light text-dark text-wrap lh-base">loc:DHANMONDI</span>
                        <span class="badge bg-light text-dark text-wrap lh-base"> SIZE:300 SQFT</span>
                        <span class="badge bg-light text-dark text-wrap lh-base">Standard:LUXURY</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class mb-1>Rating</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">BOOK NOW</a>
                    <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More details</a>
                    </div>
                    <p class="card-text"></p>
                </div>
             </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
             <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                <img src="image/carousel/pic.jpeg" class="card-img-top" >
                <div class="card-body">
                    <h5 >luxury venue</h5>
                    <h6 class='mb-4'>BDT 60k per day</h6>
                    <div class="features mb-4">
                        <h6 class mb-1>Features</h6>
                        <span class="badge bg-light text-dark text-wrap lh-base">loc:DHANMONDI</span>
                        <span class="badge bg-light text-dark text-wrap lh-base"> SIZE:300 SQFT</span>
                        <span class="badge bg-light text-dark text-wrap lh-base">Standard:LUXURY</span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class mb-1>Rating</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">BOOK NOW</a>
                    <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More details</a>
                    </div>
                    <p class="card-text"></p>
                </div>
             </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#"class='btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none'>More Venues>>></a>
            </div>
        </div>
    </div>
     <!-- FFFFFFOOOOOOOOOOOOOOOOOOOOOOODDDDDDDDDDDDDDDDDDDDDDDDDDDD -->
     <!-- and more facilities -->
    <h2 class='mt-5 pt-4 mb-4 text-center  fw-bold h-font  font-style: Pacifico'>OUR FOOD</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-centre bg-white rounded shadow py-4 my-3">
                <img src="image/food/dinners.jpg" width='80px'>
                <h5 class='mt-3'>FOOD</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-centre bg-white rounded shadow py-4 my-3">
                <img src="image/food/dinners.jpg" width='80px'>
                <h5 class='mt-3'>FOOD</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-centre bg-white rounded shadow py-4 my-3">
                <img src="image/food/dinners.jpg" width='80px'>
                <h5 class='mt-3'>FOOD</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-centre bg-white rounded shadow py-4 my-3">
                <img src="image/food/dinners.jpg" width='80px'>
                <h5 class='mt-3'>FOOD</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Food items</a>
              <!-- <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">Other Services</a> -->

            </div>
          
            <br><br><br>
            <br><br><br>
            <a href="facilities.php" class="btn btn-lg btn-secondary  btn-outline-dark shadow-none">Other Services</a>

        </div>
    </div>


    <!-- TESTIMONILSssssssssssssssssssssssssssssssssssssssssss -->



    <h2 class='mt-5 pt-4 mb-4 text-center  fw-bold h-font  font-style: Pacifico'>TESTIMONIALS</h2>
    <div class="container">
        <!-- er por swipwer js theke copy -->
    <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
     <!-- 0user -->
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="image/carousel/th.jpg" width='80px'>
            <h6 class='m-o ms-2'>random user1</h6>
        </div>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident nobis distinctio amet fuga quidem eligendi voluptate sunt est maxime numquam a ab quod, sapiente perspiciatis facilis id quam ex unde.
        </p>
        <div class="ratings">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            
        </div>

      </div>
      <!-- 1user -->
      <div class="swiper-slide bg-white ">
        <div class="profile d-flex align-items-center mb-3 ">
            <img src="image/carousel/th.jpg" width='80px'>
            <h6 class='m-o ms-2'>random user1</h6>
        </div>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident nobis distinctio amet fuga quidem eligendi voluptate sunt est maxime numquam a ab quod, sapiente perspiciatis facilis id quam ex unde.
        </p>
        <div class="ratings">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
        </div>
      </div>

      <!-- 2 -->
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="image/carousel/th.jpg" width='80px'>
            <h6 class='m-o ms-2'>random user1</h6>
        </div>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident nobis distinctio amet fuga quidem eligendi voluptate sunt est maxime numquam a ab quod, sapiente perspiciatis facilis id quam ex unde.
        </p>
        <div class="ratings">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            
        </div>

      </div>
      <!-- 3user -->
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3">
            <img src="image/carousel/th.jpg" width='80px'>
            <h6 class='m-o ms-2'>random user1</h6>
        </div>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident nobis distinctio amet fuga quidem eligendi voluptate sunt est maxime numquam a ab quod, sapiente perspiciatis facilis id quam ex unde.
        </p>
        <div class="ratings">
        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            
        </div>

      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
    </div>
<!-- REACH US -->


    
<br><br><br>
<br><br><br>
<br><br><br>
<?php require('inc/footer.php'); ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".swiper-container", {
			spaceBetween: 30,
			effect: "fade",
			loop: true
			
		
		})

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: '3',
        loop:true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      brealpoints:{
        320:{
            slidesPerView:'1',
        },
        640:{
            slidesPerView:1
        },
        768:{
            slidesPerView:2
        }
      }
    });
	</script>
</body>

</html>