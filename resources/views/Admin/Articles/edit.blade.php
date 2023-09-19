<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.articles.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Article Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.articles.update', $article->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="ref_art" class="block text-sm font-medium text-gray-700"> Ref_art </label>
                            <div class="mt-1">
                                <input type="number" id="ref_art" name="ref_art" value="{{ $article->ref_art }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('ref_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="name_art" class="block text-sm font-medium text-gray-700"> Name_art </label>
                            <div class="mt-1">
                                <input type="text" id="name_art" name="name_art" value="{{ $article->name_art }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="gender_art" class="block text-sm font-medium text-gray-700">Gender_art </label>
                            <div class="mt-1">
                                <input type="text" id="gender_art" name="gender_art" value="{{ $article->gender_art }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('gender_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 pt-5">
                            <label for="description_art" class="block text-sm font-medium text-gray-700">Description_art</label>
                            <div class="mt-1">
                                <textarea id="description_art" rows="3" name="description_art"
                                    class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                 {{ $article->description_art }}
                                </textarea>
                            </div>
                            @error('description_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="price_art" class="block text-sm font-medium text-gray-700"> Price_art </label>
                            <div class="mt-1">
                                <input type="number" min="0.00" max="10000.00" step="0.01" id="price_art" name="price_art"
                                    value="{{ $article->price_art }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('price_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="stock_quantity_art" class="block text-sm font-medium text-gray-700"> Stock_quantity_art </label>
                            <div class="mt-1">
                                <input type="number" min="0.00" max="10000.00" step="0" id="stock_quantity_art" name="stock_quantity_art"
                                    value="{{ $article->stock_quantity_art }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('stock_quantity_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="quantity_output_art" class="block text-sm font-medium text-gray-700"> Quantity_output_art </label>
                            <div class="mt-1">
                                <input type="number" min="0.00" max="10000.00" step="0.01" id="quantity_output_art" name="quantity_output_art"
                                    value="{{ $article->quantity_output_art }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('quantity_output_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="minimum_quantity_art" class="block text-sm font-medium text-gray-700"> Minimum_quantity_art </label>
                            <div class="mt-1">
                                <input type="number" min="0.00"  id="minimum_quantity_art" name="minimum_quantity_art"
                                    value="{{ $article->minimum_quantity_art }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('minimum_quantity_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="image_art" class="block text-sm font-medium text-gray-700"> Image_art </label>
                            <div>
                                <img class="w-32 h-32" src="{{ Storage::url($article->image_art) }}">
                            </div>
                            <div class="mt-1">
                                <input type="file" id="image_art" name="image_art"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('image_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>




