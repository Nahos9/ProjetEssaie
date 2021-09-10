<div class="flex justify-between items-center py-4 bg-gray-200 h-20">
        <h1 class="mx-4">FindYour<span class="text-blue-600 text-2xl">WORK</span></h1>
    <nav class="">
       <a class="mx-4 hover:text-red-500 text-semibold"  href="">Nos missions</a>
       @guest
         <a class="mx-4 hover:text-red-500 text-semibold" href="{{route('login')}}">Se connecter</a>
         <a class="mx-4 hover:text-red-500 text-semibold" href="{{ route('register')}}">S'en registrer</a>
        @else
        <a class="mx-4 hover:text-red-500 text-semibold" href="{{route('home')}}">DashBoard</a>
        <a class="mx-4 hover:text-red-500 text-semibold" href="{{ route('logout')}}" onclick="event.preventDefault(); getElementById('logout-form').submit()">Se deconnecter</a>
        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
    @csrf</form>
        @endguest
    </nav>
</div>