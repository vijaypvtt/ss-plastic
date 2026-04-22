import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import AOS from 'aos';
import 'aos/dist/aos.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import './IndexPage.css';

// Carousel Component
function Carousel() {
  const [activeIndex, setActiveIndex] = useState(0);
  const slides = [
    {
      image: '/images/banner/pic1.webp',
      eyebrow: 'Industrial FRP Excellence',
      title: 'Custom FRP Systems Built For Demanding Plants',
      description:
        'Precision fabrication for storage, ventilation, scrubbing, and corrosion-resistant process equipment.',
      hoverTitle: 'Fabricated For Tough Process Conditions',
      hoverText:
        'From tanks to ducting, we build FRP systems that stay dependable in corrosive industrial environments.',
      primaryCta: { to: '/contact', label: 'Get a Quote' },
      secondaryCta: { to: '/products/tanks', label: 'Explore Products' }
    },
    {
      image: '/images/banner/pic2.webp',
      eyebrow: 'Storage & Handling',
      title: 'Reliable Tanks And Process Equipment For Critical Operations',
      description:
        'Durable FRP solutions designed for chemical, pharma, water treatment, and heavy industrial environments.',
      hoverTitle: 'Built Around Your Plant Requirement',
      hoverText:
        'Our storage solutions are tailored for capacity, media compatibility, and long operating life.',
      primaryCta: { to: '/products/tanks', label: 'View Storage Tanks' },
      secondaryCta: { to: '/about', label: 'About Our Company' }
    },
    {
      image: '/images/banner/pic3.webp',
      eyebrow: 'Air & Fume Control',
      title: 'Ducting And Scrubber Systems That Support Clean Performance',
      description:
        'Application-focused fabrication for ventilation networks, exhaust handling, and emission control systems.',
      hoverTitle: 'Smart Air Handling Support',
      hoverText:
        'We help industrial plants manage fumes, exhaust, and process air with custom FRP fabrication.',
      primaryCta: { to: '/products/ductings', label: 'See Ducting Systems' },
      secondaryCta: { to: '/products/scrubbers', label: 'See Scrubbers' }
    },
    {
      image: '/images/banner/pic4.webp',
      eyebrow: 'Plant Fabrication',
      title: 'Pipes, Fittings, Vessels, And FRP Components Under One Roof',
      description:
        'From custom layouts to production-ready equipment, we support industrial projects with dependable FRP manufacturing.',
      hoverTitle: 'One Partner For Multiple FRP Needs',
      hoverText:
        'Integrated fabrication helps keep your project cleaner, faster, and more consistent from start to finish.',
      primaryCta: { to: '/products/pipes', label: 'View Pipes & Fittings' },
      secondaryCta: { to: '/products/vessels', label: 'View Vessels' }
    },
    {
      image: '/images/banner/pic5.webp',
      eyebrow: 'Built For Industry',
      title: 'Serving Industrial Clients With Quality, Speed, And Durability',
      description:
        'Engineered solutions from Vapi for long-term performance in aggressive operating conditions.',
      hoverTitle: 'Quality You Can Put Into Service',
      hoverText:
        'We focus on reliable workmanship, practical delivery, and FRP systems that perform over time.',
      primaryCta: { to: '/gallery', label: 'View Gallery' },
      secondaryCta: { to: '/contact', label: 'Talk To Our Team' }
    }
  ];

  useEffect(() => {
    const interval = setInterval(() => {
      setActiveIndex((prev) => (prev + 1) % slides.length);
    }, 4000);
    return () => clearInterval(interval);
  }, [slides.length]);

  const goToPrevious = () => {
    setActiveIndex((prev) => (prev - 1 + slides.length) % slides.length);
  };

  const goToNext = () => {
    setActiveIndex((prev) => (prev + 1) % slides.length);
  };

  return (
    <section className="banner">
      <div className="hero-slider">
        <div className="hero-track">
          {slides.map((slide, index) => (
            <div key={slide.image} className={`hero-slide ${index === activeIndex ? 'active' : ''}`}>
              <img className="hero-image" src={slide.image} alt={slide.title} />
              <div className="hero-overlay"></div>
              <div className="container hero-content-wrap">
                <div className="hero-content">
                  <span className="hero-eyebrow">{slide.eyebrow}</span>
                  <h1>{slide.title}</h1>
                  <p>{slide.description}</p>
                  <div className="hero-hover-card">
                    <span className="hero-hover-label">On Hover</span>
                    <h3>{slide.hoverTitle}</h3>
                    <p>{slide.hoverText}</p>
                  </div>
                  <div className="hero-actions">
                    <Link to={slide.primaryCta.to} className="hero-btn hero-btn-primary">
                      {slide.primaryCta.label}
                    </Link>
                    <Link to={slide.secondaryCta.to} className="hero-btn hero-btn-secondary">
                      {slide.secondaryCta.label}
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>

        <button className="hero-nav hero-nav-prev" onClick={goToPrevious} type="button" aria-label="Previous slide">
          <span>&lsaquo;</span>
        </button>
        <button className="hero-nav hero-nav-next" onClick={goToNext} type="button" aria-label="Next slide">
          <span>&rsaquo;</span>
        </button>

        <div className="hero-indicators">
          {slides.map((slide, index) => (
            <button
              key={slide.title}
              type="button"
              className={`hero-indicator ${index === activeIndex ? 'active' : ''}`}
              onClick={() => setActiveIndex(index)}
              aria-label={`Go to slide ${index + 1}`}
            >
              <span className="hero-indicator-bar"></span>
              <span className="hero-indicator-label">{slide.eyebrow}</span>
            </button>
          ))}
        </div>
      </div>
    </section>
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
