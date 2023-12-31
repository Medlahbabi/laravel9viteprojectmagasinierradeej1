<x-magasinier-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('magasinier.pret_livrers.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Show Pret_livrer </a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="" action="{{ route('magasinier.pret_livrers.show', $pret_livrer->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name_art_pretli" class="block text-sm font-medium text-gray-700"> Name_art_pretli </label>
                            <div class="mt-1">
                                <input type="text" id="name_art_pretli" name="name_art_pretli" value="{{ $pret_livrer->name_art_pretli }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name_art_pretli')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="qte_pretli" class="block text-sm font-medium text-gray-700"> Qte_pretli </label>
                            <div class="mt-1">
                                <input type="number"min="0.00" max="10000.00" step="0.01" id="qte_pretli" name="qte_pretli" value="{{ $pret_livrer->qte_pretli }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('qte_pretli')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sm:col-span-6">
                            <label for="date_pretli" class="block text-sm font-medium text-gray-700"> Date_pretli
                            </label>
                            <div class="mt-1">
                                <input type="datetime-local" id="date_pretli" name="date_pretli"
                                    value="{{ $pret_livrer->date_pretli}}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('date_pretli')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        </div>

                     </div>
                    </form>
                    <div class="col-xs-12 col-sm-12 col-md-12">
            <a class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white" href="{{ route('magasinier.pret_livrers.index') }}"> Back</a>
        </div>
                </div>

            </div>
        </div>
    </div>
</x-magasinier-layout>
