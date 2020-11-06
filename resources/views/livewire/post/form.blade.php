<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="m-5">
        <x-jet-button wire:click="confirmPostCreate" wire:loading.attr="disabled">
            {{ __('Create Post') }}
        </x-jet-button>
    </div>
    <!-- Create post modal -->
    <x-jet-confirmation-modal wire:model="confirmingPostCreation" maxWidth="2xl">

        <x-slot name="icon">
            <svg class="h-6 w-6 text-black-600" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
            </svg>
        </x-slot>

        <x-slot name="title">
            Create Post
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Post Title') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" autocomplete="current-password" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingPostCreation')" wire:loading.attr="disabled">
                Cancel
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="savePost" wire:loading.attr="disabled">
                Create Post
            </x-jet-button>

            <x-jet-action-message class="mr-3 text-green" on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>

        </x-slot>
    </x-jet-confirmation-modal>
</div>