@extends('layout.layout')

@section('head')
    <section class="pt-16 lg:pt-20 w-screen h-fit xl:h-screen bg-neutral-100 flex justify-center items-center">
        <div class="w-[85%] lg:w-9/12 flex flex-col lg:flex-row justify-center items-center lg:gap-12 max-xl:pt-8 max-xl:pb-20 max-lg:text-center">
            <img class="w-9/12 sm:w-1/2 lg:w-[20%] max-lg:order-2 max-lg:mt-8" src="{{ asset('assets/phone-service.png') }}" alt="">
            <div class="max-lg:order-1">
                <h4 class="text-lg sm:text-xl text-[var(--blue)]">DOMPET DIGITAL</h4>
                <h1 class="text-2xl sm:text-3xl md:text-4xl xl:text-[3.5rem] font-bold text-slate-800 mt-2 mb-3 lg:mt-4 lg:mb-4 !leading-[1.2]">
                    Senyata dompet di tangan, secepat akses di genggaman
                </h1>
                <h4 class="text-lg sm:text-xl text-slate-500">DANA Wallet bikin hidup kamu jadi ringkas, hanya perlu tambah
                    berbagai item yang ada di dompet ke HP kamu sekarang dan nikmati akses mudah dan cepat.</h4>
                <button type="button"
                    class="w-fit text-lg sm:text-xl inline-block rounded-full bg-transparent border-2 border-[var(--blue)]  mt-4 px-6 pb-2 pt-2.5 font-semibold leading-normal text-[var(--blue)] transition duration-300 ease-in-out hover:bg-[var(--yellow)] hover:text-black hover:border-[var(--yellow)] focus:bg-[var(--yellow)] focus:outline-[var(--yellow)] focus:ring-0 focus:text-black focus:border-[var(--yellow)] active:bg-[var(--yellow)] active:text-black active:border-none motion-reduce:transition-none">
                    Cobain Wallet di DANA
                </button>
            </div>
        </div>
    </section>

    <section class="w-screen h-fit pb-20 bg-neutral-100 flex justify-center">
        <div class="w-[85%] lg:w-9/12 h-fit px-8 lg:px-16 py-8 bg-white rounded-2xl">
            <div class="flex flex-col lg:flex-row justify-center items-center lg:gap-12">
                <div class="lg:p-4 w-full lg:w-[40%] flex justify-center items-center">
                    <img class="w-full" src="{{ asset('assets/dompet.png') }}" alt="">
                </div>
                <div class="lg:w-[60%]">
                    <h1
                        class="text-2xl sm:text-3xl md:text-4xl xl:text-[3.5rem] font-bold text-slate-800 my-4 !leading-[1.2]">

                        Akses dompet cepat tanpa hambatan!
                    </h1>
                    <h4 class="text-lg sm:text-xl text-slate-500">Terbukti #BukanDompetBiasa, kamu bisa masukkan uang, Kartu
                        Bank dan Voucher ke DANA Wallet.</h4>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row justify-center items-center lg:gap-12 mt-16 max-lg:mt-8">
                <div class="lg:w-[60%] max-lg:order-2">
                    <h1
                        class="text-2xl sm:text-3xl md:text-4xl xl:text-[3.5rem] font-bold text-slate-800 my-4 !leading-[1.2]">

                        Simpan Kartu Bank di DANA
                    </h1>
                    <h4 class="text-lg sm:text-xl text-slate-500">Buat pembayaran jadi lebih nyaman dan fleksibel dengan
                        menambahkan kartu kredit atau debit yang kamu punya.</h4>
                </div>
                <div class="lg:p-4 w-full lg:w-[40%] flex justify-center items-center max-lg:order-1">
                    <img class="w-full" src="{{ asset('assets/bank.png') }}" alt="">
                </div>
            </div>
            <div class="flex flex-col lg:flex-row justify-center items-center lg:gap-12 mt-16 max-lg:mt-8">
                <div class="lg:p-4 w-full lg:w-[40%] flex justify-center items-center">
                    <img class="w-full" src="{{ asset('assets/verif.png') }}" alt="">
                </div>
                <div class="lg:w-[60%]">
                    <h1
                        class="text-2xl sm:text-3xl md:text-4xl xl:text-[3.5rem] font-bold text-slate-800 my-4 !leading-[1.2]">


Terjamin dan terverifikasi aman
                    </h1>
                    <h4 class="text-lg sm:text-xl text-slate-500">Diawasi oleh Bank Indonesia & KOMINFO, memiliki sertifikasi PCI DSS & ISO 27001, DANA selalu dijamin keamanannya.</h4>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row justify-center items-center lg:gap-12 mt-16 max-lg:mt-8">
                <div class="lg:w-[60%] max-lg:order-2">
                    <h1
                        class="text-2xl sm:text-3xl md:text-4xl xl:text-[3.5rem] font-bold text-slate-800 my-4 !leading-[1.2]">

                        Data Pribadi terlindungi di DANA
                    </h1>
                    <h4 class="text-lg sm:text-xl text-slate-500">Dengan DANA Protection, data kartumu pasti aman dengan enkripsi canggih, bikin datamu hanya kamu aja yang tahu.</h4>
                </div>
                <div class="lg:p-4 w-full lg:w-[40%] flex justify-center items-center max-lg:order-1">
                    <img class="w-full" src="{{ asset('assets/protect.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
@endsection

@section('script')
@endsection
