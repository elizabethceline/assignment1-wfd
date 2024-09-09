<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="DANA">
    <title>DANA</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/css/pagedone.css " rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>

    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        /* ::selection {
            background: var(--pink-hover);
            color: white;
        }


        ::-moz-selection {
            background: var(--pink-hover);
            color: white;
        } */

        * {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        :root {
            /* --blue: #008dec; */
            --blue: #108ee9;
            --light-blue: #18c1ff;
            --yellow: #ffcc3b;
        }


        html,
        body {
            overflow-x: hidden !important;
        }

        body {
            font-family: Poppins;
        }
    </style>

    @yield('head')
</head>

<body>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggleSwitch = document.getElementById('theme-toggle');

            function setTheme(theme) {
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark');
                    toggleSwitch.checked = true;
                } else {
                    document.documentElement.classList.remove('dark');
                    toggleSwitch.checked = false;
                }
            }

            const currentTheme = localStorage.getItem('theme');
            if (currentTheme) {
                setTheme(currentTheme);
            } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                setTheme('dark');
            }

            toggleSwitch.addEventListener('change', function() {
                const theme = this.checked ? 'dark' : 'light';
                setTheme(theme);
                localStorage.setItem('theme', theme);
            });

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                const systemPrefersDark = e.matches;
                if (!localStorage.getItem('theme')) {
                    setTheme(systemPrefersDark ? 'dark' : 'light');
                }
            });
        });
    </script>

    @yield('script')
</body>

</html>
