<div class="w-full flex flex-col">
    <x-input-label>@lang('Search')</x-input-label>
    <x-text-input wire:model="search" placeholder="{{ __('Search video') }}..." class="w-full" wire:keydown="onSearch" />
</div>
