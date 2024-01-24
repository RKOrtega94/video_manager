<div class="w-full flex flex-col">
    <x-input-label>@lang('Search')</x-input-label>
    <x-text-input wire:model="searchParam" placeholder="{{ __('Search video') }}..." class="w-full" wire:change='search' />
</div>
