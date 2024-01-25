<div class="{{ $showModal ? 'block' : 'hidden' }} fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title"
    role="dialog" aria-modal="true">

    <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity z-10" aria-hidden="true"
        wire:click="toggleModal()"></div>

    <div class="absolute bottom-0 top-0 left-0 right-0 flex justify-center items-center">
        <div
            class="z-50 w-full max-w-3xl p-6 my-8 overflow-y-auto bg-white dark:bg-gray-800 dark:text-gray-200 rounded-lg shadow-xl">
            {{ $slot }}
        </div>
    </div>
</div>
