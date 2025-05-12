@extends('base')
@section('title', 'Classement')
@section('content')
    <div class="w-full bg-gray-50">
        <div class="w-full h-screen bg-cover flex justify-center items-center"
            style="background-image: url({{ asset('images/univ5.jpg') }})">
            <div class="text-white flex justify-center items-center bg-black bg-opacity-70 p-10 h-60 rounded-xl flex-col">
                <div class="w-32 h-32 ">
                    <img class="object-cover rounded-xl" src="{{ asset('images/ranking.jpg') }}" alt="image ranking">
                </div>
                <p>
                    Découvrer le classement de nos universités et faites votre choix
                </p>
            </div>
        </div>

        <div class="w-4/5 mx-auto mb-6 shadow-xl bg-white p-5">
            <h1 class="text-6xl font-semibold text-center mb-6">Classements</h1>
            @foreach ($rankedUniversities as $rankedUniversity)
                <a href="{{ route('showUniversity', ['id' => $rankedUniversity->id]) }}">
                    <div class="w-full h-32 hover:bg-gray-50 border-y flex items-center justify-between">
                        <h2 class="font-semibold text-3xl"># {{ $loop->iteration }}</h2>
                        <h2 class="font-semibold text-3xl">{{ $rankedUniversity->acronyme }} -
                            {{ $rankedUniversity->country }}
                        </h2>
                        <h2 class="font-semibold text-3xl">
                            <span class="float-left">{{ number_format($rankedUniversity->average_rating, 1) }}</span>
                            <img width="35" height="35" src="https://img.icons8.com/fluency/48/star--v1.png"
                                alt="star--v1" />
                        </h2>
                    </div>
                </a>
            @endforeach
        </div>

        @include('layouts.footer')
    </div>
@endsection
