<!-- Main navigation container -->
<nav class="navbar flex-no-wrap fixed top-0 z-50 flex w-full items-center justify-center py-2 bg-[var(--blue)] lg:flex-wrap lg:py-5"
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
                        href="#" data-twe-nav-link-ref>Home</a>
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
                        href="#" data-twe-nav-link-ref>Services</a>
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
                        href="#" data-twe-nav-link-ref>Contact Us</a>
                </li>
            </ul>

            <div class="flex items-center max-lg:mt-8">
                <button type="button"
                    class="inline-block rounded-full bg-[var(--light-blue)] px-6 pb-2 pt-2.5 text-lg font-semibold leading-normal text-white transition duration-300 ease-in-out hover:bg-[var(--yellow)] hover:shadow-primary-2 hover:text-black focus:bg-[var(--yellow)] focus:outline-none focus:ring-0 focus:text-black active:bg-[var(--yellow)] active:shadow-primary-2 active:text-black motion-reduce:transition-none">
                    Download DANA
                </button>

            </div>
        </div>
    </div>
</nav>
