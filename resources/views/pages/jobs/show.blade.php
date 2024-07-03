<x-layout>
    <x-slot:heading >
        {{ $job->title  }}
    </x-slot:heading>

    <p> Salary : {{ $job->salary  }} ,per year</p>
    <p> Shift : {{ $job->time  }}</p>

    @can('edit',$job)
    <div class="mt-2">
        <x-button href="/jobs/{{$job->id}}/edit">Edit</x-button>
    </div>
    @endcan
</x-layout>
