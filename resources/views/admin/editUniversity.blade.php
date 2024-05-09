@extends('baseAdmin')
@section('title', 'Détails Universités')
@section('content')
    <div class="w-full">
        <div class="max-w-3xl mx-auto p-6 bg-white rounded-md shadow-md">
            <h1 class="text-3xl text-center font-bold mb-4">{{ $university->acronyme }} - {{ $university->name }}</h1>
            <form method="post" action="{{ route("admin.updateUniversity", ["id"=>$university->id]) }}">
                @csrf
                @method("PATCH")
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 mb-2">Nom de l'Université</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $university->name) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('name')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="acronyme" class="block text-gray-600 mb-2">Acronyme</label>
                    <input type="text" id="acronyme" name="acronyme" value="{{ old('acronyme',$university->acronyme) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('acronyme')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="dateCreation" class="block text-gray-600 mb-2">Date de création</label>
                    <input type="date" id="dateCreation" name="dateCreation" value="{{ old('dateCreation', $university->dateCreation) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('dateCreation')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-gray-600 mb-2">Adresse</label>
                    <input type="text" id="address" name="address" value="{{ old('address', $university->address) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label for="country" class="block text-gray-600 mb-2">Pays</label>
                    <input type="text" id="country" name="country" value="{{ old('country', $university->country) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('country')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="city" class="block text-gray-600 mb-2">Ville</label>
                    <input type="text" id="city" name="city" value="{{ old('city', $university->city) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('city')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="webSite" class="block text-gray-600 mb-2">Site Web</label>
                    <input type="url" id="webSite" name="webSite" value="{{ old('webSite', $university->webSite) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('webSite')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-600 mb-2">Mail</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $university->email) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('email')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="contact" class="block text-gray-600 mb-2">Contact</label>
                    <input type="text" id="contact" name="contact" value="{{ old('contact', $university->contact) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('contact')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="contact2" class="block text-gray-600 mb-2">Second Contact</label>
                    <input type="text" id="contact2" name="contact2" value="{{ old('contact2', $university->contact2) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('contact2')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="nbStudents" class="block text-gray-600 mb-2">Nombre d'étudiants</label>
                    <input type="number" id="nbStudents" name="nbStudents" value="{{ old('nbStudents', $university->nbStudents) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('nbStudents')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="percentageIntegration" class="block text-gray-600 mb-2">Pourcentage d'intégration Professionnel</label>
                    <input type="number" id="percentageIntegration" name="percentageIntegration" value="{{ old('percentageIntegration', $university->percentageIntegration) }}" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">
                    @error('percentageIntegration')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-600 mb-2">Description</label>
                    <textarea id="description" name="description" class="w-full border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:border-blue-400">{{old('description', $university->description)}}</textarea>
                    @error('description')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end space-x-4">
                    <button onclick="window.history.back()" data-modal-hide="default-modal" type="reset" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Retour</button>
                    <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Modifier</button>
                </div>
            </form>
        </div>
    </div>
@endsection
