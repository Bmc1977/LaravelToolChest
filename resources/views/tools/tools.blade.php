<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tools') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ Route('new-tool') }}"><x-primary-button>New Tool</x-primary-button></a>
                </div>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-3">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Your Tools</h1>
                    <table style="width: 100%;" class="table-auto">
                        <tr>
                            <td>Name</td>
                            <td>Category</td>
                            <td>Group</td>
                            <td>Brand</td>
                            <td>Cost</td>
                            <td>Quantity</td>
                            <td>Notes</td>
                        </tr>
                        @foreach($tools as $tool)
                            <tr class="mt-3">
                                <td><a href="{{ route('iTool', ['id' => $tool->id]) }}">{{ $tool->name }}</a></td>
                                <td>{{ $tool->category }}</td>
                                <td>{{ $tool->group }}</td>
                                <td>{{ $tool->brand }}</td>
                                <td>{{ $tool->cost }}</td>
                                <td>{{ $tool->quantity }}</td>
                                <td>{{ $tool->notes }}</td>
                                <td>
                                    <form action="{{route('deleteTool', ['id' => $tool->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit"><img src="{{ URL('/img/trash.png') }}" alt=""></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
