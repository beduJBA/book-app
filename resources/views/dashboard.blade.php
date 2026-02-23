<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="/dashboard">
                    {{ __('Books') }}
                </a>
            </h2>
            <x-alert />
        </div>

    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <livewire:create-book />
            <livewire:book-index />
        </div>
    </div>
</x-app-layout>
