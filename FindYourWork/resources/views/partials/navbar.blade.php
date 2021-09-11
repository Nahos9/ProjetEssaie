<div class="flex justify-between items-center py-4 bg-gray-200 h-20">
        <h1 class="mx-4">FindYour<span class="text-blue-600 text-2xl">WORK</span></h1>
    <nav class="">
        <livewire:search />
       <a class="mx-4 hover:text-red-500 text-semibold"  href="{{ route('jobs.index')}}">Nos missions</a>
       @guest
         <a class="mx-4 hover:text-red-500 text-semibold" href="{{route('login')}}">Se connecter</a>
         <a class="mx-4 hover:text-red-500 text-semibold" href="{{ route('register')}}">S'en registrer</a>
        @else
        <a class="mx-4 hover:text-red-500 text-semibold" href="{{route('home')}}">DashBoard</a>
        <a class="mx-4 hover:text-red-500 text-semibold" href="{{ route('logout')}}" onclick="event.preventDefault(); getElementById('logout-form').submit()">Se deconnecter</a>
        <div class="inline-block rounded-full w-30  px-4 h-5 bg-blue-400">
            <a class="" href="">{{auth()->user()->name}}</a>
        </div>
        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
        <livewire:flash />
    @csrf</form>
        @endguest
    </nav>
</div>