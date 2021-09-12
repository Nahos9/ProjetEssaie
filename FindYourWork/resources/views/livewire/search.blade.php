<div class="inline-block relative" x-data="{ open: false}">
      <input @click.away="open = false " @click="open = true " class="bg-gray-300 hover:shadow-md focus:outline-none py-2 px-6 border-2 rounded-full" type="text" wire:model="query" name="" id="" placeholder="Rechercher une mission"
      wire:keydown.arrow-down.prevent="incrementIndex"
      wire:keydown.arrow-up.prevent="decrementIndex"
      wire:keydown.backspace="resetIndex"
      wire:keydown.enter.prevent="showJob"
      
      >
      <svg  xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute top-0 right-0 text-gray-500 mt-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>
    @if(strlen($query) > 2)
    <div x-show="open" class="absolute bg-gray-200 w-78 mt-2 py-1 rounded-2xl border">
    
          @if(count($jobs)>0)
          @foreach($jobs as $index =>$job)
            <p class="p-2 {{ $selectedIndex === $index ? 'bg-green-300':''}}">{{$job->title}}</p>
          @endforeach
          @else
            <p class="bg-red-400 ">0 resultat pour {{$query}}</p>
      @endif
  </div>
  @endif
</div>
