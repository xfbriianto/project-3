@extends('layouts.public')

@section('title', 'About Us | Security Solutions')

@section('content')
     <section class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: "Space Grotesk", "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="@[480px]:px-4 @[480px]:py-3">
                <div
                  class="bg-cover bg-center flex flex-col justify-end overflow-hidden bg-slate-50 @[480px]:rounded-xl min-h-[218px]"
                  style='background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0) 25%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCjVd3GZh8iac8NzrCOwRkDekdH65coYSaKElca6ZbzN2zcZifAvhr2LM3L6EV_Lr41O8ZFcn9lT1jDYKuAeI6KOxKMZQ3OKMWs9ZmPN-dyEohfacNo-fdBUrw2OD7suXMbB4wh1wHKGwI-YnLTXUom318DZv9ljg3z5GnWw1IAYN6B-GY7Qy9X34nYTy00nlbmspkQS3NhzfQlSgFKKQqMOVVLtN4MBr7nhh9PQ8fbnTNe86DVIKCCclKhJtt8AM9REQB12CVTZsm7");'
                >
                  <div class="flex p-4"><p class="text-white tracking-light text-[28px] font-bold leading-tight">About Technocenter</p></div>
                </div>
              </div>
            </div>
            <h2 class="text-[#0e141b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Mission</h2>
            <p class="text-[#0e141b] text-base font-normal leading-normal pb-3 pt-1 px-4">
              At SecureView, our mission is to provide cutting-edge security solutions that protect what matters most to our clients. We are dedicated to delivering reliable,
              innovative, and user-friendly CCTV systems that enhance safety and peace of mind.
            </p>
            <h2 class="text-[#0e141b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Key Features</h2>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-1 gap-3 rounded-lg border border-[#d0dbe7] bg-slate-50 p-4 flex-col">
                <div class="text-[#0e141b]" data-icon="ShieldCheck" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#0e141b] text-base font-bold leading-tight">Advanced Security</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-normal">Robust protection against threats</p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#d0dbe7] bg-slate-50 p-4 flex-col">
                <div class="text-[#0e141b]" data-icon="Video" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M164.44,105.34l-48-32A8,8,0,0,0,104,80v64a8,8,0,0,0,12.44,6.66l48-32a8,8,0,0,0,0-13.32ZM120,129.05V95l25.58,17ZM216,40H40A16,16,0,0,0,24,56V168a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,128H40V56H216V168Zm16,40a8,8,0,0,1-8,8H32a8,8,0,0,1,0-16H224A8,8,0,0,1,232,208Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#0e141b] text-base font-bold leading-tight">High-Resolution Video</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-normal">Crystal-clear video quality</p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#d0dbe7] bg-slate-50 p-4 flex-col">
                <div class="text-[#0e141b]" data-icon="Cloud" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M160,40A88.09,88.09,0,0,0,81.29,88.67,64,64,0,1,0,72,216h88a88,88,0,0,0,0-176Zm0,160H72a48,48,0,0,1,0-96c1.1,0,2.2,0,3.29.11A88,88,0,0,0,72,128a8,8,0,0,0,16,0,72,72,0,1,1,72,72Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#0e141b] text-base font-bold leading-tight">Cloud Storage</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-normal">Secure and accessible footage</p>
                </div>
              </div>
              <div class="flex flex-1 gap-3 rounded-lg border border-[#d0dbe7] bg-slate-50 p-4 flex-col">
                <div class="text-[#0e141b]" data-icon="Lock" data-size="24px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M208,80H176V56a48,48,0,0,0-96,0V80H48A16,16,0,0,0,32,96V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V96A16,16,0,0,0,208,80ZM96,56a32,32,0,0,1,64,0V80H96ZM208,208H48V96H208V208Zm-68-56a12,12,0,1,1-12-12A12,12,0,0,1,140,152Z"
                    ></path>
                  </svg>
                </div>
                <div class="flex flex-col gap-1">
                  <h2 class="text-[#0e141b] text-base font-bold leading-tight">Data Protection</h2>
                  <p class="text-[#4e7097] text-sm font-normal leading-normal">Ensuring privacy and security</p>
                </div>
              </div>
            </div>
            <h2 class="text-[#0e141b] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Our Impact</h2>
            <div class="flex flex-wrap gap-4 p-4">
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7edf3]">
                <p class="text-[#0e141b] text-base font-medium leading-normal">Installations</p>
                <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">5,000+</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7edf3]">
                <p class="text-[#0e141b] text-base font-medium leading-normal">Uptime</p>
                <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">99.9%</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7edf3]">
                <p class="text-[#0e141b] text-base font-medium leading-normal">Support</p>
                <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">24/7</p>
              </div>
              <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7edf3]">
                <p class="text-[#0e141b] text-base font-medium leading-normal">Experience</p>
                <p class="text-[#0e141b] tracking-light text-2xl font-bold leading-tight">10+ Years</p>
              </div>
            </div>
            <div class="flex w-full grow bg-slate-50 @container p-4">
              <div class="w-full gap-1 overflow-hidden bg-slate-50 @[480px]:gap-2 aspect-[3/2] rounded-xl grid grid-cols-[2fr_1fr_1fr]">
                <div
                  class="w-full bg-center bg-no-repeat bg-cover aspect-auto rounded-none row-span-2"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAsOMN7D9shu5BLyuc5WEvn1kFU8TtVs_0z7XhiqO5OcWbL52BcNbdtkjzp0k5jD4PJM6MQ1N0gm_cOldbRR69GqLCQPpbbw-poxUyUUj5tCMJqI-zwOBK_akUV-ztBZddibryGfneUPzgkCU0co4Sm_n98cKP6k2mGQnkqNySdC-SSWWWrlIDtaeCmVxyLcThGYVjCFuIbn-KtbIrfPjzfGI_rUoPxR1MKXsN_tpEBfqAu_ev_7GCMhsS6wFlpWfS0KI6KXkYEJrWs");'
                ></div>
                <div
                  class="w-full bg-center bg-no-repeat bg-cover aspect-auto rounded-none col-span-2 row-span-2"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB83aRVjchEDaVseSm2v1s8kdzoXAPVuaT06q3FPwi8gU1WTFWZ1BDdToKVjqZb6DPL5WE-FarXJr7zRFCaWib1QG6jnR0rlWXzAHF2M5m-Rfur6qjCM-K1I1oEfbYBwPtrhA9eim-CIk7BGO1bF5lQiZI4M-2EOe7oNzE4QAXoc2sU-EcURjBOUtrqxMS3M4-KUx68IWzOs4XlKdt26hjcxPtNIgYlKywhB9W6c0mekj5x_pX-TQniO3uvpGL0C7d4OgbDWz7vYz2U");'
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
@endsection