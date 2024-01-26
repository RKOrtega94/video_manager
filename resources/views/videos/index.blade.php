<x-app-layout>
    @can('create_video')
        @livewire('actions.toggle-modal')
    @endcan
    @livewire('video.filter')
    @livewire('video.grid')

    @if (auth()->user()->can('create_video') ||
            auth()->user()->can('update_video'))
        @push('modal')
            @livewire('video.modal')
        @endpush
    @endif
</x-app-layout>
