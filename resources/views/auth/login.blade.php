@extends('baseForm')
@section('title', 'Connexion')
@section('content')
    <div class="w-2/6 border shadow-xl p-8 rounded-2xl border-gray-200 bg-gray-100">
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
        <div class="w-60 h-60 mx-auto">
            <img src="{{ asset('images/logo.png') }}" alt="Logo du Site">
        </div>
        <p align="center" class="text-2xl font-bold">Connexion</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div class="mt-4">
                <label for="email">Email</label>
                <input id="email" class="block rounded-2xl mt-1 w-full" type="email" name="email"
                    value="{{ old('email') }}" required autocomplete="username" />
                @error('email')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>


            <!-- Password -->
            <div class="mt-4">
                <label for="password">Mot de Passe</label>

                <input id="password" class="block rounded-2xl mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
                @error('password')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button
                class="my-4 w-full inline-block rounded-2xl bg-indigo-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500">
                Se Connecter
            </button>
            <p>Pas encore de Compte? <a class="text-blue-500 underline" href="{{ route('register') }}">Inscrivez-vous</a>
            </p>
        </form>
    </div>
@endsection
