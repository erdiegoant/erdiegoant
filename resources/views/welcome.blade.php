<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $siteSettings->description }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $siteSettings->title }}">
    <meta property="og:description" content="{{ $siteSettings->description }}">
    <meta property="og:image" content="{{ $social }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $siteSettings->title }}">
    <meta name="twitter:description" content="{{ $siteSettings->description }}">
    <meta name="twitter:image" content="{{ $social }}">

    <title>{{ $siteSettings->title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @livewireStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased font-sans bg-circuit-pattern">
<section class="min-h-screen w-full px-3 md:px-4">
    <div class="container mx-auto grid grid-cols-12 md:gap-10 justify-between">
        <div class="col-span-12 lg:col-span-4 lg:mt-44">
            <div class="w-full mb-6 lg:mb-0 mx-auto relative bg-blue-100 text-center px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                <div class="absolute left-[50%] transform -translate-x-[50%] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px] w-[240px] h-[240px] overflow-hidden">
                    {{ $avatar }}
                </div>
                <div class="pt-[100px] pb-6">
                    <h1 class="text-5xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-3xl text-center my-5">
                        <span class="block">Diego Barrera</span>
                        <span class="block mt-1 text-purple-500 lg:inline lg:mt-0">Fullstack Developer</span>
                    </h1>
                    <div class="flex justify-center space-x-3">
                        <a href="https://twitter.com/erdiegoant" target="_blank" rel="noopener noreferrer" aria-label="Twitter Profile">
                                <span class="flex h-10 w-10 items-center justify-center rounded-md opacity-100 bg-indigo-200 text-[#1C9CEA]">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>                                </span>
                        </a>
                        <a href="https://www.linkedin.com/in/erdiegoant/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Profile">
                                <span class="flex h-10 w-10 items-center justify-center rounded-md opacity-100 bg-indigo-200 text-[#0072b1]">
                                    <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>                                </span>
                        </a>
                        <a href="https://github.com/erdiegoant" target="_blank" rel="noopener noreferrer" aria-label="GitHub Profile">
                                <span class="flex h-10 w-10 items-center justify-center rounded-md opacity-100 bg-indigo-200 text-[#24292f]">
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

                    <h1 class="relative inline-block text-5xl font-bold scale-100">
                        About Me
                    </h1>
                    <div class="lg:grid grid-cols-12 md:gap-10 pt-5 items-center">
                        <div class="col-span-12 space-y-2.5">
                            @foreach($siteSettings->content as $content)
                                <p class="text-brand-gray leading-7 @if(!$loop->first) mt-2.5 @endif">
                                    {{ $content['text'] }}
                                </p>
                            @endforeach
                        </div>
                    </div>

                    <livewire:projects-section/>
                </div>
            </div>
        </div>
    </div>
</section>
@livewireScripts
</body>

</html>
