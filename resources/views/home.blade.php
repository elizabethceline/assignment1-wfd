@extends('layout.layout')

@section('head')
    <style>
        .shadow1 {
            background: linear-gradient(180deg, var(--blue) 4.23%, rgba(16, 72, 158, 0) 26.69%);
        }

        .shadow2 {
            background: linear-gradient(0deg, var(--blue) 14.23%, rgba(22, 138, 214, 0) 76.69%);
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
    <section class="w-screen h-screen bg-neutral-100"></section>
@endsection

@section('script')
@endsection
