<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form action="/register" method="POST" class="mx-auto mt-8 max-w-xl sm:mt-20">
    @csrf 
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <x-form-label for="first-name">First Name</x-form-label>
                <div class="mt-2.5">
                    <x-form-input type="text" name="first-name" id="first-name" placeholder="John Aheer" />
                    <x-form-error name="first-name" />
                </div>
            </div>
            <div>
                <x-form-label for="last-name">Last Name</x-form-label>
                <div class="mt-2.5">
                    <x-form-input type="text" name="last-name" id="last-name" placeholder="Doe" />
                    <x-form-error name="last-name" />
                </div>
            </div>
            <div class="sm:col-span-2">
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-2.5">
                    <x-form-input type="email" name="email" id="email" placeholder="example@example.com" />
                    <x-form-error name="email" />
                </div>
            </div>
            <div>
                <x-form-label for="password">Password</x-form-label>
                <div class="mt-2.5">
                    <x-form-input type="password" name="password" id="password" autocomplete="new-password" />
                    <x-form-error name="password" />
                </div>
            </div>
            <div>
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <div class="mt-2.5">
                    <x-form-input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" />
                    <x-form-error name="password_confirmation" />
                </div>
            </div>
        </div>
        <div class="mt-10 flex justify-between">
            <x-form-button type="button">Cancel</x-form-button>
            <x-form-button type="submit">Sign Up</x-form-button>
        </div>
    </form>
</x-layout>
