@extends('baseAdmin')
@section('title', 'Visiteurs')
@section('content')
    <div class="w-full">
        <table class="w-full text-sm rounded-md shadow-md text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @if (!$user->isAdmin)
                        <tr class="bg-white rounded-md text-center border hover:bg-gray-50">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap text-center">
                                <div class="relative cursor-pointer w-16 h-16">
                                    <? xml version = "1.0" ?>
                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="none" height="256" width="256" />
                                        <circle cx="128" cy="128" fill="none" r="96" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                                        <circle cx="128" cy="120" fill="none" r="40" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                                        <path d="M63.8,199.4a72,72,0,0,1,128.4,0" fill="none" stroke="#000"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="12" />
                                    </svg>

                                    <div
                                        class="absolute top-0 right-0 h-4 w-4 my-1 border-2 border-white rounded-full bg-green-400 z-2">
                                    </div>
                                </div>
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $user->name }}</div>
                                </div>
                            </th>
                            <td class="px-6 py-4 text-center">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center text-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Utilisateur
                                </div>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="mb-4">
                                    <a href="{{ route('admin.editUser', ['id' => $user->id]) }}"
                                        class="inline-block rounded bg-indigo-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500">
                                        Consulter l'activité
                                    </a>
                                </div>
                                <div class="">
                                    <form action="{{ route('admin.destroyUser', ['id' => $user->id]) }}" method="post">
                                        @method('DELETE')
                                        <button
                                            class="inline-block rounded bg-red-600 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-red-500">
                                            Supprimer l'utilisateur
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
