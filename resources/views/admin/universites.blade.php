@extends('baseAdmin')
@section('title', 'Universités')
@section('content')
    <div class="w-full">
        <div class="my-5">
            <h1 class="">{{ Breadcrumbs::render('university') }}</h1>
        </div>
        <div class="overflow-x-auto w-full h-fit">
            <div class="flex justify-end mb-5">
                <button data-modal-target="add-modal" data-modal-toggle="add-modal"
                    class="group relative inline-flex items-center overflow-hidden rounded bg-green-400 px-8 py-3 text-white focus:outline-none focus:ring active:bg-green-500">
                    <span class="absolute -end-full transition-all group-hover:end-4">
                        <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </span>
                    <span class="text-sm font-medium transition-all group-hover:me-4"> Ajouter une université </span>
                </button>
                <!-- Main modal -->
                <div id="add-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow ">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                <h3 class="text-xl text-center font-semibold text-gray-900 ">
                                    Ajouter une université
                                </h3>
                                <button type="button"
                                    class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                    data-modal-hide="add-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5">
                                <form class="space-y-4" method="POST" action="{{ route('admin.university') }}">
                                    @csrf
                                    <div>
                                        <label for="acronyme"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Acronyme</label>
                                        <input value="{{ old('acronyme') }}" type="text" name="acronyme" id="acronyme"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                            required />
                                        @error('acronyme')
                                            <p class="text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="dateCreation" class="block mb-2 text-sm font-medium text-gray-900 ">Date
                                            de Creation</label>
                                        <input value="{{ old('dateCreation') }}" type="date" name="dateCreation"
                                            id="dateCreation"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                            required />
                                        @error('dateCreation')
                                            <p class="text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="country"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Pays</label>
                                        <input value="{{ old('country') }}" type="text" name="country" id="country"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                            required />
                                        @error('country')
                                            <p class="text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="city"
                                            class="block mb-2 text-sm font-medium text-gray-900 ">Ville</label>
                                        <input value="{{ old('city') }}" type="text" name="city" id="city"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                            required />
                                        @error('city')
                                            <p class="text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="webSite" class="block mb-2 text-sm font-medium text-gray-900 ">Site
                                            Web</label>
                                        <input value="{{ old('webSite') }}" type="text" name="webSite" id="webSite"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                            required />
                                        @error('webSite')
                                            <p class="text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="nbStudents" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre
                                            d'étudiants</label>
                                        <input value="{{ old('nbStudents') }}" type="text" name="nbStudents"
                                            id="nbStudents"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                            required />
                                        @error('nbStudents')
                                            <p class="text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ajouter
                                        une université</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="divide-y-2 divide-gray-200 bg-white text-sm rounded-xl w-full shadow-md">
                <thead class="ltr:text-left rtl:text-right bg-gray-900 rounded-md text-white">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium ">Acronyme</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium ">Date de création</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium ">Pays</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium ">Ville</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium ">Site Web</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium ">Nombre d'étudiants</th>
                        <th class="px-4 py-2"></th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @foreach ($universities as $university)
                        <tr class="hover:bg-gray-50">
                            <td align="center" class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                {{ $university->acronyme }}</td>
                            <td align="center" class="whitespace-nowrap px-4 py-2 text-gray-700">
                                {{ $university->dateCreation }}</td>
                            <td align="center" class="whitespace-nowrap px-4 py-2 text-gray-700">
                                {{ $university->country }}</td>
                            <td align="center" class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $university->city }}
                            </td>
                            <td align="center" class="whitespace-nowrap px-4 py-2 text-gray-700">
                                {{ $university->webSite }}</td>
                            <td align="center" class="whitespace-nowrap px-4 py-2 text-gray-700">
                                {{ $university->nbStudents }}</td>
                            <td align="center" class="whitespace-nowrap px-4 py-2">
                                <a href="{{ route('admin.editUniversity', ['id' => $university->id]) }}"
                                    class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">
                                    Consulter
                                </a>
                                <a href="{{ route('admin.showUniversityGallery', ['id' => $university->id]) }}"
                                    class="inline-block rounded bg-green-500 px-4 py-2 text-xs font-medium text-white hover:bg-green-700">
                                    Galerie
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
