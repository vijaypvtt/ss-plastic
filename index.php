
<?php

$PageTitle="SS PLASTIC";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('header.php');

//body contents go here

?>
<style>
	/* Google Font */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

.about-section {
  background: linear-gradient(135deg, #ffffff, #f0f0f0);
  font-family: 'Poppins', sans-serif;
  padding: 40px;
  border-radius: 20px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.about-section:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
}

.section-title {
  font-size: 32px;
  font-weight: 600;
  color: #2c3e50;
  margin-bottom: 25px;
  position: relative;
}

.section-title::after {
  content: '';
  width: 50px;
  height: 4px;
  background-color: #007bff;
  position: absolute;
  left: 0;
  bottom: -8px;
  border-radius: 2px;
}

.about-section p {
  font-size: 16px;
  color: #333;
  line-height: 1.8;
  margin-bottom: 15px;
}

.btn-custom {
  background: #007bff;
  color: #fff;
  padding: 12px 24px;
  border: none;
  border-radius: 12px;
  font-weight: 500;
  transition: background 0.3s ease, transform 0.3s ease;
  font-family: 'Poppins', sans-serif;
}

.btn-custom:hover {
  background: #0056b3;
  transform: scale(1.05);
}




.product-card {
  position: relative;
  overflow: hidden;
  border-radius: 16px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  transition: transform 0.4s ease;
}

.product-card:hover {
  transform: translateY(-6px);
}

.product-card img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 16px;
}

.product-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 20px;
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
  transform: translateY(100%);
  transition: transform 0.4s ease;
}

.product-card:hover .product-overlay {
  transform: translateY(0%);
}

.product-overlay h4 {
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 600;
}

.product-overlay p {
  font-size: 14px;
  line-height: 1.5;
}

.product-overlay a {
  display: inline-block;
  margin-top: 10px;
  color: #ffd700;
  font-weight: 500;
  text-decoration: none;
}

.btn-custom {
  background-color: #007bff;
  color: #fff;
  padding: 12px 28px;
  border-radius: 8px;
  font-weight: 500;
  transition: background 0.3s ease;
}

.btn-custom:hover {
  background-color: #0056b3;
  color: #fff;
}




	</style>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>





<!-------------->
<div class="banner">
	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
			<li data-target="#carousel" data-slide-to="4"></li>
			<li data-target="#carousel" data-slide-to="5"></li>
			<li data-target="#carousel" data-slide-to="6"></li>
		</ol>
		<!-- Carousel items -->
		<div class="carousel-inner carousel-zoom">
			<div class="active item">
				<img class="img-responsive" src="images\banner\pic1.webp" alt="banner1">
			</div>
			<div class="item">
				<img class="img-responsive" src="images\banner\pic2.webp" alt="nammer 2">
			</div>
			<div class="item">
				<img class="img-responsive" src="images\banner\pic3.webp" alt="banner3">
			</div>
			<div class="item">
				<img class="img-responsive" src="images\banner\pic4.webp" alt="banner4">
			</div>
			<div class="item">
				<img class="img-responsive" src="images/banner\pic5.webp" alt="banner5">
			</div>

		</div>
		<!-- Carousel nav -->
	</div>
</div>
<!-------------->
<div class="container">
	<div class="row abt-row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading">
			<h1><span>SS Plastic </span</h1>

		</div>

		<!-- Add AOS data attributes for scroll animation -->
<div class="col-lg-6 col-md-6 col-sm-12 about-section" data-aos="fade-up" data-aos-duration="1000">
  <h2 class="section-title">About Us</h2>
  <p>
  SS Plastic is a leading FRP manufacturer in India, offering precision-engineered fiberglass tanks, scrubbers, and industrial FRP solutions built for durability and corrosion resistance. Serving chemical, pharma, and wastewater industries with reliable, custom-fabricated components.
  </p>
  <p>
    With extensive experience in working with materials like HDPE, PP, and PPFRP/PVC, we handle the entire fabrication process—from mold creation to the final assembly of custom equipment.
  </p>
  <a href="about.php" class="btn btn-custom mt-3">Read More</a>
</div>






		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		    <div class="abt-img">
   <!-- 			<img src="san.webp" class="img-responsive" alt="About"> -->
   <!-- 		</div>-->
			<!--<p class="tiktik">SANTOSH SAPKAL</p>-->
			<!--<p class="tuktuk">Sole Proprietor</p>-->

		</div>
	</div>
</div>
<!-------------->

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

<div class="hm-prod py-5" style="font-family: 'Poppins', sans-serif;">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-down">
      <h2 class="main-title"><span>ABOUT OUR PRODUCTS</span></h2>
    </div>

    <div class="row gy-4">
      <!-- Single Product Block -->
      <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="product-card">
          <img src="images/home/react.webp" alt="Pickling Acid Rec. Tank" class="img-fluid" />
          <div class="product-overlay">
            <h4>Pickling Acid Rec. Tank</h4>
            <p>Our FRP Tanks are widely used in industries like Chemicals and Steel.</p>
            <a href="frp-tank-manufacturers.php">Read More...</a>
          </div>
        </div>
      </div>

      <!-- Repeat for other products -->
      <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="product-card">
          <img src="images/home/pipe.webp" alt="Pipes & Fittings" class="img-fluid" />
          <div class="product-overlay">
            <h4>Pipes & Fittings</h4>
            <p>Designed to be user-friendly, using advanced resin and composite materials.</p>
            <a href="frp-tank-manufacturers.php">Read More...</a>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="product-card">
          <img src="images/home/duct.webp" alt="FRP / PP FRP Ductings" class="img-fluid" />
          <div class="product-overlay">
            <h4>FRP / PP FRP Ductings</h4>
            <p>Reliable manufacturer and exporter of FRP & GRP duct systems worldwide.</p>
            <a href="frp-duct-manufacturers.php">Read More...</a>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="product-card">
          <img src="images/home/scrubber.webp" alt="FRP Scrubbers & Stack" class="img-fluid" />
          <div class="product-overlay">
            <h4>FRP Scrubbers & Stack</h4>
            <p>Available to serve with full capability for FRP scrubber systems.</p>
            <a href="frp-scrubbers-manufacturers.php">Read More...</a>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="product-card">
          <img src="images/home/vessel.webp" alt="Industrial Vessels" class="img-fluid" />
          <div class="product-overlay">
            <h4>Industrial Vessels</h4>
            <p>Experts in FRP design, manufacturing, and supply for industrial vessels.</p>
            <a href="frp-industrial-vessels-manufacturers.php">Read More...</a>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="product-card">
          <img src="images/home/gutter.webp" alt="Motor Cover, FRP Gutter" class="img-fluid" />
          <div class="product-overlay">
            <h4>Motor Cover, FRP Gutter</h4>
            <p>Protective FRP motor covers and durable gutter systems for industry.</p>
            <a href="frp-blowers-manufacturers.php">Read More...</a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5" data-aos="fade-up">
      <a href="frp-tank-manufacturers.php" class="btn btn-custom">Read More Products</a>
    </div>
  </div>
</div>
</div>












<?php 
include_once('footer.php');
?>
</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script>
		$(document).ready(function(){
		$('.customer-logos').slick({
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			arrows: false,
			dots: false,
			pauseOnHover: false,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 4
				}
			}, {
				breakpoint: 520,
				settings: {
					slidesToShow: 2
				}
			}]
		});
	});
	</script>	
		