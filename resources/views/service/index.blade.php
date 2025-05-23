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
<section class="py-20 bg-white">
  <div class="container mx-auto px-6 max-w-8xl">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-slate-800 mb-6">Our Services</h2>
      <p class="text-slate-600 text-lg max-w-4xl mx-auto">We offer comprehensive security solutions to keep your property safe and secure</p>
    </div>
    <div class="relative flex size-full flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: "Space Grotesk", "Noto Sans", sans-serif;'>
      <div class="layout-container flex grow flex-col">
        <div class="px-8 lg:px-20 xl:px-40 flex flex-1 justify-center py-8">
          <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
              <div class="flex flex-1 gap-4 rounded-xl border border-[#d0dbe7] bg-white p-6 flex-col transition-all duration-300 ease-in-out hover:shadow-xl hover:shadow-blue-100 hover:border-blue-200 hover:-translate-y-2 hover:bg-gradient-to-br hover:from-white hover:to-blue-50 cursor-pointer group">
                <div class="text-[#0e141b] group-hover:text-blue-600 transition-colors duration-300" data-icon="Camera" data-size="28px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M208,56H180.28L166.65,35.56A8,8,0,0,0,160,32H96a8,8,0,0,0-6.65,3.56L75.71,56H48A24,24,0,0,0,24,80V192a24,24,0,0,0,24,24H208a24,24,0,0,0,24-24V80A24,24,0,0,0,208,56Zm8,136a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V80a8,8,0,0,1,8-8H80a8,8,0,0,0,6.66-3.56L100.28,48h55.43l13.63,20.44A8,8,0,0,0,176,72h32a8,8,0,0,1,8,8ZM128,88a44,44,0,1,0,44,44A44.05,44.05,0,0,0,128,88Zm0,72a28,28,0,1,1,28-28A28,28,0,0,1,128,160Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-2">
                  <h2 class="text-[#0e141b] text-lg font-bold leading-tight group-hover:text-blue-800 transition-colors duration-300">Installation</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-relaxed group-hover:text-slate-600 transition-colors duration-300">Professional setup of your CCTV system with expert precision and attention to detail.</p>
                </div>
              </div>
              <div class="flex flex-1 gap-4 rounded-xl border border-[#d0dbe7] bg-white p-6 flex-col transition-all duration-300 ease-in-out hover:shadow-xl hover:shadow-green-100 hover:border-green-200 hover:-translate-y-2 hover:bg-gradient-to-br hover:from-white hover:to-green-50 cursor-pointer group">
                <div class="text-[#0e141b] group-hover:text-green-600 transition-colors duration-300" data-icon="Nut" data-size="28px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M128,80a48,48,0,1,0,48,48A48.06,48.06,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm95.68-93.85L135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17h0a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,224,40,175.82V80.18L128,32l88,48.17v95.64Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-2">
                  <h2 class="text-[#0e141b] text-lg font-bold leading-tight group-hover:text-green-800 transition-colors duration-300">Maintenance</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-relaxed group-hover:text-slate-600 transition-colors duration-300">Regular checks and upkeep to ensure optimal performance and longevity of your security system.</p>
                </div>
              </div>
              <div class="flex flex-1 gap-4 rounded-xl border border-[#d0dbe7] bg-white p-6 flex-col transition-all duration-300 ease-in-out hover:shadow-xl hover:shadow-purple-100 hover:border-purple-200 hover:-translate-y-2 hover:bg-gradient-to-br hover:from-white hover:to-purple-50 cursor-pointer group">
                <div class="text-[#0e141b] group-hover:text-purple-600 transition-colors duration-300" data-icon="ChatCircleDots" data-size="28px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M140,128a12,12,0,1,1-12-12A12,12,0,0,1,140,128ZM84,116a12,12,0,1,0,12,12A12,12,0,0,0,84,116Zm88,0a12,12,0,1,0,12,12A12,12,0,0,0,172,116Zm60,12A104,104,0,0,1,79.12,219.82L45.07,231.17a16,16,0,0,1-20.24-20.24l11.35-34.05A104,104,0,1,1,232,128Zm-16,0A88,88,0,1,0,51.81,172.06a8,8,0,0,1,.66,6.54L40,216,77.4,203.53a7.85,7.85,0,0,1,2.53-.42,8,8,0,0,1,4,1.08A88,88,0,0,0,216,128Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-2">
                  <h2 class="text-[#0e141b] text-lg font-bold leading-tight group-hover:text-purple-800 transition-colors duration-300">Consultation</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-relaxed group-hover:text-slate-600 transition-colors duration-300">Expert advice on system design and strategic placement for maximum security coverage.</p>
                </div>
              </div>
              <div class="flex flex-1 gap-4 rounded-xl border border-[#d0dbe7] bg-white p-6 flex-col transition-all duration-300 ease-in-out hover:shadow-xl hover:shadow-orange-100 hover:border-orange-200 hover:-translate-y-2 hover:bg-gradient-to-br hover:from-white hover:to-orange-50 cursor-pointer group">
                <div class="text-[#0e141b] group-hover:text-orange-600 transition-colors duration-300" data-icon="Users" data-size="28px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-2">
                  <h2 class="text-[#0e141b] text-lg font-bold leading-tight group-hover:text-orange-800 transition-colors duration-300">User Training</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-relaxed group-hover:text-slate-600 transition-colors duration-300">Comprehensive training sessions for effective system use and management capabilities.</p>
                </div>
              </div>
              <div class="flex flex-1 gap-4 rounded-xl border border-[#d0dbe7] bg-white p-6 flex-col transition-all duration-300 ease-in-out hover:shadow-xl hover:shadow-cyan-100 hover:border-cyan-200 hover:-translate-y-2 hover:bg-gradient-to-br hover:from-white hover:to-cyan-50 cursor-pointer group">
                <div class="text-[#0e141b] group-hover:text-cyan-600 transition-colors duration-300" data-icon="Headset" data-size="28px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M201.89,54.66A103.43,103.43,0,0,0,128.79,24H128A104,104,0,0,0,24,128v56a24,24,0,0,0,24,24H64a24,24,0,0,0,24-24V144a24,24,0,0,0-24-24H40.36A88.12,88.12,0,0,1,190.54,65.93,87.39,87.39,0,0,1,215.65,120H192a24,24,0,0,0-24,24v40a24,24,0,0,0,24,24h24a24,24,0,0,1-24,24H136a8,8,0,0,0,0,16h56a40,40,0,0,0,40-40V128A103.41,103.41,0,0,0,201.89,54.66ZM64,136a8,8,0,0,1,8,8v40a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V136Zm128,56a8,8,0,0,1-8-8V144a8,8,0,0,1,8-8h24v56Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-2">
                  <h2 class="text-[#0e141b] text-lg font-bold leading-tight group-hover:text-cyan-800 transition-colors duration-300">Technical Support</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-relaxed group-hover:text-slate-600 transition-colors duration-300">24/7 dedicated assistance for any technical issues and system troubleshooting.</p>
                </div>
              </div>
              <div class="flex flex-1 gap-4 rounded-xl border border-[#d0dbe7] bg-white p-6 flex-col transition-all duration-300 ease-in-out hover:shadow-xl hover:shadow-indigo-100 hover:border-indigo-200 hover:-translate-y-2 hover:bg-gradient-to-br hover:from-white hover:to-indigo-50 cursor-pointer group">
                <div class="text-[#0e141b] group-hover:text-indigo-600 transition-colors duration-300" data-icon="Gear" data-size="28px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28px" height="28px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-2">
                  <h2 class="text-[#0e141b] text-lg font-bold leading-tight group-hover:text-indigo-800 transition-colors duration-300">Other Services</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-relaxed group-hover:text-slate-600 transition-colors duration-300">Additional services including system upgrades, repairs, and custom security solutions.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
@endsection