<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form action="#" method="POST" class="mx-auto mt-8 max-w-xl sm:mt-20">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div class="sm:col-span-2">
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-2.5">
                    <x-form-input type="email" name="email" id="email" autocomplete="email" placeholder="example@example.com" />
                    <x-form-error name="email" />
                </div>
            </div>
            <div class="sm:col-span-2">
                <x-form-label for="password">Password</x-form-label>
                <div class="mt-2.5">
                    <x-form-input type="password" name="password" id="password" autocomplete="current-password" placeholder="Your password" />
                    <x-form-error name="password" />
                </div>
            </div>
        </div>
        <div class="mt-10">
            
            <x-form-button type="submit">Login</x-form-button>
        </div>
    </form>
</x-layout>
