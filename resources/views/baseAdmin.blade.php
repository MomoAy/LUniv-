<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@latest/dist/cdn.min.js"></script>
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }

        /* Styles de la barre de défilement */
        ::-webkit-scrollbar {
            width: 8px; /* Largeur de la barre de défilement */
            border-radius: 8px; /* Bordures arrondies */
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1; /* Couleur de fond */
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888; /* Couleur de la poignée */
            border-radius: 8px; /* Bordures arrondies */
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555; /* Couleur de la poignée au survol */
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
    <div class="w-full h-screen flex bg-blue-50">
       <div class="rounded-3xl m-5 w-1/6 bg-gray-900  text-white">{{-- bg-gradient-to-br from-red-100 to-red-500--}}
            <div class="flex flex-col items-center mt-10 space-y-8">
                <h1 class="text-4xl font-bold my-10">LUniv</h1>
                <h2><a href="{{ route('admin.dashboard') }}">Dashboard</a></h2>
                <h2><a href="{{ route('admin.university') }}">Universités</a></h2>
                <h2><a href="{{ route('admin.critere') }}">Critères</a></h2>
                <h2><a href="{{ route('admin.users') }}">Utilisateurs</a></h2>
                <h2><a href="{{ route('profile.edit') }}">Profil</a></h2>
            </div>
        </div>
        <div class='bg-grey-100 w-5/6 m-5 overflow-y-auto'>
            <div class="flex justify-end items-center mb-5">
                <div class="relative cursor-pointer w-16 h-16">
                    <? xml version = "1.0" ?>
                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <rect fill="none" height="256" width="256"/>
                        <circle cx="128" cy="128" fill="none" r="96" stroke="#000" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="12"/>
                        <circle cx="128" cy="120" fill="none" r="40" stroke="#000" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="12"/>
                        <path d="M63.8,199.4a72,72,0,0,1,128.4,0" fill="none" stroke="#000" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="12"/>
                    </svg>

                    <div
                        class="absolute top-0 right-0 h-4 w-4 my-1 border-2 border-white rounded-full bg-green-400 z-2"></div>
                </div>
                <div>
                    <h2 class="text-center">{{ Auth::user()->name }}</h2>
                    <h3 class="text-center">Web Developer</h3>
                </div>
            </div>

            @yield('content')

        </div>

    </div>

<script>
    // Obtenez le bouton qui ouvre la modal
    var openModalBtn = document.getElementById("openModalButton");

    // Obtenez le bouton qui ferme la modal
    var closeModalBtn = document.getElementById("closeModalButton");

    // Obtenez l'élément de la modal
    var modal = document.getElementById("myModal");

    // Quand l'utilisateur clique sur le bouton, ouvrez la modal
    openModalBtn.addEventListener("click", function() {
        modal.classList.remove("hidden");
    });

    // Quand l'utilisateur clique sur le bouton de fermeture, fermez la modal
    closeModalBtn.addEventListener("click", function() {
        modal.classList.add("hidden");
    });

    // Quand l'utilisateur clique en dehors de la modal, fermez-la
    window.addEventListener("click", function(event) {
        if (event.target === modal) {
            modal.classList.add("hidden");
        }
    });
</script>

</body>

</html>
