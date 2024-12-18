@props(['job'])
<div class="p-4 bg-white/10 flex rounded-xl gap-6 border border-transparent hover:border-blue-800 group">
    <div class=""><img src="http://picsum.photos/seed/{{rand(0,100)}}/100/100" class="rounded flex-1" alt="image"></div>
    <div class="flex-1 flex flex-col space-y-3">
        <div class="self-start text-sm text-gray-500">
            {{$job->employer->name}}
        </div>
        <h1 class="font-bold text-xl">{{$job->title}}</h1>
        <p class=" text-sm text-gray-500 mt-auto">{{$job->schedule . "-" . $job->salary }}</p>
    </div>
    <div>
        @foreach ($job->tags as $tag )
        <x-tag :$tag/>
        @endforeach
    </div>
</div>