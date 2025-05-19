{{-- resources/views/service/index.blade.php --}}
@extends('layouts.public')

@section('title', 'Service | Technocenter')

@section('content')
  <!-- Top Section -->
 <body class="bg-white p-6 sm:p-10">
  <!-- Top Section -->
  <section class="rounded-xl overflow-hidden flex flex-col sm:flex-row max-w-[1200px] mx-auto">
   <div class="flex flex-col justify-center px-6 py-10 sm:px-14 sm:py-16 flex-1 bg-gradient-to-r from-[#E6F0FF] to-[#7CA6FF]">
    <h1 class="text-[#1E2E42] font-semibold text-[26px] sm:text-[32px] leading-[1.2] max-w-[320px] sm:max-w-[400px]">
     Stay home &amp; get your secure intensive
    </h1>
    <p class="text-[#5B6B7B] text-[14px] mt-2 mb-4 max-w-[320px] sm:max-w-[400px]">
     Start You'r Daily Security with
     <span class="text-[#3CBF8E]">
      ViewTech
     </span>
     <br/>
     <span class="text-[#3CBF8E]">
      by TechnoCenter
     </span>
    </p>
    <form class="flex max-w-[320px] sm:max-w-[400px]">
     <label class="sr-only" for="input">
      Input
     </label>
     <div class="flex items-center bg-white rounded-l-full px-4 py-3 text-[12px] text-[#7B7B7B] w-full">
      <i class="fas fa-paper-plane mr-2 text-[#B7B7B7]">
      </i>
      <input class="outline-none w-full bg-transparent placeholder:text-[#7B7B7B]" id="input" placeholder="kemanan anda adalah prioritas kami" type="text"/>
     </div>
     <button class="bg-[#1E5EFF] text-white rounded-r-full px-6 py-3 text-[14px] font-semibold hover:bg-[#154ecc] transition" type="submit">
      check katalog
     </button>
    </form>
   </div>
   <div class="flex-1">
    <img alt="Two white security cameras mounted on a pole with a bright blue sky and some green tree branches" class="w-full h-full object-cover" height="300" src="https://storage.googleapis.com/a1aa/image/b279a80a-a3a2-4d84-0555-50dd5ba4f70d.jpg" width="600"/>
   </div>
  </section>
 <!-- Our Services Section -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4 max-w-7xl">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">Our Services</h2>
      <p class="text-slate-600 max-w-3xl mx-auto">We offer comprehensive security solutions to keep your property safe and secure</p>
    </div>
    <div class="flex flex-wrap justify-center gap-8">
      <div class="service-card relative w-96 bg-white shadow-sm border border-slate-200 rounded-lg p-3 pb-6 hover:border-emerald-200">
          <div class="flex justify-center mb-4 mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="card-icon w-10 h-10 text-emerald-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
            </svg>
          </div>
          <div class="flex justify-center mb-3">
            <h5 class="text-slate-800 text-2xl font-semibold">Maintenance</h5>
          </div>
          <div class="p-3 mt-5 border-t border-slate-100 text-center max-h-60 overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-xl [&::-webkit-scrollbar-thumb]:bg-slate-300 [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:rounded-xl [&::-webkit-scrollbar-track]:bg-slate-100">
            <p class="block text-slate-600 leading-normal font-light mb-4 max-w-lg">
              Regular servicing and fixing of camera systems to ensure continuous functionality. Our maintenance service includes thorough inspection, cleaning of components, and resolving any technical issues promptly.
            </p>
            <a href="service-single.html" class="service-link inline-block mt-2 text-emerald-500 font-medium hover:text-emerald-600 transition-colors">
            </a>
          </div>
        </div>

        <!-- Monitoring Card -->
        <div class="service-card relative w-96 bg-white shadow-sm border border-slate-200 rounded-lg p-3 pb-6 hover:border-rose-200">
          <div class="flex justify-center mb-4 mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="card-icon w-10 h-10 text-rose-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
            </svg>
          </div>
          <div class="flex justify-center mb-3">
            <h5 class="text-slate-800 text-2xl font-semibold">Monitoring</h5>
          </div>
          <div class="p-3 mt-5 border-t border-slate-100 text-center max-h-60 overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-xl [&::-webkit-scrollbar-thumb]:bg-slate-300 [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:rounded-xl [&::-webkit-scrollbar-track]:bg-slate-100">
            <p class="block text-slate-600 leading-normal font-light mb-4 max-w-lg">
              Real-time monitoring of security cameras by professionals or automated systems. Our team keeps a watchful eye on your premises 24/7, ensuring immediate response to any security concerns.
            </p>
            <a href="service-single.html" class="service-link inline-block mt-2 text-rose-500 font-medium hover:text-rose-600 transition-colors">
            </a>
          </div>
        </div>

        <!-- Storage & Backup Card -->
        <div class="service-card relative w-96 bg-white shadow-sm border border-slate-200 rounded-lg p-3 pb-6 hover:border-amber-200">
          <div class="flex justify-center mb-4 mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="card-icon w-10 h-10 text-amber-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
            </svg>
          </div>
          <div class="flex justify-center mb-3">
            <h5 class="text-slate-800 text-2xl font-semibold">Storage & Backup</h5>
          </div>
          <div class="p-3 mt-5 border-t border-slate-100 text-center max-h-60 overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-xl [&::-webkit-scrollbar-thumb]:bg-slate-300 [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:rounded-xl [&::-webkit-scrollbar-track]:bg-slate-100">
            <p class="block text-slate-600 leading-normal font-light mb-4 max-w-lg">
              Offering cloud storage plans for secure, offsite storage of CCTV footage. We provide reliable backup solutions to ensure your surveillance data is always accessible when you need it.
            </p>
            <a href="service-single.html" class="service-link inline-block mt-2 text-amber-500 font-medium hover:text-amber-600 transition-colors">
            </a>
          </div>
        </div>

        <!-- System Upgrades Card -->
        <div class="service-card relative w-96 bg-white shadow-sm border border-slate-200 rounded-lg p-3 pb-6 hover:border-indigo-200">
          <div class="flex justify-center mb-4 mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="card-icon w-10 h-10 text-indigo-500">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
            </svg>
          </div>
          <div class="flex justify-center mb-3">
            <h5 class="text-slate-800 text-2xl font-semibold">System Upgrades</h5>
          </div>
          <div class="p-3 mt-5 border-t border-slate-100 text-center max-h-60 overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-xl [&::-webkit-scrollbar-thumb]:bg-slate-300 [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-track]:rounded-xl [&::-webkit-scrollbar-track]:bg-slate-100">
            <p class="block text-slate-600 leading-normal font-light mb-4 max-w-lg">
              Upgrading older analog systems to IP-based or HD analog systems. Our upgrade services help you leverage the latest security technology for enhanced protection and monitoring capabilities.
            </p>
            <a href="service-single.html" class="service-link inline-block mt-2 text-indigo-500 font-medium hover:text-indigo-600 transition-colors">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
