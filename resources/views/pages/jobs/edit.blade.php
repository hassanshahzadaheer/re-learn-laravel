<x-layout>
    <x-slot name="heading">
        Edit Job: {{ $job->title }}
    </x-slot>

    <div class="bg-white shadow sm:rounded-lg p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Left Side: Labels and Descriptions -->
            <div class="p-6 space-y-6">
                <div>
                    <h2 class="text-lg font-medium leading-6 text-gray-900">Job Title</h2>
                    <p class="mt-1 text-sm text-gray-600">Please enter the title of the job.</p>
                </div>
                <div>
                    <h2 class="text-lg font-medium leading-6 text-gray-900">Salary</h2>
                    <p class="mt-1 text-sm text-gray-600">Specify the salary for this job.</p>
                </div>
                <div>
                    <h2 class="text-lg font-medium leading-6 text-gray-900">Shift</h2>
                    <p class="mt-1 text-sm text-gray-600">Select the shift type for this job.</p>
                </div>

                <!-- Delete Form -->
                <form id="deleteForm" method="POST" action="/jobs/{{ $job->id }}" class="flex justify-start">
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="rounded-md bg-red-600  px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                    >
                        Delete
                    </button>
                </form>
            </div>

            <!-- Right Side: Input Fields and Buttons -->
            <div class="p-6 space-y-6">
                <form method="POST" action="/jobs/{{ $job->id }}">
                    @method('PATCH')
                    @csrf
                    <div class="space-y-6">
                        <div>
                            <x-form-input
                                type="text"
                                name="title"
                                id="title"
                                placeholder="Job Title"
                                required
                                class="block w-full rounded-md border border-gray-300 py-2 px-3 text-base focus:border-indigo-500 focus:ring-indigo-500"
                                value="{{ old('title', $job->title) }}"
                            />
                            <x-form-error name="title"/>
                        </div>

                        <div>
                            <x-form-input
                                type="text"
                                name="salary"
                                id="salary"
                                placeholder="Salary"
                                required
                                class="block w-full rounded-md border border-gray-300 py-2 px-3 text-base focus:border-indigo-500 focus:ring-indigo-500"
                                value="{{ old('salary', $job->salary) }}"
                            />
                            <x-form-error name="salary"/>
                        </div>

                        <div>
                            <select
                                id="shift"
                                name="shift"
                                class="block w-full rounded-md border border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:ring-indigo-500"
                            >
                                <option value="">Select Shift</option>
                                <option value="Full Time" {{ old('shift', $job->time) == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                                <option value="Part Time" {{ old('shift', $job->time) == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                                <option value="Contract" {{ old('shift', $job->time) == 'Contract' ? 'selected' : '' }}>Contract</option>
                            </select>
                            <x-form-error name="shift"/>
                        </div>

                        <div class="mt-6 flex justify-end space-x-4">
                            <a href="/jobs" class="rounded-md border border-gray-300 px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900">Cancel</a>
                            <button
                                type="submit"
                                class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
