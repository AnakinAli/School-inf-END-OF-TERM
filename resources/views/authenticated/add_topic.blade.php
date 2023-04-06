<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Topic') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-3xl">
                    {{__('Topics')}}
                </div>

                <div class="p-2 ">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                </div>

                <form method="POST" action="{{ route('add_topic') }}" class="p-2 w-6xl grid grid-flow-row">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-label for="topic" :value="__('Topic')" />

                        <x-input id="topic" class="block mt-1 w-full" type="text" name="topic" :value="old('topic')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Add Topic') }}
                        </x-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
