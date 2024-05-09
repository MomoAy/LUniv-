<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@latest/dist/cdn.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>

        * {
            font-family: 'Roboto', sans-serif;
            margin: 0;
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

        #animated-div:hover {
            z-index: 1; /* Ajuste la profondeur d'empilement */
        }
    </style>
</head>

<body class="w-screen overflow-clip overflow-y-auto">
@if(\Illuminate\Support\Facades\Request::route()->getName() === 'home')
    <div class="w-screen h-screen">
        <!-- Video en arrière-plan -->
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop>
            <source src="{{ asset('images/vid.mp4') }}">
            <!-- Fallback si la vidéo ne peut pas être lue -->
            Votre navigateur ne supporte pas la lecture de vidéos.
        </video>

        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Image avec description -->
        <div class="absolute inset-0 flex items-center justify-center text-white">
            <div class="bg-black bg-opacity-50 p-6 rounded-lg">
                <img src="{{ asset("images/logo.png") }}" alt="Description de LUniv" class="w-64 mx-auto">
                <p class="text-center text-lg mt-4">LUniv - Explorez une variété d'universités. Découvrez des
                    institutions prestigieuses et trouvez celles qui correspondent à vos intérêts académiques.</p>
            </div>
        </div>
    </div>
    @yield('content')
@else
    <div class="w-full h-full">
        @include('layouts.navbar')
    </div>
    @yield('content')
@endif

<script>
    // Sélection de la div et du champ caché
    const animatedDiv = document.getElementById('animated-div');
    const hiddenInfo = document.getElementById('hidden-info');

    // Fonction pour changer la taille de la div et afficher le champ caché
    function expandDiv() {
            animatedDiv.style.width = '33.33%';
            hiddenInfo.classList.remove('hidden');
    }

    // Fonction pour rétablir la taille initiale de la div
    function shrinkDiv() {

        animatedDiv.style.width = '16.67%'; // w-1/6
        hiddenInfo.classList.add('hidden');
    }

    animatedDiv.addEventListener('mouseover', expandDiv);
    animatedDiv.addEventListener('mouseleave', shrinkDiv);

</script>
</body>

</html>
