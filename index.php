<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ironclad Solus - Advanced Manufacturing Solutions</title>
  <meta name="description" content="Ironclad Solus (Solus Society) specializes in precision machining, bespoke component fabrication, industrial automation, and R&D for next-generation manufacturing in New York.">
  <link rel="icon" href="favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: rgb(228, 26, 60);
      --primary-light-color: rgb(231, 125, 143);
      --primary-dark-color: rgb(159, 18, 42);
      --secondary-color: rgb(202, 102, 52);
      --accent-color: rgb(49, 230, 200);
      --background-color: rgb(255, 255, 255);
      --text-color: rgb(15, 15, 15);
      --glass-background: rgba(255, 255, 255, 0.7);
      --border-radius: 24px;
      --icon-container-radius: 50%;
      --section-spacing: 1.5rem;
      --heading-font: 'Crimson Pro', serif;
      --body-font: 'Space Grotesk', monospace;
      --heading-weight: 700;
      --body-weight: 300;
    }

    body {
      font-family: var(--body-font);
      font-weight: var(--body-weight);
      color: var(--text-color);
      background-color: var(--background-color);
      line-height: 1.6;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: var(--heading-font);
      font-weight: var(--heading-weight);
      color: var(--primary-dark-color);
    }

    .btn-brutalist {
      background: linear-gradient(90deg, var(--primary-dark-color) 0%, var(--primary-color) 100%);
      color: var(--background-color);
      border: 3px solid var(--primary-dark-color);
      padding: 0.8rem 2rem;
      font-weight: var(--heading-weight);
      text-transform: uppercase;
      letter-spacing: 1px;
      border-radius: 0; 
      transition: all 0.3s ease-in-out;
      box-shadow: 5px 5px 0px var(--accent-color);
    }

    .btn-brutalist:hover {
      background: linear-gradient(90deg, var(--primary-color) 0%, var(--primary-dark-color) 100%);
      color: var(--background-color);
      border-color: var(--accent-color);
      box-shadow: 2px 2px 0px var(--secondary-color);
      transform: translate(3px, 3px);
    }
    
    .navbar {
      background-color: var(--primary-dark-color);
      border-bottom: 3px solid var(--accent-color);
    }
    .navbar-brand {
      color: var(--background-color) !important;
      font-family: var(--heading-font);
      font-weight: var(--heading-weight);
      font-size: 1.8rem;
      letter-spacing: 1px;
    }
    .navbar-nav .nav-link {
      color: var(--background-color) !important;
      font-family: var(--body-font);
      font-weight: var(--body-weight);
      text-transform: uppercase;
      padding: 0.75rem 1rem;
      transition: color 0.3s ease, background-color 0.3s ease;
    }
    .navbar-nav .nav-link:hover {
      color: var(--accent-color) !important;
      background-color: rgba(255, 255, 255, 0.1);
    }

    .section-spacing {
      padding-top: calc(var(--section-spacing) * 2);
      padding-bottom: calc(var(--section-spacing) * 2);
    }

    .card-glass {
      background: var(--glass-background);
      border: 4px solid var(--primary-color);
      border-radius: var(--border-radius);
      backdrop-filter: blur(10px);
      box-shadow: 10px 10px 0px rgba(0, 0, 0, 0.1);
      transition: border-color 0.3s ease-in-out, transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card-glass:hover {
      border-color: var(--accent-color);
      transform: translateY(-5px);
      box-shadow: 15px 15px 0px rgba(0, 0, 0, 0.15);
    }

    .icon-container {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        background-color: var(--primary-light-color);
        border-radius: var(--icon-container-radius);
        border: 2px solid var(--primary-dark-color);
        margin-bottom: 1rem;
        transition: background-color 0.3s ease;
    }

    .icon-container:hover {
        background-color: var(--accent-color);
    }

    .icon-container svg {
        fill: var(--background-color);
        width: 48px;
        height: 48px;
    }

    .brutalist-border-bottom {
      border-bottom: 5px solid var(--accent-color);
      padding-bottom: 1rem;
      margin-bottom: 2rem;
      display: inline-block;
    }

    .img-zoom-hover {
      transition: transform 0.6s ease-in-out;
    }
    .img-zoom-hover:hover {
      transform: scale(1.03);
    }

    .hero-image-offset {
      position: relative;
      background-color: var(--primary-color); 
      padding: 1rem; 
      border: 4px solid var(--primary-dark-color);
      box-shadow: -15px 15px 0px var(--accent-color);
    }

    .hero-image-offset img {
      display: block; 
      width: 100%;
      height: auto;
      transform: translate(-15px, -15px); /* Offset the image within its container */
      box-shadow: 5px 5px 10px rgba(0,0,0,0.2);
    }

    .form-control, .form-select {
        border-radius: 0;
        border: 2px solid var(--primary-dark-color);
        background-color: var(--background-color);
        color: var(--text-color);
        padding: 0.75rem 1rem;
        font-family: var(--body-font);
    }
    .form-control:focus, .form-select:focus {
        border-color: var(--accent-color);
        box-shadow: 0 0 0 0.25rem rgba(49, 230, 200, 0.25);
        background-color: var(--background-color);
        color: var(--text-color);
    }
    .form-label {
        font-family: var(--heading-font);
        font-weight: var(--heading-weight);
        color: var(--primary-dark-color);
        margin-bottom: 0.5rem;
    }

    .footer {
      background-color: var(--primary-dark-color);
      color: var(--background-color);
      border-top: 3px solid var(--accent-color);
    }
    .footer a {
      color: var(--accent-color);
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .footer a:hover {
      color: var(--primary-light-color);
    }

    /* Cookie Consent */
    #cookieConsent {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: rgba(15, 15, 15, 0.9);
        color: var(--background-color);
        padding: 1rem;
        display: none; /* Hidden by default */
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
        border-top: 3px solid var(--accent-color);
    }
    #cookieConsent button {
        background-color: var(--accent-color);
        color: var(--text-color);
        border: none;
        padding: 0.5rem 1.5rem;
        cursor: pointer;
        font-weight: var(--heading-weight);
        border-radius: 0;
        transition: background-color 0.3s ease;
    }
    #cookieConsent button:hover {
        background-color: var(--primary-light-color);
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="#">Ironclad Solus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          Menu 
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="var(--background-color)" class="bi bi-list">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#research">R&D</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
<main>
    <section id="home" class="hero-section py-5 section-spacing">
      <div class="container">
        <div class="row align-items-center flex-column-reverse flex-md-row">
          <div class="col-12 col-md-7 mb-4 mb-md-0 pe-md-4">
            <h1 class="display-3 brutalist-border-bottom">Forging the Future with Ironclad Solus</h1>
            <p class="lead" style="font-family: var(--body-font); font-weight: var(--body-weight);">Precision. Automation. Complete Industrial Dominance.</p>
            <p class="fs-5" style="font-family: var(--body-font); font-weight: var(--body-weight);">Join the Solus Society. We architect advanced manufacturing solutions that shatter conventional limitations through bespoke component fabrication and uncompromising industrial automation.</p>
            <a href="#contact" class="btn btn-brutalist mt-3">Initialize Project</a>
          </div>
          <div class="col-12 col-md-5 ps-md-4">
            <div class="hero-image-offset img-zoom-hover">
                <img src="images/hero-industrial-fabrication.jpeg" alt="Advanced robotics machining precision metal" width="640" height="768" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="section-spacing bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 mb-4 mb-md-0 pe-md-4">
            <h2 class="brutalist-border-bottom">The Ironclad Solus Manifesto</h2>
            <p class="fs-5" style="font-family: var(--body-font); font-weight: var(--body-weight);">Located at the nexus of innovation on Jackie Robinson Parkway, New York, Ironclad Solus is the bleeding edge of industrial progression. We don't just supply parts; we integrate end-to-end automated solutions that redefine assembly lines and product life cycles. Raw power meets exact calculation.</p>
          </div>
          <div class="col-12 col-md-6 ps-md-4">
            <img src="images/about-solus-facility.jpeg" alt="Ironclad Solus headquarters and manufacturing facility" width="896" height="512" class="img-fluid brutalist-border-bottom img-zoom-hover" style="border-bottom: none; border: 4px solid var(--primary-dark-color); box-shadow: 10px 10px 0px var(--accent-color); border-radius: var(--border-radius);">
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="section-spacing">
      <div class="container">
        <h2 class="text-center mb-5 brutalist-border-bottom">Core Engineering Capabilities</h2>
        <div class="row g-4">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card-glass h-100 p-4 text-center">
              <div class="icon-container mx-auto">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                </svg>
              </div>
              <h3 class="h4 mt-3">Precision Machining</h3>
              <p style="font-family: var(--body-font); font-weight: var(--body-weight);">Sub-micron accuracy CNC milling and turning for mission-critical aerospace, medical, and defense applications.</p>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card-glass h-100 p-4 text-center">
              <div class="icon-container mx-auto">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-2-9h4v2h-4v-2zm-2-4h8v2H8V7zm-2 8h12v2H6v-2z"/>
                </svg>
              </div>
              <h3 class="h4 mt-3">Bespoke Component Fabrication</h3>
              <p style="font-family: var(--body-font); font-weight: var(--body-weight);">Customized metallurgy and advanced synthetics shaping tailored to unique operational extremes.</p>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="card-glass h-100 p-4 text-center">
              <div class="icon-container mx-auto">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/>
                </svg>
              </div>
              <h3 class="h4 mt-3">Industrial Automation</h3>
              <p style="font-family: var(--body-font); font-weight: var(--body-weight);">Seamless PLC integration, robotic workcell deployment, and AI-driven predictive maintenance pipelines.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="research" class="section-spacing bg-light">
      <div class="container">
        <div class="row align-items-center flex-column-reverse flex-md-row">
          <div class="col-12 col-md-6 mb-4 mb-md-0 pe-md-4">
            <h2 class="brutalist-border-bottom">R&D for Next-Gen Manufacturing</h2>
            <p class="fs-5" style="font-family: var(--body-font); font-weight: var(--body-weight);">Our laboratories are conceptualizing the tools of tomorrow. From generative AI topographies to experimental material sciences, Ironclad Solus engineers are actively prototyping what the rest of the industry will adapt a decade from now.</p>
            <ul class="list-unstyled mt-4 fs-5" style="font-family: var(--body-font); font-weight: var(--body-weight);">
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--primary-dark-color)" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/></svg> Generative Design Algorithms</li>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--primary-dark-color)" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/></svg> Hyper-alloy testing chambers</li>
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="var(--primary-dark-color)" class="bi bi-arrow-right-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/></svg> Autonomous swarm assembly robotics</li>
            </ul>
          </div>
          <div class="col-12 col-md-6 ps-md-4">
            <img src="images/research-development-lab.jpeg" alt="Engineers working on next-generation manufacturing technology" width="1024" height="640" class="img-fluid brutalist-border-bottom img-zoom-hover" style="border-bottom: none; border: 4px solid var(--primary-dark-color); box-shadow: -10px 10px 0px var(--accent-color); border-radius: var(--border-radius);">
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="section-spacing">
      <div class="container">
        <h2 class="text-center mb-5 brutalist-border-bottom">Industry Validation</h2>
        <div class="row g-4 justify-content-center">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card-glass h-100 p-4">
              <p class="lead" style="font-family: var(--body-font); font-weight: var(--body-weight);">"Ironclad Solus radically overhauled our assembly protocols. Down-time reduced by 84%."</p>
              <footer class="blockquote-footer mt-3">Marcus V. <cite title="Source Title">AeroDyne Systems</cite></footer>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card-glass h-100 p-4">
              <p class="lead" style="font-family: var(--body-font); font-weight: var(--body-weight);">"The bespoke fabrication tolerances achieved by their team defy standard metallurgical capabilities."</p>
              <footer class="blockquote-footer mt-3">Dr. Sarah L. <cite title="Source Title">MedTech Prosthetics</cite></footer>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="card-glass h-100 p-4">
              <p class="lead" style="font-family: var(--body-font); font-weight: var(--body-weight);">"Their automation integration is brutal in its efficiency. Absolute operational supremacy."</p>
              <footer class="blockquote-footer mt-3">James T. <cite title="Source Title">Global Logistics Corp</cite></footer>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="section-spacing bg-light">
      <div class="container">
        <h2 class="text-center mb-3 brutalist-border-bottom">Initiate Protocol</h2>
        <p class="lead text-center mb-5" style="font-family: var(--body-font); font-weight: var(--body-weight);">Connect with Ironclad Solus Engineering for your next critical project.</p>
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <form action="#" method="POST" class="needs-validation card-glass p-4" style="border: 4px solid var(--secondary-color); box-shadow: -10px 10px 0px var(--primary-dark-color);">
              <div class="mb-3">
                <label for="name" class="form-label">Identification (Name)</label>
                <input type="text" class="form-control" id="name" placeholder="Enter full name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Comms Channel (Email)</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email address" required>
              </div>
              <div class="mb-4">
                <label for="projectParameters" class="form-label">Project Parameters</label>
                <textarea class="form-control" id="projectParameters" rows="5" placeholder="Detail your fabrication or automation requirements" required></textarea>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-brutalist">Transmit Data</button>
              </div>
            </form>
            <div class="contact-details text-center mt-5">
              <h3 class="h4 brutalist-border-bottom">Direct Channels</h3>
              <p style="font-family: var(--body-font); font-weight: var(--body-weight);">
                <strong>Address:</strong> Jackie Robinson Parkway, New York, New York, 11207, USA<br>
                <strong>Phone:</strong> <a href="tel:+13052242516" class="text-decoration-none" style="color: var(--primary-dark-color);">+1 (305) 224-2516</a><br>
                <strong>Email:</strong> <a href="mailto:info@ironcladsolus.com" class="text-decoration-none" style="color: var(--primary-dark-color);">info@ironcladsolus.com</a>
              </p>
              <div class="map-container mt-4" style="border: 4px solid var(--primary-dark-color); box-shadow: 10px 10px 0px var(--accent-color); border-radius: var(--border-radius); overflow: hidden;">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12097.353457187652!2d-73.89679205!3d40.69747965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25f4b5f8f8ed9%3A0x6b8c9d4b1f6d3f2a!2sBushwick%2C%20Brooklyn%2C%20NY!5e0!3m2!1sen!2sus!4v1701234567890!5m2!1sen!2sus" 
                  width="100%" 
                  height="450" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy" 
                  referrerpolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer class="footer py-4">
    <div class="container text-center">
      <p class="mb-1">&copy; 2024 Ironclad Solus. Implemented by Solus Society. All Rights Reserved.</p>
      <p class="mb-0">
        <a href="./privacy.html" class="me-3">Privacy Directory</a>
        <a href="./tos.html">Terms of Fabrication</a>
      </p>
    </div>
  </footer>

  <div id="cookieConsent" class="d-flex align-items-center justify-content-between">
    <p class="mb-0 me-3" style="font-size: 0.9rem;">This site deploys essential cookies to ensure optimal functionality. By clicking "Accept", you consent to our use of these vital computational modules.</p>
    <button id="acceptCookies">Accept</button>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const cookiePrefix = 'consent_'; 
      const cookieName = cookiePrefix + Math.random().toString(36).substring(2, 15); // Unique cookie name
      const cookieConsent = document.getElementById('cookieConsent');
      const acceptCookiesBtn = document.getElementById('acceptCookies');

      function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for(let i = 0; i < ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) === ' ') c = c.substring(1, c.length);
          if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
      }

      function setCookie(name, value, days) {
        let expires = "";
        if (days) {
          const date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "")  + expires + "; path=/";
      }

      if (!getCookie(cookieName)) {
        cookieConsent.style.display = 'flex';
      }

      acceptCookiesBtn.addEventListener('click', function() {
        setCookie(cookieName, 'accepted', 365); // Consent for 1 year
        cookieConsent.style.display = 'none';
      });

      // Simple scroll-based fade-in effect for sections
      const sections = document.querySelectorAll('section');
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
          } else {
             // Optional: reset opacity when out of view, or keep it to 1
             // entry.target.style.opacity = '0'; 
             // entry.target.style.transform = 'translateY(20px)';
          }
        });
      }, {
        threshold: 0.1, // Trigger when 10% of the section is visible
        rootMargin: '0px 0px -50px 0px' // Adjust sensitivity
      });

      sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
        observer.observe(section);
      });
    });
  </script>
</body>
</html>