import React from 'react';
import { Link, NavLink, useParams } from 'react-router-dom';
import './ProductPage.css';

const productInfo = {
  tanks: {
    title: 'FRP Storage Tanks',
    eyebrow: 'Corrosion-Resistant Storage Systems',
    description:
      'Engineered FRP storage tanks for chemicals, water treatment, process liquids, and industrial handling environments.',
    details:
      'Our storage tanks are built for high durability, chemical resistance, and dependable long-term performance in demanding industrial operations. We fabricate tailored capacities and configurations based on site conditions and media compatibility.',
    image: '/images/product/storage-tank/STORAGE1.webp',
    features: [
      'Excellent resistance to corrosive chemicals and process media',
      'Custom fabrication for vertical, horizontal, and application-specific layouts',
      'Strong yet lightweight construction for easier installation',
      'Low maintenance with long service life in industrial environments',
      'Suitable for indoor and outdoor process applications',
      'Manufactured with quality-controlled FRP construction practices'
    ],
    applications: [
      'Chemical processing plants',
      'Pharmaceutical manufacturing',
      'Water and wastewater treatment',
      'Pickling and plating lines',
      'Steel and metal processing industries',
      'General industrial liquid storage'
    ]
  },
  pipes: {
    title: 'FRP Pipes & Fittings',
    eyebrow: 'Process Piping For Demanding Plants',
    description:
      'A dependable range of FRP pipes and fittings designed for corrosive fluid handling and long operating life.',
    details:
      'Our FRP piping systems combine corrosion resistance with structural strength, making them suitable for industrial transfer lines, chemical service applications, and plant utility networks. Components are fabricated to support consistent performance and fitment reliability.',
    image: '/images/product/frp-pipes-fitting/PIPE1.webp',
    features: [
      'High strength-to-weight ratio for practical installation',
      'Corrosion-resistant construction for aggressive service conditions',
      'Available in multiple diameters, fittings, and jointing options',
      'Smooth internal flow characteristics',
      'Suitable for process, exhaust, and utility line applications',
      'Reliable service life with reduced upkeep requirements'
    ],
    applications: [
      'Chemical transfer systems',
      'Acid and alkali handling lines',
      'Industrial utility routing',
      'Fume extraction layouts',
      'Water treatment process piping',
      'Plant retrofits and expansion work'
    ]
  },
  ductings: {
    title: 'FRP Ducting Systems',
    eyebrow: 'Ventilation And Fume Control Solutions',
    description:
      'Industrial FRP ducting fabricated for ventilation, exhaust handling, and corrosive fume extraction systems.',
    details:
      'We manufacture FRP ducting that supports efficient airflow and dependable resistance in harsh process environments. These systems are designed to meet plant ventilation demands while maintaining structural integrity and service performance.',
    image: '/images/pipes/DUCT.webp',
    features: [
      'Designed for corrosive fumes and industrial exhaust systems',
      'Lightweight fabrication for easier handling and support',
      'Custom sections, bends, branches, and fittings available',
      'Good dimensional stability across varied site conditions',
      'Suitable for scrubber-connected ventilation networks',
      'Built to meet application-specific routing requirements'
    ],
    applications: [
      'Chemical plant exhaust systems',
      'Laboratory ventilation lines',
      'Fume extraction networks',
      'Scrubber inlet and outlet ducting',
      'Industrial process ventilation',
      'Corrosion-prone air handling systems'
    ]
  },
  scrubbers: {
    title: 'FRP Scrubbers & Stacks',
    eyebrow: 'Air Pollution Control Equipment',
    description:
      'FRP scrubbers and stacks designed for process exhaust treatment, gas cleaning, and pollution control applications.',
    details:
      'Our scrubber systems are developed for efficient contact between process gases and treatment media, helping industries control emissions while maintaining durable operation in corrosive environments. We also provide matching FRP stacks for integrated exhaust handling.',
    image: '/images/product/packed-column-scrubber/scrubber.webp',
    features: [
      'Durable FRP construction for corrosive gas treatment duty',
      'Application-focused design for gas scrubbing efficiency',
      'Compatible with process exhaust and emission control systems',
      'Custom sizes and configurations available',
      'Low-maintenance equipment for industrial operation',
      'Integrated stack and duct connectivity options'
    ],
    applications: [
      'Acid fume control systems',
      'Chemical exhaust treatment',
      'Process gas cleaning',
      'Pollution control installations',
      'Industrial ventilation treatment lines',
      'Emission handling for manufacturing plants'
    ]
  },
  vessels: {
    title: 'FRP Industrial Vessels',
    eyebrow: 'Custom Fabricated Process Equipment',
    description:
      'Custom-built FRP vessels for demanding industrial use where corrosion resistance and long service life are critical.',
    details:
      'We fabricate industrial FRP vessels for a broad range of process requirements, with attention to reliability, dimensional accuracy, and material suitability. These vessels are built to support varied plant duties while maintaining dependable performance over time.',
    image: '/images/indutrial-vessels/vessel.webp',
    features: [
      'Custom vessel fabrication for plant-specific duties',
      'Strong resistance to corrosive environments',
      'Reliable structural performance with reduced maintenance needs',
      'Available in multiple capacities and design formats',
      'Suitable for process integration across industries',
      'Manufactured with focus on durability and consistency'
    ],
    applications: [
      'Chemical process plants',
      'Industrial reaction and handling systems',
      'Storage and process containment',
      'Water treatment operations',
      'Pharma and specialty manufacturing',
      'General heavy-duty industrial service'
    ]
  }
};

const productMenu = [
  { key: 'tanks', label: 'Storage Tanks' },
  { key: 'pipes', label: 'Pipes & Fittings' },
  { key: 'ductings', label: 'Ducting Systems' },
  { key: 'scrubbers', label: 'Scrubbers & Stacks' },
  { key: 'vessels', label: 'Industrial Vessels' }
];

function ProductPage() {
  const { productType } = useParams();
  const product = productInfo[productType] || productInfo.tanks;

  return (
    <div className="product-page">
      <section className="product-hero">
        <div className="container">
          <div className="product-hero-inner">
            <div className="product-hero-copy">
              <span className="product-eyebrow">{product.eyebrow}</span>
              <h1>{product.title}</h1>
              <p>{product.description}</p>
              <div className="product-hero-actions">
                <Link to="/contact" className="btn btn-custom">
                  Request a Quote
                </Link>
                <a href="tel:+919825850501" className="btn btn-outline-contact">
                  Call +91 98258 50501
                </a>
              </div>
            </div>

            <div className="product-hero-media">
              <img src={product.image} alt={product.title} className="product-main-image" />
            </div>
          </div>
        </div>
      </section>

      <section className="product-main-section">
        <div className="container">
          <div className="row product-layout">
            <div className="col-lg-8 col-md-7">
              <div className="product-content">
                <div className="content-block">
                  <h2>Product Overview</h2>
                  <p className="lead">{product.description}</p>
                  <p>{product.details}</p>
                </div>

                <div className="content-block">
                  <h3>Key Features</h3>
                  <ul className="detail-list">
                    {product.features.map((feature) => (
                      <li key={feature}>{feature}</li>
                    ))}
                  </ul>
                </div>

                <div className="content-block">
                  <h3>Applications</h3>
                  <ul className="detail-list applications-list">
                    {product.applications.map((application) => (
                      <li key={application}>{application}</li>
                    ))}
                  </ul>
                </div>

                <div className="cta-section">
                  <h3>Need a Custom FRP Solution?</h3>
                  <p>
                    Share your project requirements with our team for sizing, fabrication guidance,
                    and a tailored commercial quote.
                  </p>
                  <div className="cta-inline">
                    <Link to="/contact" className="btn btn-custom">
                      Send Enquiry
                    </Link>
                    <a href="mailto:info@ss-plastic.com" className="cta-text-link">
                      info@ss-plastic.com
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div className="col-lg-4 col-md-5">
              <aside className="sidebar">
                <div className="prod-menu-modern">
                  <div className="menu-title">All Products</div>
                  <ul className="menu-list">
                    {productMenu.map((item) => (
                      <li key={item.key}>
                        <NavLink
                          to={`/products/${item.key}`}
                          className={({ isActive }) => (isActive ? 'active' : '')}
                        >
                          <span className="menu-badge">FRP</span>
                          {item.label}
                        </NavLink>
                      </li>
                    ))}
                  </ul>
                </div>

                <div className="sidebar-box">
                  <h4>Quick Contact</h4>
                  <p><strong>Phone:</strong> +91 98258 50501, +91 98799 50501</p>
                  <p><strong>Email:</strong> info@ss-plastic.com</p>
                  <p><strong>GST:</strong> 24BIRPS4800G2Z3</p>
                  <p><strong>Location:</strong> Vapi, Gujarat, India</p>
                </div>

                <div className="sidebar-box sidebar-box-accent">
                  <h4>Why SS Plastic</h4>
                  <p>Custom fabrication support</p>
                  <p>Application-focused FRP solutions</p>
                  <p>Reliable manufacturing quality</p>
                  <p>Industrial delivery experience</p>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </section>
    </div>
  );
}

export default ProductPage;
