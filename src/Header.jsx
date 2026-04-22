import React, { useState } from 'react';
import { Link, NavLink } from 'react-router-dom';
import './Header.css';

const productLinks = [
  { to: '/products/tanks', label: 'Storage Tanks' },
  { to: '/products/pipes', label: 'Pipes & Fittings' },
  { to: '/products/ductings', label: 'Ductings' },
  { to: '/products/scrubbers', label: 'Scrubbers' },
  { to: '/products/vessels', label: 'Industrial Vessels' }
];

function Header() {
  const [isOpen, setIsOpen] = useState(false);
  const [productsOpen, setProductsOpen] = useState(false);

  const closeMenus = () => {
    setIsOpen(false);
    setProductsOpen(false);
  };

  const toggleMenu = () => {
    setIsOpen((prev) => !prev);
  };

  const toggleProductsMenu = () => {
    setProductsOpen((prev) => !prev);
  };

  return (
    <>
      <div className="top-info-bar">
        <div className="container">
          <div className="top-info-content">
            <a className="top-info-group" href="tel:+919825850501">
              <span className="info-icon" aria-hidden="true">Call</span>
              <div className="info-text">
                <span className="info-label">Speak With Us</span>
                <span className="info-value">+91 98258 50501</span>
              </div>
            </a>

            <a className="top-info-group" href="mailto:info@ss-plastic.com">
              <span className="info-icon" aria-hidden="true">Mail</span>
              <div className="info-text">
                <span className="info-label">Business Enquiries</span>
                <span className="info-value">info@ss-plastic.com</span>
              </div>
            </a>

            <div className="top-info-group top-info-location">
              <span className="info-icon" aria-hidden="true">Site</span>
              <div className="info-text">
                <span className="info-label">Manufacturing Base</span>
                <span className="info-value">Vapi, Gujarat, India</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <header className="main-navbar">
        <div className="container">
          <div className="navbar-wrapper">
            <Link to="/" className="navbar-logo" onClick={closeMenus} aria-label="SS Plastic home">
              <div className="logo-container">
                <img
                  src="/images/ssplasticlogo.webp"
                  alt="SS Plastic"
                  className="logo-mark"
                />
                <div className="logo-text">
                  <span className="company-name">SS Plastic</span>
                  <span className="tagline">FRP Equipment & Corrosion-Resistant Systems</span>
                </div>
              </div>
            </Link>

            <div className="desktop-cta">
              <span className="cta-label">Trusted Industrial Fabrication</span>
              <a href="tel:+919825850501" className="cta-button">
                Request a Callback
              </a>
            </div>

            <button
              className={`menu-toggle ${isOpen ? 'active' : ''}`}
              onClick={toggleMenu}
              aria-label="Toggle navigation menu"
              aria-expanded={isOpen}
              type="button"
            >
              <span></span>
              <span></span>
              <span></span>
            </button>

            <div className={`nav-menu ${isOpen ? 'active' : ''}`}>
              <ul className="nav-list">
                <li className="nav-item">
                  <NavLink to="/" end className="nav-link" onClick={closeMenus}>
                    Home
                  </NavLink>
                </li>
                <li className="nav-item">
                  <NavLink to="/about" className="nav-link" onClick={closeMenus}>
                    About
                  </NavLink>
                </li>
                <li className={`nav-item dropdown ${productsOpen ? 'active' : ''}`}>
                  <button
                    className="nav-link dropdown-toggle"
                    onClick={toggleProductsMenu}
                    type="button"
                    aria-expanded={productsOpen}
                  >
                    Products
                  </button>
                  <ul className="dropdown-menu">
                    {productLinks.map((item) => (
                      <li key={item.to}>
                        <NavLink to={item.to} onClick={closeMenus}>
                          {item.label}
                        </NavLink>
                      </li>
                    ))}
                  </ul>
                </li>
                <li className="nav-item">
                  <NavLink to="/gallery" className="nav-link" onClick={closeMenus}>
                    Gallery
                  </NavLink>
                </li>
                <li className="nav-item">
                  <NavLink to="/contact" className="nav-link nav-contact" onClick={closeMenus}>
                    Contact Us
                  </NavLink>
                </li>
              </ul>

              <div className="mobile-cta">
                <a href="tel:+919825850501" className="cta-button">
                  Call Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </header>
    </>
  );
}

export default Header;
