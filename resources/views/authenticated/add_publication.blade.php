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
                    {{__('Publications')}}
                </div>
{{--                @foreach($users as $user)--}}
{{--                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                        <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                            <div class="flex justify-between">--}}
{{--                                <p>Id: <span class="font-bold text-lg">{{$user->id}}</span></p>--}}
{{--                                <p>Name: <span class="font-bold text-lg">{{$user->name}}</span></p>--}}
{{--                                <p>Email: <span class="font-bold text-lg">{{$user->email}}</span></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

            </div>
        </div>
    </div>
</x-app-layout>
