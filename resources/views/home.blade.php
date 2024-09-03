@extends('layout.layout')

@section('head')
    <style>
        .shadow1 {
            background: linear-gradient(180deg, var(--blue) 4.23%, rgba(16, 72, 158, 0) 26.69%);
        }

        .shadow2 {
            background: linear-gradient(0deg, var(--blue) 14.23%, rgba(22, 138, 214, 0) 76.69%);
        }

        .swiper-wrapper {
            -webkit-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
        }

        button .swiper-button-prev2 svg,
        button .swiper-button-next2 svg {
            pointer-events: auto;
        }

        .swiper-button-prev2,
        .swiper-button-next2 {
            z-index: 10;
        }
    </style>
@endsection

@section('content')
    <section class="video">
        <div class="relative mt-20 w-full h-screen overflow-hidden">
            <div class="shadow1 w-screen h-[70vh] block absolute top-0"></div>
            <video loop autoplay preload="auto" muted class="absolute top-0 left-0 w-full h-screen object-cover -z-10">
                <source src="{{ asset('assets/video.mp4') }}" type="video/mp4">
            </video>
            <div class="shadow2 w-screen h-[50vh] block absolute bottom-0"></div>
        </div>
    </section>

    <section class="tagline w-screen h-[30vh] bg-[var(--blue)] flex flex-col items-center relative">
        <img class="w-[45%] absolute -top-24" src="https://a.m.dana.id/resource/danaweb-v2/hero-personal-tagline.svg"
            alt="tagline">
    </section>

    <section class="w-screen h-fit bg-[var(--blue)] flex flex-col items-center text-center">
        <h1 class="text-[3.5rem] font-bold text-white mt-10 leading-[1.2]">Mulai transaksi pakai DANA<br>#BukanDompetBiasa
        </h1>
        <div class="grid grid-cols-2 mt-10 justify-center items-center w-[55%]">
            <img src="{{ asset('assets/dana-app.png') }}" alt="" class="w-full">
            <div class="px-6 py-4">
                <div class="bg-white p-2 rounded-lg flex text-left items-center">
                    <img src="{{ asset('assets/barcode.jpg') }}" alt="" class="w-1/2">
                    <p class="text-xl text-[var(--blue)] font-semibold">Download <br>DANA <br>sekarang!</p>
                </div>
                <p class="mt-8 text-white text-base">DANA Indonesia telah terdaftar dan diawasi oleh</p>
                <div class="flex w-full mt-4 justify-center items-end gap-2">
                    <div class="w-[55%] flex justify-center">
                        <img src="https://a.m.dana.id/resource/danaweb-v2/footer-bank-indonesia-logo.svg" alt="">
                    </div>
                    <div class="w-[45%] flex justify-center">
                        <img src="https://a.m.dana.id/resource/danaweb-v2/footer-kominfo-logo.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-screen h-fit py-24 bg-neutral-100 flex flex-col justify-start items-center">
        <div class="w-9/12 flex gap-20">
            <div class="w-[40%] flex justify-center items-end pb-6 relative">
                <img class="w-[85%] rounded-[1rem]" src="{{ asset('assets/bg-dompet.png') }}" alt="">
                <img class="w-9/12 absolute" src="https://a.m.dana.id/danadev/sushi/Subject_a77296dbd9.png" alt="">
            </div>
            <div class="w-[60%] flex flex-col justify-center">
                <h4 class="text-xl text-[var(--blue)]">DOMPET DIGITAL</h4>
                <h1 class="text-[3.5rem] font-bold text-slate-800 my-2 leading-[1.2]">Seperti dompetmu, tapi lebih canggih
                </h1>
                <h4 class="text-xl text-slate-500">DANA Wallet bikin kamu lebih mudah untuk akses semua kebutuhan
                    transaksi dan mulai berinvestasi.</h4>
                <button type="button"
                    class="w-fit text-xl inline-block rounded-full bg-transparent border-2 border-[var(--blue)]  mt-4 px-6 pb-2 pt-2.5 font-semibold leading-normal text-[var(--blue)] transition duration-300 ease-in-out hover:bg-[var(--yellow)] hover:text-black hover:border-[var(--yellow)] focus:bg-[var(--yellow)] focus:outline-[var(--yellow)] focus:ring-0 focus:text-black focus:border-[var(--yellow)] active:bg-[var(--yellow)] active:text-black active:border-none motion-reduce:transition-none">
                    Cari tahu selengkapnya
                </button>
            </div>
        </div>
        <div class="w-9/12 mt-16">
            <div class="w-full relative">
                <div class="swiper multiple-slide-carousel swiper-container relative">
                    <div class="swiper-wrapper w-full relative !h-max pb-8">
                        <div class="swiper-slide">
                            <div
                                class="bg-white rounded-2xl pt-6 h-96 flex flex-col justify-between items-center text-center">
                                <span class="text-xl font-semibold text-slate-800 px-10">Lihat semua aset langsung dari DANA
                                    Wallet </span>
                                <img src="{{ asset('assets/dana-wallet.png') }}" alt="" class="h-64">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-white rounded-2xl pt-6 h-96 flex flex-col justify-between items-center text-center">
                                <span class="text-xl font-semibold text-slate-800 px-10">Kirim uang praktis & fleksibel
                                </span>
                                <img src="{{ asset('assets/kirim-cepat.jpg') }}" alt="" class="h-64 rounded-t-2xl">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-white rounded-2xl pt-6 h-96 flex flex-col justify-between items-center text-center">
                                <span class="text-xl font-semibold text-slate-800 px-10">Bayar pakai QRIS untuk apa saja
                                </span>
                                <img src="{{ asset('assets/qris.png') }}" alt="" class="h-64 rounded-t-2xl">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-white rounded-2xl pt-6 h-96 flex flex-col justify-between items-center text-center">
                                <span class="text-xl font-semibold text-slate-800 px-10">Minta uang mudah pakai QR & link
                                </span>
                                <img src="{{ asset('assets/qris-pay.png') }}" alt="" class="h-64 rounded-t-2xl">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-white rounded-2xl pt-6 h-96 flex flex-col justify-between items-center text-center">
                                <span class="text-xl font-semibold text-slate-800 px-10">Bisa simpan Kartu Bank untuk
                                    pembayaranmu </span>
                                <img src="{{ asset('assets/credit.png') }}" alt="" class="h-60 rounded-t-2xl">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="bg-white rounded-2xl pt-6 h-96 flex flex-col justify-between items-center text-center">
                                <span class="text-xl font-semibold text-slate-800 px-10">DANA Kaget bikin sebar hadiah jadi
                                    seru </span>
                                <img src="{{ asset('assets/kaget.png') }}" alt="" class="h-60 rounded-t-2xl">
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-end items-center gap-4">
                        <button
                            class="swiper-button-prev2 rounded-full bg-[#45ddd9] p-4 group transition duration-300 ease-in-out hover:bg-[var(--light-blue)]">
                            <svg width="3rem" height="3rem" viewBox="0 0 24 24" fill="none"
                                class="group-hover:text-white" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M6 12H18M6 12L11 7M6 12L11 17" stroke="#ffffff" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </button>
                        <button
                            class="swiper-button-next2 rounded-full bg-[#45ddd9] p-4 group transition duration-300 ease-in-out hover:bg-[var(--light-blue)]"
                            data-carousel-next>
                            <svg width="3rem" height="3rem" viewBox="0 0 24 24" fill="none"
                                class="group-hover:text-white" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path d="M6 12H18M18 12L13 7M18 12L13 17" stroke="#ffffff" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
    </section>
@endsection

@section('script')
    <script>
        var swiper = new Swiper(".multiple-slide-carousel", {
            loop: true,
            slidesPerView: 3,
            spaceBetween: 40,
            navigation: {
                nextEl: ".multiple-slide-carousel .swiper-button-next2",
                prevEl: ".multiple-slide-carousel .swiper-button-prev2",
            },
            // breakpoints: {
            //     1920: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     },
            //     1028: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     },
            //     990: {
            //         slidesPerView: 1,
            //         spaceBetween: 0
            //     }
            // }
        });
    </script>
@endsection
