<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Topics') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">

                @foreach($topics as $topic)

                    <a href="{{route('get_topic',[$topic->id])}}"
                       class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-xl">
                        <div class="p-6 bg-white border-b border-gray-200 hover:scale-95 duration-500 rounded-lg">
                            <div class="flex justify-between">
                                <p>Topic Name: <span class="font-bold text-2xl">{{$topic->topic_name}}</span></p>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
