@extends('baseAdmin')
@section('title', "Information d'un utilissateur")
@section('content')
    <div class="flex justify-center w-full">
        <div class="flow-root w-4/5 border-gray-100 shadow-xl p-10 bg-white rounded-xl">
            <a href="{{ route('admin.users') }}"
                class="mb-8 w-16 inline-block rounded-2xl border border-blue-600 bg-blue-600 p-3 text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                <?xml version="1.0" ?><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                    <title />
                    <g data-name="Layer 2" id="Layer_2">
                        <path
                            d="M10.1,23a1,1,0,0,0,0-1.41L5.5,17H29.05a1,1,0,0,0,0-2H5.53l4.57-4.57A1,1,0,0,0,8.68,9L2.32,15.37a.9.9,0,0,0,0,1.27L8.68,23A1,1,0,0,0,10.1,23Z" />
                    </g>
                </svg>
            </a>
            <dl class="-my-3 divide-y divide-gray-100 text-sm">

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Nom de l'utilisateur</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $user->name }}</dd>
                </div>

                <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                    <dt class="font-medium text-gray-900">Email</dt>
                    <dd class="text-gray-700 sm:col-span-2">{{ $user->email }}</dd>
                </div>

                <div class="w-full">
                    <h1 class="font-medium text-gray-900 text-3xl text-center my-5">Commentaires de l'utilisateur</h1>
                    @foreach ($user->notations as $notation)
                        <div class="w-full flex justify-between">
                            <p class="text-gray-700 sm:col-span-2 my-5">
                                {{ $notation->comment }}
                            </p>
                            <a class="text-red-500"
                                href="{{ route('admin.deleteComment', ['id' => $notation->id]) }}">Supprimer</a>
                        </div>
                    @endforeach

                </div>
            </dl>
        </div>
    </div>
@endsection
