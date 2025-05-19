@extends('layouts.public')

@section('title', 'About Us | Security Solutions')

@section('content')
  <section class="relative bg-slate-900 text-white py-24">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto text-center">
        <h1 class="text-5xl font-bold mb-6">Securing Your World with Advanced Technology</h1>
        <p class="text-xl text-slate-300">Leading provider of comprehensive security solutions since 2010</p>
      </div>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-slate-50 to-transparent"></div>
  </section>

  <!-- Mission Section -->
  <section class="py-20">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
          <h2 class="text-3xl font-bold text-slate-800 mb-6">Our Mission</h2>
          <p class="text-lg text-slate-600 mb-6">We are dedicated to providing cutting-edge security solutions that protect what matters most to you. With over a decade of experience, we combine advanced technology with exceptional service to deliver peace of mind.</p>
          <ul class="space-y-4">
            <li class="flex items-center text-slate-700">
              <span class="h-2 w-2 bg-emerald-500 rounded-full mr-3"></span>
              24/7 Professional Monitoring
            </li>
            <li class="flex items-center text-slate-700">
              <span class="h-2 w-2 bg-emerald-500 rounded-full mr-3"></span>
              Custom Security Solutions
            </li>
            <li class="flex items-center text-slate-700">
              <span class="h-2 w-2 bg-emerald-500 rounded-full mr-3"></span>
              Expert Installation & Support
            </li>
          </ul>
        </div>
        <div class="bg-white p-8 rounded-2xl shadow-lg">
          <div class="grid grid-cols-2 gap-6">
            <div class="text-center">
              <p class="text-4xl font-bold text-emerald-500 mb-2">1000+</p>
              <p class="text-slate-600">Installations</p>
            </div>
            <div class="text-center">
              <p class="text-4xl font-bold text-emerald-500 mb-2">99.9%</p>
              <p class="text-slate-600">Uptime</p>
            </div>
            <div class="text-center">
              <p class="text-4xl font-bold text-emerald-500 mb-2">24/7</p>
              <p class="text-slate-600">Support</p>
            </div>
            <div class="text-center">
              <p class="text-4xl font-bold text-emerald-500 mb-2">15+</p>
              <p class="text-slate-600">Years Experience</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technologies Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-slate-800 text-center mb-12">Our Technology Solutions</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="p-6 bg-slate-50 rounded-xl hover:shadow-lg transition-shadow">
          <h3 class="text-xl font-semibold text-slate-800 mb-4">IP Camera Systems</h3>
          <p class="text-slate-600">High-definition IP cameras with advanced features like motion detection, night vision, and remote viewing capabilities.</p>
        </div>
        <div class="p-6 bg-slate-50 rounded-xl hover:shadow-lg transition-shadow">
          <h3 class="text-xl font-semibold text-slate-800 mb-4">Access Control</h3>
          <p class="text-slate-600">Modern access control systems including biometric readers, key cards, and mobile access solutions.</p>
        </div>
        <div class="p-6 bg-slate-50 rounded-xl hover:shadow-lg transition-shadow">
          <h3 class="text-xl font-semibold text-slate-800 mb-4">AI-Powered Analytics</h3>
          <p class="text-slate-600">Smart video analytics for object detection, facial recognition, and unusual activity monitoring.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="py-20">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-slate-800 text-center mb-12">Why Choose Us</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="text-center">
          <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-slate-800 mb-2">Certified Experts</h3>
          <p class="text-slate-600">Professional installation and maintenance by certified technicians.</p>
        </div>
        <div class="text-center">
          <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-slate-800 mb-2">Fast Response</h3>
          <p class="text-slate-600">Quick response times for both installation and support services.</p>
        </div>
        <div class="text-center">
          <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-slate-800 mb-2">Competitive Pricing</h3>
          <p class="text-slate-600">Transparent pricing with flexible payment options available.</p>
        </div>
        <div class="text-center">
          <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-slate-800 mb-2">Custom Solutions</h3>
          <p class="text-slate-600">Tailored security systems designed for your specific needs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact CTA -->
  <section class="py-20 bg-slate-900 text-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-6">Ready to Secure Your Property?</h2>
      <p class="text-xl text-slate-300 mb-8">Contact us today for a free consultation and security assessment</p>
      <a href="#" class="inline-block bg-emerald-500 text-white px-8 py-3 rounded-lg font-medium hover:bg-emerald-600 transition-colors">
        Get Started
      </a>
    </div>
  </section>

  <footer class="bg-slate-800 text-white py-8">
    <div class="container mx-auto px-4 text-center">
      <p>© 2025 Security Solutions. All rights reserved.</p>
    </div>
  </footer>

  <script>
    // Fade-in animation for sections
    document.addEventListener('DOMContentLoaded', function() {
      const sections = document.querySelectorAll('section');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-section', 'is-visible');
          }
        });
      }, { threshold: 0.1 });

      sections.forEach(section => {
        section.classList.add('fade-in-section');
        observer.observe(section);
      });
    });
  </script>
</body>
</html>