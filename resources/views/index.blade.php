@extends('partials.base')

@section('title', 'Accueil')

@section('content')

    <main class="min-h-screen">
        <div class="py-20 flex p-5 h-full place-content-around"
            style="background-image: url('{{ Vite::asset('resources/img/public.jpg') }}'); background-size: cover; background-position: bottom;">
            <div class="">
                <h1 class="text-5xl text-green-600">Bienvenue sur le site officiel de la Jeunesse Sportive de la Kabylie
                    !</h1>
                <p class="text-3xl mt-8 leading-10 font-bold text-white">Notre
                    palmarès reflète notre histoire</p>
            </div>
            <div>
                <img class="w-40" src="{{ Vite::asset('resources/img/logo-JSK.png') }}" alt="logo">
            </div>
        </div>
        <h2 class="text-4xl font-bold mt-8 mb-4 text-center">JS Kabylie plus qu'un club de football</h2>
        <div class='flex justify-around my-10'>
            <p class="text-4xl font-bold">Culture</p>
            <p class="text-4xl font-bold">Identité</p>
            <p class="text-4xl font-bold">Valeurs</p>
        </div>

        <div class="flex place-content-around my-20">
            <div class="w-2/6">
                <img class="w-4/6 block mx-auto" src="{{ Vite::asset('resources/img/logo-club.png') }}" alt="Logo du club">
            </div>
            <div class="w-3/6">
                <p class="text-2xl leading-9">Nom complet: JEUNESSE SPORTIVE DE KABYLIE</p>
                <p class="text-2xl leading-9">Abréviation: JSK</p>
                <p class="text-2xl leading-9">Division: Ligue 1</p>
                <p class="text-2xl leading-9">Wilaya: Tizi-Ouzou</p>
                <p class="text-2xl leading-9">Couleurs principales: JAUNE ET VERT</p>
                <p class="text-2xl leading-9">Couleurs de réserves: VERT ET BLANC</p>
                <p class="text-2xl leading-9">Date de création: Août 1946</p>
                <p class="text-2xl leading-9">Téléphone: 026215272</p>
                <p class="text-2xl leading-9">Faxe: 026215272</p>
                <p class="text-2xl leading-9">Email: sspa.jsk@gmail.com</p>
            </div>
        </div>

        <section class="p-5">
            <h3 class="text-5xl font-bold text-center mt-5">Dernières infos du club</h3>
            <div class='flex flex-wrap flex-col md:flex-row mt-8 space-y-8 md:space-y-0'>
                <div class="flex-auto w-full md:w-1/2">
                    <div class="flex flex-col md:flex-row p-5">
                        <div class="flex-auto md:w-1/3">
                            <img class="size-80 rounded-3xl" src="{{ Vite::asset('resources/img/maillot-home.jpg') }}"
                                alt="Actualité 1" class="w-full">
                        </div>
                        <div class="flex-auto md:w-2/3 ml-4">
                            <h3 class="text-4xl font-semibold mb-4">Actualité 1</h3>
                            <p class="text-lg">La JSK croisera le fer, ce soir à 18h, avec le MCO dans le cadre de la
                                23e journée du championnat de Ligue 1 Mobilis. Le moins que l’on puisse dire sur
                                cette rencontre est quelle sera d’une grande importance pour les poulains du duo
                                Bahloul-Bensafi qui doivent à tout prix l’emporter, afin de mettre fin à la série
                                de quatre échecs à domicile et se réconcilier par la même occasion avec leurs
                                supporters.</p>
                        </div>
                    </div>
                </div>
                <div class="flex-auto w-full md:w-1/2">
                    <div class="flex flex-col md:flex-row p-5">
                        <div class="flex-auto md:w-1/3">
                            <img class="size-80 rounded-3xl" src="{{ Vite::asset('resources/img/stade.jpg') }}"
                                alt="Actualité 2" class="w-full">
                        </div>
                        <div class="flex-auto md:w-2/3 ml-4">
                            <h3 class="text-4xl font-semibold mb-4">Actualité 2</h3>
                            <p class="text-lg">Au fur et à mesure que l'assemblée générale des actionnaires prévue le 23 de
                                ce mois approche, les supporters espèrent que les responsables de Mobilis procéderont à de
                                vrais changements au sein de la direction. Ils ne veulent pas de rafistolages surtout que la
                                direction actuelle a montré toutes ses limites.</p>
                        </div>
                    </div>
                </div>
                <div class="flex-auto w-full md:w-1/2">
                    <div class="flex flex-col md:flex-row p-5">
                        <div class="flex-auto md:w-1/3">
                            <img class="size-80 rounded-3xl" src="{{ Vite::asset('resources/img/maillot-ext.jpg') }}"
                                alt="Nouvelle actualité" class="w-full">
                        </div>
                        <div class="flex-auto md:w-2/3 ml-4">
                            <h3 class="text-4xl font-semibold mb-4">Nouvelle actualité</h3>
                            <p class="text-lg">Au fur et à mesure que l'assemblée générale des actionnaires prévue le 23 de
                                ce mois approche, les supporters espèrent que les responsables de Mobilis procéderont à de
                                vrais changements au sein de la direction. Ils ne veulent pas de rafistolages surtout que la
                                direction actuelle a montré toutes ses limites.</p>
                        </div>
                    </div>
                </div>
                <div class="flex-auto w-full md:w-1/2">
                    <div class="flex flex-col md:flex-row p-5">
                        <div class="flex-auto md:w-1/3">
                            <img class="size-80 rounded-3xl" src="{{ Vite::asset('resources/img/kappa.jpg') }}"
                                alt="Nouvelle actualité" class="w-full">
                        </div>
                        <div class="flex-auto md:w-2/3 ml-4">
                            <h3 class="text-4xl font-semibold mb-4">Nouvelle actualité</h3>
                            <p class="text-lg">Au fur et à mesure que l'assemblée générale des actionnaires prévue le 23 de
                                ce mois approche, les supporters espèrent que les responsables de Mobilis procéderont à de
                                vrais changements au sein de la direction. Ils ne veulent pas de rafistolages surtout que la
                                direction actuelle a montré toutes ses limites.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-auto p-6 bg-white rounded-md shadow-md">
            <h3 class="text-center text-2xl font-bold mb-5">Derniers Résultats</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Résultat 1 -->
                <div class="bg-gray-100 rounded-lg p-6 flex flex-col justify-between">
                    <img class="w-24 mx-auto mb-4" src="{{ Vite::asset('resources/img/lfp.webp') }}"
                        alt="logo de la ligue de football algérienne">
                    <div class="text-center mb-4">
                        <p class="text-lg">16 avril 2024</p>
                        <div class="flex justify-center items-center">
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/logo-club.png') }}"
                                    alt="logo equipe JSK">
                                <p class="text-lg">JS Kabylie</p>
                                <p class="text-lg font-bold">3</p>
                            </div>
                            <p class="mx-4 text-lg font-semibold">VS</p>
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/usma.png') }}"
                                    alt="logo equipe adverse">
                                <p class="text-lg">Adversaire</p>
                                <p class="text-lg font-bold">0</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg p-6 flex flex-col justify-between">
                    <img class="w-24 mx-auto mb-4" src="{{ Vite::asset('resources/img/lfp.webp') }}"
                        alt="logo de la ligue de football algérienne">
                    <div class="text-center mb-4">
                        <p class="text-lg">16 avril 2024</p>
                        <div class="flex justify-center items-center">
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/logo-club.png') }}"
                                    alt="logo equipe JSK">
                                <p class="text-lg">JS Kabylie</p>
                                <p class="text-lg font-bold">3</p>
                            </div>
                            <p class="mx-4 text-lg font-semibold">VS</p>
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/usma.png') }}"
                                    alt="logo equipe adverse">
                                <p class="text-lg">Adversaire</p>
                                <p class="text-lg font-bold">0</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg p-6 flex flex-col justify-between">
                    <img class="w-24 mx-auto mb-4" src="{{ Vite::asset('resources/img/lfp.webp') }}"
                        alt="logo de la ligue de football algérienne">
                    <div class="text-center mb-4">
                        <p class="text-lg">16 avril 2024</p>
                        <div class="flex justify-center items-center">
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/logo-club.png') }}"
                                    alt="logo equipe JSK">
                                <p class="text-lg">JS Kabylie</p>
                                <p class="text-lg font-bold">3</p>
                            </div>
                            <p class="mx-4 text-lg font-semibold">VS</p>
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/usma.png') }}"
                                    alt="logo equipe adverse">
                                <p class="text-lg">Adversaire</p>
                                <p class="text-lg font-bold">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-20 mx-auto p-6 bg-white rounded-md shadow-md">
            <h3 class="text-center text-2xl font-bold mb-5">Prochaines rencontres</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Rencontre 1 -->
                <div class="bg-gray-100 rounded-lg p-6 flex flex-col justify-between">
                    <img class="w-24 mx-auto mb-4" src="{{ Vite::asset('resources/img/lfp.webp') }}"
                        alt="logo de la ligue de football algérienne">
                    <div class="text-center mb-4">
                        <p class="text-lg">Début du match à 20h00</p>
                        <div class="flex justify-center items-center">
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/logo-club.png') }}"
                                    alt="logo equipe JSK">
                                <p class="text-lg">JS Kabylie</p>
                            </div>
                            <p class="mx-4 text-lg font-semibold">VS</p>
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/usma.png') }}"
                                    alt="logo equipe adverse">
                                <p class="text-lg">Adversaire</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg p-6 flex flex-col justify-between">
                    <img class="w-24 mx-auto mb-4" src="{{ Vite::asset('resources/img/lfp.webp') }}"
                        alt="logo de la ligue de football algérienne">
                    <div class="text-center mb-4">
                        <p class="text-lg">Début du match à 20h00</p>
                        <div class="flex justify-center items-center">
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/logo-club.png') }}"
                                    alt="logo equipe JSK">
                                <p class="text-lg">JS Kabylie</p>
                            </div>
                            <p class="mx-4 text-lg font-semibold">VS</p>
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/usma.png') }}"
                                    alt="logo equipe adverse">
                                <p class="text-lg">Adversaire</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Rencontre 3 -->
                <div class="bg-gray-100 rounded-lg p-6 flex flex-col justify-between">
                    <img class="w-24 mx-auto mb-4" src="{{ Vite::asset('resources/img/lfp.webp') }}"
                        alt="logo de la ligue de football algérienne">
                    <div class="text-center mb-4">
                        <p class="text-lg">Début du match à 20h00</p>
                        <div class="flex justify-center items-center">
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/logo-club.png') }}"
                                    alt="logo equipe JSK">
                                <p class="text-lg">JS Kabylie</p>
                            </div>
                            <p class="mx-4 text-lg font-semibold">VS</p>
                            <div>
                                <img class="w-12 mx-auto mb-2" src="{{ Vite::asset('resources/img/usma.png') }}"
                                    alt="logo equipe adverse">
                                <p class="text-lg">Adversaire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
