<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading> Feature Jobs </x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card-small />
                <x-job-card-small />
                <x-job-card-small />
            </div>
        </section>

        <section>
            <x-section-heading> Tags </x-section-heading>

            <div class="mt-6 space-x-1">
                <x-tag>Tags </x-tag>
                <x-tag>Tags </x-tag>
                <x-tag>Tags </x-tag>
                <x-tag>Tags </x-tag>
                <x-tag>Tags </x-tag>
                <x-tag>Tags </x-tag>
                <x-tag>Tags </x-tag>
                <x-tag>Tags </x-tag>
                <x-tag>Tags </x-tag>
            </div>

        </section>
        <section>
            <x-section-heading> All Jobs </x-section-heading>

            <div class="mt-6 space-y-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>


        </section>
    </div>
</x-layout>