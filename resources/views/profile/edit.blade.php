<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@latest/dist/cdn.min.js"></script>
    <style>
        /* Styles de la barre de défilement */
        ::-webkit-scrollbar {
            width: 8px;
            /* Largeur de la barre de défilement */
            border-radius: 8px;
            /* Bordures arrondies */
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Couleur de fond */
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
            /* Couleur de la poignée */
            border-radius: 8px;
            /* Bordures arrondies */
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Couleur de la poignée au survol */
        }

        #animated-div:hover {
            z-index: 1;
            /* Ajuste la profondeur d'empilement */
        }
    </style>
</head>

<body>
    @if (session('success'))
        <div x-cloak x-show="showAlert" x-data="{ showAlert: true }" x-init="setTimeout(() => showAlert = false, 3000)" role="alert"
            class="fixed bottom-0 right-0 bg-green-100 p-4 w-72 animate__animated animate__fadeInRight h-12">
            {{ session('success') }}
        </div>
    @endif
    <div class="container bg-sky-50 p-10">
        @if (Auth::user()->isAdmin)
            <a href="{{ route('admin.dashboard') }}"
                class=" w-16 inline-block rounded-2xl border border-blue-600 bg-blue-600 p-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                <?xml version="1.0" ?><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    <title />
                    <g data-name="Layer 2" id="Layer_2">
                        <path
                            d="M10.1,23a1,1,0,0,0,0-1.41L5.5,17H29.05a1,1,0,0,0,0-2H5.53l4.57-4.57A1,1,0,0,0,8.68,9L2.32,15.37a.9.9,0,0,0,0,1.27L8.68,23A1,1,0,0,0,10.1,23Z" />
                    </g>
                </svg>
            </a>
        @else
            <a href="{{ route('home') }}"
                class=" w-16 inline-block rounded-2xl border border-blue-600 bg-blue-600 p-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                <?xml version="1.0" ?><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    <title />
                    <g data-name="Layer 2" id="Layer_2">
                        <path
                            d="M10.1,23a1,1,0,0,0,0-1.41L5.5,17H29.05a1,1,0,0,0,0-2H5.53l4.57-4.57A1,1,0,0,0,8.68,9L2.32,15.37a.9.9,0,0,0,0,1.27L8.68,23A1,1,0,0,0,10.1,23Z" />
                    </g>
                </svg>
            </a>
        @endif

        <div class="mx-auto w-32 h-32 rounded-full">
            <?xml version="1.0" ?><svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                <rect fill="none" height="256" width="256" />
                <circle cx="128" cy="128" fill="none" r="96" stroke="#000" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="12" />
                <circle cx="128" cy="120" fill="none" r="40" stroke="#000" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="12" />
                <path d="M63.8,199.4a72,72,0,0,1,128.4,0" fill="none" stroke="#000" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="12" />
            </svg>
        </div>
        <h2 class="text-center text-2xl font-semibold">{{ $user->name }}</h2>

        <h3 class="text-xl my-5 font-semibold">Informations personnelles</h3>
        <div class="bg-white rounded-xl shadow-md w-full h-64 border p-5">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="mb-5">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">Nom :
                    </label>
                    <input type="text" id="small-input"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 "
                        name="name" value="{{ old('name', $user->name) }}">
                </div>

                <div class="mb-5">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">Email :
                    </label>
                    <input type="text" id="small-input"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 "
                        name="email" value="{{ old('email', $user->email) }}">
                </div>

                <div class="flex justify-end">
                    <button
                        class="inline-block rounded bg-indigo-600 px-8 py-3 text-sm font-medium text-white transition hover:rotate-2 hover:scale-110 focus:outline-none focus:ring active:bg-indigo-500">
                        Modifier
                    </button>
                </div>
            </form>
        </div>

        <h3 class="text-xl my-5 font-semibold">Sécurité</h3>
        <div class="bg-white rounded-xl shadow-md w-full border p-5 mb-5">
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-5">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">Mot de Passe actuel :
                    </label>
                    <input type="password" id="small-input"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 "
                        name="current_password">
                </div>

                <div class="mb-5">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">Mot de Passe :
                    </label>
                    <input type="password" id="small-input"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 "
                        name="password">
                </div>

                <div class="mb-5">
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">Confirmer le Mot de
                        Passe :
                    </label>
                    <input type="password" id="small-input"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 "
                        name="password_confirmation">
                </div>

                <div class="flex justify-end">
                    <button
                        class="inline-block rounded bg-indigo-600 px-8 py-3 text-sm font-medium text-white transition hover:rotate-2 hover:scale-110 focus:outline-none focus:ring active:bg-indigo-500">
                        Modifier
                    </button>
                </div>
            </form>
        </div>

        <h3 class="text-xl my-5 font-semibold">Commentaires</h3>
        <div class="bg-white rounded-xl shadow-md w-full border p-5 mb-5">
            @foreach ($user->notations as $notation)
                <a href="{{ route('showUniversity', ['id' => $notation->university_id]) }}" class="relative block">
                    <li class="flex flex-row hover:bg-gray-100">
                        <div class="flex items-center flex-1 p-4 cursor-pointer select-none">
                            <div class="flex flex-col items-center justify-center w-10 h-10 mr-4">

                                <div class="mx-auto object-cover rounded-full h-10 w-10 ">
                                    <?xml version="1.0" ?><svg viewBox="0 0 256 256"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="none" height="256" width="256" />
                                        <circle cx="128" cy="128" fill="none" r="96" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                                        <circle cx="128" cy="120" fill="none" r="40" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                                        <path d="M63.8,199.4a72,72,0,0,1,128.4,0" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 pl-1 mr-16">
                                <div class="font-medium">
                                    {{ $user->name }}
                                </div>
                                <div class="text-sm text-gray-600 ">
                                    <p><span class="float-left mt-1 mr-1">{{ $notation->note }}</span><img
                                            width="24" height="24"
                                            src="https://img.icons8.com/fluency/48/star--v1.png" alt="star--v1" />
                                    </p>

                                </div>
                            </div>
                            <div class="text-xs text-gray-600 flex flex-col justify-end">
                                <h3 class="font-semibold">{{ $notation->university->acronyme }} -
                                    {{ $notation->university->country }}</h3>
                                {{ $notation->comment }}
                            </div>
                        </div>
                    </li>
                </a>
            @endforeach
        </div>

        <div class="w-full h-64 flex justify-center items-center bg-white border shadow-md rounded-xl">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                    class="overflow-hidden relative w-60 p-2 h-12 bg-black text-white border-none rounded-md text-xl font-bold cursor-pointer relative z-10 group">
                    Survole moi!
                    <span
                        class="absolute w-60 h-32 -top-8 -left-2 bg-green-200 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-500 duration-1000 origin-bottom"></span>
                    <span
                        class="absolute w-60 h-32 -top-8 -left-2 bg-green-400 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-700 duration-700 origin-bottom"></span>
                    <span
                        class="absolute w-60 h-32 -top-8 -left-2 bg-green-600 rounded-full transform scale-x-0 group-hover:scale-x-100 transition-transform group-hover:duration-1000 duration-500 origin-bottom"></span>
                    <span
                        class="group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2.5 left-6 z-10">Deconnexion
                        !</span>
                </button>

            </form>
        </div>

    </div>
    @include('layouts.footer')
</body>

</html>
