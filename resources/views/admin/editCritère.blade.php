@extends('baseAdmin')
@section('title', 'Modifier un critère')
@section('content')
    <div class="w-full flex justify-center items-center">
        <form action="{{ route("admin.updateCritere", ['id'=>$crit->id]) }}" method="post" class="w-3/4 border-gray-200 shadow-xl bg-white mt-10 rounded-md">
            @csrf
            @method('PATCH')
            <div class="p-4 md:p-5 space-y-4">
                <div class="mt-4">
                    <label for="name" >Nom</label>
                    <input id="name" class="block rounded-2xl mt-1 w-full" type="text" name="name" value="{{ old('name', $crit->name) }}"  autocomplete="username" />
                    @error('name')
                    <p class="text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Modifier</button>
                <button onclick="window.history.back()" data-modal-hide="default-modal" type="reset" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Annuler</button>
            </div>
        </form>
    </div>
@endsection
