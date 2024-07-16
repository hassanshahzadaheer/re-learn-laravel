<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form action="#" class="mt-6" >
                <input class="rounded-xl px-4 py-4 w-full max-w-xl bg-white/5" type="text" id="search" name="search" placeholder="Full time developer">
            </form>

        </section>

        <section class="pt-10">
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
