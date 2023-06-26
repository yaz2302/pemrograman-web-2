<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('laravel/style.css') }}">


        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 783.55 354.91">
                  <g id="bongo-cat">
                    <g class="head">
                      <path d="M280.4,221l383.8,62.6a171.4,171.4,0,0,0-9.2-40.5,174,174,0,0,0-28.7-50.5,163.3,163.3,0,0,0,3.2-73.8c-11.6-1.9-42,14.2-44.5,17.5-19.6-24-88.5-52.7-153.7-48.1A78.8,78.8,0,0,0,398,67.1c-9.8,2.9-19,29.7-19.4,33.7a320,320,0,0,0-31.7,23.6c-14,11.8-28.9,24.4-42.5,44.3A173,173,0,0,0,280.4,221Z"></path>
                      <path d="M396.6,178.6c.4.9,2.7,6.5,8.5,8.4s13.4-1.2,17.2-7.9c-.9,7.5,3.8,14.3,10.4,16a14.4,14.4,0,0,0,15-5.7"></path>
                      <path d="M474,179.2a6.6,6.6,0,0,0-4.9,3.6,6,6,0,0,0,1.5,7.3,6,6,0,0,0,7.9-1c2.3-2.6,2-7,.2-8s-5.9,1.6-5.7,3.5,1.9,2.8,3.2,2.3,1.1-2.2,1.1-2.3"></path>
                      <path d="M365.4,168.9c0,.3-.8,3.6,1.5,6a5.9,5.9,0,0,0,7.2,1.4,6.1,6.1,0,0,0,2.2-7.7c-1.5-3.1-5.7-4.5-7.3-3.2s-.8,6,1,6.6,3.3-.7,3.3-2.1-1.5-1.8-1.6-1.9"></path>
                      <g class="headphone headphone-right">
                        <g class="speaker">
                          <path d="M400.7,80.2c-14.1-20.8-40.2.3-50.7,15-8.7,12.2-9.7,30.3,2.8,37.3,5.4-9,11.8-15.6,21-26.2A214.1,214.1,0,0,1,400.7,80.2Z"></path>
                          <path d="M381.5,79.4c-6.6-7.5-9.6-5.8-12.3-5.5-16.3,1.3-32,20.3-27.8,33.9a21.8,21.8,0,0,0,5.9,8.5c1.7-2.6,3.5-5.1,5.4-7.7A150.7,150.7,0,0,1,381.5,79.4Z"></path>
                          <path d="M367.3,77.8a13.1,13.1,0,0,0-5.1-1.8c-8.5-.9-18.7,7.5-18.4,16.1a12.8,12.8,0,0,0,2.6,7c3.1-3.3,6.3-6.8,9.6-10.2S363.6,81.3,367.3,77.8Z"></path>
                        </g>
                        <path class="band" d="M515,40.6c-15.9-4.6-57-14.1-104,2.3a166.9,166.9,0,0,0-60.9,37.3"></path>
                      </g>
                    </g>
                    <g class="music music-right">
                      <g class="note">
                        <g>
                          <path d="M368.5,46.5c.5,2.1,1.2,3.5,3.8,6.3s5.1,4.3,6.5,7.2a11.1,11.1,0,0,1,.7,2,10.5,10.5,0,0,1-.7,6.5"></path>
                          <path d="M368.5,46.5a20.8,20.8,0,0,0,2.4,11.7c2.3,4.4,5,5.4,6.8,9.5a17.5,17.5,0,0,1,.4,11"></path>
                          <line x1="368.5" y1="47.7" x2="368.5" y2="92.8"></line>
                          <path d="M368.5,92.8c.1-3.1-4.7-6.3-9-6.3s-8.7,2.7-8.7,5.8,4.8,5.7,8.7,5.8S368.3,95.8,368.5,92.8Z"></path>
                        </g>
                        <g>
                          <path d="M368.5,46.5c.5,2.1,1.2,3.5,3.8,6.3s5.1,4.3,6.5,7.2a11.1,11.1,0,0,1,.7,2,10.5,10.5,0,0,1-.7,6.5"></path>
                          <path d="M368.5,46.5a20.8,20.8,0,0,0,2.4,11.7c2.3,4.4,5,5.4,6.8,9.5a17.5,17.5,0,0,1,.4,11"></path>
                          <line x1="368.5" y1="47.7" x2="368.5" y2="92.8"></line>
                          <path d="M368.5,92.8c.1-3.1-4.7-6.3-9-6.3s-8.7,2.7-8.7,5.8,4.8,5.7,8.7,5.8S368.3,95.8,368.5,92.8Z"></path>
                        </g>
                      </g>
                      <g class="note">
                        <g>
                          <polyline points="350 81.7 350 43.5 382.7 50.7 382.7 89.5"></polyline>
                          <path d="M350,82.3c0-3.1-4.5-5.7-8.2-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.6,5.7S349.9,85.5,350,82.3Z"></path>
                          <path d="M382.7,89.9c0-3.1-4.4-5.7-8.2-5.8s-9.3,2.7-9.2,5.9,4.7,5.7,8.7,5.7S382.7,93.1,382.7,89.9Z"></path>
                        </g>
                        <g>
                          <polyline points="350 81.7 350 43.5 382.7 50.7 382.7 89.5"></polyline>
                          <path d="M350,82.3c0-3.1-4.5-5.7-8.2-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.6,5.7S349.9,85.5,350,82.3Z"></path>
                          <path d="M382.7,89.9c0-3.1-4.4-5.7-8.2-5.8s-9.3,2.7-9.2,5.9,4.7,5.7,8.7,5.7S382.7,93.1,382.7,89.9Z"></path>
                        </g>
                      </g>
                      <g class="note">
                        <polyline points="388.2 73.6 388.2 34.6 354.9 42.6 354.9 82.4"></polyline>
                        <path d="M388.2,74.1c0-3-4.4-5.6-8.1-5.8s-9.2,2.8-9.1,6,4.6,5.6,8.6,5.6S388.2,77.3,388.2,74.1Z"></path>
                        <path d="M354.9,81.9c0-3.1-4.4-5.7-8.2-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.7,5.7S354.9,85.1,354.9,81.9Z"></path>
                        <line x1="354.9" y1="48.4" x2="388.2" y2="40.3"></line>
                        <line x1="354.9" y1="54.6" x2="388.2" y2="47"></line>
                      </g>
                      <g class="note">
                        <g>
                          <path d="M371.8,79.5c0-3.1-4.5-5.8-8.3-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.7,5.7S371.8,82.7,371.8,79.5Z"></path>
                          <line x1="371.8" y1="79.5" x2="371.8" y2="33.3"></line>
                          <path d="M371.8,33.4a26.6,26.6,0,0,0,3.6,7.8c3.7,5.7,7.6,7,8.8,11.6.5,1.7.7,4.4-.9,8.3"></path>
                        </g>
                        <g>
                          <path d="M371.8,79.5c0-3.1-4.5-5.8-8.3-5.9s-9.3,2.8-9.2,6,4.7,5.7,8.7,5.7S371.8,82.7,371.8,79.5Z"></path>
                          <line x1="371.8" y1="79.5" x2="371.8" y2="33.3"></line>
                          <path d="M371.8,33.4a26.6,26.6,0,0,0,3.6,7.8c3.7,5.7,7.6,7,8.8,11.6.5,1.7.7,4.4-.9,8.3"></path>
                        </g>
                      </g>
                    </g>
                    <g class="table">
                      <polygon points="25.3 158.5 783.2 293 513 354.9 25.3 158.5"></polygon>
                      <line x1="25.3" y1="158.5" x2="783.2" y2="293" fill="none" stroke="#8d00fc" stroke-miterlimit="10" stroke-width="4"></line>
                      <line x1="783.2" y1="293" x2="25.3" y2="158.5" fill="none"></line>
                    </g>
                    <polygon class="laptop-base" points="103.2 263.6 258.9 219.3 636.5 294.4 452.1 339 103.2 263.6"></polygon>
                    <g class="laptop-keyboard">
                      <polygon points="369.6 265.6 255.3 244.3 255.5 243.5 264.7 241.9 380.9 262.3 380.8 263.1 369.6 265.6"></polygon>
                      <polygon points="235.9 256.4 219.8 253.2 219.9 252.5 228.7 251 245.3 253.4 245.1 254.2 235.9 256.4"></polygon>
                      <polygon points="473.1 303.7 248.4 258.9 248.6 258.1 257.7 256.6 486.2 300.4 486 301.3 473.1 303.7"></polygon>
                      <polygon points="410.3 300.2 202.7 257.5 202.9 256.8 211.4 255.3 422.4 297.1 422.2 298 410.3 300.2"></polygon>
                      <polygon points="448.5 308.1 427 303.7 427.3 302.8 439.2 301.4 461.2 304.9 461 305.8 448.5 308.1"></polygon>
                      <polygon points="200.1 264.7 186 261.7 186.2 261 194.5 259.5 208.9 261.8 208.8 262.5 200.1 264.7"></polygon>
                      <polygon points="221.1 269.1 206.6 266.1 206.8 265.3 215.4 263.9 230.3 266.2 230.1 267 221.1 269.1"></polygon>
                      <polygon points="361.4 298.9 230 271 230.2 270.3 239.2 268.9 372.7 295.9 372.5 296.7 361.4 298.9"></polygon>
                      <polygon points="442.8 279.2 383.7 268.2 383.9 267.3 395.1 265.7 455.4 275.9 455.2 276.7 442.8 279.2"></polygon>
                      <polygon points="524.6 294.4 458.6 282.1 458.8 281.2 471.3 279.7 538.6 291 538.4 291.9 524.6 294.4"></polygon>
                      <polygon points="424.7 312.4 374.6 301.7 374.8 300.9 385.9 299.5 437 309.3 436.8 310.2 424.7 312.4"></polygon>
                      <polygon points="409.1 277.3 397.6 278.8 397.4 279.6 498.4 299.1 511.8 296.7 512 295.8 409.1 277.3"></polygon>
                      <polygon points="394.2 274.5 394.4 273.6 246.7 246.5 237.7 248.1 237.5 248.8 382.8 276.8 394.2 274.5"></polygon>
                    </g>
                    <g class="paw paw-right">
                      <path class="down" d="M289.1,181.7c-12.1,9.8-20.6,20.7-20.7,32.1-.2,9,3.8,20.4,13.3,25.2s20.1.6,29.6-3.4c13.4-5.7,23.9-14.6,29.4-21.5"></path>
                      <g class="up">
                        <path d="M327.3,170c-.4-1.4-6.3-18.8-23.5-23.5-.8-.2-18.6-4.7-28.9,6.3-8.4,9.1-6,22.5-4.6,30.2a54.3,54.3,0,0,0,8.1,19.9"></path>
                        <g class="pads">
                          <path d="M297.2,154.8c1-.5,2.7-.1,3,.6s-1.4,2.4-2.6,2.1a1.6,1.6,0,0,1-1.1-1.2A1.6,1.6,0,0,1,297.2,154.8Z"></path>
                          <path d="M285.8,159.4c.3-.4,1-1.1,1.7-.8s.9,1.4.8,2.2-1.8,2.1-2.5,1.5S285.2,160.4,285.8,159.4Z"></path>
                          <path d="M276.9,171c.5-.4,2.7-.3,3.2.6s-.6,1.8-1.4,1.8S276.2,171.6,276.9,171Z"></path>
                          <path d="M296.4,168.6c2.3-.9,6.4,6.3,7.6,9s-5.2,4.5-7.4,6-5.1-6.1-5.9-8.3S293.7,169.8,296.4,168.6Z"></path>
                        </g>
                      </g>
                    </g>
                    <polygon class="terminal-frame" points="93.8 63.3 284.1 73 335.9 230.5 146.2 197.6 93.8 63.3"></polygon>
                    <g class="terminal-code">
                      <line x1="260.2" y1="92.3" x2="212.2" y2="88.7"></line>
                      <line x1="197.3" y1="87.5" x2="145.2" y2="83.5"></line>
                      <line x1="251" y1="104.2" x2="223.4" y2="101.8"></line>
                      <line x1="209.4" y1="100.5" x2="154.4" y2="95.6"></line>
                      <line x1="256.4" y1="117.9" x2="227.5" y2="114.7"></line>
                      <line x1="215.9" y1="113.4" x2="183.5" y2="109.8"></line>
                      <line x1="169.1" y1="108.2" x2="142.9" y2="105.3"></line>
                      <line x1="275.4" y1="132.8" x2="249.4" y2="129.6"></line>
                      <line x1="234.4" y1="127.8" x2="197.3" y2="123.3"></line>
                      <line x1="185.6" y1="121.9" x2="149.1" y2="117.5"></line>
                      <line x1="261" y1="144.6" x2="244.5" y2="142.5"></line>
                      <line x1="235.5" y1="141.3" x2="214.9" y2="138.7"></line>
                      <line x1="203.4" y1="137.2" x2="180.4" y2="134.3"></line>
                      <line x1="169.3" y1="132.9" x2="155.1" y2="131.1"></line>
                      <line x1="264.7" y1="158.3" x2="221.9" y2="152.1"></line>
                      <line x1="208.2" y1="150.1" x2="191.7" y2="147.7"></line>
                      <line x1="291.3" y1="174.3" x2="268.8" y2="170.9"></line>
                      <line x1="257.8" y1="169.2" x2="226.5" y2="164.4"></line>
                      <line x1="217.3" y1="163" x2="185" y2="158.1"></line>
                      <line x1="173.8" y1="156.4" x2="152.9" y2="153.2"></line>
                      <line x1="278.5" y1="185.6" x2="257.3" y2="182.2"></line>
                      <line x1="243.8" y1="179.9" x2="230.3" y2="177.7"></line>
                      <line x1="216.5" y1="175.8" x2="196.7" y2="172.5"></line>
                      <line x2="262.1" y2="196.1" x1="280.5" y1="199.2"></line>
                      <line x2="213.8" y2="187.9" x1="251.1" y1="194.2"></line>
                      <line x2="180.8" y2="182.3" x1="202.7" y1="186"></line>
                    </g>
                    <polygon class="laptop-cover" points="103.2 263.6 452.1 339 360.8 12.4 2 2 103.2 263.6"></polygon>
                    <g class="paw paw-left">
                      <g class="up">
                        <path d="M586.6,208.8c-.6-2.3-4.2-15.6-17.2-22.2-2.7-1.3-12.8-6.4-23.6-1.8s-14.6,16.5-14.8,18.4c-1.2,9-.7,18.4,2.4,26.1,2.4,6,7.5,17.2,9.7,20.2"></path>
                        <g class="pads">
                          <path d="M561.4,194.9a2.7,2.7,0,0,1,3,.5c.4,1-1.4,2.4-2.6,2.2a1.5,1.5,0,0,1-1.1-1.3A1.2,1.2,0,0,1,561.4,194.9Z"></path>
                          <path d="M550.7,200.4c.4-.5,1.1-1.1,1.7-.8a2,2,0,0,1,.8,2.2c-.3,1.2-1.8,2-2.5,1.5S550.1,201.3,550.7,200.4Z"></path>
                          <path d="M541.1,211.1c.5-.4,2.7-.4,3.2.5s-.6,1.8-1.5,1.9S540.4,211.6,541.1,211.1Z"></path>
                          <path d="M560.6,209.2c2.3-.9,6.4,6.3,7.6,9s-5.3,4.5-7.4,6-5.1-6-5.9-8.3S557.9,210.4,560.6,209.2Z"></path>
                        </g>
                      </g>
                      <path class="down" d="M534.1,231.4c-19.7,6-32.9,18.4-34.2,29.1a30.1,30.1,0,0,0,1.7,14.1,24.8,24.8,0,0,0,6.1,8.8c6,5.1,16.8,4,38-3.9a288.7,288.7,0,0,0,46.5-22.1"></path>
                    </g>
                    <g class="headphone headphone-left">
                      <g class="speaker">
                        <path d="M609.5,137.3c-17.1,6.3-20.7,51.4-4.5,67.3,1.4,1.5,5.5,5.5,11.3,5.9,8.2.5,14.5-6.3,16.9-8.9,10.1-11,11.5-27.5,8.1-40.1-1.4-4.8-3.9-14-12.7-19.9C627.4,140.8,617.7,134.3,609.5,137.3Z"></path>
                        <path d="M626.5,196.1c2.7-.4,5.9-2.6,9.3-6,6.6-6.6,6.8-16.6,5.8-24s-4.2-16.1-11.3-19.7a18.7,18.7,0,0,0-10.9-1.9C614,149.3,615.3,192.6,626.5,196.1Z"></path>
                        <path d="M631.6,151c-4.5,3.3-.5,27.1,3.8,28.2s6.9-6.6,6.2-13.1S637.4,153.5,631.6,151Z"></path>
                      </g>
                      <path class="band" d="M638.9,157.7c-4-16.8-25.9-61.9-75.3-95.3A155.5,155.5,0,0,0,515,40.6"></path>
                    </g>
                    <g class="music music-left">
                      <g class="note">
                        <g>
                          <path d="M633.3,119.9c.6,2,1.3,3.5,3.8,6.3s5.2,4.3,6.5,7.2a6.9,6.9,0,0,1,.7,1.9,10.2,10.2,0,0,1-.7,6.6"></path>
                          <path d="M633.3,119.9a23,23,0,0,0,2.4,11.7c2.4,4.3,5.1,5.4,6.8,9.5a16.9,16.9,0,0,1,.5,11"></path>
                          <line x1="633.3" y1="121.1" x2="633.3" y2="166.2"></line>
                          <path d="M633.3,166.2c.2-3.2-4.6-6.3-8.9-6.3s-8.7,2.6-8.7,5.7,4.7,5.7,8.7,5.8S633.1,169.2,633.3,166.2Z"></path>
                        </g>
                        <g>
                          <path d="M633.3,119.9c.6,2,1.3,3.5,3.8,6.3s5.2,4.3,6.5,7.2a6.9,6.9,0,0,1,.7,1.9,10.2,10.2,0,0,1-.7,6.6"></path>
                          <path d="M633.3,119.9a23,23,0,0,0,2.4,11.7c2.4,4.3,5.1,5.4,6.8,9.5a16.9,16.9,0,0,1,.5,11"></path>
                          <line x1="633.3" y1="121.1" x2="633.3" y2="166.2"></line>
                          <path d="M633.3,166.2c.2-3.2-4.6-6.3-8.9-6.3s-8.7,2.6-8.7,5.7,4.7,5.7,8.7,5.8S633.1,169.2,633.3,166.2Z"></path>
                        </g>
                      </g>
                      <g class="note">
                        <g>
                          <polyline points="614.8 155 614.8 116.8 647.5 124 647.5 162.9"></polyline>
                          <path d="M614.8,155.7c0-3.1-4.4-5.7-8.2-5.9s-9.2,2.8-9.2,6,4.7,5.6,8.7,5.6S614.8,158.8,614.8,155.7Z"></path>
                          <path d="M647.5,163.3c.1-3.1-4.4-5.7-8.2-5.9s-9.2,2.8-9.1,6,4.7,5.7,8.6,5.7S647.5,166.5,647.5,163.3Z"></path>
                        </g>
                        <g>
                          <polyline points="614.8 155 614.8 116.8 647.5 124 647.5 162.9"></polyline>
                          <path d="M614.8,155.7c0-3.1-4.4-5.7-8.2-5.9s-9.2,2.8-9.2,6,4.7,5.6,8.7,5.6S614.8,158.8,614.8,155.7Z"></path>
                          <path d="M647.5,163.3c.1-3.1-4.4-5.7-8.2-5.9s-9.2,2.8-9.1,6,4.7,5.7,8.6,5.7S647.5,166.5,647.5,163.3Z"></path>
                        </g>
                      </g>
                      <g class="note">
                        <polyline points="646.5 148.5 646.5 109.4 613.2 117.4 613.2 157.2"></polyline>
                        <path d="M646.5,149c0-3.1-4.4-5.7-8.1-5.8s-9.2,2.7-9.1,5.9,4.7,5.6,8.6,5.6S646.5,152.1,646.5,149Z"></path>
                        <path d="M613.2,156.7c.1-3.1-4.4-5.7-8.2-5.8s-9.3,2.7-9.2,6,4.7,5.6,8.7,5.6S613.2,159.9,613.2,156.7Z"></path>
                        <line x1="613.2" y1="123.2" x2="646.5" y2="115.1"></line>
                        <line x1="613.2" y1="129.4" x2="646.5" y2="121.8"></line>
                      </g>
                      <g class="note">
                        <g>
                          <path d="M636.6,152.9c0-3.2-4.4-5.8-8.2-5.9s-9.3,2.8-9.3,6,4.8,5.7,8.7,5.7S636.6,156.1,636.6,152.9Z"></path>
                          <line x1="636.6" y1="152.9" x2="636.6" y2="106.6"></line>
                          <path d="M636.6,106.8a33.2,33.2,0,0,0,3.6,7.8c3.8,5.7,7.6,6.9,8.9,11.5a13.3,13.3,0,0,1-.9,8.4"></path>
                        </g>
                        <g>
                          <path d="M636.6,152.9c0-3.2-4.4-5.8-8.2-5.9s-9.3,2.8-9.3,6,4.8,5.7,8.7,5.7S636.6,156.1,636.6,152.9Z"></path>
                          <line x1="636.6" y1="152.9" x2="636.6" y2="106.6"></line>
                          <path d="M636.6,106.8a33.2,33.2,0,0,0,3.6,7.8c3.8,5.7,7.6,6.9,8.9,11.5a13.3,13.3,0,0,1-.9,8.4"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
            </div>
            <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js'></script>
            <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin3.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js'></script>
            <script  src="{{ asset('laravel/script.js') }}"></script>
    </body>
</html>
