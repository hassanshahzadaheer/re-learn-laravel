@props(['job'])
<x-panel class="flex gap-x-6">

    <div>
       <x-employer-logo></x-employer-logo>
    </div>
    <div class="flex-1 flex flex-col">

            <a class="self-start text-sm text-gray-400" href="/jobs/{{ $job->id }}">{{ $job->employer->name  }}</a>
            <h3 class="font-bold text-lg mt-3 group-hover:text-blue-800 transitioncolors duration-1000" >{{ $job->title }}</h3>
            <p class="text-sm text-gray-400 mt-auto"> {{$job->location}} - From {{ $job->salary  }} </p>

    </div>
    <div>

        @foreach($job->tags as $tag)
            <x-tag :$tag>Backend</x-tag>
        @endforeach


    </div>
</x-panel>
