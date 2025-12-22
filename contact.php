<style>
	.inn-contact {
  padding: 60px 0;
  background-color: #f4f6f9;
  font-family: 'Segoe UI', sans-serif;
}

.contact-head h4 {
  font-size: 26px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
  text-transform: uppercase;
  animation: fadeInDown 0.8s ease;
}

.contact-head p {
  font-size: 16px;
  color: #666;
  animation: fadeInUp 0.8s ease;
}

.contact-left input,
.contact-left textarea {
  width: 100%;
  padding: 12px 15px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  transition: all 0.3s ease;
  background: #fff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

.contact-left input:focus,
.contact-left textarea:focus {
  border-color: #007bff;
  box-shadow: 0 0 8px rgba(0,123,255,0.2);
  outline: none;
}

.contact-left button {
  background-color: #007bff;
  color: #fff;
  padding: 10px 25px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  transition: background-color 0.3s ease;
}

.contact-left button:hover {
  background-color: #0056b3;
}

.cont-right {
  background: #fff;
  padding: 25px;
  border-radius: 10px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.08);
  animation: fadeInRight 0.9s ease;
}

.cont-right h2 {
  margin-bottom: 20px;
  color: #333;
  font-size: 22px;
  font-weight: 600;
}

.info-block {
  display: flex;
  align-items: flex-start;
  margin-bottom: 20px;
  color: #555;
}

.info-block i {
  font-size: 20px;
  color: #007bff;
  margin-right: 12px;
  margin-top: 3px;
}

.info-block a {
  color: #007bff;
  text-decoration: none;
}

.info-block a:hover {
  text-decoration: underline;
}

.tall {
  border-top: 2px solid #ccc;
  margin: 40px 0;
}

.gst {
  color: #222;
  font-weight: bold;
  font-size: 20px;
}

/* Animations */
@keyframes fadeInDown {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInUp {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeInRight {
  from { opacity: 0; transform: translateX(40px); }
  to { opacity: 1; transform: translateX(0); }
}


.inner-bg{
   background-color:E5E5E5;

}


</style>




<body>

			<?php include_once('header.php');
			
			//body contents go here
			
			?>
<!-------------->
<div class="inner-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-head">
					<h1>CONTACT US</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-------------->
<div class="inn-contact">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-4">
        <div class="contact-head">
          <h4>We Are Very Pleased to Answer Your Query Through Mail</h4>
          <p>We are pleased to introduce ourselves, engaged in design, manufacture, and supply of various items made of FRP, PP FRP, HDPE, etc.</p>
        </div>
      </div>

      <div class="col-md-6">
        <p>Please properly fill the contact form for any kind of solution</p>
        <div class="contact-left">
          <form class="cbform" method="post" action="https://formspree.io/f/mrgndnpn" enctype="multipart/form-data" onsubmit="return validate()">
            <input type="text" placeholder="Enter Your Name" name="name">
            <input type="email" placeholder="Enter Your Email Address" name="email" required>
            <textarea placeholder="Message" name="message" required></textarea>
            <button type="submit" name="send">Submit</button>
          </form>
        </div>
      </div>

      <div class="col-md-6">
        <div class="cont-right">
          <h2>Get In Touch</h2>
          <div class="info-block">
            <i class="fa fa-mobile"></i>
            <p>9825850501, 9879950501</p>
          </div>
          <div class="info-block">
            <i class="fa fa-map-marker"></i>
            <p>Manufacturing Unit: Gala No.-1, Survey No.-282, Nr DamanGanga Ind. Park, Gate No.-2, Patia Mora, Karvad, Vapi-396191.</p>
          </div>
          <div class="info-block">
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:info@ss-plastic.com">info@ss-plastic.com</a></p>
          </div>
        </div>
      </div>

      <div class="col-12 text-center">
        <hr class="tall">
        <h2 class="gst">GSTIN: 24BlRPS4800G2Z3</h2>
        <hr class="tall">
      </div>
    </div>
  </div>
</div>










		<!----------------->
		<!-- <div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="map">
					<iframe src="" width="100%" height="300px" frameborder="0" style="border:1px solid #ccc; border-radius:5px;" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="map">
					<iframe src="" width="100%" height="300px" frameborder="0" style="border:1px solid #ccc; border-radius:5px;" allowfullscreen></iframe>
				</div>
			</div> -->
		</div>
	</div>
</div>

			<!-------------->
			<?php 
include_once('footer.php');
?>
			<!-------------->
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