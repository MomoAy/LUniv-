<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@latest/dist/cdn.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="script.js" defer></script>
    <style>
        /* Styles pour la section de notation */
        .rating-box {
            position: relative;
            background: #fff;
            padding: 25px 50px 35px;
        }

        .rating-box .stars {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .stars i {
            color: #e6e6e6;
            font-size: 35px;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .stars i.active {
            color: #ff9c1a;
        }

        .notation-section {
            margin-top: 50px;
        }

        /* Styles pour la zone de commentaires */


        .comments {
            margin-bottom: 20px;
        }

        /* Animation du défilement */
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Style du carrousel */
        .carousel-inner {
            animation: scroll 5s infinite;
        }

        * {
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }

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

<body class="w-screen overflow-clip overflow-y-auto">
    @if (session('success'))
        <div x-cloak x-show="showAlert" x-data="{ showAlert: true }" x-init="setTimeout(() => showAlert = false, 3000)" role="alert"
            class="fixed bottom-0 right-0 bg-green-100 p-4 w-72 animate__animated animate__fadeInRight h-12">
            {{ session('success') }}
        </div>
    @endif
    @if (\Illuminate\Support\Facades\Request::route()->getName() === 'home')
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
                    <img src="{{ asset('images/logo.png') }}" alt="Description de LUniv" class="w-64 mx-auto">
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
        // Select all rating boxes
        const ratingBoxes = document.querySelectorAll(".rating-box");

        // Loop through each rating box
        ratingBoxes.forEach(box => {
            const stars = box.querySelectorAll(".stars i");

            stars.forEach((star, index1) => {
                star.addEventListener("click", () => {
                    stars.forEach((star, index2) => {
                        index1 >= index2 ? star.classList.add("active") : star.classList
                            .remove("active");
                    });
                    const hiddenInput = box.querySelector("input[type=hidden]");
                    hiddenInput.value = index1 + 1;
                });
            });
        });



        function showOptions(event) {
            var divToHover = document.getElementById('divToHover');
            var options = document.getElementById('options');

            // Si la fenêtre contextuelle est déjà affichée, la masquer
            if (!options.classList.contains('hidden')) {
                options.classList.add('hidden');
                return;
            }

            var rect = divToHover.getBoundingClientRect(); // Obtiens les dimensions de la div spécifique
            var divWidth = divToHover.offsetWidth; // Obtient la largeur de la div spécifique

            options.style.right = (window.innerWidth - rect.right) +
                'px'; // Positionne la fenêtre contextuelle en fonction de la droite de la div spécifique
            options.style.top = rect.bottom +
                'px'; // Positionne la fenêtre contextuelle juste en dessous de la div spécifique

            options.classList.remove('hidden');
        }
    </script>
</body>

</html>
