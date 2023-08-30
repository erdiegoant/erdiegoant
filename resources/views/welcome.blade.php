<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I am a Senior Software Developer in love with Laravel and Flutter.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Diego Barrera">
    <meta property="og:description" content="I am a Senior Software Developer in love with Laravel and Flutter.">
    {{--    <meta property="og:image" content="https://tpetry.me/social.png">--}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Diego Barrera">
    <meta name="twitter:description" content="I am a Senior Software Developer in love with Laravel and Flutter.">
    {{--    <meta name="twitter:image" content="https://tpetry.me/social.png">--}}

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased font-sans bg-circuit-pattern">
<section class="min-h-screen w-full px-3 md:px-4">
    <div class="container grid grid-cols-12 md:gap-10 justify-between">
        <div class="col-span-12 lg:col-span-4 lg:mt-44">
            <div class="w-full mb-6 lg:mb-0 mx-auto relative bg-blue-100 text-center px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                <img src="{{ asset('images/avatar.jpeg') }}" alt="Diego Barrera" class="absolute left-[50%] transform -translate-x-[50%] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]" width="240" height="240">
                <div class="pt-[100px] pb-6">
                    <h1 class="text-5xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-3xl text-center my-5">
                        <span class="block">Diego Barrera</span>
                        <span class="block mt-1 text-purple-500 lg:inline lg:mt-0">Fullstack Developer</span>
                    </h1>
                    <div class="flex justify-center space-x-3">
                        <a href="https://twitter.com/erdiegoant" target="_blank" rel="noopener noreferrer" aria-label="Twitter Profile">
                                <span class="socialbtn text-[#1C9CEA]">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>                                </span>
                        </a>
                        <a href="https://www.linkedin.com/in/erdiegoant/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Profile">
                                <span class="socialbtn text-[#0072b1]">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>                                </span>
                        </a>
                        <a href="https://github.com/erdiegoant" target="_blank" rel="noopener noreferrer" aria-label="GitHub Profile">
                                <span class="socialbtn text-[#24292f]">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>                                </span>
                        </a>

                    </div>
                    <div class="p-7 rounded-2xl mt-7 bg-indigo-200">
                        <div class="flex border-b border-blue-100 py-2.5">
                                    <span class="w-10 h-10 rounded-lg flex justify-center items-center bg-white text-brand-icon-icon4 shadow-md">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
</svg>                                    </span>
                            <div class="text-left ml-2.5">
                                <p class="text-xs text-brand-gray">Location</p>
                                <p>Colombia, Medellin</p>
                            </div>
                        </div>
                        <div class="flex border-b border-blue-100 py-2.5">
                                    <span class="w-10 h-10 rounded-lg flex justify-center items-center bg-white text-brand-icon-icon1 shadow-md">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
  <path d="M21 6.375c0 2.692-4.03 4.875-9 4.875S3 9.067 3 6.375 7.03 1.5 12 1.5s9 2.183 9 4.875z"></path>
  <path d="M12 12.75c2.685 0 5.19-.586 7.078-1.609a8.283 8.283 0 001.897-1.384c.016.121.025.244.025.368C21 12.817 16.97 15 12 15s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.285 8.285 0 001.897 1.384C6.809 12.164 9.315 12.75 12 12.75z"></path>
  <path d="M12 16.5c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 15.914 9.315 16.5 12 16.5z"></path>
  <path d="M12 20.25c2.685 0 5.19-.586 7.078-1.609a8.282 8.282 0 001.897-1.384c.016.121.025.244.025.368 0 2.692-4.03 4.875-9 4.875s-9-2.183-9-4.875c0-.124.009-.247.025-.368a8.284 8.284 0 001.897 1.384C6.809 19.664 9.315 20.25 12 20.25z"></path>
</svg>                                    </span>
                            <div class="text-left ml-2.5">
                                <p class="text-xs text-brand-gray">Tech Stack</p>
                                <p>Laravel💙</p>
                                <p>VILT and TALL💙</p>
                                <p>Flutter💙</p>
                            </div>
                        </div>
                        <div class="flex py-2.5">
                                    <span class="w-10 h-10 rounded-lg flex justify-center items-center bg-white text-brand-icon-icon2 shadow-md">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM6.262 6.072a8.25 8.25 0 1010.562-.766 4.5 4.5 0 01-1.318 1.357L14.25 7.5l.165.33a.809.809 0 01-1.086 1.085l-.604-.302a1.125 1.125 0 00-1.298.21l-.132.131c-.439.44-.439 1.152 0 1.591l.296.296c.256.257.622.374.98.314l1.17-.195c.323-.054.654.036.905.245l1.33 1.108c.32.267.46.694.358 1.1a8.7 8.7 0 01-2.288 4.04l-.723.724a1.125 1.125 0 01-1.298.21l-.153-.076a1.125 1.125 0 01-.622-1.006v-1.089c0-.298-.119-.585-.33-.796l-1.347-1.347a1.125 1.125 0 01-.21-1.298L9.75 12l-1.64-1.64a6 6 0 01-1.676-3.257l-.172-1.03z" clip-rule="evenodd"></path>
</svg>                                    </span>
                            <div class="text-left ml-2.5">
                                <p class="text-xs text-brand-gray">Availability</p>
                                <p>Remote, Local</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 lg:col-span-8 lg:mt-[36px] mb-10">
            <div class="rounded-[20px] bg-blue-100">
                <div class="py-6 md:pt-12 md:py-12 px-6 md:px-10 lg:px-14 relative">

                    <h1 class="relative inline-block text-5xl font-bold scale-100 after:absolute after:top-1/2 after:h-0.5 after:translate-y-1/2">About Me</h1>
                    <div class="lg:grid grid-cols-12 md:gap-10 pt-5 items-center">
                        <div class="col-span-12 space-y-2.5">
                            <p class="text-brand-gray leading-7">
                                Hey! I'm Tobias, a full-stack software developer, database specialist and educator from Germany.
                                I primarily work with Laravel, MySQL or PostgreSQL and various technologies on the frontend.
                            </p>
                            <p class="text-brand-gray leading-7 mt-2.5">
                                In my first year of programming, I slowed down an application to multi-second response times with a single slow SQL query.
                                This experience sparked my desire to learn all about databases and their performance.
                                In the past 15+ years, I became a database expert with a lot of expertise in the architectures and quirks of many database systems.
                                My favorite part of databases is that feeling, when you find and optimize all the slow queries that the application feels much more speedy afterward.
                            </p>
                            <p class="text-brand-gray leading-7 mt-2.5">
                                At present, I use most of my time working with databases: I help development teams fix their performance problems, teach advanced SQL features and build tools to better work with databases.
                                As a full-stack developer and database engineer, I am the missing link between a developer's approach and the knowledge of a database expert to know more efficient ways to solve a problem.
                            </p>
                        </div>
                    </div>

                    <h2 class="text-[35px] font-bold font-serif pt-12 pb-5">
                        What I offer
                    </h2>
                    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
                        <div class="about-box bg-brand-color1-light">
                            <div class="text-brand-color1">
                                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                                </svg>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-[22px] font-semibold">
                                    Performance Tuning
                                </h3>
                                <p class="leading-7 text-brand-gray">
                                    I can identify slow queries and suggest indexes or schema changes to fix them.
                                </p>
                            </div>
                        </div>
                        <div class="about-box bg-brand-color2-light">
                            <div class="text-brand-color2">
                                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"></path>
                                </svg>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-[22px] font-semibold">
                                    Migration
                                </h3>
                                <p class="leading-7 text-brand-gray">
                                    I can assist you in planning a switch to another database or a complex schema migration.
                                </p>
                            </div>
                        </div>
                        <div class="about-box bg-brand-color4-light">
                            <div class="text-brand-color4">
                                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"></path>
                                </svg>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-[22px] font-semibold">
                                    Training
                                </h3>
                                <p class="leading-7 text-brand-gray">
                                    I can train your developers in many different topics tailored to your needs.
                                </p>
                            </div>
                        </div>
                        <div class="about-box bg-brand-color3-light">
                            <div class="text-brand-color3">
                                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"></path>
                                </svg>
                            </div>
                            <div class="space-y-2">
                                <h3 class="text-[22px] font-semibold">
                                    Guidance
                                </h3>
                                <p class="leading-7 text-brand-gray">
                                    I offer database expertise for all questions and problems that may appear.
                                </p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-[35px] font-bold font-serif pt-12 pb-5">
                        My Projects
                    </h2>
                    <div class="flex flex-col md:block md:columns-2 md:gap-5">
                        <div class="order-1 rounded-lg bg-[#fff0f0] p-6 break-inside-avoid-column">
                            <div class="drop-shadow-lg">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="https://sqlfordevs.com" target="_blank" rel="noopener noreferrer">
                                        <img class="cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg" src="https://tpetry.me/build/assets/project-sqlfordevs@2x-97255ec6.jpg" width="612" height="458" alt="SQL For Devs">
                                    </a>
                                </div>
                            </div>
                            <a href="https://sqlfordevs.com" target="_blank" rel="noopener noreferrer" class="pt-5 text-[22px] font-semibold text-brand-gray hover:text-[#FA5252] duration-300 transition block">
                                <h3>SQL For Devs</h3>
                            </a>
                            <span class="leading-relaxed text-brand-gray mt-2 block">
                Most developers don't know the more in-depth parts of databases.
                Therefore, I frequently share lesser-known tips and knowledge for them.
            </span>
                        </div>
                        <div class="order-3 rounded-lg bg-[#fffae9] p-6 mt-5 break-inside-avoid-column">
                            <div class="drop-shadow-lg">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="https://stateoflaravel.com" target="_blank" rel="noopener noreferrer">
                                        <img class="cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg" src="https://tpetry.me/build/assets/project-stateoflaravel@2x-578489ed.jpg" width="612" height="344" alt="State Of Laravel">
                                    </a>
                                </div>
                            </div>
                            <a href="https://stateoflaravel.com" target="_blank" rel="noopener noreferrer" class="pt-5 text-[22px] font-semibold text-brand-gray hover:text-[#FA5252] duration-300 transition block">
                                <h3>State of Laravel</h3>
                            </a>
                            <span class="leading-relaxed text-brand-gray mt-2 block">
                Laravel is currently the most popular PHP framework and is used in various ways.
                My yearly survey reveals the numerous technologies and development practices being used and how trends change.
            </span>
                        </div>
                        <div class="order-2 rounded-lg bg-[#fff3fc] p-6 mt-5 break-inside-avoid-column">
                            <div class="drop-shadow-lg">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="https://stackbricks.app/" target="_blank" rel="noopener noreferrer">
                                        <img class="cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg" src="https://tpetry.me/build/assets/project-stackbricks@2x-5de34eaf.jpg" width="612" height="344" alt="StackBricks">
                                    </a>
                                </div>
                            </div>
                            <a href="https://stackbricks.app/" target="_blank" rel="noopener noreferrer" class="pt-5 text-[22px] font-semibold text-brand-gray hover:text-[#FA5252] duration-300 transition block">
                                <h3>StackBricks</h3>
                            </a>
                            <span class="leading-relaxed text-brand-gray mt-2 block">
                Running many databases and versions on a development machine is still complicated.
                With StackBricks, I am working on a free application to simplify this.
            </span>
                        </div>
                        <div class="order-4 rounded-lg bg-[#f4f4ff] p-6 mt-5 break-inside-avoid-column">
                            <div class="drop-shadow-lg">
                                <div class="overflow-hidden rounded-lg">
                                    <a href="https://github.com/tpetry" target="_blank" rel="noopener noreferrer">
                                        <img class="cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg" src="https://tpetry.me/build/assets/project-github@2x-9c15a11a.jpg" width="612" height="458" alt="Open Source">
                                    </a>
                                </div>
                            </div>
                            <a href="https://github.com/tpetry" target="_blank" rel="noopener noreferrer" class="pt-5 text-[22px] font-semibold text-brand-gray hover:text-[#FA5252] duration-300 transition block">
                                <h3>Open Source</h3>
                            </a>
                            <span class="leading-relaxed text-brand-gray mt-2 block">
                Many open-source libraries are the foundation of all the applications we build.
                Like numerous other developers, I participate in that tradition to share stuff others can use.
            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>
