<x-layout>
    <x-slot:heading>
        Edit Job : {{ $job->title  }}
    </x-slot:heading>

    <div>

        <form method="POST" action="/jobs/{{ $job->id }}">
            @method('PATCH')
            @csrf
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Job Title </label>
                        <div class="mt-2">
                            <input
                                type="text"
                                name="title"
                                id="title"
                                autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('title', $job->title) }}"
                            >
                        </div>
                        @error('title')
                        <p class="mt-3 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary </label>
                        <div class="mt-2">
                            <input
                                type="text"
                                name="salary"
                                id="salary"
                                autocomplete="family-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ old('salary', $job->salary) }}"
                            >
                        </div>
                        @error('salary')
                        <p class="mt-3 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="shift" class="block text-sm font-medium leading-6 text-gray-900">Shift</label>
                        <div class="mt-2">
                            <select id="shift" name="shift" autocomplete="shift-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="Full Time" {{ old('shift', $job->time) == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                                <option value="Part Time" {{ old('shift', $job->time) == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                                <option value="Contract" {{ old('shift', $job->time) == 'Contract' ? 'selected' : '' }}>Contract</option>
                            </select>
                        </div>
                        @error('shift')
                        <p class="mt-3 text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between gap-x-6">
                <!-- Update button -->
                <div class="flex items-center gap-x-6">
                    <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>

                <!-- Delete button triggers the delete form submission -->
                <button type="button" class="text-red-500 text-sm font-bold" onclick="document.getElementById('deleteForm').submit();">Delete</button>
            </div>
        </form>

        <!-- Delete Form -->
        <form id="deleteForm" method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('DELETE')
        </form>

    </div>
</x-layout>
