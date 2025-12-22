
<style>
	.inner-bg{
   background-color:E5E5E5;

}
.img-fit {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 4px;
}

.card {
  border: none;
  box-shadow: 0 0 10px rgba(0,0,0,0.08);
  transition: transform 0.2s;
}

.card:hover {
  transform: scale(1.03);
}

</style>


<body>
	<?php

	$PageTitle="SS PLASTIC";
	
	function customPageHeader(){?>
	  <!--Arbitrary HTML Tags-->
	<?php }
	
	include_once('header.php');
	
	//body contents go here
	
	?>
	<!-------------->
	<div class="inner-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="inner-head">
						<h1>OUR MAJOR PRODUCTS</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-------------->
	<div class="inn-gallery">
		<div class="container">
			<div class="row prod-inn-gap">
				<div class="col-md-offset-6 col-sm-offset-6 col-md-6 col-sm-6">
					<form class="wrapper" method="post" action="gallery.php#.php">
						<input class="inputbox" type="text" name="search" id="search" placeholder="Interested in ">
						<input class="submit-btn" type="submit1" value="Search" name="searchbtn">
					</form>
				</div>
			</div>
			<div class="row g-4">
    <!-- Example Gallery Card -->
    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter pipes">
      <div class="card h-100">
        <a href="images/indutrial-vessels/PIC1.webp" rel="lightbox[pipes-fitting]">
          <img src="images/indutrial-vessels/PIC1.webp" class="card-img-top img-fit" alt="Gallery Image">
        </a>
      </div>
    </div>

    <!-- Repeat same structure for all images -->
    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter vessels">
      <div class="card h-100">
        <a href="images/indutrial-vessels/vessel.webp" rel="lightbox[ind-vessel]">
          <img src="images/indutrial-vessels/vessel.webp" class="card-img-top img-fit" alt="Gallery Image">
        </a>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter vessels">
      <div class="card h-100">
        <a href="images/product/storage-tank/STORAGE1.webp" rel="lightbox[storage-tank]">
          <img src="images/product/storage-tank/STORAGE1.webp" class="card-img-top img-fit" alt="Storage Tank 1">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter stroage">
      <div class="card h-100">
        <a href="images/product/storage-tank/STORAGE2.webp" rel="lightbox[storage-tank]">
          <img src="images/product/storage-tank/STORAGE2.webp" class="card-img-top img-fit" alt="Storage Tank 2">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter stroage">
      <div class="card h-100">
        <a href="images/product/storage-tank/STORAGE3.webp" rel="lightbox[storage-tank]">
          <img src="images/product/storage-tank/STORAGE3.webp" class="card-img-top img-fit" alt="Storage Tank 3">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter vessels">
      <div class="card h-100">
        <a href="images/indutrial-vessels/PIC1.webp" rel="lightbox[ind-vessel]">
          <img src="images/indutrial-vessels/PIC1.webp" class="card-img-top img-fit" alt="Industrial Vessel">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter ductings">
      <div class="card h-100">
        <a href="images/pipes/DUCT.webp" rel="lightbox[pipes-ducting]">
          <img src="images/pipes/DUCT.webp" class="card-img-top img-fit" alt="Duct">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter header">
      <div class="card h-100">
        <a href="images/product/header/frp1.webp" rel="lightbox[header]">
          <img src="images/product/header/frp1.webp" class="card-img-top img-fit" alt="Header">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter pipes">
      <div class="card h-100">
        <a href="images/product/frp-pipes-fitting/PIPE2.webp" rel="lightbox[pipes-fitting]">
          <img src="images/product/frp-pipes-fitting/PIPE2.webp" class="card-img-top img-fit" alt="Pipe 2">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter scrubber">
      <div class="card h-100">
        <a href="images/product/packed-column-scrubber/scrubber.webp" rel="lightbox[column]">
          <img src="images/product/packed-column-scrubber/scrubber.webp" class="card-img-top img-fit" alt="Scrubber">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter scrubber">
      <div class="card h-100">
        <a href="images/product/packed-column-scrubber/gas-scrubbers.webp" rel="lightbox[column]">
          <img src="images/product/packed-column-scrubber/gas-scrubbers.webp" class="card-img-top img-fit" alt="Gas Scrubber">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter pipes">
      <div class="card h-100">
        <a href="images/product/frp-pipes-fitting/PIPE4.webp" rel="lightbox[pipes-fitting]">
          <img src="images/product/frp-pipes-fitting/PIPE4.webp" class="card-img-top img-fit" alt="Pipe 4">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter stroage">
      <div class="card h-100">
        <a href="images/product/storage-tank/STORAGE7.webp" rel="lightbox[storage-tank]">
          <img src="images/product/storage-tank/STORAGE7.webp" class="card-img-top img-fit" alt="Storage Tank 7">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter stroage">
      <div class="card h-100">
        <a href="images/product/storage-tank/STORAGE6.webp" rel="lightbox[storage-tank]">
          <img src="images/product/storage-tank/STORAGE6.webp" class="card-img-top img-fit" alt="Storage Tank 6">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter ductings">
      <div class="card h-100">
        <a href="images/pipes/DUCT5.webp" rel="lightbox[pipes-ducting]">
          <img src="images/pipes/DUCT5.webp" class="card-img-top img-fit" alt="Duct 5">
        </a>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter ductings">
      <div class="card h-100">
        <a href="images/pipes/DUCT4.webp" rel="lightbox[pipes-ducting]">
          <img src="images/pipes/DUCT4.webp" class="card-img-top img-fit" alt="Duct 4">
        </a>
      </div>
    </div>


    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter pipes">
      <div class="card h-100">
        <a href="images/product/frp-pipes-fitting/PIPE5.webp" rel="lightbox[pipes-fitting]">
          <img src="images/product/frp-pipes-fitting/PIPE4.webp" class="card-img-top img-fit" alt="Pipe 5">
        </a>
      </div>
    </div>



    <div class="col-sm-6 col-md-4 col-lg-3 gallery_product filter ductings">
      <div class="card h-100">
        <a href="images/product/fan-stack/chimaney.webp" rel="lightbox[fan]">
          <img src="images/product/fan-stack/chimaney.webp" class="card-img-top img-fit" alt="Chimney">
        </a>
      </div>
    </div>


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
	
	</html>