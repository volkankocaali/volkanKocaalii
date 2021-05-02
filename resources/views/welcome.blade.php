<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

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
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div id="app">
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                        <img src="https://www.direkbaglanma.net/wp-content/uploads/2021/01/enuygun-logo-12638.jpeg" class="w-16 w-auto sm:h-20" alt="">
                    </div>

                    <div class="mt-8 overflow-hidden sm:rounded-lg">
                        <div class="grid grid-cols-1 md:grid-cols-1">
                            <div class="ml-7">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div>
                                        <table v-if="this.developer" class="min-w-full table-auto">
                                            <thead class="justify-between">
                                            <tr class="bg-gray-800">
                                                <th class="px-16 py-2">
                                                    <span class="text-gray-300"></span>
                                                </th>
                                                <th class="px-16 py-2">
                                                    <span class="text-gray-300">Developer Adı</span>
                                                </th>
                                                <th class="px-16 py-2">
                                                    <span class="text-gray-300">Biticeği Süre</span>
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody class="bg-gray-200">
                                            <tr v-for="item in this.developer" class="bg-white border-4 border-gray-200">
                                                <td class="px-16 py-2 flex flex-row items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                    </svg>
                                                </td>

                                                <td class="px-16 py-2">
                                                    <span v-text="item.name"></span>
                                                </td>

                                                <td class="px-16 py-2">
                                                    <span v-text="item.sum + ' hafta'"></span>
                                                </td>


                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

        <script>
            var app = new Vue({
                el: '#app',
                data: {
                    developer : {},
                },
                mounted(){
                    axios({
                        method: 'get',
                        url: '{{route('dev.index')}}',
                    }).then(res => {
                        this.developer = res.data.data;
                        console.log(res.data.data);
                    })
                },
            })
        </script>

    </body>


</html>
