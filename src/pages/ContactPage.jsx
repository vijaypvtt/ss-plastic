import React, { useState } from 'react';
import './ContactPage.css';

function ContactPage() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    phone: '',
    message: ''
  });

  const handleChange = (e) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log('Form submitted:', formData);
    alert('Thank you for your message! We will get back to you soon.');
    setFormData({ name: '', email: '', phone: '', message: '' });
  };

  return (
    <div className="contact-page">
      <div className="inner-bg">
        <div className="container">
          <div className="row">
            <div className="col-md-12">
              <div className="inner-head">
                <h1>CONTACT US</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div className="inn-contact">
        <div className="container">
          <div className="row">
            <div className="col-lg-6 col-md-12 contact-left">
              <div className="contact-head">
                <h4>Get In Touch</h4>
                <p>Send us a message and we'll respond as soon as possible</p>
              </div>

              <form onSubmit={handleSubmit}>
                <input
                  type="text"
                  name="name"
                  placeholder="Your Name"
                  value={formData.name}
                  onChange={handleChange}
                  required
                />
                <input
                  type="email"
                  name="email"
                  placeholder="Your Email"
                  value={formData.email}
                  onChange={handleChange}
                  required
                />
                <input
                  type="tel"
                  name="phone"
                  placeholder="Phone Number"
                  value={formData.phone}
                  onChange={handleChange}
                />
                <textarea
                  name="message"
                  placeholder="Your Message"
                  rows="5"
                  value={formData.message}
                  onChange={handleChange}
                  required
                ></textarea>
                <button type="submit">Send Message</button>
              </form>
            </div>

            <div className="col-lg-6 col-md-12 cont-right">
              <h2>Contact Information</h2>

              <div className="info-block">
                <i className="fa fa-map-marker"></i>
                <div>
                  <strong>Address</strong><br/>
                  Vapi, Gujarat 396195, India
                </div>
              </div>

              <div className="info-block">
                <i className="fa fa-phone"></i>
                <div>
                  <strong>Phone</strong><br/>
                  <a href="tel:+919825850501">+91-9825850501</a><br/>
                  <a href="tel:+919879950501">+91-9879950501</a>
                </div>
              </div>

              <div className="info-block">
                <i className="fa fa-envelope"></i>
                <div>
                  <strong>Email</strong><br/>
                  <a href="mailto:info@ss-plastic.com">info@ss-plastic.com</a>
                </div>
              </div>

              <div className="info-block">
                <i className="fa fa-clock-o"></i>
                <div>
                  <strong>Business Hours</strong><br/>
                  Monday - Friday: 9:00 AM - 6:00 PM<br/>
                  Saturday: 10:00 AM - 4:00 PM<br/>
                  Sunday: Closed
                </div>
              </div>

              <div className="tall"></div>

              <div className="gst">
                <strong>GST:</strong> 24BIRPS4800G2Z3
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default ContactPage;
