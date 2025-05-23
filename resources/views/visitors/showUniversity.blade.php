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
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    @foreach ($university->images as $image)
                        @php
                            $img = $image->url;
                            $vue = 'images/university/' . $img;
                            // echo $vue;
                        @endphp
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset($vue) }}"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                    @endforeach


                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
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
                        <div
                            class="flex items-center justify-center w-12 h-12 mx-auto text-white bg-indigo-500 rounded-md">
                            <svg viewBox="0 0 50 50" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                <path fill="none" d="M0 0h50v50H0z"></path>
                                <circle cx="25" cy="25" fill="none" r="24" stroke="#ffffff"
                                    stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                                    class="stroke-000000">
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
                    <form class="mt-4"
                        action="{{ route('addNotation', ['usid' => Auth::user()->id, 'unid' => $university->id]) }}"
                        method="post">
                        @csrf
                        @foreach ($crits as $crit)
                            <div class="rating-box">
                                <li class="text-xl font-semibold mb-4">{{ $crit->name }}</li>
                                <input type="hidden" name="crit_{{ $crit->id }}" value=0>
                                <div class="stars stars-{{ $crit->id }}">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        @endforeach

                        <div class="w-5/6 mb-4 mx-auto">
                            <textarea name="comment" id="comment-input" rows="4" class="w-full border p-2"
                                placeholder="Ajouter un commentaire...">{{ old('comment') }}</textarea>
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded mt-2">Commenter</button>
                            </div>
                        </div>
                    </form>
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

            @foreach ($university->notations->sortByDesc('created_at') as $notation)
                <div class="w-full p-4 bg-gray-100">
                    <div class="p-8 rounded-xl shadow-md"><span class="text-6xl">❝</span>
                        <section class="flex justify-between">
                            <p class="text-base">{{ $notation->comment }}</p>
                            <p class="text-gray-500">{{ $notation->created_at }}</p>
                        </section>
                        <hr class="my-4">
                        <div class="flex flex-wrap items-center">
                            <div class="w-12 h-12 rounded-full">
                                <?xml version="1.0" ?><svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                    <rect fill="none" height="256" width="256" />
                                    <circle cx="128" cy="128" fill="none" r="96" stroke="#000"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                                    <circle cx="128" cy="120" fill="none" r="40" stroke="#000"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                                    <path d="M63.8,199.4a72,72,0,0,1,128.4,0" fill="none" stroke="#000"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                                </svg>
                            </div>
                            <p class="mx-2 text-gray-500 text-sm">
                                {{ $notation->user->name }}<br> <span class="float-left">{{ $notation->note }}</span>
                                <img width="24" height="24" src="https://img.icons8.com/fluency/48/star--v1.png"
                                    alt="star--v1" />
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>



        @include('layouts.footer')
    </div>


@endsection
