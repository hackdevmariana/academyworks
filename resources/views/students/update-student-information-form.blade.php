<x-form-section submit="updateStudentInformation">
    <x-slot name="title">
        {{ __('Student Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update additional student details such as place of origin, interests, and more.') }}
    </x-slot>

    <x-slot name="form">
        <!-- First Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="first_name" value="{{ __('First Name') }}" />
            <x-input id="first_name" type="text" class="mt-1 block w-full" wire:model="state.first_name" required />
            <x-input-error for="first_name" class="mt-2" />
        </div>

        <!-- Last Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="last_name" value="{{ __('Last Name') }}" />
            <x-input id="last_name" type="text" class="mt-1 block w-full" wire:model="state.last_name" required />
            <x-input-error for="last_name" class="mt-2" />
        </div>

        <!-- Place of Origin -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="place_of_origin" value="{{ __('Place of Origin') }}" />
            <x-input id="place_of_origin" type="text" class="mt-1 block w-full" wire:model="state.place_of_origin" />
            <x-input-error for="place_of_origin" class="mt-2" />
        </div>

        <!-- Interests -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="interests" value="{{ __('Interests') }}" />
            <textarea id="interests" rows="4" class="mt-1 block w-full" wire:model="state.interests"></textarea>
            <x-input-error for="interests" class="mt-2" />
        </div>

        <!-- Social Media Links -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="social_links" value="{{ __('Social Media Links') }}" />
            <textarea id="social_links" rows="4" class="mt-1 block w-full" wire:model="state.social_links"></textarea>
            <x-input-error for="social_links" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
