@php use Illuminate\Support\Facades\Auth; @endphp
<nav class="w-full h-24 bg-gray-100 shadow-xl flex justify-between items-center fixed top-0 z-10">
    <div class="flex items-center justify-start">
        <img class="w-16 h-16" src="{{ asset('images/logo.png') }}" alt="logo du syte">
        <a href="{{ route('home') }}" class="text-3xl font-bold">LUniv</a>
    </div>

    <div class="flex space-x-24">
        <a href="{{ route('home') }}" class="text-2xl hover:text-blue-500 hover:underline" href="">Accueil</a>
        <a href="{{ route('university') }}" class="text-2xl hover:text-blue-500 hover:underline"
            href="">Universités</a>
        <a href="{{ route('ranking') }}" class="text-2xl hover:text-blue-500 hover:underline"
            href="">Classement</a>
    </div>
    <div class="flex space-x-4 mr-4 items-center">
        @if (!Auth::user())
            <a href="{{ route('register') }}"
                class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                S'enregistrer
            </a>
            <a href="{{ route('login') }}"
                class="inline-block rounded border border-indigo-600 px-12 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500">
                Se connecter
            </a>
        @else
            <p>{{ Auth::user()?->name }}</p>
            <div id="divToHover" onclick="showOptions(event)" onclick="hideOptions()"
                class="relative cursor-pointer w-16 h-16">
                <?xml version="1.0" ?><svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                    <rect fill="none" height="256" width="256" />
                    <circle cx="128" cy="128" fill="none" r="96" stroke="#000" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="12" />
                    <circle cx="128" cy="120" fill="none" r="40" stroke="#000" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="12" />
                    <path d="M63.8,199.4a72,72,0,0,1,128.4,0" fill="none" stroke="#000" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="12" />
                </svg>
                <div class="absolute top-0 right-0 h-4 w-4 my-1 border-2 border-white rounded-full bg-green-400 z-2">
                </div>
            </div>

            <div id="options" class="absolute bg-white shadow-md rounded-md w-36 hidden flex flex-col p-2">
                <a class="hover:bg-blue-500 hover:text-white text-center rounded-md"
                    href="{{ route('profile.edit') }}">Profil</a>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="hover:bg-blue-500 text-center hover:text-white rounded-md w-full"
                        type="submit">Déconnexion</button>
                </form>
            </div>
        @endif
    </div>
</nav>
