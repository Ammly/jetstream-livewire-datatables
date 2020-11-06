<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="m-5">
        <x-jet-button wire:click="confirmPostCreate" wire:loading.attr="disabled">
            {{ __('Create Post') }}
        </x-jet-button>
    </div>
    <!-- Create post modal -->
    <x-jet-confirmation-modal wire:model="confirmingPostCreation" maxWidth="2xl">

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