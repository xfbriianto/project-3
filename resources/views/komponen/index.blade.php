@extends('layouts.public')

@section('title', 'Komponen CCTV')

@section('content')

<div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap gap-2 p-4">
              <a class="text-[#58728d] text-base font-medium leading-normal" href="#">Shop</a>
              <span class="text-[#58728d] text-base font-medium leading-normal">/</span>
              <span class="text-[#101419] text-base font-medium leading-normal">Components</span>
            </div>
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#101419] tracking-light text-[32px] font-bold leading-tight">Components</p>
                <p class="text-[#58728d] text-sm font-normal leading-normal">Explore our wide range of CCTV components to build or upgrade your security system.</p>
              </div>
            </div>
            <div class="flex gap-3 p-3 flex-wrap pr-4">
              <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-2">
                <p class="text-[#101419] text-sm font-medium leading-normal">Category</p>
                <div class="text-[#101419]" data-icon="CaretDown" data-size="20px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </div>
              </button>
              <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-2">
                <p class="text-[#101419] text-sm font-medium leading-normal">Resolution</p>
                <div class="text-[#101419]" data-icon="CaretDown" data-size="20px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </div>
              </button>
              <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-2">
                <p class="text-[#101419] text-sm font-medium leading-normal">Storage</p>
                <div class="text-[#101419]" data-icon="CaretDown" data-size="20px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </div>
              </button>
              <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-2">
                <p class="text-[#101419] text-sm font-medium leading-normal">Connectivity</p>
                <div class="text-[#101419]" data-icon="CaretDown" data-size="20px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </div>
              </button>
              <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-2">
                <p class="text-[#101419] text-sm font-medium leading-normal">Power</p>
                <div class="text-[#101419]" data-icon="CaretDown" data-size="20px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </div>
              </button>
              <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-2">
                <p class="text-[#101419] text-sm font-medium leading-normal">Price</p>
                <div class="text-[#101419]" data-icon="CaretDown" data-size="20px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                  </svg>
                </div>
              </button>
            </div>
            <div class="flex gap-3 p-3 flex-wrap pr-4">
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">All</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">Cameras</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">DVRs/NVRs</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">Hard Drives</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">Cables</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">Power Supplies</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">Connectors</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">Mounting Brackets</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">Accessories</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#e9edf1] pl-4 pr-4">
                <p class="text-[#101419] text-sm font-medium leading-normal">Other</p>
              </div>
            </div>
            <h3 class="text-[#101419] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Cameras</h3>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCq2AVrDgPbN1Bql6CEpeczMyIf0HLcdQRJpnq7w5JZpCWA2T_AHJ7rzK9CGOyPB49T_8UQm1lzzzK4lfaN6f0hxjYOAlCF-9t6swG8AzxDcMSSEjpULdWr0V_DrmbEpaNXNKrthF1qeNCfOpiav9YsZ85yfSfiS0kc9DW8QIRXObrfUIeBhOva9E9PKdbe1Zv3owK4O6emmDBlRNhZDX452lCPEfpjFi5Wqhh9hhJ1dXV38T49nWtaw2ifTsyhp-62z45f6YTtvfM");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">Dome Camera</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Discreet surveillance, ideal for indoor use.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTr5S-5wGBk5WXPYKs3AtFHwKiaGlVdNb2V9kPMulFZKkW9ac-OxiFqmvdkdRykPzQxmDVbmY7ChHxDmLKRL4xHGPItq_I6KpMX9tHuZgjnIE31Eb2Ees7EXnyjRzB2o9incwVp5gNEE55LPW-Ny9e5aEly7ogZJIzc_34x-eI_FPUGlRjl4O0Axizb0J7xqHRnK5p6jsECDrxoY5i1VLeboM44AwQ7C1nv2O10FlhsvjfXWY7fiPb7-312AzDoRckXUvM367aZss");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">Bullet Camera</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Visible deterrent, suitable for outdoor monitoring.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBq1uKysptI_eM3zv0NtJTw7ctMOhHej1J7nRbodliy2JMXA7sR93v8l_KrVC_cyVs5HR-a5dML5P3ylrwP6ifbETfZXl-ZxGUapHYbVNUpR_hLd8IJO-AMR7_Wp6yGiF_bL44YTALcSgeH6toFB2tFZgpXBv9Q-lCKpU-sfrlcRrrI0rEzLtiwp0EgKDvkOJCB_L1ppvvSYsaT9qWZ5fn743s7l8-p2eF2DjEpfpdf9e2tgtMnwQOGmhm0IjnaMs4yuiLO4bS5uMk");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">PTZ Camera</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Remote pan, tilt, and zoom control for comprehensive coverage.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuABBb6ok1bWM7iNqQPOz6Z3sJpEojN9GLssAsVvM9lakOWIMryEPgbDTV1ioZwo9pZky64hgssR02OmOWybPPtYrP7qCRJ9e_SYt8e98PqROxLqICF3hrly0l_gEfDggex1q1YX8TS3R7ZJARyfai0u72kaZeAzYFZb8NjdrOMSc_Xw9N3EVOEJTfF5j17IEiRQyUEW02A-T0GLfLfp69Yint3v2nYozqYCdBOZD74HpCDuIpU2M4uMek40MWXKZYTRCWQFrNvNq7Q");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">Wireless Camera</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Flexible placement, easy installation.</p>
                </div>
              </div>
            </div>
            <h3 class="text-[#101419] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">DVRs/NVRs</h3>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDJuv77KU0oPHFRenP_uL7q2dUkCAWb1idFSMA5nS8TalwsQhAEaAMFf-G8BDNUryXaBkt9sCcgu6pfzZS1UBvqhu8PlxOMLjKNb-i7jhuji-RpoF4A4RCHj1ssw4KjCyulubC_4mu7C83sp7-9pvV3wd1AP-6jyIeyTyTiQIpxABbbENhBSeC58L5RrWvry_SJW0TENfDUeEgPEs3K_0p58NGRINSIECNECFPD4QeAOhyt463K0ASMi7ztcoiJPfuFmGWvFNZ6Oos");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">4-Channel DVR</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Supports up to 4 analog cameras.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB4kFf85WPRTk2qfrkk3hCAs1jK5AYU3qPbK39w58wwkymp6IflgxdYoY4A5gi7CNUNlPkKeRoPF5PjZbuXJfNjvU2uPOtQsotOKI4XrJVWnrz3FQ_oDpPejvbwKa8KYcmef2TqCQjVLKw5K_QjVtNyJUb9ZceR53cQ8jpuNGrbuvAWqsLEPnraLD7wq6HKVtx7-mFRFrrD6r0ynsIW3_hz9Y8xjIGszcPsed1CRQc2tMa6fzMfLUWVf3BPv6hFazmlgIEb7zN9vkQ");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">8-Channel NVR</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Supports up to 8 IP cameras.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBS-o_bySLe7oEwBtQe4b-QDRSMBxdW0CNFUfkiTNNHWvUpFSaNynRKXngrB2IOKN0HgdKB93A6Z5aEYFHOzsBX3W0lzMs_fLok_j_fp73PfbCB4OmdRTA2ZPNTBnaVukXyZkCK-x45F2HF6Gf-sa3yRjkU1AtChsgxoNUI5ls-Lzb9HpKEipumB6BjVzgekCK1wp1bcXa8DRi7CpGT9Ze0NIBJwvt52cOyF_mR9fZjVqBWLZ2YSxFViAObgfDUPIqTUJ9qRIpnIiw");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">16-Channel DVR</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Supports up to 16 analog cameras.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuArIAdeb3AkKHkdVtICkeBpxoKgAB2VQfCiNEhnOGvQiLjBlYiMNk77l_3aWLUc8UERp8KYoboSFwmHSeRd5CSJqd1wo6hPiKeE04JX42d86NBxyJN9f9SqJ4dE80qifx88pW0-xCLIyX0VtUhDKRMFXaBhcB5RHUbuWUX4t3F-39gL5fPy6EBaqZYs5BdSHkRA7QynG1JiWHGnNMT1d5aPwMnIm7dnrtHBvYNjGuw5aAiatkU_L-r3mrtFWccjWSK1tP-rPIfDsfU");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">32-Channel NVR</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Supports up to 32 IP cameras.</p>
                </div>
              </div>
            </div>
            <h3 class="text-[#101419] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Hard Drives</h3>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBLUKXdqTceHCUgsgvZ1waHn0tnLLv_lbhUSCASmL0XKV7ZK7AE9hd_avXHrARufrz_4J0JFcESAHwYTb9IzI3eelZj_UL9NyAL9A2b9pt_886Rc75rvoHKqLG42FvNQsgFWOI2lbs2-_HaglCzFrPIF-JQPU_juGKV0vlOuHHKDANX4Iyo-JlEwomjc0ceVmbu2vRj9mSU5__eWSE3KguauowzbhpsrXMI0fW2bHofDavWR_ScamuO8wVPJBWvYEY43rQgrjcdSRc");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">1TB Surveillance HDD</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Reliable storage for up to 1 week of continuous recording.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBK7ScMkOdTdiN97w-jH6FQL052q7JgJRnVFwHvKI0GIRQ1nS2bGn9jJhaKnLmBnVId5gVy_hL_FNpcX4tGIpLt0tOvwjZJC2S3IZRPEg7tB1P-gw2g9mCfHqMyud82IRd0qq3x3BpohILtKu3VXWcmCK1oT8yHMVYTj3de2CEIE4iRKVSAGQfnSaGp5wAsz0vkAhY5EATx-yMfpOZQcKnE8qF9pBMEEAAVgxa8CkpGrYaXbMj5hIxCAZbLEfkhjBhD-0sLquxEr_8");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">2TB Surveillance HDD</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Reliable storage for up to 2 weeks of continuous recording.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCisr-iAZazjKVDwq-REqk-wyuqEB30VTPAZmW7DtzPBP6kcqBdEzQqX-QPgx5Y7MC9D4BsbuSsGg9wIqv90pBkcq1uy_vRoignCmzO__feWQ5cOKyhLHWksAudUToYtcfx1b_k1PedQCQtGM3Xj90D-Z_mxdYCD6hDej2_PZ_IhTBf_d8HX9wfU_W2XfN8JfCABs27z0MGzLaF8LLNPW2r4eDZ0ZBzt6wnnyS5bQKXnSmsBNgEhCyLD_4n3aExie1WSUEe5jHysUA");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">4TB Surveillance HDD</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Reliable storage for up to 4 weeks of continuous recording.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD2YpdgkCIcjnjJJlF-7BChM80G_EAmHrID189ZxF2tZJ-geTGs6aPY2e3r0hV8qW8V4i3Ozj4Ht7huS9fa8-7OA2oFCwRLo_Pgk_vJy-JfAJa5inc0L2gxpv8a-YGe_X7Q0strS3bBx6lKsILI1WnDdaNtKnqYA9YShvwWdtXIkWfHRPeFDaCBc3HOMelqRDk0r3l9P6zjVb07U6HBLPh1YOi9tLk9BlQqq50oovSNPXJv5YsbrR6eMu3nDMbPK1nP278aPii9H1s");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">8TB Surveillance HDD</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Reliable storage for up to 8 weeks of continuous recording.</p>
                </div>
              </div>
            </div>
            <h3 class="text-[#101419] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Cables</h3>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBvPaIIvPE_7sg5BLIGz6O_CrdGqOEJj_YYW_-iU7BUsQPhLSYBTcucnFpe0CTuTkLlejxduXF016eG_eN4qLW9WgesDSgnPnZCe_dozrRga9wEJLgwnUzBbyGCoI9ZDeUE73DJK9d0ChnMYdCjApqO_Wh7CSdzBFM2Ezr3uqnyvYTlyR90WYytbhT5PqhD_xnwdy4CwXT61A8Fvyt_WWFfhTEsiUXZqCPfOkMNWIRvHN7K6sh3fN9a6zUdPpIdv_78qg_r5bvABDU");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">Coaxial Cable (100ft)</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">High-quality coaxial cable for analog video transmission.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCJNvbFEGgLEVKaYlaFYDK6pPTIowbpowLDhXZju4o5ALt7nqdps9i3cTKxtakRkMx1Ny7x6jisWabpyz4VPB62MgCpA7WzRtQ3GpBjevSTsq1nm8tES8AzZoIay5fV6MGhJVOrBP3h5mVExfFwyUlXftqPPx4uhH52AcHnt0y4Lm1RAbbj7ywQHEZrBq2IpU9jkd67S3TyguFJ1ucGjR3Nn4UeW85wyxGvDTkoE1eXHnFD6q9HOIVMmehfbPPPEZsv_wc_Vvtz-L4");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">Ethernet Cable (100ft)</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Cat5e Ethernet cable for IP camera connectivity.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC-CW65-EO5R5HmolHDLXxaDtSl6TP6073d9fvon_lZYgcFTA990yDUNRiNoygABQUgzREsTuWeM_crgOQX5RLowwVrXadcs59TX0PpbwNafM6R5aszdWetLI42-pGImD1HGY2sBkoUSDQphZ24OpPQIZkUeZE5LgsflRwVwbhenmT8ML_SYUlqXkqWZ3WQ7cBB7TxP6qHudWvmijyJcfC9oCP748PLUeLBQ0k5WaVIzDepKq-7FkGn8T9hLNcgU3o3h6ihytGfy2A");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">Power Cable (50ft)</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Power cable for supplying power to cameras.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCFrumeveemHzh7NvuiIGhlDyEQC5nNEHTxogXICuFuqdlXSIMEWkqgaMCphzYeo9vKBCdzjERtxHamE86rx5MQQJIah1LdeOpTyEfKGTaaK-oqc7nz5sME15gC5lwaeVDzVePaxog4NfJ7ebgplDSxbvSlDVpom7ZzU2Wz7r9eSKTud_oYWYs3gOd59jfJtA5Cp4SWsAuMtoTVKEMurORo54uuns6M-8SxVCzunOSi6Mj71Y0ipU2lLoSJizz63R6K-FXaTUng5II");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">Siamese Cable (100ft)</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Combines video and power in a single cable.</p>
                </div>
              </div>
            </div>
            <h3 class="text-[#101419] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Power Supplies</h3>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDkGo0p2A_uGlNBMKy4kv6ykwzCi8v_japnYnL05YVqRq_jUr8QDKqGVYSkt5Bxc1xBY2MRWUI1W8_OBJsHt24eLWftQj1P9NaVmubyuXIOHXTI0ePZIesSuVBb7txdiwkgo_fiXnr23u6DUgfDNRlKaB4rpiSFGRFGd9YvwB0BQYmm7C4rXb0h_Ty0a5nUOTPORsBrFrElc1AEddg4jw49qxBz-HKg2tRkntCvqAhXkcRhF70_vK0luTlpvmHxFHrjHL0BALtzMHc");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">12V Power Supply (1A)</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Suitable for powering a single camera.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAwtNcnbXyuMx-TiVTRCS-jLfnErdySen5J1LM2vMZw63nAWwyb8dnQQAbGwucmPPsZioiVNMLqVbYwaDkOwGgEn789PLIKJX8CyYn2sdEU4PH9QgxFBXpPsU99rJ_AayOHd4VCK7B6eaQ9FMZUjrD29k_LI5vqbaBVB_TR_1U-YJbidW4bnxFiECUz5qR1AQ6muaTIAy9K8_4Is6y8dBdg0wn-AYs1bGGHvpIsmfLwS_1_CKkDMbGncQEuAs5VfEpou9qB9Psw2Z0");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">12V Power Supply (2A)</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Suitable for powering multiple cameras or cameras with higher power requirements.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA1hEjgdmwv77TkNIzKS0hm95fA_IHudT1tMWde-9jNMCc-Eh8w4TOZPUtTFh_dfpNFNat4PqJvbILKMk7HE2SnUESskfwyBpgBxEIm0sz2Qd6Jzgr2qWdsLV2hpnHOWZX_BG3j4VzRhyXAVAAvv0z3mIK1GrK_zIh6buobzaMeUl3lcmyEUMZA8tZDUWaxKviLwD6B1bo-B1sxvyr-nZnZYSxCG-GQJiCU_ZDuTmeMrICKA0B-qmf89twZBx5vFU34S2aqQyB6EDg");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">12V Power Supply (5A)</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Suitable for powering multiple cameras or cameras with higher power requirements.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAFCYDnIorZcHplwh8aOgz3oqnaCXUbmc7PzrxXilWphlozEDr_uBGt4CCCFwD-G-sP3aLNL5AtFGrnLQ6pGcMdevZWphfzYevlRVUsGTNeOt7uu3dLhrdl-P2Z9agD5FUvS-K6KhwaisDEABr8y3AW3g0tY15enpJqDo9SfKCW37piTaEd9OfvrzmSRuvpmbbtou4_59hwt53WaKTqxqwOVY1tz96VoZcAprB3V6dvWZjLDo8nZHlM3XgaKp7zhxstxYke4Ujtmag");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">24V Power Supply (2A)</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Suitable for powering PTZ cameras or devices requiring 24V.</p>
                </div>
              </div>
            </div>
            <h3 class="text-[#101419] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Connectors</h3>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAqOPBa4nIsREY3SZ42f5x2M-OTR_vWqnOYR9n33TsBaog7_ktW5igFbZc2EbxxqUgqsEKeIA_EnKj81RvTbu1JHJt2t5p074hF5YblLkv3wR_nXDKNp_BiFBlWCDaXvRdAam4fkH7N25g5AWfmTZl8OWU0LWykroJKwIMJ_cbpJVWYWy06rJH0WbpnPw0fRUHflEstKiJE1ddGgJqYHHN8TxX6OFQRQy6LY0oexagtQhcUUg01XX0u_R3G-GALKZyLdutogX-grqI");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">BNC Connector</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Connects coaxial cables to cameras and DVRs.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC2gKPuvTvlJ1v1Ot29zgawoGdmsFpOZDJB6eQL82GD-7GmAWoX3MgcG5WJnWmibKGemKkBCGIX3eQftAnliMVAjA987DF31ZOywiD4V7NalITJsm8VHu60Tlooos-GEAKSXWHq9gKb7Vr3SzRWISHla6USRrvXSqfzobiTNaN_dsaJLScl_WKj6mZm4xymfu2sm-firckwlA8v151mP7aMg69d3f7hLkr9M-IkwFyf97KVoakBDNv5_3ERc_Gvyc8dNIP4UwKZ9bE");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">RCA Connector</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Connects audio cables for audio recording.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCH_L5wY2K2V9sOVSAmztCYpUoFdOwK9tvQ9JI0-oV5Sg5R7hmNRZr15UnWkouxfb2m__XyLqTcS3ZGtwpBAYKB_FBYv0Q6vCU38gfQ9mJ20HrPC3He6Vq-cboEniLoyzb-QSv2StFGPrVEqdudETQcVOCbRm4PiAEoc7uVUd1_OKwdHcAqKIVoJlvRSw7_W-rhMyLWI1728ec8WuG8PNMQON9mtsWINimV2Tk1e73u5geqxNe_rfUytpBtu2gR-QbopJE0XTThzWs");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">DC Power Connector</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Connects power cables to cameras.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBgjs5-cASjCKyzLx1sNqd2C4oehNkQ3YZflr_iu9fEg85b71FocUMDJUZbNXKBgkypRfkP_5F9bYF6AFy8eKSnlUoJKWwNb7ZZcUDNok_Qk7AXdiy3L88G1-0KTH0HgsW8gROv_EEqSmPWC23JImAtrUC6hz56aDBbbMUppfEImLQ7xE-pbDJ_CLrpgV748PR-SEinpoOdSogs-BPVAy2zsUaM7taud0lIDJdAoACuoKG3x_SIpYXtWoxB5XqpayqAEXpyGijlfuc");'
                ></div>
                <div>
                  <p class="text-[#101419] text-base font-medium leading-normal">RJ45 Connector</p>
                  <p class="text-[#58728d] text-sm font-normal leading-normal">Connects Ethernet cables for IP camera networking.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection