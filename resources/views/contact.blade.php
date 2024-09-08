@extends('layout.layout')

@section('head')
@endsection

@section('content')
    <section class="pt-16 lg:pt-20 w-screen h-fit xl:h-screen bg-neutral-100 flex justify-center items-center dark:bg-slate-800">
        <div class="w-[85%] lg:w-9/12 py-16 grid lg:grid-cols-2 justify-center items-center">
            <div class="w-full lg:w-9/12">
                <img src="{{ asset('assets/contact.png') }}" alt="" class="rounded-t-2xl">
                <div class="bg-white px-8 py-4 rounded-b-2xl dark:bg-slate-900">
                    <h1
                        class="text-2xl sm:text-3xl md:text-4xl xl:text-[3.5rem] font-bold text-slate-800 dark:text-neutral-100 !leading-[1.2] mb-2">
                        Contact Us
                    </h1>
                    <h4 class="text-lg sm:text-xl text-slate-500 dark:text-neutral-300"><i class="fa-brands fa-instagram fa-lg"></i> @dana.id</h4>
                    <h4 class="text-lg sm:text-xl text-slate-500 dark:text-neutral-300 my-2"><i class="fa-solid fa-phone fa-md"></i> 08041500455</h4>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center max-lg:pt-8">
                <h4 class="text-lg sm:text-xl text-slate-500 dark:text-neutral-300">We are here to help with further information or enquiries
                    about DANA.</h4>
                <div class="w-full flex gap-2 lg:gap-5 mt-5">
                    <div class="relative mb-5 w-1/2" data-twe-input-wrapper-init>
                        <input type="text"
                            class="peer bg-white block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:bg-slate-900 dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-neutral-100 [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput1" placeholder="Name" />
                        <label for="exampleFormControlInput1"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-neutral-100">First
                            Name
                        </label>
                    </div>
                    <div class="relative mb-5 w-1/2" data-twe-input-wrapper-init>
                        <input type="text"
                            class="peer bg-white block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:bg-slate-900 dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-neutral-100 [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                            id="exampleFormControlInput1" placeholder="Name" />
                        <label for="exampleFormControlInput1"
                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-neutral-100">Last
                            Name
                        </label>
                    </div>
                </div>

                <div class="relative mb-5 w-full" data-twe-input-wrapper-init>
                    <input type="email"
                        class="peer bg-white block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:bg-slate-900 dark:text-white dark:placeholder:text-neutral-300 dark:autofill:shadow-autofill dark:peer-focus:text-neutral-100 [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                        id="exampleFormControlInputEmail" placeholder="Email Address" />
                    <label for="exampleFormControlInputEmail"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-neutral-100">Email
                        Address
                    </label>
                </div>
                <div class="relative mb-5 w-full" data-twe-input-wrapper-init>
                    <textarea
                        class="peer bg-white block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[twe-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:bg-slate-900 dark:text-white dark:placeholder:text-neutral-300 dark:peer-focus:text-neutral-100 [&:not([data-twe-input-placeholder-active])]:placeholder:opacity-0"
                        id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                    <label for="exampleFormControlTextarea1"
                        class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[twe-input-state-active]:-translate-y-[0.9rem] peer-data-[twe-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-400 dark:peer-focus:text-neutral-100">Message</label>
                </div>
                <button type="button"
                class="w-fit text-lg sm:text-xl inline-block rounded-full bg-transparent border-2 border-[var(--blue)] dark:border-[var(--yellow)] mt-4 px-6 pb-2 pt-2.5 font-semibold leading-normal text-[var(--blue)] dark:text-[var(--yellow)] transition duration-300 ease-in-out hover:bg-[var(--yellow)] dark:hover:bg-[var(--blue)] hover:text-black dark:hover:text-white hover:border-[var(--yellow)] dark:hover:border-[var(--blue)] focus:bg-[var(--yellow)] dark:focus:bg-[var(--blue)] focus:outline-[var(--yellow)] dark:focus:outline-[var(--blue)] focus:ring-0 focus:text-black dark:focus:text-white focus:border-[var(--yellow)] dark:focus:border-[var(--blue)] active:text-black dark:active:text-white active:border-none motion-reduce:transition-none">
                Send
                </button>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
