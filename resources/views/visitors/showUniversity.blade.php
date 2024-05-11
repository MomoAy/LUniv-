@extends('base')
@section('title', "Détail de l'Université")
@section('content')
    <div class="w-full bg-gray-50">
        @php
            if ($university->images->isNotEmpty()) {
                $img = $university->images[0]->url;
                $vue = 'images/university/' . $img;
            } else {
                $vue = 'images/university/404.jpg';
            }
        @endphp
        <div class="relative flex flex-col items-center mx-auto lg:flex-row-reverse lg:max-w-5xl lg:mt-12 xl:max-w-6xl">
            <!-- Image Column -->
            <div class="w-full h-64 lg:w-1/2 lg:h-auto mt-10">
                <img class="h-full w-full object-cover" src="{{ asset($vue) }}"
                    alt="Image de l'université {{ $university->acronyme }}">
            </div>
            <!-- Close Image Column -->

            <!-- Text Column -->
            <div
                class="max-w-lg bg-white md:max-w-2xl md:z-10 md:shadow-lg md:absolute md:top-0 md:mt-48 lg:w-3/5 lg:left-0 lg:mt-20 lg:ml-20 xl:mt-24 xl:ml-12">
                <!-- Text Wrapper -->
                <div class="flex flex-col p-12 md:px-16">
                    <h2 class="text-2xl font-medium uppercase text-green-800 lg:text-4xl text-center">
                        {{ $university->acronyme }} -
                        {{ $university->country }}</h2>
                    <p class="mt-4 text-justify">{{ $university->description }}</p>
                </div>
                <!-- Close Text Wrapper -->
            </div>
            <!-- Close Text Column -->
        </div>

        <div class="w-4/5 mx-auto rounded-md shadow-xl my-10 p-5 bg-white">

            {{-- Caroussel --}}
            <h2 class="text-center text-2xl font-semibold mb-4">Présentation en Images</h2>
            <div class="carousel relative overflow-hidden">
                <div class="carousel-inner flex transition-transform duration-500 ease-in-out">
                    @foreach ($university->images as $image)
                        @php
                            $img = $image->url;
                            $vue = 'images/university/' . $img;
                            // echo $vue;
                        @endphp

                        <img src="{{ asset($vue) }}" alt="Image de l'université {{ $university->acronyme }}"
                            class="object-cover">
                    @endforeach

                </div>
            </div>

            {{-- 1er Divider --}}
            <div class="flex my-2 text-sm font-semibold items-center text-gray-800">
                <div class="flex-grow border-t h-px mr-3"></div>
                A PROPOS
                <div class="flex-grow border-t h-px ml-3"></div>
            </div>
            <p class="text-justify">{{ $university->description }}</p>
            {{-- Partie façon info --}}
            <div class="flex-wrap items-center justify-center gap-8 text-center sm:flex">
                <div
                    class="w-full px-4 py-4 mt-6 bg-white rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                            <svg viewBox="0 0 100.353 100.352" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                enable-background="new 0 0 100.353 100.352">
                                <path
                                    d="m58.23 69.992 14.993-24.108c.049-.078.09-.16.122-.245a26.697 26.697 0 0 0 3.956-13.969c0-14.772-12.018-26.79-26.79-26.79S23.72 16.898 23.72 31.67c0 4.925 1.369 9.75 3.96 13.975.03.074.065.146.107.216l14.455 24.191c-11.221 1.586-18.6 6.2-18.6 11.797 0 6.935 11.785 12.366 26.829 12.366S77.3 88.783 77.3 81.849c.001-5.623-7.722-10.34-19.07-11.857zM30.373 44.294A23.708 23.708 0 0 1 26.72 31.67c0-13.118 10.672-23.79 23.791-23.79 13.118 0 23.79 10.672 23.79 23.79 0 4.457-1.263 8.822-3.652 12.624-.05.08-.091.163-.124.249L54.685 70.01c-.238.365-.285.448-.576.926l-4 6.432-19.602-32.804a1.508 1.508 0 0 0-.134-.27zm20.099 46.921c-14.043 0-23.829-4.937-23.829-9.366 0-4.02 7.37-7.808 17.283-8.981l4.87 8.151c.269.449.751.726 1.274.73h.013c.518 0 1-.268 1.274-.708l5.12-8.232C66.548 73.9 74.3 77.784 74.3 81.849c.001 4.43-9.785 9.366-23.828 9.366z"
                                    fill="#ffffff" class="fill-000000"></path>
                                <path
                                    d="M60.213 31.67c0-5.371-4.37-9.741-9.741-9.741s-9.741 4.37-9.741 9.741 4.37 9.741 9.741 9.741c5.371 0 9.741-4.37 9.741-9.741zm-16.482 0c0-3.717 3.024-6.741 6.741-6.741s6.741 3.024 6.741 6.741-3.023 6.741-6.741 6.741-6.741-3.024-6.741-6.741z"
                                    fill="#ffffff" class="fill-000000"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="py-4 text-2xl font-semibold text-gray-700 sm:text-xl dark:text-white">
                        Localisation
                    </h3>
                    <p class="py-4 text-gray-500 text-md dark:text-gray-300">
                        {{ $university->address }}
                    </p>
                </div>
                <div
                    class="w-full px-4 py-4 mt-6 bg-white rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 sm:mt-16 md:mt-20 lg:mt-24 dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                            <svg width="20" height="20" fill="currentColor" class="w-6 h-6" viewBox="0 0 1792 1792"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M491 1536l91-91-235-235-91 91v107h128v128h107zm523-928q0-22-22-22-10 0-17 7l-542 542q-7 7-7 17 0 22 22 22 10 0 17-7l542-542q7-7 7-17zm-54-192l416 416-832 832h-416v-416zm683 96q0 53-37 90l-166 166-416-416 166-165q36-38 90-38 53 0 91 38l235 234q37 39 37 91z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="py-4 text-2xl font-semibold text-gray-700 sm:text-xl dark:text-white">
                        Contacts
                    </h3>
                    <p class=" text-gray-500 text-md dark:text-gray-300">
                    <ul class="text-gray-300">
                        <li>{{ $university->country }}</li>
                        <li>{{ $university->city }}</li>
                        <li>+228 {{ $university->contact }}</li>
                        <li>{{ $university->email }}</li>
                    </ul>
                    </p>
                </div>
                <div
                    class="w-full px-4 py-4 mt-6 bg-white rounded-lg shadow-lg sm:w-1/2 md:w-1/2 lg:w-1/4 dark:bg-gray-800">
                    <div class="flex-shrink-0">
                        <div class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                            <svg viewBox="0 0 50 50" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h50v50H0z"></path>
                                <circle cx="25" cy="25" fill="none" r="24" stroke="#ffffff"
                                    stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" class="stroke-000000">
                                </circle>
                                <ellipse cx="25" cy="25" fill="none" rx="12" ry="24"
                                    stroke="#ffffff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                                    class="stroke-000000"></ellipse>
                                <path
                                    d="M6.365 40.438C10.766 37.729 17.479 36 25 36c7.418 0 14.049 1.682 18.451 4.325M43.635 9.563C39.234 12.271 32.521 14 25 14c-7.417 0-14.049-1.682-18.451-4.325M1 25h48M25 1v48"
                                    fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="2"
                                    class="stroke-000000"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="py-4 text-2xl font-semibold text-gray-700 sm:text-xl dark:text-white">
                        Visitez le site Web
                    </h3>
                    <p class="py-4 text-gray-500 text-md dark:text-gray-300">
                        <a href="{{ $university->website }}"
                            class="text-blue-500 hover:text-blue-700 font-semibold">{{ $university->webSite }}</a>
                    </p>
                </div>
            </div>

            {{-- 2ième Divider --}}
            <div class="flex mt-6 mb-4 text-sm font-semibold items-center text-gray-800">
                <div class="flex-grow border-t h-px mr-3"></div>
                LES CHIFFRES CLES
                <div class="flex-grow border-t h-px ml-3"></div>
            </div>

            {{-- Façon testimonial --}}
            <div>
                <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3 sm:divide-x sm:divide-gray-100">
                    <div class="flex flex-col px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">Etudiants</dt>

                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">{{ $university->nbStudents }}</dd>
                    </div>

                    @php
                        use Carbon\Carbon;
                        $dateCreation = Carbon::parse($university->dateCreation);
                        $age = $dateCreation->age;
                    @endphp
                    <div class="flex flex-col px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">Ans</dt>

                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">{{ $age }}</dd>
                    </div>

                    <div class="flex flex-col px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">% d'emploi</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">
                            {{ $university->percentageIntegration }}</dd>
                    </div>

                </dl>
            </div>

            {{-- 3ième divider --}}
            <div class="flex mt-6 mb-4 text-sm font-semibold items-center text-gray-800">
                <div class="flex-grow border-t h-px mr-3"></div>
                COMMENTAIRES & NOTATIONS
                <div class="flex-grow border-t h-px ml-3"></div>
            </div>


            {{-- Commentaires --}}
            @if (Auth::user())
                <div class="notation section">
                    @foreach ( as )
                        
                    @endforeach
                    <div class="rating-box">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                    <div class="comment-section mb-4">
                        <form class="mt-4" action="" method="post">
                            @csrf
                            <textarea id="comment-input" rows="4" class="w-full border p-2" placeholder="Ajouter un commentaire..."></textarea>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mt-2">Commenter</button>
                            </div>
                        </form>
                    </div>
                </div>
            @else
                <div class="flex justify-center items-center h-64 flex-col space-y-4">
                    <p>Vous devez être connecté pour noter cette université</p>
                    <a class="group relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                        href="{{ route('login') }}">
                        <span
                            class="absolute inset-0 translate-x-0.5 translate-y-0.5 bg-indigo-600 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"></span>

                        <span class="relative block border border-current bg-white px-8 py-3"> Se Connecter </span>
                    </a>
                </div>
            @endif

            {{-- 4ième divider --}}
            <div class="flex mt-6 mb-4 text-sm font-semibold items-center text-gray-800">
                <div class="flex-grow border-t h-px mr-3"></div>
                COMMENTAIRES
                <div class="flex-grow border-t h-px ml-3"></div>
            </div>


        </div>



        @include('layouts.footer')
    </div>


@endsection
