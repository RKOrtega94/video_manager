<div class="flex flex-col">
    <div>
        <x-input-label for="title" value="{{ __('Title') }}" />
        <x-text-input wire:model="title" id="title" class="w-full" />
    </div>

    <div class="mt-4">
        <x-input-label for="description" value="{{ __('Description') }}" />
        <x-text-input wire:model="description" id="description" class="w-full" />
    </div>

    <div class="mt-4">
        <x-input-label for="url" value="{{ __('URL') }}" />
        <x-text-input wire:model="url" id="url" class="w-full" />
    </div>

    <x-primary-button wire:click="save" class="mt-4">
        {{ __('Save') }}
    </x-primary-button>
</div>
