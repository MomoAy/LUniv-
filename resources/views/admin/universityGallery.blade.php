@extends('baseAdmin')
@section('title', "Galerie d'images")
@section('content')
    <div class="w-full">
        <h1 class="text-3xl font-semibold text-center">Galerie pour {{ $university->acronyme }} - {{ $university->country }}
        </h1>
        <div class="w-4/5 mx-auto my-5">
            <form action="{{ route('admin.storeUniversityImage', ['id' => $university->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                    aria-describedby="file_input_help" id="file_input" type="file" name="image">
                @error('image')
                    <p class="text-red-500 font-semibold">{{ $message }}</p>
                @enderror
                <div class="w-full flex justify-end my-4">
                    <button type="submit"
                        class="inline-block rounded bg-indigo-600 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700">Soumettre</button>
                </div>
            </form>
        </div>

        <section>
            <div class="px-8 py-24 mx-auto md:px-12 lg:px-32 max-w-7xl">
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-4">
                    @foreach ($images as $image)
                        @php
                            $img = $image->url;
                            $vue = 'images/university/' . $img;
                            // echo $vue;
                        @endphp
                        <div class="h-full p-2 overflow-hidden duration-500 border rounded-3xl hover:-translate-y-4">
                            <img src="{{ asset($vue) }}" alt="Image de l'université {{ $university->acronyme }}"
                                class="object-cover h-full border shadow-2xl rounded-2xl aspect-square">
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
