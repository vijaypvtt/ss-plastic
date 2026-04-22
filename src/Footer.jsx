import React from 'react';
import { Link } from 'react-router-dom';
import './Footer.css';

function Footer() {
  return (
    <footer className="footer-section">
      <div className="container">
        <div className="row">
          <div className="col-lg-3 col-md-6 col-sm-12 mb-4">
            <h5 className="footer-heading">SS PLASTIC</h5>
            <p className="footer-text">
              Leading FRP manufacturer in India offering precision-engineered solutions for industrial applications.
            </p>
          </div>

          <div className="col-lg-3 col-md-6 col-sm-12 mb-4">
            <h5 className="footer-heading">Quick Links</h5>
            <ul className="footer-links">
              <li><Link to="/">Home</Link></li>
              <li><Link to="/about">About Us</Link></li>
              <li><Link to="/gallery">Gallery</Link></li>
              <li><Link to="/contact">Contact</Link></li>
            </ul>
          </div>

          <div className="col-lg-3 col-md-6 col-sm-12 mb-4">
            <h5 className="footer-heading">Products</h5>
            <ul className="footer-links">
              <li><Link to="/products/tanks">Storage Tanks</Link></li>
              <li><Link to="/products/pipes">Pipes & Fittings</Link></li>
              <li><Link to="/products/ductings">Ductings</Link></li>
              <li><Link to="/products/scrubbers">Scrubbers</Link></li>
            </ul>
          </div>

          <div className="col-lg-3 col-md-6 col-sm-12 mb-4">
            <h5 className="footer-heading">Contact Info</h5>
            <div className="footer-contact">
              <span style={{ fontSize: '18px', marginRight: '10px', color: '#ffd700' }}>📍</span>
              <div>
                <p>Vapi, Gujarat, India</p>
              </div>
            </div>
            <div className="footer-contact">
              <span style={{ fontSize: '18px', marginRight: '10px', color: '#ffd700' }}>📞</span>
              <div>
                <p>+91-9825850501, +91-9879950501</p>
              </div>
            </div>
            <div className="footer-contact">
              <span style={{ fontSize: '18px', marginRight: '10px', color: '#ffd700' }}>✉️</span>
              <div>
                <p>info@ss-plastic.com</p>
              </div>
            </div>
          </div>
        </div>

        <div className="footer-bottom">
          <hr style={{ borderColor: 'rgba(255,255,255,0.2)', margin: '30px 0' }} />
          <div className="row">
            <div className="col-md-6 col-sm-12">
              <p>&copy; 2024 SS Plastic. All rights reserved.</p>
            </div>
            <div className="col-md-6 col-sm-12 text-end">
              <p>GST: 24BIRPS4800G2Z3</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
}

export default Footer;
