<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>

    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($jobs as $job)
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                        <h2 class="text-xl font-bold">{{ $job['title'] }}</h2>
                    </a>
                    <p class="text-gray-500 mt-1">Employer: <span class="font-semibold">{{ $job->employer->company_name }}</span></p>
                    <p class="text-gray-700 mt-2">Pay: <span class="font-semibold">{{ $job['salary'] }}</span> per year</p>
                    <p class="text-gray-700 mt-1">Timing: <span class="font-semibold">{{ $job['time'] }}</span></p>
                </div>

            @endforeach
        </div>
    </div>



    <div>
        {{ $jobs->links()  }}
    </div>

</x-layout>
