@extends('partials.base')

@section('title', $title)

@section('content')

{{-- @if(session("erreur"))
    <x-alert :type="'danger'">
        {{(session("erreur"))}}
    </x-alert>
@endif --}}

@if(session("success"))
    <x-alert :type="'success'">
        {{(session("success"))}}
    </x-alert>
@endif
@if(session("panier"))
    <x-alert :type="'danger'">
        {{(session("panier")[0])}}
    </x-alert>
@endif
@if($joueurs->isEmpty())
    <x-alert :type="'danger'">
        Vous n'avez aucun joueur à afficher
    </x-alert>
@endif
    <div class="py-28 flex p-5 h-full place-content-around"
            style="background-image: url('{{ Vite::asset('resources/img/chandail-dessin.jpg') }}'); background-size: cover; background-position: top;">
            <div class="mt-12">
                <h1 class="text-left text-5xl text-white">Liste des joueurs</h1>
                <p class="text-3xl mt-8 leading-10 font-bold text-white">Présentation de l'effectif de la JS Kabylie</p>
            </div>
            <div>
                <img class="mt-12 w-40" src="{{ Vite::asset('resources/img/logo-JSK.png') }}" alt="logo">
            </div>
        </div>
    <main class="px-8 py-12 bg-gray-200">

    <section class="flex flex-wrap gap-3 justify-evenly">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse ($joueurs as $joueur)
            <div class="border border-gray-300 p-6 rounded-lg shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                <a href="{{ route('joueur.show', ['joueur' => $joueur->id]) }}" class="text-amber-900 z-10 basis-1/4">
                    @if($joueur->image)
                    <img src="{{ $joueur->imageFullPath()}}" alt="Image de {{ $joueur->nom}}" class="w-full mb-4 rounded-lg">
                    @else
                    <img src="{{ Vite::asset('resources/img/inconnu.jpg') }}" alt="Image par défaut" class="w-full mb-4 rounded-lg shadow-md">
                    @endif
                    <p class="text-2xl my-4 font-bold text-green-800">{{ $joueur->nom }} {{ $joueur->prenom }}</p>
                    <p class="text-lg text-yellow-950"><strong>Date de naissance :</strong> {{ $joueur->date_de_naissance }}</p>
                    <p class="text-lg text-yellow-950"><strong>Poste :</strong> {{ $joueur->poste }}</p>
                    <p class="text-lg text-yellow-950"><strong>Numéro de maillot :</strong> {{ $joueur->numero }}</p>
                </a>
            </div>
            @empty
            <p class="bg-amber-50 p-12 self-center text-lg rounded-lg">Aucun joueur disponible</p>
            @endforelse
        </div>
    </section>
</main>


@endsection
