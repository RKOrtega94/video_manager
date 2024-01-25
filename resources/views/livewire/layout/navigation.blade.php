<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="border-b border-gray-100 dark:border-gray-700 w-full max-w-7xl flex">

    {{-- Logo --}}

    <a href="{{ route('home') }}" class="flex items-center justify-center h-16 bg-transparent px-4 min-w-max">
        <span class="text-xl font-bold">
            {{ config('app.name', 'Laravel') }}
        </span>
    </a>

    <div class="w-full flex flex-col sm:flex-row justify-center items-end sm:justify-end sm:items-center">
        @auth
            <div class="hidden sm:flex sm:items-center sm:ms-6 gap-2">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Dashboard') }}
                </x-nav-link>

                <x-nav-link :href="route('videos.index')" :active="request()->routeIs('videos.index')" wire:navigate>
                    {{ __('Videos') }}
                </x-nav-link>

                <button wire:click="logout" class="text-start">
                    <x-dropdown-link>
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </button>
            </div>
        @endauth
        @guest
            <div class="hidden sm:flex sm:items-center sm:ms-6 gap-2">
                <x-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                    {{ __('Login') }}
                </x-nav-link>

                <x-nav-link :href="route('register')" :active="request()->routeIs('register')" wire:navigate>
                    {{ __('Register') }}
                </x-nav-link>
            </div>
        @endguest

        <div class="-me-2 flex items-center sm:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>
            @auth
                <div class="pt-2 pb-3 space-y-1">
                    <button wire:click="logout" class="text-start">
                        <x-dropdown-link>
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </button>
                </div>
            @endauth
            @guest
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                        {{ __('Login') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')" wire:navigate>
                        {{ __('Register') }}
                    </x-responsive-nav-link>
                </div>
            @endguest
        </div>

</nav>
