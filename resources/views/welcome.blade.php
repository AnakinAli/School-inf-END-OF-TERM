<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Subject Field:
            The influence of heavy and light electronics on the psychology of people in the 21st century
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    About us: {{$address['town']}}
                </div>
            </div>

            <div class="p-2 bg-white rounded-xl mt-6 grid grid-flow-row gap-4 lg:grid-flow-col">
                @foreach($admins as $admin)
                    <div>
                        <p>Name: {{$admin->name}}</p>
                        <a class="text-blue-600 " href="mailto:{{$admin->email}}">Email: {{$admin->email}}</a>
                    </div>
                @endforeach
            </div>

            @isset($services)
                <div>
                    <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>

                <div
                    class="p-2 bg-white rounded-xl mt-6 grid grid-flow-row gap-4 lg:grid-flow-col">

                    @foreach($services as $service)
                        <div>
                            <p>Service: {{$service->name}}</p>
                        </div>
                    @endforeach
                </div>
            @endisset

        </div>
    </div>
</x-app-layout>
