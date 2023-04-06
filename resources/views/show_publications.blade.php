<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8">


                @foreach($publications as $pub)
                    <div
                       class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-xl">
                        <div class="p-6 bg-white border-b border-gray-200 hover:scale-95 duration-500 rounded-lg">
                            <div class="">
                                <p>Author: <span class="font-bold text-2xl">{{$pub['author']}}</span></p>
                                <p>Info: <span class="font-bold text-2xl">{{$pub['message']}}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach

        </div>
    </div>
</x-app-layout>
