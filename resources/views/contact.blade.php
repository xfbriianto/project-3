@extends('layouts.public')

@section('title', 'Contact | Technocenter')

@section('content')
    <!-- Contact Page -->
<div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#0d141c] tracking-light text-[32px] font-bold leading-tight">Contact Us</p>
                <p class="text-[#49739c] text-sm font-normal leading-normal">We're here to help. Reach out to us with any questions or inquiries.</p>
              </div>
            </div>
            <h3 class="text-[#0d141c] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Our Information</h3>
            <div class="p-4 grid grid-cols-[20%_1fr] gap-x-6">
              <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#cedbe8] py-5">
                <p class="text-[#49739c] text-sm font-normal leading-normal">Company Name</p>
                <p class="text-[#0d141c] text-sm font-normal leading-normal">Tech Solutions Inc.</p>
              </div>
              <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#cedbe8] py-5">
                <p class="text-[#49739c] text-sm font-normal leading-normal">Address</p>
                <p class="text-[#0d141c] text-sm font-normal leading-normal">123 Innovation Drive, Tech City, CA 91234</p>
              </div>
              <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#cedbe8] py-5">
                <p class="text-[#49739c] text-sm font-normal leading-normal">Phone</p>
                <p class="text-[#0d141c] text-sm font-normal leading-normal">+1 (555) 123-4567</p>
              </div>
              <div class="col-span-2 grid grid-cols-subgrid border-t border-t-[#cedbe8] py-5">
                <p class="text-[#49739c] text-sm font-normal leading-normal">Email</p>
                <p class="text-[#0d141c] text-sm font-normal leading-normal">info@techsolutions.com</p>
              </div>
            </div>
            <h3 class="text-[#0d141c] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Connect With Us</h3>
            <div class="@container">
              <div class="gap-2 px-4 flex flex-wrap justify-start">
                <!-- Instagram -->
                <div class="flex flex-col items-center gap-2 bg-slate-50 py-2.5 text-center w-20 cursor-pointer transition-all duration-300 ease-in-out hover:transform hover:scale-105">
                  <div class="rounded-full bg-[#e7edf4] p-2.5 transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-purple-500 hover:via-pink-500 hover:to-orange-500 hover:shadow-lg group">
                    <div class="text-[#0d141c] group-hover:text-white transition-colors duration-300" data-icon="InstagramLogo" data-size="20px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <p class="text-[#0d141c] text-sm font-medium leading-normal transition-colors duration-300 hover:text-purple-600">Instagram</p>
                </div>
                
                <!-- WhatsApp -->
                <div class="flex flex-col items-center gap-2 bg-slate-50 py-2.5 text-center w-20 cursor-pointer transition-all duration-300 ease-in-out hover:transform hover:scale-105">
                  <div class="rounded-full bg-[#e7edf4] p-2.5 transition-all duration-300 ease-in-out hover:bg-green-500 hover:shadow-lg group">
                    <div class="text-[#0d141c] group-hover:text-white transition-colors duration-300" data-icon="WhatsappLogo" data-size="20px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <p class="text-[#0d141c] text-sm font-medium leading-normal transition-colors duration-300 hover:text-green-600">WhatsApp</p>
                </div>
                
                <!-- Email -->
                <div class="flex flex-col items-center gap-2 bg-slate-50 py-2.5 text-center w-20 cursor-pointer transition-all duration-300 ease-in-out hover:transform hover:scale-105">
                  <div class="rounded-full bg-[#e7edf4] p-2.5 transition-all duration-300 ease-in-out hover:bg-blue-500 hover:shadow-lg group">
                    <div class="text-[#0d141c] group-hover:text-white transition-colors duration-300" data-icon="Envelope" data-size="20px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <p class="text-[#0d141c] text-sm font-medium leading-normal transition-colors duration-300 hover:text-blue-600">Email</p>
                </div>
                
                <!-- Facebook -->
                <div class="flex flex-col items-center gap-2 bg-slate-50 py-2.5 text-center w-20 cursor-pointer transition-all duration-300 ease-in-out hover:transform hover:scale-105">
                  <div class="rounded-full bg-[#e7edf4] p-2.5 transition-all duration-300 ease-in-out hover:bg-blue-600 hover:shadow-lg group">
                    <div class="text-[#0d141c] group-hover:text-white transition-colors duration-300" data-icon="FacebookLogo" data-size="20px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0-16h24v63.63a88,88,0,1,1,16,0Z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <p class="text-[#0d141c] text-sm font-medium leading-normal transition-colors duration-300 hover:text-blue-700">Facebook</p>
                </div>
              </div>
            </div>
            <h3 class="text-[#0d141c] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Send Us a Message</h3>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <input
                  placeholder="Your Name"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#0c7ff2] focus:shadow-sm transition-all duration-300 h-14 placeholder:text-[#49739c] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <input
                  placeholder="Your Email"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#0c7ff2] focus:shadow-sm transition-all duration-300 h-14 placeholder:text-[#49739c] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <textarea
                  placeholder="Your Message"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedbe8] bg-slate-50 focus:border-[#0c7ff2] focus:shadow-sm transition-all duration-300 min-h-36 placeholder:text-[#49739c] p-[15px] text-base font-normal leading-normal"
                ></textarea>
              </label>
            </div>
            <div class="flex px-4 py-3 justify-start">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0c7ff2] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] transition-all duration-300 ease-in-out hover:bg-[#0a6dd4] hover:shadow-lg hover:transform hover:scale-105 active:scale-95 focus:outline-none focus:ring-2 focus:ring-[#0c7ff2] focus:ring-opacity-50"
              >
                <span class="truncate">Submit</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection