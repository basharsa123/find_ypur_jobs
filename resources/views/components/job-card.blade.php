<div class="p-4 bg-white/5 flex flex-col text-center rounded-xl">

    <div class="self-start text-sm">{{$job->employer->name}}</div>

    <div class="py-8 font-bold">
        <h1>{{$job->title}}</h1>
        <p class="text-sm pt-5 py-8"> {{$job->schedule . "-" . $job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach( $job->tags as $tag)
            <x-tag :$tag />
            @endforeach
        </div>
        <div class=""><img src="http://picsum.photos/seed/{{rand(0,100)}}/50/50" class="rounded flex-1" alt="image"></div>
    </div>

</div>