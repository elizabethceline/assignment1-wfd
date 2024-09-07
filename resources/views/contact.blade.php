@extends('layout.layout')

@section('head')
@endsection

@section('content')
    <section class="pt-16 lg:pt-20 w-screen h-fit xl:h-screen bg-neutral-100 flex justify-center items-center">
        <div class="w-[85%] lg:w-9/12 py-16 grid lg:grid-cols-2 justify-center items-center">
            <div class="w-full lg:w-9/12">
                <img src="{{ asset('assets/contact.png') }}" alt="" class="rounded-t-2xl">
                <div class="bg-white px-8 py-4 rounded-b-2xl">
                    <h1
                        class="text-2xl sm:text-3xl md:text-4xl xl:text-[3.5rem] font-bold text-slate-800 !leading-[1.2] mb-2">
                        Contact Us
                    </h1>
                    <h4 class="text-lg sm:text-xl text-slate-500"><i class="fa-brands fa-instagram fa-lg"></i> @dana.id</h4>
                    <h4 class="text-lg sm:text-xl text-slate-500 my-2"><i class="fa-solid fa-phone fa-md"></i> 08041500455</h4>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center max-lg:pt-8">
                <h4 class="text-lg sm:text-xl text-slate-500">We are here to help with further information or enquiries
                    about DANA.</h4>
                <div class="w-full flex gap-2 lg:gap-5 mt-5">
                    <div class="relative mb-5 w-1/2" data-twe-input-wrapper-init>
                        <input type="text"
                            class="peer bg-white block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput1" placeholder="Name" />
                        <label for="exampleFormControlInput1"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">First
                            Name
                        </label>
                    </div>
                    <div class="relative mb-5 w-1/2" data-twe-input-wrapper-init>
                        <input type="text"
                            class="peer bg-white block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput1" placeholder="Name" />
                        <label for="exampleFormControlInput1"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Last
                            Name
                        </label>
                    </div>
                </div>

                <div class="relative mb-5 w-full" data-twe-input-wrapper-init>
                    <input type="email"
                        class="peer bg-white block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                        id="exampleFormControlInputEmail" placeholder="Email Address" />
                    <label for="exampleFormControlInputEmail"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Email
                        Address
                    </label>
                </div>
                <div class="relative mb-5 w-full" data-twe-input-wrapper-init>
                    <textarea
                        class="peer bg-white block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-white dark:placeholder:text-neutral-300 dark:peer-focus:text-primary [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                        id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                    <label for="exampleFormControlTextarea1"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-primary">Message</label>
                </div>
                <button type="button"
                    class="w-fit text-lg sm:text-xl inline-block rounded-full bg-transparent border-2 border-[var(--blue)]  mt-4 px-6 pb-2 pt-2.5 font-semibold leading-normal text-[var(--blue)] transition duration-300 ease-in-out hover:bg-[var(--yellow)] hover:text-black hover:border-[var(--yellow)] focus:bg-[var(--yellow)] focus:outline-[var(--yellow)] focus:ring-0 focus:text-black focus:border-[var(--yellow)] active:bg-[var(--yellow)] active:text-black active:border-none motion-reduce:transition-none">
                    Send
                </button>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
