import React, { useEffect, useState } from 'react';
import AOS from 'aos';
import 'aos/dist/aos.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import './IndexPage.css';

// Carousel Component
function Carousel() {
  const [activeIndex, setActiveIndex] = useState(0);
  const bannerImages = [
    '/images/banner/pic1.webp',
    '/images/banner/pic2.webp',
    '/images/banner/pic3.webp',
    '/images/banner/pic4.webp',
    '/images/banner/pic5.webp'
  ];

  useEffect(() => {
    const interval = setInterval(() => {
      setActiveIndex((prev) => (prev + 1) % bannerImages.length);
    }, 4000);
    return () => clearInterval(interval);
  }, [bannerImages.length]);

  return (
    <div className="banner">
      <div id="carousel" className="carousel slide carousel-fade" data-interval="4000">
        <ol className="carousel-indicators">
          {bannerImages.map((_, index) => (
            <li
              key={index}
              data-slide-to={index}
              className={index === activeIndex ? 'active' : ''}
              onClick={() => setActiveIndex(index)}
            ></li>
          ))}
        </ol>
        <div className="carousel-inner carousel-zoom">
          {bannerImages.map((image, index) => (
            <div key={index} className={`carousel-item ${index === activeIndex ? 'active' : ''}`}>
              <img className="img-responsive d-block w-100" src={image} alt={`Banner ${index + 1}`} />
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

// Product Card Component
function ProductCard({ image, title, description, link, delay }) {
  return (
    <div 
      className="col-xl-4 col-lg-4 col-md-6" 
      data-aos="fade-up" 
      data-aos-delay={delay}
    >
      <div className="product-card">
        <img src={image} alt={title} className="img-fluid" />
        <div className="product-overlay">
          <h4>{title}</h4>
          <p>{description}</p>
          <a href={link}>Read More...</a>
        </div>
      </div>
    </div>
  );
}

// Product Showcase Component
function ProductShowcase() {
  const products = [
    {
      image: '/images/home/react.webp',
      title: 'Pickling Acid Rec. Tank',
      description: 'Our FRP Tanks are widely used in industries like Chemicals and Steel.',
      link: '/products/tanks',
      delay: '100'
    },
    {
      image: '/images/home/pipe.webp',
      title: 'Pipes & Fittings',
      description: 'Designed to be user-friendly, using advanced resin and composite materials.',
      link: '/products/pipes',
      delay: '200'
    },
    {
      image: '/images/home/duct.webp',
      title: 'FRP / PP FRP Ductings',
      description: 'Reliable manufacturer and exporter of FRP & GRP duct systems worldwide.',
      link: '/products/ductings',
      delay: '300'
    },
    {
      image: '/images/home/scrubber.webp',
      title: 'FRP Scrubbers & Stack',
      description: 'Available to serve with full capability for FRP scrubber systems.',
      link: '/products/scrubbers',
      delay: '400'
    },
    {
      image: '/images/home/vessel.webp',
      title: 'Industrial Vessels',
      description: 'Experts in FRP design, manufacturing, and supply for industrial vessels.',
      link: '/products/vessels',
      delay: '500'
    },
    {
      image: '/images/home/gutter.webp',
      title: 'Motor Cover, FRP Gutter',
      description: 'Protective FRP motor covers and durable gutter systems for industry.',
      link: '/products/vessels',
      delay: '600'
    }
  ];

  return (
    <div className="hm-prod py-5">
      <div className="container">
        <div className="text-center mb-5" data-aos="fade-down">
          <h2 className="main-title"><span>ABOUT OUR PRODUCTS</span></h2>
        </div>

        <div className="row gy-4">
          {products.map((product, index) => (
            <ProductCard 
              key={index}
              image={product.image}
              title={product.title}
              description={product.description}
              link={product.link}
              delay={product.delay}
            />
          ))}
        </div>

        <div className="text-center mt-5" data-aos="fade-up">
          <a href="/gallery" className="btn btn-custom">Read More Products</a>
        </div>
      </div>
    </div>
  );
}

// Main Index Page Component
function IndexPage() {
  useEffect(() => {
    AOS.init({ duration: 1000 });
  }, []);

  return (
    <div className="index-page">
      <Carousel />

      <div className="container">
        <div className="row abt-row">
          <div className="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading">
            <h1><span>SS Plastic</span></h1>
          </div>

          <div 
            className="col-lg-6 col-md-6 col-sm-12 about-section" 
            data-aos="fade-up" 
            data-aos-duration="1000"
          >
            <h2 className="section-title">About Us</h2>
            <p>
              SS Plastic is a leading FRP manufacturer in India, offering precision-engineered 
              fiberglass tanks, scrubbers, and industrial FRP solutions built for durability 
              and corrosion resistance. Serving chemical, pharma, and wastewater industries 
              with reliable, custom-fabricated components.
            </p>
            <p>
              With extensive experience in working with materials like HDPE, PP, and PPFRP/PVC, 
              we handle the entire fabrication process—from mold creation to the final assembly 
              of custom equipment.
            </p>
            <a href="/about" className="btn btn-custom mt-3">Read More</a>
          </div>

          <div className="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div className="abt-img">
              {/* Image placeholder */}
            </div>
          </div>
        </div>
      </div>

      <ProductShowcase />
    </div>
  );
}

export default IndexPage;
