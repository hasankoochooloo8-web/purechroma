<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pure Chroma - Precision Artistic Pigments & Workshops</title>
  <link rel="icon" href="favicon.ico">
  <style>
    :root {
      --primary-color: #26a0d8;
      --primary-light-color: #84c3e0;
      --primary-dark-color: #1a7097;
      --secondary-color: #3f57bf;
      --accent-color: #dc6e3b;
      --hero-bg-color: #1a1a2e;
      --hero-text-color: #ffffff;
      --card-shadow: 0 10px 30px rgba(0,0,0,0.2);
      --border-radius: 8px;
      --section-spacing: 6rem;
      --font-heading: 'Lora', serif;
      --font-body: 'Montserrat', sans-serif;
    }

    body {
      font-family: var(--font-body);
      line-height: 1.6;
      margin: 0;
      padding: 0;
      color: #333;
      background-color: #f9f9f9;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--font-heading);
      font-weight: 700;
      color: #1a1a1a;
      margin-top: 0;
      margin-bottom: 1rem;
    }

    a {
      color: var(--primary-color);
      text-decoration: none;
      transition: color 0.3s ease;
    }

    a:hover {
      color: var(--primary-dark-color);
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    header {
      background-color: var(--hero-bg-color);
      padding: 1rem 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .navbar-brand {
      color: var(--hero-text-color);
      font-family: var(--font-heading);
      font-size: 1.8rem;
      font-weight: 700;
      padding: 0.5rem 0;
    }

    .nav-links {
      display: none; /* Hidden by default for mobile */
      width: 100%;
      flex-direction: column;
      text-align: center;
      margin-top: 1rem;
    }

    .nav-links.active {
      display: flex;
    }

    .nav-links a {
      color: var(--primary-light-color);
      padding: 0.8rem 1rem;
      transition: background-color 0.3s ease;
    }

    .nav-links a:hover {
      background-color: rgba(255,255,255,0.1);
      color: var(--hero-text-color);
    }

    .nav-toggle {
      background: none;
      border: none;
      color: var(--hero-text-color);
      font-size: 1.5rem;
      cursor: pointer;
      display: block; /* Show on mobile */
    }

    .cta-button-nav {
      margin-left: auto;
      background-color: var(--accent-color);
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 50px;
      text-transform: uppercase;
      font-weight: 700;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .cta-button-nav:hover {
      background-color: darken(var(--accent-color), 10%);
      transform: translateY(-2px);
    }

    /* Desktop styles */
    @media (min-width: 768px) {
      .nav-links {
        display: flex;
        flex-direction: row;
        width: auto;
        margin-top: 0;
      }

      .nav-toggle {
        display: none;
      }
      
      .cta-button-nav {
         margin-left: 1.5rem; /* Add spacing on desktop */
      }
    }

    .hero-section {
      background-color: var(--hero-bg-color);
      color: var(--hero-text-color);
      padding: var(--section-spacing) 0;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .hero-content {
      padding: 1.5rem;
      max-width: 900px;
    }

    .hero-content h1 {
      color: var(--hero-text-color);
      font-size: 2.8rem;
      margin-bottom: 1rem;
      line-height: 1.2;
    }

    .hero-content p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
      color: var(--primary-light-color);
    }

    .hero-ctas {
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .cta-button {
      background-color: var(--primary-color);
      color: var(--hero-text-color);
      padding: 1rem 2rem;
      border-radius: 50px;
      text-transform: uppercase;
      font-weight: 700;
      transition: background-color 0.3s ease, transform 0.2s ease;
      display: inline-block;
      border: 2px solid transparent;
    }

    .cta-button:hover {
      background-color: var(--primary-dark-color);
      transform: translateY(-2px);
    }

    .cta-button.outline {
      background-color: transparent;
      border-color: var(--primary-color);
      color: var(--primary-color);
    }

    .cta-button.outline:hover {
      background-color: var(--primary-color);
      color: var(--hero-text-color);
      transform: translateY(-2px);
    }

    .hero-image {
      margin-top: 3rem;
      max-width: 100%;
      height: auto;
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      transition: transform 0.3s ease-in-out;
    }
    
    .hero-image:hover {
        transform: scale(1.02);
    }

    section {
      padding: var(--section-spacing) 0;
      text-align: center;
    }

    .section-heading {
      font-size: 2.5rem;
      margin-bottom: 3rem;
      color: #1a1a1a;
      position: relative;
      display: inline-block;
    }

    .section-heading::after {
      content: '';
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: -10px;
      width: 60px;
      height: 4px;
      background-color: var(--accent-color);
      border-radius: 2px;
    }

    .bento-grid {
      display: grid;
      gap: 1.5rem;
      grid-template-columns: 1fr; /* Default to single column for mobile */
      text-align: left;
    }

    @media (min-width: 768px) {
      .bento-featured {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, minmax(200px, 1fr));
      }
      .bento-featured .tall-featured-card {
        grid-row: span 2;
      }
      .bento-3-1 {
        grid-template-columns: repeat(3, 1fr);
      }
      .bento-3-1 .wide-bottom-card {
        grid-column: span 3;
      }
    }

    .card {
      background-color: white;
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: transform 0.3s ease;
    }

    .card.hover-effect:hover {
      transform: scale(1.02);
    }

    .card-image {
      max-width: 100%;
      height: auto;
      border-radius: var(--border-radius);
      margin-bottom: 1rem;
    }

    .card h3 {
      font-size: 1.7rem;
      color: var(--primary-dark-color);
      margin-bottom: 0.75rem;
    }

    .card p {
      color: #555;
      font-size: 1rem;
      margin-bottom: 1rem;
    }

    .card .icon-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 64px;
      height: 64px;
      border: 2px solid var(--primary-color);
      border-radius: 50%;
      margin: 0 auto 1.5rem auto;
      flex-shrink: 0;
    }

    .card .icon-container svg {
      width: 40px;
      height: 40px;
      color: var(--primary-color);
    }

    .small-card-top .icon-container { margin-top: 1rem; }
    .small-card-bottom .icon-container { margin-top: 1rem; }

    .price {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--accent-color);
        margin-top: 1rem;
    }

    .product-cta {
        display: inline-block;
        margin-top: 1.5rem;
        padding: 0.8rem 1.8rem;
        background-color: var(--secondary-color);
        color: white;
        border-radius: 50px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .product-cta:hover {
        background-color: darken(var(--secondary-color), 10%);
        transform: translateY(-2px);
    }

    .wide-bottom-card {
        text-align: center;
        padding: 3rem;
        background-image: linear-gradient(135deg, var(--secondary-color), var(--primary-dark-color));
        color: white;
    }

    .wide-bottom-card h3 {
        color: white;
    }

    .wide-bottom-card p {
        color: var(--primary-light-color);
    }

    .wide-bottom-card .cta-button {
      background-color: var(--accent-color);
      color: white;
      border-color: var(--accent-color);
      margin-top: 2rem;
    }

    .testimonials-grid {
      display: grid;
      gap: 1.5rem;
      grid-template-columns: 1fr;
    }

    @media (min-width: 768px) {
      .testimonials-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    .testimonial-card {
      background-color: white;
      border-radius: var(--border-radius);
      box-shadow: var(--card-shadow);
      padding: 2rem;
      text-align: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: transform 0.3s ease;
    }

    .testimonial-card:hover {
      transform: translateY(-5px);
    }

    .testimonial-card img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 1.5rem;
      border: 3px solid var(--primary-color);
    }

    .testimonial-card blockquote {
      font-style: italic;
      color: #666;
      margin-bottom: 1.5rem;
      font-size: 1.1rem;
    }

    .testimonial-card .author {
      font-weight: 700;
      color: var(--primary-dark-color);
      font-size: 1rem;
    }

    /* Footer styling */
    footer {
      background-color: #212529; /* Dark background for contrast */
      color: #ffffff;
      padding: var(--section-spacing) 0 2rem 0;
      text-align: center;
    }

    footer .container {
      display: grid;
      gap: 2rem;
      grid-template-columns: 1fr;
    }

    @media (min-width: 768px) {
      footer .container {
        grid-template-columns: repeat(3, 1fr);
        align-items: start;
        text-align: left;
      }
    }

    footer h4 {
      color: var(--primary-light-color);
      margin-bottom: 1rem;
      font-size: 1.3rem;
    }

    footer p, footer a {
      color: #cccccc;
      font-size: 0.95rem;
    }

    footer a:hover {
      color: var(--primary-color);
    }

    footer .brand-col {
      font-family: var(--font-heading);
      font-size: 1.5rem;
      font-weight: 700;
      color: white;
      margin-bottom: 1rem;
    }

    footer .legal-links {
      margin-top: 1.5rem;
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      flex-wrap: wrap;
    }

     @media (min-width: 768px) {
        footer .legal-links {
            justify-content: flex-start;
        }
     }
    footer .legal-text {
      margin-top: 2rem;
      font-size: 0.85rem;
      color: #888;
    }

    /* Cookie Consent */
    #cookie-consent-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #333;
      color: white;
      padding: 1rem 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      z-index: 10000;
      box-shadow: 0 -2px 10px rgba(0,0,0,0.2);
    }
    #cookie-consent-banner p {
      margin: 0;
      flex-grow: 1;
      font-size: 0.9rem;
    }
    #cookie-consent-banner button {
      background-color: var(--primary-color);
      color: white;
      border: none;
      padding: 0.75rem 1.5rem;
      border-radius: var(--border-radius);
      cursor: pointer;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    #cookie-consent-banner button:hover {
      background-color: var(--primary-dark-color);
    }
  </style>
  
  
  
</head>
<body>
  <header>
    <div class="container navbar">
      <a href="#" class="navbar-brand">Pure Chroma</a>
      <button class="nav-toggle" aria-label="Toggle navigation">&#9776;</button>
      <nav class="nav-links">
        <a href="#services">Services</a>
        <a href="#products">Products</a>
        <a href="#workshops">Workshops</a>
        <a href="#reviews">Reviews</a>
      </nav>
      <a href="#products" class="cta-button-nav">Shop Now</a>
    </div>
  </header>
<main>
    <section id="hero" class="hero-section">
      <div class="container hero-content">
        <h1>Empower Your Art with Precision Pigments</h1>
        <p>Pure Chroma engineers professional-grade artistic pigments, algorithmic color theory workshops, and custom palette mixing for modern creators.</p>
        <div class="hero-ctas">
          <a href="#products" class="cta-button">Explore Pigments</a>
          <a href="#workshops" class="cta-button outline">Book a Workshop</a>
        </div>
      </div>
      <img src="images/hero-art-pigments.jpeg" alt="High quality artistic pigments display by Pure Chroma" width="1024" height="512" class="hero-image">
    </section>

    <section id="services">
      <div class="container">
        <h2 class="section-heading">The Pure Chroma Suite</h2>
        <div class="bento-grid bento-featured">
          <div class="card tall-featured-card hover-effect">
            <img src="images/custom-color-mixing.jpeg" alt="Spectrometric pigment mixing process at Pure Chroma" width="512" height="1024" class="card-image">
            <h3>Custom Color Mixing Engine</h3>
            <p>Utilizing advanced spectrometry and proprietary algorithms, we construct precise, repeatable pigment ratios tailored to your unique artistic vision. Our dedicated lab ensures seamless integration with your existing mediums, delivering unparalleled consistency and brilliance for your most ambitious projects.</p>
          </div>
          <div class="card small-card-top hover-effect">
            <div class="icon-container">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M11.48 2.499a.75.75 0 011.04 0l1.157 1.259a11.23 11.23 0 013.918 2.766c.389.284.698.81.559 1.291l-.234.708c-.201.603.224 1.292.857 1.292H20.25c.572 0 1.05.412 1.134.972.333 2.115-.783 4.1-2.657 5.378l-1.077.72-.25.167c-.438.291-.703.882-.559 1.442l.234.708c.201.603-.224 1.292-.857 1.292H15.75c-.573 0-1.05-.412-1.134-.972-.333-2.115.783-4.1 2.657-5.378l1.077-.72.25-.167c.438-.291.703-.882.559-1.442l-.234-.708c-.201-.603.224-1.292.857-1.292H20.25a.75.75 0 00.75-.75V8.25a.75.75 0 00-.75-.75h-.375c-.633 0-1.058-.689-.857-1.292l.234-.708c.14-.481-.169-1.007-.559-1.291a11.23 11.23 0 01-3.918-2.766l-1.157-1.259a.75.75 0 010-1.04zm-1.04 18.002z" clip-rule="evenodd" />
                <path d="M11.48 2.499a.75.75 0 011.04 0l1.157 1.259a11.23 11.23 0 013.918 2.766c.389.284.698.81.559 1.291l-.234.708c-.201.603.224 1.292.857 1.292H20.25c.572 0 1.05.412 1.134.972.333 2.115-.783 4.1-2.657 5.378l-1.077-.72-.25.167c-.438.291-.703.882-.559 1.442l-.234.708c-.201.603-.224 1.292-.857 1.292H15.75c-.573 0-1.05-.412-1.134-.972-.333-2.115.783-4.1 2.657-5.378l1.077-.72.25-.167c.438-.291.703-.882.559-1.442l-.234-.708c-.201-.603.224-1.292.857-1.292H20.25a.75.75 0 00.75-.75V8.25a.75.75 0 00-.75-.75h-.375c-.633 0-1.058-.689-.857-1.292l.234-.708c.14-.481-.169-1.007-.559-1.291a11.23 11.23 0 01-3.918-2.766l-1.157-1.259a.75.75 0 010-1.04z" clip-rule="evenodd" />
                <path d="M12 4.5V1c0-.207.168-.375.375-.375H14.25c.207 0 .375.168.375.375v3.5h-2.25zM12 4.5V1c0-.207-.168-.375-.375-.375H9.75c-.207 0-.375.168-.375.375v3.5h2.25zM12 15.5c-.207 0-.375.168-.375.375v3.5h.75v-3.5c0-.207-.168-.375-.375-.375zM12 15.5c-.207 0-.375.168-.375.375v3.5h.75v-3.5c0-.207-.168-.375-.375-.375zM12 1C6.477 1 2 5.477 2 11s4.477 10 10 10 10-4.477 10-10S17.523 1 12 1zm0 2.25c-.207 0-.375.168-.375.375v3.5h.75v-3.5c0-.207-.168-.375-.375-.375zM12 1.c-.207 0-.375.168-.375.375v3.5h.75v-3.5c0-.207-.168-.375-.375-.375zM12 1.c-.207 0-.375.168-.375.375v3.5h.75v-3.5c0-.207-.168-.375-.375-.375zM12 1. c-.207 0-.375.168-.375.375v3.5h.75v-3.5c0-.207-.168-.375-.375-.375zM12 1.25c-.207 0-.375.168-.375.375v3.5h.75v-3.5c0-.207-.168-.375-.375-.375zM12 1.25c-.207 0-.375.168-.375.375v3.5h.75v-3.5c0-.207-.168-.375-.375-.375z" />
              </svg>
            </div>
            <h3>PureChroma Pigment Library</h3>
            <p>Access hundreds of meticulously curated single-pigment compounds. We uphold zero fillers and stringent quality control, ensuring maximum lightfastness and color purity for enduring artistic works. Elevate your palette with pigments designed for longevity and impact.</p>
          </div>
          <div class="card small-card-bottom hover-effect">
            <div class="icon-container">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z" fill="currentColor"/>
                <path d="M12 4.5c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5 7.5-3.358 7.5-7.5-3.358-7.5-7.5-7.5zm.938 12.125h-.52c-.636 0-1.152-.516-1.152-1.152V10.23c0-.636.516-1.152 1.152-1.152h.52c.636 0 1.152.516 1.152 1.152v5.243c0 .636-.516 1.152-1.152 1.152zM12 8c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1z" fill="currentColor"/>
              </svg>
            </div>
            <h3>Color Theory API & Workshops</h3>
            <p>Engage with our interactive, data-driven workshops that decode the science of palettes. Learn to predict and control color interactions with empirical precision. Elevate your studio workflows and creative output through a deep understanding of advanced color theory principles.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="products">
      <div class="container">
        <h2 class="section-heading">High-Performance Materials</h2>
        <div class="bento-grid bento-3-1">
          <div class="card hover-effect">
            <img src="images/product-starter-array.jpeg" alt="Starter pigment array" width="384" height="384" class="card-image">
            <h3>Starter Array</h3>
            <p>An intelligently curated collection of essential primary and secondary pigments, designed to provide a robust foundation for any serious artist's studio. Perfect for exploring fundamental color mixing and theory with trusted, high-quality materials.</p>
            <p class="price">$120</p>
            <a href="#" class="product-cta">Add to Cart</a>
          </div>
          <div class="card hover-effect">
            <img src="images/product-professional-matrix.jpeg" alt="Professional pigment matrix collection" width="384" height="384" class="card-image">
            <h3>Professional Matrix</h3>
            <p>An extended gamut featuring rare earth minerals and advanced synthetics. This set is engineered for discerning professionals who demand an expansive and nuanced palette capable of achieving sophisticated effects and unparalleled visual depth.</p>
            <p class="price">$350</p>
            <a href="#" class="product-cta">Add to Cart</a>
          </div>
          <div class="card hover-effect">
            <img src="images/product-workshop-pass.jpeg" alt="Digital color theory dashboard" width="384" height="384" class="card-image">
            <h3>Workshop Access Pass</h3>
            <p>Unlock on-demand digital learning modules and exclusive live studio sessions with our expert color scientists. Learn algorithmic color theory, advanced mixing techniques, and expand your creative potential from anywhere.</p>
            <p class="price">$85/mo</p>
            <a href="#" class="product-cta">Enroll Now</a>
          </div>
          <div class="card wide-bottom-card">
            <h3>Bespoke Enterprise Curation</h3>
            <p>Need a proprietary color for a massive art installation, a brand identity, or a unique product line? The Pure Chroma lab specializes in synthesizing exclusive chemical formulas, meticulously matched to your precise specifications, with all intellectual property rights bound directly to your ownership.</p>
            <a href="#" class="cta-button">Contact the Lab</a>
          </div>
        </div>
      </div>
    </section>

    <section id="reviews">
      <div class="container">
        <h2 class="section-heading">Trusted by Professional Studios</h2>
        <div class="testimonials-grid">
          <div class="testimonial-card">
            <img src="images/testimonial-artist-one.jpeg" alt="Portrait of Elena V - Fine Artist" width="128" height="128">
            <blockquote>"Pure Chroma completely overhauled my mixing pipeline. I used to spend so much time fighting muddy colors and inconsistent results; now, I spend significantly more time actually producing impactful work. Their precision is a game-changer!"</blockquote>
            <p class="author">Elena V., Fine Artist, Brooklyn, NY</p>
          </div>
          <div class="testimonial-card">
            <img src="images/testimonial-artist-two.jpeg" alt="Portrait of Mark D - Lead Designer" width="128" height="128">
            <blockquote>"The color theory workshop was structured perfectly, bridging the gap between artistic intuition and scientific understanding. It felt like a technical masterclass that scaled our design firm's output quality by at least 10x. Highly recommend for any creative professional."</blockquote>
            <p class="author">Mark D., Lead Designer, Los Angeles, CA</p>
          </div>
          <div class="testimonial-card">
            <img src="images/testimonial-artist-three.jpeg" alt="Portrait of Sarah L - Conceptual Sculptor" width="128" height="128">
            <blockquote>"Bespoke mixing from Pure Chroma gave my recent gallery exhibition the exact conceptual hue I had spent years searching for. The depth and integrity of the color were simply pure brilliance, resonating deeply with critics and collectors alike."</blockquote>
            <p class="author">Sarah L., Conceptual Sculptor, London, UK</p>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer>
    <div class="container">
      <div class="footer-col brand-col">
        Pure Chroma
        <p style="margin-top:0.5rem; font-size: 0.9em;">Advancing the science of art.</p>
      </div>
      <div class="footer-col">
        <h4>Contact Us</h4>
        <p>East New York Avenue, New York, NY 11213, USA</p>
        <p>Phone: +1 305-278-0586</p>
        <p>Email: <a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>">info@<?php echo $_SERVER['HTTP_HOST']; ?></a></p>
      </div>
      <div class="footer-col">
        <h4>Quick Links</h4>
        <p><a href="#services">Our Services</a></p>
        <p><a href="#products">Our Products</a></p>
        <p><a href="#workshops">Workshops & Learning</a></p>
        <p><a href="#reviews">Customer Reviews</a></p>
      </div>
    </div>
    <div class="container">
      <div class="legal-links">
        <a href="./privacy.html">Privacy Policy</a>
        <a href="./tos.html">Terms of Service</a>
      </div>
      <p class="legal-text">&copy; 2024 Pure Chroma. All rights reserved.</p>
    </div>
    
    <div id="cookie-consent-banner" style="display: none;">
      <p>We use cookies to ensure you get the best experience on our website. By continuing to use this site, you agree to our <a href="./privacy.html" style="color: var(--accent-color);">Privacy Policy</a>.</p>
      <button id="accept-cookies">Accept</button>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const navToggle = document.querySelector('.nav-toggle');
      const navLinks = document.querySelector('.nav-links');
      const cookieBanner = document.getElementById('cookie-consent-banner');
      const acceptCookiesBtn = document.getElementById('accept-cookies');
      const cookieName = 'consent_Pure Chroma_cookies'; // Unique cookie name prefix

      navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
      });

      // Close mobile nav when a link is clicked
      navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          if (navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
          }
        });
      });

      // Cookie Consent Logic
      function setCookie(name, value, days) {
        let expires = "";
        if (days) {
          let date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
      }

      function getCookie(name) {
        let nameEQ = name + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) === ' ') c = c.substring(1, c.length);
          if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
      }

      if (!getCookie(cookieName)) {
        cookieBanner.style.display = 'flex';
      }

      acceptCookiesBtn.addEventListener('click', () => {
        setCookie(cookieName, 'accepted', 90); // Store for 90 days
        cookieBanner.style.display = 'none';
      });
    });
  </script>
</body>
</html>