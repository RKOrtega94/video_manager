<x-app-layout>
    <h2 class="text-2xl font-bold">
        {{ __('Welcome') }}A
    </h2>

    @auth
        <div class="mt-4 text-gray-500">
            {{ __('You are logged in!') }}
        </div>
    @endauth
    @guest
        <div class="mt-4 text-gray-500">
            {{ __('You are not logged in!') }}
        </div>
    @endguest
</x-app-layout>
