<!-- Custom Styles -->
<style>
  .footer-section {
    background: linear-gradient(135deg, #0052d4, #4364f7);
    color: #fff;
    padding: 60px 0 40px;
    position: relative;
    overflow: hidden;
    line-height: 1.8;
  }

  .footer-section::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    animation: rotateBg 20s linear infinite;
    z-index: 0;
  }

  .footer-content {
    position: relative;
    z-index: 1;
  }

  .footer-column {
    margin-bottom: 30px;
  }

  @keyframes rotateBg {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  .footer-heading {
    font-size: 1.95rem;
    font-weight: 700;
    margin: 0 0 1rem;
  }

  .footer-text,
  .footer-links a,
  .footer-contact {
    font-size: 1.25rem;
  }

  .footer-text {
    opacity: 0.9;
  }

  .footer-links {
    list-style: none;
    padding-left: 0;
    margin: 0;
  }

  .footer-links li {
    margin-bottom: 0.5rem;
  }

  .footer-links a {
    color: #fff;
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
  }

  .footer-links a::after {
    content: "";
    display: block;
    width: 0;
    height: 2px;
    background: #ffd700;
    transition: width 0.3s ease;
    position: absolute;
    bottom: -3px;
    left: 0;
  }

  .footer-links a:hover,
  .footer-links a:focus {
    color: #ffd700;
    transform: translateX(5px);
    text-decoration: none;
  }

  .footer-links a:hover::after,
  .footer-links a:focus::after {
    width: 100%;
  }

  .footer-contact {
    margin-bottom: 1rem;
    display: flex;
    align-items: flex-start;
    color: #fff;
  }

  .footer-contact:last-child {
    margin-bottom: 0;
  }

  .contact-icon {
    color: #ffd700;
    width: 24px;
    margin-right: 12px;
    margin-top: 4px;
    text-align: center;
    flex-shrink: 0;
  }

  @media (max-width: 767px) {
    .footer-section {
      text-align: center;
    }

    .footer-contact {
      justify-content: center;
      text-align: left;
    }
  }
</style>

<footer class="footer-section">
  <div class="container footer-content">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 footer-column">
        <h5 class="footer-heading">SS Plastic</h5>
        <p class="footer-text">Delivering customized FRP solutions for industries across India and abroad with quality and commitment since our inception.</p>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-6 footer-column">
        <h5 class="footer-heading">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="frp-tank-manufacturers.php">Products</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 footer-column">
        <h5 class="footer-heading">Products &amp; Services</h5>
        <ul class="footer-links">
          <li><a href="frp-tank-manufacturers.php">Storage Tanks</a></li>
          <li><a href="frp-pipe-fittings-manufacturers.php">FRP Pipes / Fittings</a></li>
          <li><a href="frp-duct-manufacturers.php">FRP / Ductings</a></li>
          <li><a href="frp-industrial-vessels-manufacturers.php">Industrial Vessels</a></li>
          <li><a href="frp-scrubbers-manufacturers.php">Packed Column Scrubber</a></li>
          <li><a href="frp-moulded-items.php">Chemical Storage Room &amp; Other Items</a></li>
          <li><a href="frp-anolyte-catholyte-headers.php">FRP Headers</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6 footer-column">
        <h5 class="footer-heading">Contact Us</h5>

        <div class="footer-contact">
          <i class="fa fa-map-marker contact-icon" aria-hidden="true"></i>
          <span>
            <strong>Manufacturing Unit:</strong> Gala No.-1, Survey No.-282, Nr DamanGanga Ind. Park, Gate No.-2, Patia Mora, Karvad, Vapi-396191
          </span>
        </div>

        <div class="footer-contact">
          <i class="fa fa-phone contact-icon" aria-hidden="true"></i>
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
  <button class="btn-1">Quick Connect - X</button>
  <div class="quickcontact">
    <form name="cbform" id="cbform" method="post" action="phpmailer/mail.php" onsubmit="return validateForm()">
      <input type="email" name="email" id="email" placeholder=" Email" required="required" />
      <input type="text" name="number" id="number" pattern="[1-9]{1}[0-9]{9}" placeholder=" Contact Number" maxlength="10" required="required" min="1111111111" max="9999999999" />
      <textarea name="comments" id="comments" class="form-control form-text" rows="3" placeholder=" Comments or queries"></textarea>
      <input type="submit" class="btn btn-default" name="submit" value="Contact Now" />
    </form>
  </div>
</div> -->
<!-------------->
<!-- <div class="btm-watsap">
  <a href="https://api.whatsapp.com/send?phone=9825850501"><img src="whatsapp.webp" alt="whatsapp"></a>
</div> -->
