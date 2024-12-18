@props(['tag'])
<div><a href="tags/{{$tag->name}}" {{$attributes->merge(['class'=> 'bg-white/10 mr-3 px-2 rounded-xl text-sm hover:bg-white/25'])}}>{{$tag->name}}</a></div>