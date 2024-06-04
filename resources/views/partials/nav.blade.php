<nav class="flex justify-evenly p-5">

    <a class="font-Concert text-xl text-green-800 p-2 rounded-xl font-extrabold hover:bg-green-800 hover:text-yellow-300 {{request()->is('/') ? "active" : ""}}" href="{{route('index')}}">Accueil</a>
    <a class="font-Concert text-xl text-green-800 p-2 rounded-xl font-extrabold hover:bg-green-800 hover:text-yellow-300 {{request()->is('/equipe') ? "active" : ""}}" href="{{route('equipe')}}">Equipe</a>
    <a class="font-Concert text-xl text-green-800 p-2 rounded-xl font-extrabold hover:bg-green-800 hover:text-yellow-300 {{request()->is('/palmares') ? "active" : ""}}" href="{{route('palmares')}}">Palmares</a>
    <a class="font-Concert text-xl text-green-800 p-2 rounded-xl font-extrabold hover:bg-green-800 hover:text-yellow-300 {{request()->is('/contact') ? "active" : ""}}" href="{{route('contact')}}">Contact</a>
</nav>
