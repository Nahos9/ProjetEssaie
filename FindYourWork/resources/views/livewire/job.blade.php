<div>
<div class="py-5 px-3 shadow-sm hover:shadow-md rounded border border-gray-200 my-3">
       <div class=" flex justify-between">
       <h2 class="text-xl font-bold text-green-700">{{ $job->title}}</h2>
            <button class="focus:outline-none"  wire:click="addLike">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="{{ $job->isLiked()?'green':''}}" viewBox="0 0 24 24" stroke="white">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
        </svg>
            </button>
       </div>
        <p class="text-md text-gray-800 py-4">{{$job->description}}</p>
        <p class="text-gray-300 mb-4">Prix : {{number_format($job->price,2,',',' ').'£'}}</p>
        <div class="flex ">
            <span class="h-2 w-2 bg-green-300 rounded-full mr-1 mt-8"></span>
            <a class="h-1/2 w-75 py-2 px-3 rounded border rounded-full mt-4 bg-blue-400 text-gray-300 hover:bg-blue-600" href="{{route('show.jobs',$this->job->id)}}">Voir la mission</a>
        </div>
    </div>
</div>
