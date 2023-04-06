<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Publication') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-3xl">
                    {{__('Publication')}}
                </div>

                <div class="p-2 ">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                </div>

                <form method="POST" id="pub" action="{{ route('add_publication') }}"
                      class="p-2 w-6xl grid grid-flow-row">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            an option</label>
                        <select required id="countries" name="topic_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Choose a topic</option>

                            @foreach($topics as $topic)
                                <option value="{{$topic->id}}">{{$topic->topic_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mt-6">
                        <x-label for="message" :value="__('Topic Message')"/>

                        <textarea name="message" form="pub" class="w-full h-64 rounded-xl"></textarea>

                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            {{ __('Add Publication') }}
                        </x-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
