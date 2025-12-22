<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRP Tanks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">





<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome (for icons) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>

<style>


/* Base */
body {
  font-family: 'Inter', sans-serif;
}

.pre-header {
  background: #f7f7f7;
  border-bottom: 1px solid #e0e0e0;
  padding: 12px 0;
}

.pre-header-wrap {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

/* Logo */
.pre-logo img {
  max-height: 55px;
}

/* Contact Block */
.pre-contact {
  display: flex;
  gap: 30px;
  align-items: center;
  flex-wrap: wrap;
}

.pre-info {
  display: flex;
  align-items: center;
  gap: 10px;
  color: #444;
}

.pre-info i {
  font-size: 20px;
  color: #007bff;
  background: #e6f0ff;
  padding: 8px;
  border-radius: 50%;
}

.pre-info span {
  font-weight: 600;
  display: block;
  font-size: 14px;
  color: #222;
}

.pre-info p {
  margin: 0;
  font-size: 13px;
  color: #555;
}

/* Responsive */
@media (max-width: 768px) {
  .pre-header-wrap {
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .pre-contact {
    justify-content: center;
    gap: 20px;
  }
}




















.sidebar-menu .list-group-item {
  border: none;
  padding: 10px 20px;
  transition: background 0.3s;
}

.sidebar-link {
  text-decoration: none;
  color: #333;
  font-weight: 500;
  display: flex;
  align-items: center;
  transition: color 0.3s ease;
}

.sidebar-link:hover {
  color: #007bff;
  transform: translateX(5px);
}

.sidebar-menu .list-group-item:hover {
  background-color: #f8f9fa;
}

.card-header {
  font-weight: bold;
}










.inner-bg {
            background: linear-gradient(to right, #004e92, #000428);
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .prod-main h2 span.sub-title {
            display: block;
            font-size: 18px;
            color: #555;
        }
        .prod-main h2 span.main-title1 {
            font-size: 28px;
            font-weight: bold;
            color: #222;
        }
        .prod-feature ul {
            padding-left: 20px;
        }
        .prod-feature ul li {
            margin-bottom: 8px;
            font-size: 15px;
        }
        .prod-img-main {
            margin-bottom: 30px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .prod-img-main:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15);
        }
        .prod-img-head h5 {
            background-color: #f8f9fa;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            text-align: center;
        }
        .prod-box img {
            width: 100%;
            height: auto;
            border: 1px solid #eaeaea;
            border-top: none;
        }
        .wrapper {
            display: flex;
            gap: 10px;
        }
        .inputbox {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .submit-btn {
            padding: 10px 20px;
            background-color: #004e92;
            color: white;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .submit-btn:hover {
            background-color: #003366;
        }
        .tall {
            margin: 30px 0;
            border-top: 2px solid #eee;
        }


</style>

<body>





<div class="pre-header">
  <div class="container">
    <div class="pre-header-wrap">
      
      <!-- Logo -->
      <div class="pre-logo">
        <a href="index.php">
          <img src="ssplasticlogo.webp" alt="SS Plastic Logo" class="img-fluid" />
        </a>
      </div>

      <!-- Contact Info -->
      <div class="pre-contact">
        <!-- Email -->
        <div class="pre-info">
          <i class="fa fa-envelope"></i>
          <div>
            <span>Mail Us</span>
            <p>info@ss-plastic.com</p>
          </div>
        </div>

        <!-- Phone -->
        <div class="pre-info">
          <i class="fa fa-phone"></i>
          <div>
            <span>Call Us</span>
            <p>+91-9825850501</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>






<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav menu-top">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="frp-products-manufacturers.php">Products<span class="caret"></span></a>
							<ul class="dropdown-menu down-menu">
								<li><a href="frp-tank-manufacturers.php">Storage Tanks</a></li>
								<li><a href="frp-pipe-fittings-manufacturers.php">FRP Pipes / Fittings</a></li>
								<li><a href="frp-duct-manufacturers.php">Pipes / Ductings</a></li>
								<li><a href="frp-industrial-vessels-manufacturers.php">Industrial Vessels</a></li>
	
								<li><a href="frp-scrubbers-manufacturers.php">Packed Column Scrubber</a></li>
								<li><a href="frp-moulded-items.php">FRB Moulded Items</a></li>
										
								 
								<li><a href="frp-anolyte-catholyte-headers.php">FRP Headers (Anolyte / Catholyte)</a></li>
	
							</ul>
					</li>

					<li><a href="gallery.php">Gallery</a></li>

					<li><a href="contact.php">Contact Us</a></li>
        			<li class="dropdown">
						<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Policy<span class="caret"></span></a> -->
							<!-- <ul class="dropdown-menu down-menu">
								<li><a href="pdf/business_ethics_code_conduct_policy.pdf" target="_blank">Business Ethics</a></li>
								<li><a href="privacy-policy.php">Privacy Policy</a></li>
								<li><a href="index.php#">HES Policy</a></li>
							</ul> -->
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right menu-right">
					<li><a href="images/SS PLASTIC.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download Brochure</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>








<div class="container my-4">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-3 mb-4">
      <div class="card shadow-sm sidebar-menu">
        <div class="card-header bg-primary text-white">
          <h5 class="mb-0">Product Categories</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <a href="frp-tank-manufacturers.php" class="sidebar-link">
              <i class="fa fa-caret-right me-2"></i>Storage Tanks
            </a>
          </li>
          <li class="list-group-item">
            <a href="frp-pipe-fittings-manufacturers.php" class="sidebar-link">
              <i class="fa fa-caret-right me-2"></i>FRP Pipes / Fittings
            </a>
          </li>
          <li class="list-group-item">
            <a href="frp-duct-manufacturers.php" class="sidebar-link">
              <i class="fa fa-caret-right me-2"></i>Ductings
            </a>
          </li>
          <li class="list-group-item">
            <a href="frp-industrial-vessels-manufacturers.php" class="sidebar-link">
              <i class="fa fa-caret-right me-2"></i>Industrial Vessels
            </a>
          </li>
          <li class="list-group-item">
            <a href="frp-scrubbers-manufacturers.php" class="sidebar-link">
              <i class="fa fa-caret-right me-2"></i>Packed Column Scrubber
            </a>
          </li>
          <li class="list-group-item">
            <a href="frp-moulded-items.php" class="sidebar-link">
              <i class="fa fa-caret-right me-2"></i>Chemical Storage Room & Others
            </a>
          </li>
          <li class="list-group-item">
            <a href="frp-anolyte-catholyte-headers.php" class="sidebar-link">
              <i class="fa fa-caret-right me-2"></i>FRP Headers
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Content Area -->
    <div class="col-md-9">
      <!-- Your main product content goes here -->
      <div class="content-placeholder">
      <div class="mb-4">
  <h5><strong>SS PLASTIC</strong> is a leading manufacturer and supplier of high-quality FRP tanks in Vapi, India. With over 20 years of experience, we're a reliable and trusted partner for all your FRP tank needs.</h5>
  <p>
    We've been consistently delivering exceptional FRP tanks to our clients for over two decades. We offer a comprehensive selection of FRP products, including tanks, scrubbers, ducts and ducting, blowers, pipes & fittings, sheets, chimneys, and more.
    Our FRP tanks cater to a wide range of industries, including chemical, steel, engineering, medical, power, metals, rubber, jewelry, textile, polytex, and many more.
  </p>
  <p>
    Our team of highly qualified and experienced engineers oversee the entire FRP tank manufacturing process, guaranteeing the highest standards and zero defects.
  </p>
</div>

<div class="row align-items-start mb-4">
  <div class="col-md-6">
    <h5 class="border-bottom pb-2"><strong>FRP Tanks Manufacturers Salient Features :-</strong></h5>
    <ul class="list-unstyled">
      <li><i class="fa fa-caret-right text-primary me-2"></i>Highly reliable.</li>
      <li><i class="fa fa-caret-right text-primary me-2"></i>More durable.</li>
      <li><i class="fa fa-caret-right text-primary me-2"></i>Low Maintenance.</li>
      <li><i class="fa fa-caret-right text-primary me-2"></i>Easy to understand.</li>
      <li><i class="fa fa-caret-right text-primary me-2"></i>Highly Functional.</li>
      <li><i class="fa fa-caret-right text-primary me-2"></i>Less Operating Cost.</li>
    </ul>
  </div>

  <div class="col-md-6">
    <div class="border p-2 shadow-sm">
      <div class="bg-light text-center fw-bold py-2">PICKLING ACID REC. TANK</div>
      <img src="images/product/storage-tank/STORAGE1.webp" class="img-fluid" alt="Pickling Acid Rec. Tank">
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>






<!-- Bootstrap 5 JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


