{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" /></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')

    <title>Motelkusuka</title>
</head>
<body class="font-['Poppins'] mx-auto" >
    <style type="text/tailwindcss">


        header{
            height: 780px;
        }

        #publish{
            height: 435px;
        }

        .testi{
            height: 316px;
            width: 558px;
        }

        .pop{
            background-color: #FFF;
            padding: 25px;
            margin: 5px;
            border-radius: 20px;
        }

        @media screen and (max-width:1023px) {
            nav {
                left: -100%;
                transition: all .3s ease-in-out;
            }
            nav > ul > li {
                @apply w-full p-0;
            }
            .has-child  {
                @apply overflow-hidden;
            }
            .has-child > span.caret {
                @apply invert-0 top-4;
            }
            .has-child.active .submenu {
                @apply visible opacity-100 max-h-[1000px];
            }
            nav .submenu {
                @apply visible opacity-100 relative w-full max-h-0;
            }
            nav.active {
                left: 0;
            }
        }

    </style>
    <header class=" container md:bg-gradient-to-r from-[#F5FFFE] to-green-100 bg-white relative ">

        <section class="">

            <nav class="container flex p-3 justify-between items-center mx-auto ">
                <div class="md:hidden inline-block flex-1 space-x-6 mb-5 mr-10 p-5 top-0">
                    <img src="{{ ('img/main-logo.svg') }}" alt="" >
                </div>

                <div class="flex items-center space-x-4 sm:z-50 md:hidden top-0">
                    <a href="#"><img src="{{ ('img/hamburger.svg') }}" alt=""></a>
                </div>

                <div class=" flex space-x-6 hidden md:block">
                    <a href="#"><img src="{{ ('img/main-logo.svg') }}" alt="" class="inline-block mb-5 mr-10"></a>
                    <a href="#" class="font-bold border-b-4 border-[#42A66A] p-2 title">Home</a>
                    <a href="#" class="ease-in-out duration-300 hover:font-bold hover:scale-110 title ">Booking</a>
                    <a href="#" class="ease-in-out duration-300 hover:font-bold hover:scale-110 title">Fasilities</a>
                    <a href="#"class="ease-in-out duration-300 hover:font-bold hover:scale-110 title">About Us</a>
                    <a href="#"class="ease-in-out duration-300 hover:font-bold hover:scale-110 title">Contact</a>

                </div>

                <div class="md:flex items-center space-x-4 sm:z-50 hidden">
                    <a href="#" class="ease-in-out duration-300 font-bold text-[#42A66A] underline hover:text-lg ">Login</a>
                    <a href="#"><button type="button" class="ease-out duration-300 bg-[#42A66A] py-3 rounded-full text-white px-10 font-bold hover:bg-green-600 hover:scale-110"> Register</button></a>
                </div>




            </nav>

            <div class=" md:absolute -z-100 right-0 top-0 static">
                <img src="{{ ('img/Banner-1.png') }}" alt=""  >
            </div>



            <div class="container mx-auto z-100">
                <div class="mt-40" style="width: 700px;">
                    <p class="text-xl text-gray-800 font-medium">Mountains | Plans | Beaches</p>
                    <h1 class="text-6xl my-10"><span class="font-bold text-[#42A66A]">Find</span> your perfect <span class="font-bold text-[#42A66A]">place</span> to your <span class="font-bold text-[#42A66A]">family</span></h1>
                    <p class="text-sm text-opacity-20">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab magnam nulla dolores, voluptatibus earum culpa error est vel consectetur corrupti odit assumenda. Delectus ab quasi tenetur autem perferendis nisi reiciendis.</p>
                    <button type="button" class="bg-[#42A66A] py-3 rounded-full text-white px-10 font-bold mt-10 ease-in-out duration-300 hover:bg-green-600 hover:drop-shadow-lg hover:scale-110">Book Now</button>
                </div>
        </section>
    </header>

    <section id="Partner" class="py-10">
        <div class="container mx-auto">
            <p class="container text-center mb-5 h-30 ext-xl text-gray-800 font-medium ">Technology Partnership</p>
            <div class="flex items-center justify-between space-x-3">
                <img src="{{ ('img/partner01.png') }}" alt="" class="ease-in-out duration-300 hover:-translate-y-1 hover:scale-110">
                <img src="{{ ('img/partner02.png') }}" alt="" class="ease-in-out duration-300 hover:-translate-y-1 hover:scale-110">
                <img src="{{ ('img/partner03.png') }}" alt="" class="ease-in-out duration-300 hover:-translate-y-1 hover:scale-110">
                <img src="{{ ('img/partner04.png') }}" alt="" class="ease-in-out duration-300 hover:-translate-y-1 hover:scale-110">
                <img src="{{ ('img/partner05.png') }}" alt="" class="ease-in-out duration-300 hover:-translate-y-1 hover:scale-110">

            </div>
        </div>
    </section>

    <section id="popular" class="py-10">
        <div class="container mx-auto">
            <div class="flex items-center justify-between mt-2 ">
                <div class="space-y-2 max-w-[515px]">
                    <h2 class="text-3xl pb-5 font-bold">Most Popular</h2>
                    <p class="text-gray-400 ">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe voluptatum aliquam laudantium, minima aspe
                    </p>
                </div>

                <button type="button" class="ease-in-out duration-300 hover:bg-[#42A66A] hover:scale-105 hover:text-white border-[#42A66A] border-[1px] rounded-full py-3 px-10 text-[#42A66A] font-bold hover:drop-shadow-lg">
                    See More
                </button>
            </div>

            <div class="grid grid-cols-3 gap-3 mt-20 justify-between ">
                <article class="ease-in-out duration-300 card flex flex-col items-left px-[35px] py-[20] relative  hover:-translate-y-1 hover:scale-105 hover:drop-shadow-xl pop">
                    <img src="{{ ('img/popular01.png') }}" alt="" class="rounded-lg">
                    <p class="text-green-400 pt-10">Sukabumi Regency</p>
                    <h4 class="text-2xl font-bold py-5">Leuwigoong Homestay</h4>
                    <h4 class="text-gray-400"><span class="text-2xl font-bold text-black"> 50 USD /</span> Night</h4>
                </article>
                <article class="ease-in-out duration-300 card flex flex-col items-left px-[35px] py-[20] relative hover:-translate-y-1 hover:scale-105 hover:drop-shadow-xl pop">
                    <img src="{{ ('img/popular02.png') }}" alt="" class="rounded-lg" >
                    <p class="text-green-400 pt-10">Sukabumi Regency</p>
                    <h4 class="text-2xl font-bold py-5">Javanaspa Homestay</h4>
                    <h4 class="text-gray-400"><span class="text-2xl font-bold text-black"> 45 USD /</span> Night</h4>
                </article>
                <article class="ease-in-out duration-300 card flex flex-col items-left px-[35px] py-[20] relative hover:-translate-y-1 hover:scale-105 hover:drop-shadow-xl pop">
                    <img src="{{ ('img/popular03.png') }}" alt="" class="rounded-lg">
                    <p class="text-green-400 pt-10">Sukabumi Regency</p>
                    <h4 class="text-2xl font-bold py-5">Sekarwangi Hotel</h4>
                    <h4 class="text-gray-400"><span class="text-2xl font-bold text-black"> 30 USD /</span> Night</h4>
                </article>
            </div>

        </div>
    </section>

    <Section id="about ">
        <div class="container relative  mx-auto mt-20 ">
            <img src="{{ ('img/brief.png') }}"talt="" class="absolute -right-14 w-[705.5px] -top-20">
            <div class=" flex justify-between">
                <div class="items-center  max-w-[515px]">
                    <p class="text-green-400 pt-10">About Us</p>
                    <h2 class="text-4xl py-2 pb-5 font-bold">Brief History Of Our Commpany</h2>
                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus quis earum rerum autem, omnis tempore, odio dignissimos deleniti recusandae labore amet, aspernatur rem vitae ipsam veniam reiciendis dicta laborum officiis?</p>
                </div>
                <div class="z-40 mr-5">
                    <img src="{{ ('img/brief1.png')}}" alt="" class="w-[558px] rounded-lg ">
                </div>
            </div>
        </div>
    </Section>

    <Section id="owner ">
        <div class="container relative  mx-auto mt-36 ">
            <img src="{{ ('img/brief.png') }}"alt="" class="absolute -left-14 w-[705.5px] -top-20">
            <div class=" flex justify-between">

                <div class="z-40 mr-5">
                    <img src="{{ ('img/Owner.png') }}" alt="" class="w-full rounded-lg">
                </div>

                <div class="items-center  max-w-[515px] ">
                    <p class="text-green-400 pt-10">Owner</p>
                    <h2 class="text-4xl py-2 pb-5 font-bold">Company owner Motelsuka</h2>
                    <p class="text-gray-500">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus quis earum rerum autem, omnis tempore, odio dignissimos deleniti recusandae labore amet, aspernatur rem vitae ipsam veniam reiciendis dicta laborum officiis?"</p>
                    <div class="flex py-5">
                        <div class="">
                            <img src="{{ ('img/purwa.png') }}" alt="" width="40px">
                        </div>
                        <div class="pl-5">
                            <h6 class="font-bold">Purwa Adi Wicaksana</h6>
                            <p class="text-gray-800 text-sm">Managin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Section>

    <Section id="Booking ">
        <div class="container relative  mx-auto my-36 ">
            <img src="{{ ('img/brief.png') }}" alt="" class="absolute right-2 w-[580px] -top-7">
            <div class=" flex justify-between">
                <div class="items-center  max-w-[600px]">
                    <p class="text-green-400 pt-10">Booking</p>
                    <h2 class="text-4xl py-2 pb-5 font-bold">Order Now by Clicking the button below</h2>
                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus quis earum rerum autem, </p>
                    <button type="button" class="ease-in-out duration-300  hover:scale-110 hover:bg-[#42A66A] hover:text-white hover:drop-shadow-lg border-[#42A66A] border-[1px] rounded-full py-3 px-10 mt-7 text-[#42A66A] font-bold">
                        Booking
                    </button>
                </div>
                <div class="z-40 mr-5">
                    <img src="{{ ('img/cal.png') }}" alt="" class="w-[558px] ">
                </div>
            </div>
        </div>
    </Section>

    <section id="publish" class="bg-gradient-to-r from-[#F4FFFC] to-[#DEFFB4] relative">
        <img src="{{ ('img/build1.png')}}" alt="" class="absolute bottom-0 right-0">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="items-center  max-w-[600px]  mt-14">
                    <p class="text-green-400 pt-10">Publish</p>
                    <h2 class="text-4xl py-2 pb-5 text-sm font-bold">Register now so you can choose The Right House for your Family</h2>
                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus quis earum rerum autem, </p>
                    <button type="button" class="ease-in-out duration-300  hover:scale-110 hover:bg-[#42A66A] hover:text-white hover:drop-shadow-lg border-[#42A66A] border-[1px] rounded-full py-3 px-10 mt-7 text-[#42A66A] font-bold">
                        Register Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container   mx-auto py-28 ">
            <div class=" flex justify-between items-center">
                <div class="flex-1 max-w-[700px]">
                    <p class="text-green-400 ">Testimonials</p>
                    <h2 class="text-4xl py-2 pb-5 font-bold">Here are some testimonials from our customers</h2>
                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus quis earum rerum autem, omnis tempore, odio dignissimos deleniti recusandae labore amet, aspernatur rem vitae ipsam veniam reiciendis dicta laborum officiis?</p>
                </div>
                <div class="flex-2 z-40 mr-5 relative">
                    <div class="testi bg-[#F6F6F6] rounded-[30px] pl-10 pt-5">
                        <div class="flex py-5">
                            <div class="">
                                <img src="{{ ('img/michael.png') }}" alt="" width="40px">
                            </div>
                            <div class="pl-5">
                                <h6 class="font-bold">Michael Derospred</h6>
                                <p class="text-gray-800 text-sm">Arsitect</p>
                            </div>
                        </div>
                        <div>
                            <p class="max-w-[450px] text-gray-800 my-7">They provide very good service in my opinion, from good communication, to easy payment, I will book hotel again if traveling out of town on this site</p>
                            <img src="{{ ('img/stars.png') }}" alt="">
                        </div>
                        <img src="{{ ('img/quotes.png') }}" alt="" class="w-[60px] right-10 absolute top-[50px]">
                        <a href=""><img src="{{ ('img/right-arrow.p') }}ng" alt="" class="ease-in-out duration-300  hover:scale-125 hover:drop-shadow-lg -right-3 absolute top-[158px]"></a>

                    </div>
            </div>
        </div>
    </section>

    <section class="flex justify-center space-x-4 bg-[#0E2614] text-[#FFFFFF] py-14 px-32 gap-14 font-light text-sm">
        <article class="flex flex-col w-[30rem]">
          <section class="flex items-center gap-5 mb-5">
            <svg width="109" height="50" viewBox="0 0 109 50" fill="none" xmlns="http://www.w3.org/2000/svg" style="fill: #FFF;">
                <path d="M35.396 36.6646C34.668 36.6646 34.01 36.5012 33.422 36.1746C32.834 35.8386 32.372 35.3719 32.036 34.7746C31.7 34.1679 31.532 33.4679 31.532 32.6746C31.532 31.8906 31.7047 31.1952 32.05 30.5886C32.3953 29.9819 32.8667 29.5152 33.464 29.1886C34.0613 28.8619 34.7287 28.6986 35.466 28.6986C36.2033 28.6986 36.8707 28.8619 37.468 29.1886C38.0653 29.5152 38.5367 29.9819 38.882 30.5886C39.2273 31.1952 39.4 31.8906 39.4 32.6746C39.4 33.4586 39.2227 34.1539 38.868 34.7606C38.5133 35.3672 38.028 35.8386 37.412 36.1746C36.8053 36.5012 36.1333 36.6646 35.396 36.6646ZM35.396 35.2786C35.8067 35.2786 36.1893 35.1806 36.544 34.9846C36.908 34.7886 37.202 34.4946 37.426 34.1026C37.65 33.7106 37.762 33.2346 37.762 32.6746C37.762 32.1146 37.6547 31.6432 37.44 31.2606C37.2253 30.8686 36.9407 30.5746 36.586 30.3786C36.2313 30.1826 35.8487 30.0846 35.438 30.0846C35.0273 30.0846 34.6447 30.1826 34.29 30.3786C33.9447 30.5746 33.6693 30.8686 33.464 31.2606C33.2587 31.6432 33.156 32.1146 33.156 32.6746C33.156 33.5052 33.366 34.1492 33.786 34.6066C34.2153 35.0546 34.752 35.2786 35.396 35.2786ZM42.8397 30.1266V34.3966C42.8397 34.6859 42.9051 34.8959 43.0357 35.0266C43.1757 35.1479 43.4091 35.2086 43.7357 35.2086H44.7157V36.5386H43.4557C42.7371 36.5386 42.1864 36.3706 41.8037 36.0346C41.4211 35.6986 41.2297 35.1526 41.2297 34.3966V30.1266H40.3197V28.8246H41.2297V26.9066H42.8397V28.8246H44.7157V30.1266H42.8397ZM53.2567 32.4926C53.2567 32.7819 53.2381 33.0432 53.2007 33.2766H47.3067C47.3534 33.8926 47.5821 34.3872 47.9927 34.7606C48.4034 35.1339 48.9074 35.3206 49.5047 35.3206C50.3634 35.3206 50.9701 34.9612 51.3247 34.2426H53.0467C52.8134 34.9519 52.3887 35.5352 51.7727 35.9926C51.1661 36.4406 50.4101 36.6646 49.5047 36.6646C48.7674 36.6646 48.1047 36.5012 47.5167 36.1746C46.9381 35.8386 46.4807 35.3719 46.1447 34.7746C45.8181 34.1679 45.6547 33.4679 45.6547 32.6746C45.6547 31.8812 45.8134 31.1859 46.1307 30.5886C46.4574 29.9819 46.9101 29.5152 47.4887 29.1886C48.0767 28.8619 48.7487 28.6986 49.5047 28.6986C50.2327 28.6986 50.8814 28.8572 51.4507 29.1746C52.0201 29.4919 52.4634 29.9399 52.7807 30.5186C53.0981 31.0879 53.2567 31.7459 53.2567 32.4926ZM51.5907 31.9886C51.5814 31.4006 51.3714 30.9292 50.9607 30.5746C50.5501 30.2199 50.0414 30.0426 49.4347 30.0426C48.8841 30.0426 48.4127 30.2199 48.0207 30.5746C47.6287 30.9199 47.3954 31.3912 47.3207 31.9886H51.5907ZM56.4233 26.1786V36.5386H54.8273V26.1786H56.4233ZM61.5708 32.6886L65.1268 36.5386H62.9708L60.1148 33.2206V36.5386H58.5188V26.1786H60.1148V32.1986L62.9148 28.8246H65.1268L61.5708 32.6886ZM73.2567 28.8246V36.5386H71.6607V35.6286C71.4087 35.9459 71.0774 36.1979 70.6667 36.3846C70.2654 36.5619 69.836 36.6506 69.3787 36.6506C68.772 36.6506 68.226 36.5246 67.7407 36.2726C67.2647 36.0206 66.8867 35.6472 66.6067 35.1526C66.336 34.6579 66.2007 34.0606 66.2007 33.3606V28.8246H67.7827V33.1226C67.7827 33.8132 67.9554 34.3452 68.3007 34.7186C68.646 35.0826 69.1174 35.2646 69.7147 35.2646C70.312 35.2646 70.7834 35.0826 71.1287 34.7186C71.4834 34.3452 71.6607 33.8132 71.6607 33.1226V28.8246H73.2567ZM78.1625 36.6646C77.5558 36.6646 77.0098 36.5572 76.5245 36.3426C76.0485 36.1186 75.6705 35.8199 75.3905 35.4466C75.1105 35.0639 74.9612 34.6392 74.9425 34.1726H76.5945C76.6225 34.4992 76.7765 34.7746 77.0565 34.9986C77.3458 35.2132 77.7052 35.3206 78.1345 35.3206C78.5825 35.3206 78.9278 35.2366 79.1705 35.0686C79.4225 34.8912 79.5485 34.6672 79.5485 34.3966C79.5485 34.1072 79.4085 33.8926 79.1285 33.7526C78.8578 33.6126 78.4238 33.4586 77.8265 33.2906C77.2478 33.1319 76.7765 32.9779 76.4125 32.8286C76.0485 32.6792 75.7312 32.4506 75.4605 32.1426C75.1992 31.8346 75.0685 31.4286 75.0685 30.9246C75.0685 30.5139 75.1898 30.1406 75.4325 29.8046C75.6752 29.4592 76.0205 29.1886 76.4685 28.9926C76.9258 28.7966 77.4485 28.6986 78.0365 28.6986C78.9138 28.6986 79.6185 28.9226 80.1505 29.3706C80.6918 29.8092 80.9812 30.4112 81.0185 31.1766H79.4225C79.3945 30.8312 79.2545 30.5559 79.0025 30.3506C78.7505 30.1452 78.4098 30.0426 77.9805 30.0426C77.5605 30.0426 77.2385 30.1219 77.0145 30.2806C76.7905 30.4392 76.6785 30.6492 76.6785 30.9106C76.6785 31.1159 76.7532 31.2886 76.9025 31.4286C77.0518 31.5686 77.2338 31.6806 77.4485 31.7646C77.6632 31.8392 77.9805 31.9372 78.4005 32.0586C78.9605 32.2079 79.4178 32.3619 79.7725 32.5206C80.1365 32.6699 80.4492 32.8939 80.7105 33.1926C80.9718 33.4912 81.1072 33.8879 81.1165 34.3826C81.1165 34.8212 80.9952 35.2132 80.7525 35.5586C80.5098 35.9039 80.1645 36.1746 79.7165 36.3706C79.2778 36.5666 78.7598 36.6646 78.1625 36.6646ZM89.827 28.8246V36.5386H88.231V35.6286C87.979 35.9459 87.6477 36.1979 87.237 36.3846C86.8357 36.5619 86.4063 36.6506 85.949 36.6506C85.3423 36.6506 84.7963 36.5246 84.311 36.2726C83.835 36.0206 83.457 35.6472 83.177 35.1526C82.9063 34.6579 82.771 34.0606 82.771 33.3606V28.8246H84.353V33.1226C84.353 33.8132 84.5257 34.3452 84.871 34.7186C85.2163 35.0826 85.6877 35.2646 86.285 35.2646C86.8823 35.2646 87.3537 35.0826 87.699 34.7186C88.0537 34.3452 88.231 33.8132 88.231 33.1226V28.8246H89.827ZM94.9848 32.6886L98.5408 36.5386H96.3848L93.5288 33.2206V36.5386H91.9328V26.1786H93.5288V32.1986L96.3288 28.8246H98.5408L94.9848 32.6886ZM99.1528 32.6466C99.1528 31.8719 99.3114 31.1859 99.6288 30.5886C99.9554 29.9912 100.394 29.5292 100.945 29.2026C101.505 28.8666 102.121 28.6986 102.793 28.6986C103.399 28.6986 103.927 28.8199 104.375 29.0626C104.832 29.2959 105.196 29.5899 105.467 29.9446V28.8246H107.077V36.5386H105.467V35.3906C105.196 35.7546 104.827 36.0579 104.361 36.3006C103.894 36.5432 103.362 36.6646 102.765 36.6646C102.102 36.6646 101.495 36.4966 100.945 36.1606C100.394 35.8152 99.9554 35.3392 99.6288 34.7326C99.3114 34.1166 99.1528 33.4212 99.1528 32.6466ZM105.467 32.6746C105.467 32.1426 105.355 31.6806 105.131 31.2886C104.916 30.8966 104.631 30.5979 104.277 30.3926C103.922 30.1872 103.539 30.0846 103.129 30.0846C102.718 30.0846 102.335 30.1872 101.981 30.3926C101.626 30.5886 101.337 30.8826 101.113 31.2746C100.898 31.6572 100.791 32.1146 100.791 32.6466C100.791 33.1786 100.898 33.6452 101.113 34.0466C101.337 34.4479 101.626 34.7559 101.981 34.9706C102.345 35.1759 102.727 35.2786 103.129 35.2786C103.539 35.2786 103.922 35.1759 104.277 34.9706C104.631 34.7652 104.916 34.4666 105.131 34.0746C105.355 33.6732 105.467 33.2066 105.467 32.6746Z" fill="#FFF"/>
                <path d="M28.6106 13.564V37H22.9018V22.9451L17.6605 37H13.0534L7.77862 22.9117V37H2.06985V13.564H8.81354L15.3903 29.7889L21.9003 13.564H28.6106Z" fill="#FFF"/>
            </svg>
          </section>
          <p class="font-light text-sm">Lörem ipsum od ohet dilogi. Bell trabel, samuligt, ohöbel utom diska. Jinesade bel när feras redorade i belogi. FAR paratyp i muvåning, och pesask vyfisat. Viktiga poddradio har un mad och inde. </p>
          <ul class="flex gap-5 mt-5">
            <li>
              <img src="{{ ('img/facebook.svg') }}" alt="">
            </li>
            <li>
              <img src="{{ ('img/twitter.svg ') }}"alt="">
            </li>
            <li>
              <img src="{{ ('img/linkedin.svg') }}" alt="">
            </li>
            <li>
              <img src="{{ ('img/instagran.svg') }}" alt="">
            </li>
          </ul>
        </article>
        <article>
          <p class="font-bold text-lg py-2">Home</p>
          <ul class="flex flex-col gap-2">
            <li>Home</li>
            <li>Booking</li>
            <li>Prise</li>
            <li>Contact</li>
          </ul>
        </article>
        <article>
          <p class="font-bold text-lg py-2">About Us</p>
          <ul class="flex flex-col gap-2">
            <li>Comunity</li>
            <li>Partner</li>
            <li>History</li>

          </ul>
        </article>

        <article>
          <p class="font-bold text-lg py-2">Contact</p>
          <ul class="flex flex-col  gap-2">
            <li class="flex gap-2 items-start">
              <img src="{{ ('img/phone.png') }}" alt="">
              <section class="flex flex-col">
                <p>(406) 555-0120</p>
              </section>
            </li>
            <li class="flex gap-2 items-center">
              <img src="{{ ('img/email.png') }}" alt="">
              <p>motelkusuka@gmail.com</p>
            </li>

            <li class="flex gap-2 items-start">
              <img src="{{ ('img/pin.png') }}" alt="">
              <section class="flex flex-col">
                <p>2972 Westheimer<br> Rd. Santa Ana, Illinois 85486 </p>
              </section>
            </li>
          </ul>


        </article>
      </section>

    <Footer>

    </Footer>

    <script src="./function.js"></script>

</body>
</html>
