<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Tool') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('create-tool') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Tool Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mt-3">
                            <x-input-label for="categorySelector" :value="__('Tool Category')" />
                            <select name="categorySelector" id="categorySelector" class="block rounded-md w-full">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-3">
                            <x-input-label for="groupSelector" :value="__('Tool Group')" />
                            <select name="groupSelector" id="groupSelector" class="block rounded-md w-full">
                                @foreach ($groups as $group)
                                    <option value="{{ $group->name }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-3">
                            <x-input-label for="brandSelector" :value="__('Tool Brand')" />
                            <select name="brandSelector" id="brandSelector" class="block rounded-md w-full">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-3">
                            <x-input-label for="cost" :value="__('Tool Cost')" />
                            <input name="cost" id="cost" class="block rounded-md w-full" type="text" maxlength="10">
                        </div>

                        <div class="mt-3">
                            <x-input-label for="quantity" :value="__('Tool Quantity')" />
                            <input name="quantity" id="quantity" class="block rounded-md w-full" type="text" maxlength="45">
                        </div>

                        <div class="mt-3">
                            <x-input-label for="notes" :value="__('Notes')" />
                            <input name="notes" id="notes" class="block rounded-md w-full" type="text" maxlength="45">
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Create Tool') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $("#categorySelector").selectize({
            create: true,
            sortField: "text",
            options: {{ $categories }}
        });
        $("#groupSelector").selectize({
            create: true,
            sortField: "text",
        });
        $("#brandSelector").selectize({
            create: true,
            sortField: "text",
        });
    </script>


</x-app-layout>
