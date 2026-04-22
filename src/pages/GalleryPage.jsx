import React, { useState } from 'react';
import './GalleryPage.css';

function GalleryPage() {
  const [selectedFilter, setSelectedFilter] = useState('all');

  const galleryItems = [
    { id: 1, category: 'vessels', image: '/images/indutrial-vessels/PIC1.webp', title: 'Industrial Vessel 1' },
    { id: 2, category: 'vessels', image: '/images/indutrial-vessels/vessel.webp', title: 'Industrial Vessel 2' },
    { id: 3, category: 'tanks', image: '/images/product/storage-tank/STORAGE1.webp', title: 'Storage Tank 1' },
    { id: 4, category: 'tanks', image: '/images/product/storage-tank/STORAGE2.webp', title: 'Storage Tank 2' },
    { id: 5, category: 'tanks', image: '/images/product/storage-tank/STORAGE3.webp', title: 'Storage Tank 3' },
    { id: 6, category: 'pipes', image: '/images/product/frp-pipes-fitting/PIPE1.webp', title: 'Pipes & Fitting 1' },
    { id: 7, category: 'scrubbers', image: '/images/product/packed-column-scrubber/scrubber.webp', title: 'Scrubber 1' },
    { id: 8, category: 'ductings', image: '/images/product/frp-cover/PIC1.webp', title: 'Ducting 1' },
  ];

  const filteredItems = selectedFilter === 'all' 
    ? galleryItems 
    : galleryItems.filter(item => item.category === selectedFilter);

  return (
    <div className="gallery-page">
      <div className="inner-bg">
        <div className="container">
          <div className="row">
            <div className="col-md-12">
              <div className="inner-head">
                <h1>OUR PRODUCTS GALLERY</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="inn-gallery">
        <div className="container">
          <div className="row prod-inn-gap">
            <div className="col-md-offset-6 col-sm-offset-6 col-md-6 col-sm-6">
              <div className="filter-buttons">
                <button 
                  className={`filter-btn ${selectedFilter === 'all' ? 'active' : ''}`}
                  onClick={() => setSelectedFilter('all')}
                >
                  All Products
                </button>
                <button 
                  className={`filter-btn ${selectedFilter === 'tanks' ? 'active' : ''}`}
                  onClick={() => setSelectedFilter('tanks')}
                >
                  Tanks
                </button>
                <button 
                  className={`filter-btn ${selectedFilter === 'pipes' ? 'active' : ''}`}
                  onClick={() => setSelectedFilter('pipes')}
                >
                  Pipes
                </button>
                <button 
                  className={`filter-btn ${selectedFilter === 'scrubbers' ? 'active' : ''}`}
                  onClick={() => setSelectedFilter('scrubbers')}
                >
                  Scrubbers
                </button>
                <button 
                  className={`filter-btn ${selectedFilter === 'vessels' ? 'active' : ''}`}
                  onClick={() => setSelectedFilter('vessels')}
                >
                  Vessels
                </button>
              </div>
            </div>
          </div>

          <div className="row g-4">
            {filteredItems.map((item) => (
              <div key={item.id} className="col-sm-6 col-md-4 col-lg-3 gallery-product">
                <div className="card h-100">
                  <a href={item.image} data-lightbox="gallery" data-title={item.title}>
                    <img src={item.image} className="card-img-top img-fit" alt={item.title} />
                  </a>
                  <div className="card-body">
                    <p className="card-text">{item.title}</p>
                  </div>
                </div>
              </div>
            ))}
          </div>

          {filteredItems.length === 0 && (
            <div className="row">
              <div className="col-12 text-center py-5">
                <p style={{ fontSize: '18px', color: '#666' }}>No products found in this category.</p>
              </div>
            </div>
          )}
        </div>
      </div>
    </div>
  );
}

export default GalleryPage;
