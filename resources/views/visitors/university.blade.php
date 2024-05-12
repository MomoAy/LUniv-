@extends('base')
@section('title', 'Universités')
@section('content')
    <div class="w-full h-full">
        <div class="h-screen flex justify-center items-center mb-5 bg-no-repeat bg-cover"
            style="background-image: url({{ asset('images/univ3.jpg') }})">
            <div class="w-4-5 rounded-xl h-64 bg-black flex justify-center items-center text-white opacity-80 p-5">
                <p class="text-xl">
                    Parcourez un large pannel d'Université afin de faire le meilleur choix pour votre insertion professionel
                </p>
            </div>
        </div>

        <section class="w-full flex flex-wrap justify-center space-x-4 my-5">
            @foreach ($rankedUniversities as $rankedUniversity)
                @if ($rankedUniversity->images->isNotEmpty())
                    @php
                        $img = $rankedUniversity->images[0]->url;
                        $vue = 'images/university/' . $img;
                    @endphp
                    <a class="w-1/6 text-white" href="{{ route('showUniversity', ['id' => $rankedUniversity->id]) }}">
                        <div style="background-image: url({{ asset($vue) }})"
                            class="w-full flex justify-between items-end rounded-xl hover:scale-110 transition-transform duration-300 mt-4 p-2 h-80 bg-cover border-gray-200 shadow-md">
                            <h3>{{ $rankedUniversity->acronyme }}</h3>

                            <p><span class="float-left">{{ number_format($rankedUniversity->average_rating, 1) }}</span><img
                                    width="24" height="24" src="https://img.icons8.com/fluency/48/star--v1.png"
                                    alt="star--v1" />
                            </p>
                        </div>
                    </a>
                @else
                    @php
                        $vue = 'images/university/404.jpg';
                    @endphp
                    <a class="w-1/6" href="{{ route('showUniversity', ['id' => $rankedUniversity->id]) }}">
                        <div style="background-image: url({{ asset($vue) }})"
                            class="w-full flex justify-between items-end rounded-xl hover:scale-110 transition-transform duration-300 mt-4 p-2 h-80 bg-cover border-gray-200 shadow-md">
                            <h3>{{ $rankedUniversity->acronyme }}</h3>
                            <p><span class="float-left">{{ number_format($rankedUniversity->average_rating, 1) }}</span><img
                                    width="24" height="24" src="https://img.icons8.com/fluency/48/star--v1.png"
                                    alt="star--v1" />
                            </p>
                        </div>
                    </a>
                @endif
            @endforeach
        </section>
        @include('layouts.footer')
    </div>
@endsection
