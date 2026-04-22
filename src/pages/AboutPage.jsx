import React from 'react';
import './AboutPage.css';

function AboutPage() {
  return (
    <div className="about-page">
      <div className="inner-bg">
        <div className="container">
          <div className="row">
            <div className="col-md-12">
              <div className="inner-head">
                <h1>ABOUT US</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="container py-5">
        <div className="row">
          <div className="col-lg-6">
            <div className="about-section">
              <div className="section-header">
                <h3>Who We Are</h3>
              </div>
              <div className="about-content">
                <p>
                  SS Plastic is a leading FRP (Fiber Reinforced Plastic) manufacturer based in Vapi, Gujarat, India. 
                  We specialize in designing and manufacturing high-quality fiberglass products for various industrial applications.
                </p>
                <p>
                  With years of expertise in FRP fabrication, we serve industries such as chemicals, pharmaceuticals, 
                  water treatment, and manufacturing sectors with custom-engineered solutions.
                </p>
              </div>
            </div>
          </div>

          <div className="col-lg-6">
            <div className="experience-box">
              <h3>25+</h3>
              <p>Years of Experience</p>
            </div>
            <div className="experience-box" style={{ marginTop: '20px' }}>
              <h3>1000+</h3>
              <p>Happy Clients</p>
            </div>
            <div className="experience-box" style={{ marginTop: '20px' }}>
              <h3>ISO</h3>
              <p>Certified Quality</p>
            </div>
          </div>
        </div>

        <div className="services-section mt-5">
          <div className="section-header">
            <h3>Our Services</h3>
          </div>
          <div className="service-list">
            <div className="service-item">
              <div className="service-num">1</div>
              <div className="service-text">
                <strong>Custom FRP Manufacturing</strong><br/>
                We manufacture custom FRP products tailored to meet your specific industrial requirements.
              </div>
            </div>
            <div className="service-item">
              <div className="service-num">2</div>
              <div className="service-text">
                <strong>Design & Engineering</strong><br/>
                Our expert team provides complete design and engineering support for FRP solutions.
              </div>
            </div>
            <div className="service-item">
              <div className="service-num">3</div>
              <div className="service-text">
                <strong>Quality Assurance</strong><br/>
                All products undergo rigorous quality testing and meet international standards.
              </div>
            </div>
            <div className="service-item">
              <div className="service-num">4</div>
              <div className="service-text">
                <strong>After-Sales Support</strong><br/>
                We provide comprehensive support and maintenance guidance after product delivery.
              </div>
            </div>
          </div>
        </div>

        <div className="experience-section mt-5">
          <div className="section-header">
            <h3>Why Choose SS Plastic?</h3>
          </div>
          <div className="row">
            <div className="col-md-6">
              <div className="info-card">
                <h5>✓ Advanced Technology</h5>
                <p>Using latest FRP manufacturing technology and equipment</p>
              </div>
              <div className="info-card">
                <h5>✓ Expert Team</h5>
                <p>Experienced professionals with deep industry knowledge</p>
              </div>
            </div>
            <div className="col-md-6">
              <div className="info-card">
                <h5>✓ Timely Delivery</h5>
                <p>Committed to delivering products on schedule</p>
              </div>
              <div className="info-card">
                <h5>✓ Competitive Pricing</h5>
                <p>Best value for money without compromising quality</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default AboutPage;
