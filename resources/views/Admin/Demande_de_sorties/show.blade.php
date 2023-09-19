<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.demande_de_sorties.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Show Demande_de_sortie </a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="" action="{{ route('admin.demande_de_sorties.show', $demande_de_sortie->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="ref_art" class="block text-sm font-medium text-gray-700"> Ref_art </label>
                            <div class="mt-1">
                                <input type="number" id="ref_art" name="ref_art" value="{{ $demande_de_sortie->ref_art }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('ref_art')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="ref_sort" class="block text-sm font-medium text-gray-700"> Ref_sort </label>
                            <div class="mt-1">
                                <input type="number" id="ref_sort" name="ref_sort" value="{{ $demande_de_sortie->ref_sort }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('ref_sort')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="qte_sort" class="block text-sm font-medium text-gray-700"> Qte_sort </label>
                            <div class="mt-1">
                                <input type="number" id="qte_sort" min="0.00" max="10000.00" step="0.01" name="qte_sort" value="{{ $demande_de_sortie->qte_sort }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('qte_sort')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6">
                            <label for="date_demande" class="block text-sm font-medium text-gray-700"> Date_demande
                            </label>
                            <div class="mt-1">
                                <input type="datetime-local" id="date_demande" name="date_demande"
                                    value="{{ $demande_de_sortie->date_demande}}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('date_demande')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="date_sort" class="block text-sm font-medium text-gray-700"> Date_sort
                            </label>
                            <div class="mt-1">
                                <input type="datetime-local" id="date_sort" name="date_sort"
                                    value="{{ $demande_de_sortie->date_sort}}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('date_sort')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        </div>

                     </div>
                    </form>
                    <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" href="{{ route('admin.demande_de_sorties.index') }}"> Back</a>
        </div>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
