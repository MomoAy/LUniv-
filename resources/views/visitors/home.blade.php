@extends('base')
@section('title', 'Acceuil')
@section('content')
    <div class="w-full">
        <section class="w-full h-screen flex items-center justify-center animate__animated animate__flipInX">
            <div class="flex flex-col items-center px-5 py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex flex-col w-full max-w-3xl mx-auto prose text-left prose-blue">
                    <div class="w-full mx-auto text-xl">
                        <h1 class="font-semibold text-center text-2xl mb-4">Découvrez les meilleures universités du Togo sur
                            LUniv.</h1>
                        <h2 class="text-center">Explorez, comparez et choisissez votre futur établissement académique.</h2>
                        <p class="text-justify">Bienvenue sur LUniv, la plateforme qui vous offre un accès à une multitude
                            d'universités au Togo. Parcourez notre sélection d'institutions renommées, consultez leurs
                            programmes, leurs campus, et trouvez celle qui correspond à vos aspirations académiques. Que
                            vous cherchiez une université prestigieuse pour votre formation, ou que vous souhaitiez
                            découvrir de nouveaux horizons dans votre pays, LUniv vous accompagne dans votre recherche.
                            Rejoignez-nous dès aujourd'hui et commencez votre voyage vers l'excellence éducative au Togo.
                        </p>
                        <a href="{{ route('university') }}"
                            class="mt-4 group relative inline-flex items-center overflow-hidden rounded bg-indigo-600 px-8 py-3 text-white focus:outline-none focus:ring active:bg-indigo-500">
                            <span class="absolute -start-full transition-all group-hover:start-4">
                                <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                            <span class="text-sm font-medium transition-all group-hover:ms-4"> Découvrir </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                        <img alt="" src="{{ asset('images/image1.jpg') }}"
                            class="absolute inset-0 h-full w-full object-cover" />
                    </div>

                    <div class="lg:py-24">
                        <h2 class="text-3xl font-bold sm:text-4xl">Découvrez le classement des universités du Togo sur LUniv
                        </h2>

                        <p class="mt-4 text-gray-600 text-justify">
                            Bienvenue sur LUniv, la plateforme qui vous propose de consulter le classement des universités
                            au Togo. Explorez les institutions les mieux notées, consultez leurs positions dans le
                            classement national et international, et comparez leurs performances académiques. Que vous
                            recherchiez une université reconnue pour son excellence académique, sa recherche de pointe ou
                            son engagement envers la communauté, notre classement vous donne un aperçu des meilleures
                            options disponibles au Togo. Rejoignez-nous dès aujourd'hui pour accéder à des informations
                            précieuses et prendre des décisions éclairées pour votre parcours académique.
                        </p>

                        <a href="{{ route('ranking') }}"
                            class="mt-4 group relative inline-flex items-center overflow-hidden rounded bg-indigo-600 px-8 py-3 text-white focus:outline-none focus:ring active:bg-indigo-500">
                            <span class="absolute -start-full transition-all group-hover:start-4">
                                <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                            <span class="text-sm font-medium transition-all group-hover:ms-4"> Découvrir </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full h-screen flex justify-center items-center">
            <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div class="flex flex-col mx-auto sm:flex-row">
                    <div
                        class="h-full p-2 overflow-hidden duration-500 origin-bottom border transformrelative rounded-3xl rotate-6 hover:rotate-0 hover:-translate-y-12 hover:scale-150">
                        <img src="{{ asset('images/univ1.jpg') }}"
                            class="object-cover w-full h-full border shadow-2xl rounded-2xl aspect-square" alt="#_">
                    </div>
                    <div
                        class="h-full p-2 overflow-hidden duration-500 origin-bottom border transformrelative rounded-3xl -rotate-12 hover:rotate-0 hover:-translate-y-12 hover:scale-150">
                        <img src="{{ asset('images/univ2.jpg') }}"
                            class="object-cover w-full h-full border shadow-2xl rounded-2xl aspect-square" alt="#_">
                    </div>
                    <div
                        class="h-full p-2 overflow-hidden duration-500 origin-bottom border transformrelative rounded-3xl rotate-6 hover:rotate-0 hover:-translate-y-12 hover:scale-150">
                        <img src="{{ asset('images/univ3.jpg') }}"
                            class="object-cover w-full h-full border shadow-2xl rounded-2xl aspect-square" alt="#_">
                    </div>
                    <div
                        class="h-full p-2 overflow-hidden duration-500 origin-bottom transform border rounded-3xl hover:rotate-0 hover:-translate-y-12 -rotate-12 hover:scale-150">
                        <img src="{{ asset('images/univ4.jpg') }}"
                            class="object-cover w-full h-full border shadow-2xl rounded-2xl aspect-square" alt="#_">
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.footer')
    </div>

@endsection
