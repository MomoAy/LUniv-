@php use Diglactic\Breadcrumbs\Breadcrumbs; @endphp
@extends('baseAdmin')
@section('title', 'Dashboard')
@section('content')
    <div class="w-full">
        <div class="my-5">
            <h1 class="">{{ Breadcrumbs::render('dashboard') }}</h1>
        </div>

        <div>
            <div class="flex justify-evenly space-x-8 text-white text-2xl">

                <div class="bg-indigo-500 opacity-70 w-2/6 h-40 rounded-xl flex justify-between p-4">
                    <section>
                        Universités
                        <h3 class="mt-5">100</h3>
                    </section>

                    <svg data-name="Layer 1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M94.09 42.89 51.56 21.62a3.83 3.83 0 0 0-3.13 0L5.91 42.89a1.32 1.32 0 0 0 0 2.51l6.43 3.21H12v35.54a2.8 2.8 0 0 0-1.11 1.17l-2.78 5.62A2.81 2.81 0 0 0 10.62 95h5.63a2.81 2.81 0 0 0 2.52-4.07L16 85.32a2.8 2.8 0 0 0-1.11-1.17V49.86l7 3.52v17.38c0 3.94 3 7.6 8.42 10.31 5.28 2.64 12.28 4.09 19.71 4.09s14.43-1.45 19.71-4.09c5.43-2.71 8.42-6.38 8.42-10.31V53.38l16-8a1.32 1.32 0 0 0 0-2.51ZM16.25 92.2h-5.63l2.81-5.62Zm59.06-21.44c0 2.82-2.44 5.59-6.86 7.8C63.56 81 57 82.36 50 82.36S36.44 81 31.55 78.56c-4.42-2.21-6.86-5-6.86-7.8v-16l23.74 11.9a3.83 3.83 0 0 0 3.13 0l23.75-11.88Zm-25-6.63a1 1 0 0 1-.32 0 1.12 1.12 0 0 1-.31 0l-40-20 40-20a1 1 0 0 1 .32 0 1.12 1.12 0 0 1 .31 0l40 20Z" fill="#fbff00" class="fill-000000"></path></svg>
                </div>

                <div class="bg-sky-500 opacity-70 w-2/6 h-40 rounded-xl flex justify-between p-4">
                    <section>
                        Critères
                        <h3 class="mt-5">100</h3>
                    </section>

                    <?xml version="1.0" ?><svg id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M11,21H3c-0.5527344,0-1-0.4472656-1-1v-8c0-0.5527344,0.4472656-1,1-1h8c0.5527344,0,1,0.4472656,1,1v8    C12,20.5527344,11.5527344,21,11,21z M4,19h6v-6H4V19z"/></g><g><path d="M29,28h-8c-0.5527344,0-1-0.4472656-1-1v-8c0-0.5527344,0.4472656-1,1-1h8c0.5527344,0,1,0.4472656,1,1v8    C30,27.5527344,29.5527344,28,29,28z M22,26h6v-6h-6V26z"/></g><g><path d="M29,12h-8c-0.5527344,0-1-0.4472656-1-1V3c0-0.5527344,0.4472656-1,1-1h8c0.5527344,0,1,0.4472656,1,1v8    C30,11.5527344,29.5527344,12,29,12z M22,10h6V4h-6V10z"/></g><g><path d="M16,32c-0.5527344,0-1-0.4472656-1-1V1c0-0.5527344,0.4472656-1,1-1s1,0.4472656,1,1v30    C17,31.5527344,16.5527344,32,16,32z"/></g><g><path d="M16,17h-5c-0.5527344,0-1-0.4472656-1-1s0.4472656-1,1-1h5c0.5527344,0,1,0.4472656,1,1S16.5527344,17,16,17z"/></g><g><path d="M21,8h-5c-0.5527344,0-1-0.4472656-1-1s0.4472656-1,1-1h5c0.5527344,0,1,0.4472656,1,1S21.5527344,8,21,8z"/></g><g><path d="M21,24h-5c-0.5527344,0-1-0.4472656-1-1s0.4472656-1,1-1h5c0.5527344,0,1,0.4472656,1,1S21.5527344,24,21,24z"/></g></g></svg>
                </div>

                <div class="bg-gray-900 opacity-70 w-2/6 h-40 rounded-xl flex justify-between p-4">
                    <section>
                        Utilisateurs
                        <h3 class="mt-5">100</h3>
                    </section>

                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h256v256H0z"></path>
                        <circle cx="128" cy="140" fill="none" r="40" stroke="#ff0000" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="12" class="stroke-000000"></circle>
                        <path
                            d="M196 116a59.8 59.8 0 0 1 48 24M12 140a59.8 59.8 0 0 1 48-24M70.4 216a64.1 64.1 0 0 1 115.2 0"
                            fill="none" stroke="#ff0000" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="12"
                            class="stroke-000000"></path>
                        <path d="M60 116a32 32 0 1 1 31.4-38M164.6 78a32 32 0 1 1 31.4 38" fill="none" stroke="#ff0000"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="12"
                              class="stroke-000000"></path>
                    </svg>
                </div>

            </div>
        </div>
    </div>
@endsection
