<!-- Main navigation container -->
<nav class="navbar flex-no-wrap fixed top-0 z-50 flex w-full items-center justify-center py-2 bg-[var(--blue)] dark:bg-slate-900 lg:flex-wrap lg:py-5"
    data-twe-navbar-ref>
    <div class="flex w-[95vw] lg:w-9/12 flex-wrap items-center justify-between">
        <a class="me-5 ms-2 mt-1 mb-1 flex items-center text-neutral-200 hover:text-neutral-400 focus:text-neutral-400 lg:mb-0 lg:mt-0 lg:px-4"
            href="#">
            <img src="{{ asset('assets/logo.png') }}" style="height: 45px" alt="TE Logo" loading="lazy" />
        </a>

        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 text-neutral-200 lg:hidden"
            type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent4"
            aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7 [&>svg]:stroke-neutral-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>

        <!-- Collapsible navbar container -->
        <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto max-lg:px-4 max-lg:pt-6 max-lg:py-12"
            id="navbarSupportedContent4" data-twe-collapse-item>
            <!-- Left links -->
            <ul class="list-style-none me-auto flex flex-col ps-0 lg:flex-row" data-twe-navbar-nav-ref>
                <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                    <!-- Dashboard link -->
                    <a class="text-lg font-semibold transition duration-200 motion-reduce:transition-none text-white hover:text-white focus:text-white active:text-white lg:px-2"
                        href="{{ route('home') }}" data-twe-nav-link-ref>Home</a>
                </li>
                <li class="mb-4 lg:mb-0 lg:pe-2 max-lg:hidden" data-twe-nav-item-ref>
                    <p
                        class="text-lg transition duration-200 motion-reduce:transition-none text-[var(--light-blue)] lg:px-2">
                        |
                    </p>
                </li>
                <!-- Team link -->
                <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                    <a class="text-lg font-semibold transition duration-200 motion-reduce:transition-none text-white hover:text-white focus:text-white active:text-white lg:px-2"
                        href="{{ route('services') }}" data-twe-nav-link-ref>Services</a>
                </li>
                <li class="mb-4 lg:mb-0 lg:pe-2 max-lg:hidden" data-twe-nav-item-ref>
                    <p
                        class="text-lg transition duration-200 motion-reduce:transition-none text-[var(--light-blue)] lg:px-2">
                        |
                    </p>
                </li>
                <!-- Projects link -->
                <li class="mb-4 lg:mb-0 lg:pe-2" data-twe-nav-item-ref>
                    <a class="text-lg font-semibold transition duration-200 motion-reduce:transition-none text-white hover:text-white focus:text-white active:text-white lg:px-2"
                        href="{{ route('contact') }}" data-twe-nav-link-ref>Contact Us</a>
                </li>
            </ul>

            <label class="inline-flex items-center relative lg:mx-4">
                <input class="peer hidden" id="theme-toggle" type="checkbox" />
                <div
                    class="relative w-[110px] h-[45px] bg-white peer-checked:bg-zinc-500 rounded-full after:absolute after:content-[''] after:w-[40px] after:h-[35px] after:bg-gradient-to-r from-orange-500 to-yellow-400 peer-checked:after:from-zinc-900 peer-checked:after:to-zinc-900 after:rounded-full after:top-[5px] after:left-[5px] active:after:w-[50px] peer-checked:after:left-[105px] peer-checked:after:translate-x-[-100%] shadow-sm duration-300 after:duration-300 after:shadow-md">
                </div>
                <svg height="0" width="100" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-white peer-checked:opacity-60 absolute w-6 h-6 left-[13px] hover:">
                    <path
                        d="M12,17c-2.76,0-5-2.24-5-5s2.24-5,5-5,5,2.24,5,5-2.24,5-5,5ZM13,0h-2V5h2V0Zm0,19h-2v5h2v-5ZM5,11H0v2H5v-2Zm19,0h-5v2h5v-2Zm-2.81-6.78l-1.41-1.41-3.54,3.54,1.41,1.41,3.54-3.54ZM7.76,17.66l-1.41-1.41-3.54,3.54,1.41,1.41,3.54-3.54Zm0-11.31l-3.54-3.54-1.41,1.41,3.54,3.54,1.41-1.41Zm13.44,13.44l-3.54-3.54-1.41,1.41,3.54,3.54,1.41-1.41Z">
                    </path>
                </svg>
                <svg height="512" width="512" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fill-black opacity-60 peer-checked:opacity-70 peer-checked:fill-white absolute w-6 h-6 right-[13px]">
                    <path
                        d="M12.009,24A12.067,12.067,0,0,1,.075,10.725,12.121,12.121,0,0,1,10.1.152a13,13,0,0,1,5.03.206,2.5,2.5,0,0,1,1.8,1.8,2.47,2.47,0,0,1-.7,2.425c-4.559,4.168-4.165,10.645.807,14.412h0a2.5,2.5,0,0,1-.7,4.319A13.875,13.875,0,0,1,12.009,24Zm.074-22a10.776,10.776,0,0,0-1.675.127,10.1,10.1,0,0,0-8.344,8.8A9.928,9.928,0,0,0,4.581,18.7a10.473,10.473,0,0,0,11.093,2.734.5.5,0,0,0,.138-.856h0C9.883,16.1,9.417,8.087,14.865,3.124a.459.459,0,0,0,.127-.465.491.491,0,0,0-.356-.362A10.68,10.68,0,0,0,12.083,2ZM20.5,12a1,1,0,0,1-.97-.757l-.358-1.43L17.74,9.428a1,1,0,0,1,.035-1.94l1.4-.325.351-1.406a1,1,0,0,1,1.94,0l.355,1.418,1.418.355a1,1,0,0,1,0,1.94l-1.418.355-.355,1.418A1,1,0,0,1,20.5,12ZM16,14a1,1,0,0,0,2,0A1,1,0,0,0,16,14Zm6,4a1,1,0,0,0,2,0A1,1,0,0,0,22,18Z">
                    </path>
                </svg>
            </label>

            <div class="flex items-center max-lg:mt-4">
                <button type="button"
                    class="inline-block rounded-full bg-[var(--light-blue)] px-6 pb-2 pt-2.5 text-lg font-semibold leading-normal text-white transition duration-300 ease-in-out hover:bg-[var(--yellow)] hover:shadow-primary-2 hover:text-black focus:bg-[var(--yellow)] focus:outline-none focus:ring-0 focus:text-black active:bg-[var(--yellow)] active:shadow-primary-2 active:text-black motion-reduce:transition-none">
                    Download DANA
                </button>

            </div>
        </div>
    </div>
</nav>
