<!-- Custom Styles -->
<style>
  body {
    font-family: 'Poppins', sans-serif;
  }

  .footer-section {
    background: linear-gradient(135deg, #0052D4, #4364F7);
    color: #fff;
    padding-top: 60px;
    padding-bottom: 40px;
    position: relative;
    overflow: hidden;
    z-index: 1;
    line-height: 1.8;
  }

  .footer-section::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
    animation: rotateBg 20s linear infinite;
    z-index: 0;
  }

  @keyframes rotateBg {
    0% { transform: rotate(0deg);}
    100% { transform: rotate(360deg);}
  }

  .footer-heading {
    font-size: 1.95rem;
    font-weight: 700;
    margin-bottom: 1rem;
  }

  .footer-text {
    font-size: 1.25rem;
    opacity: 0.9;
  }

  .footer-links {
    list-style: none;
    padding-left: 0;
  }

  .footer-links li {
    margin-bottom: 0.5rem;
  }

  .footer-links a {
    color: #fff;
    text-decoration: none;
    font-size: 1.25rem;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
  }

  .footer-links a::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #ffd700;
    transition: width 0.3s;
    position: absolute;
    bottom: -3px;
    left: 0;
  }

  .footer-links a:hover {
    color: #ffd700;
    transform: translateX(5px);
  }

  .footer-links a:hover::after {
    width: 100%;
  }

  .footer-contact {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    display: flex;
    align-items: flex-start;
  }

  .footer-contact i {
    color: #ffd700;
    margin-top: 2px;
  }

  @media (max-width: 276px) {
    .footer-section {
      text-align: center;
    }

    .footer-contact {
      justify-content: center;
      text-align: left;
    }
  }
  .footer-contact {
  font-size: 1.2rem;
  margin-bottom: 1rem;
  display: flex;
  align-items: flex-start;
  color: #fff;
  line-height: 1.8;
  
}

.contact-icon {
  font-size: 1.2rem;
  color: #FFD700; /* bright yellow for visibility */
  min-width: 24px;
  text-align: center;
}

  
</style>








<!-- Google Fonts & Font Awesome -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<footer class="footer-section">
  <div class="container py-5">
    <div class="row gy-4">

      <!-- Company Info -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">SS Plastic</h5>
        <p class="footer-text">Delivering customized FRP solutions for industries across India and abroad with quality and commitment since our inception.</p>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-heading">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="frp-tank-manufacturers.php">Products</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>

      <!-- Products & Services -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">Products & Services</h5>
        <ul class="footer-links">
          <li><a href="frp-tank-manufacturers.php">Storage Tanks</a></li>
          <li><a href="frp-pipe-fittings-manufacturers.php">FRP Pipes / Fittings</a></li>
          <li><a href="frp-duct-manufacturers.php">FRP / Ductings</a></li>
          <li><a href="frp-industrial-vessels-manufacturers.php">Industrial Vessels</a></li>
          <li><a href="frp-scrubbers-manufacturers.php">Packed Column Scrubber</a></li>
          <li><a href="frp-moulded-items.php">Chemical Storage Room & Other Items</a></li>
          <li><a href="frp-anolyte-catholyte-headers.php">FRP Headers</a></li>
      
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-4 col-md-6">
  <h5 class="footer-heading">Contact Us</h5>

  <div class="footer-contact mb-3 d-flex align-items-start">
    <i class="fas fa-map-marker-alt contact-icon me-3 mt-1"></i>
    <span>
      <strong>Manufacturing Unit:</strong> Gala No.-1, Survey No.-282, Nr DamanGanga Ind. Park, Gate No.-2, Patia Mora, Karvad, Vapi-396191
    </span>
  </div>

  <div class="footer-contact d-flex align-items-start">
    <i class="fas fa-phone contact-icon me-3 mt-1"></i>
    <span>
      Mobile: <strong>98258 50501</strong>, <strong>98799 50501</strong>
    </span>
  </div>
</div>


    </div>
  </div>
</footer>



<!-------------->
<!-- <div class="max">
	<button class="btn-1" >Quick Connect - X</button> 
	<div class="quickcontact">
		<form name="cbform" id="cbform" method="post" action="phpmailer/mail.php" onsubmit="return validateForm()">
			
			<input type="email" name="email" id="email" placeholder=" Email" required = "required" />
			
			<input type="text" name="number" id="number" pattern="[1-9]{1}[0-9]{9}" placeholder=" Contact Number" maxlength="10" required = "required" min="1111111111" max="9999999999" />
			  
			<textarea name="comments" id="comments" class="form-control form-text" rows="3" placeholder=" Comments or queries" ></textarea>
			
			<input type="submit" class="btn btn-default" name="submit" value="Contact Now" />
			
		</form>
	</div>
</div> -->
<!-------------->
<!-- <div class="btm-watsap">
	<a href="https://api.whatsapp.com/send?phone=9825850501"><img src="whatsapp.webp" alt="whatsapp"></a>
</div> -->


