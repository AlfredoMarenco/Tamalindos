<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit information pet') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="md:grid md:grid-cols-1 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="{{ route('mascota.update',$mascota) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                <div class=" sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-4 gap-6">
                                            <div class="col-span-6 sm:col-span-4 mx-auto">
                                                @if($mascota->photo == null)
                                                <img src="https://ui-avatars.com/api/?name={{ $mascota->name }}&color=7F9CF5&background=EBF4FF" class="mx-auto">
                                                @else
                                                <img src="{{ Storage::url($mascota->photo) }}" alt="{{ $mascota->name }}{{ $mascota->user->id }}"
                                                class="h-20 rounded-full w-auto mx-auto">                                                
                                                @endif
                                                <label class="block text-sm font-medium leading-5 text-gray-700">
                                                    Foto de tu mascota
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input
                                                        type="file"
                                                        class="form-input flex-1 block w-full rounded transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                        placeholder="Nombre de tu mascota" name="photo">
                                                </div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-2">
                                                <label class="block text-sm font-medium leading-5 text-gray-700">
                                                    Nombre de tu mascota
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input
                                                        class="form-input flex-1 block w-full rounded transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                        placeholder="Nombre de tu mascota" name="name" value="{{ $mascota->name }}">
                                                </div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-2">
                                                <label class="block text-sm font-medium leading-5 text-gray-700">
                                                    Raza
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input
                                                        class="form-input flex-1 block w-full rounded transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                        placeholder="Nombre de tu mascota" name="race" value="{{ $mascota->race }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-4 gap-6 mt-6">
                                            <div class="col-span-3 sm:col-span-1">
                                                <label class="block text-sm font-medium leading-5 text-gray-700">
                                                    Edad
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input type="number"
                                                        class="form-input flex-1 block w-full rounded transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                        placeholder="Edad de tu mascota" name="age" value="{{ $mascota->age }}">
                                                </div>
                                            </div>
                                            <div class="col-span-3 sm:col-span-1">
                                                <label for="company_website"
                                                    class="block text-sm font-medium leading-5 text-gray-700">
                                                    Peso
                                                </label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input type="number"
                                                        class="form-input flex-1 block w-full rounded transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                        placeholder="Peso de tu mascota" name="weight" value="{{ $mascota->weight }}">
                                                </div>
                                            </div>
                                            <div class="col-span-6 sm:col-span-1">
                                                <label
                                                    class="block text-sm font-medium leading-5 text-gray-700">¿Desparacitado?</label>
                                                <select name="dewormed"
                                                    class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                                    <option value="Si" {{ $mascota->dewormed == 'Si' ? 'selected' : '' }}>Si</option>
                                                    <option value="No" {{ $mascota->dewormed == 'No' ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                            <div class="col-span-6 sm:col-span-1">
                                                <label
                                                    class="block text-sm font-medium leading-5 text-gray-700">¿Desparacitado?</label>
                                                <select name="species"
                                                    class="mt-1 block form-select w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                                    <option value="perro" {{ $mascota->species == 'perro' ? 'selected' : '' }}>Perro</option>
                                                    <option value="gato" {{ $mascota->species == 'gato' ? 'selected' : '' }}>Gato</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-2 gap-6 mt-6">
                                            <div class="col-span-3 sm:col-span-1">
                                                <label for="about"
                                                    class="block text-sm leading-5 font-medium text-gray-700">
                                                    Alergias
                                                </label>
                                                <div class="rounded-md shadow-sm">
                                                    <textarea name="allergy" rows="3"
                                                        class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                        placeholder="Alergia1,Alergia2,Alergia3,...,AlergiaN.">{{ $mascota->allergy }}</textarea>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">
                                                    Separa las alergias de tu mascota con una coma.
                                                </p>
                                            </div>
                                            <div class="col-span-3 sm:col-span-1">
                                                <label for="about"
                                                    class="block text-sm leading-5 font-medium text-gray-700">
                                                    Padecimientos
                                                </label>
                                                <div class="rounded-md shadow-sm">
                                                    <textarea name="ailments" rows="3"
                                                        class="form-textarea mt-1 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                        placeholder="Padecimiento1,Padecimiento2,Padecimiento3,...,PadecimientoN.">{{ $mascota->ailments }}</textarea>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">
                                                    Separa los padecimientos de tu mascota con una coma.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <span class="inline-flex rounded-md shadow-sm">
                                            <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                                Actualizar
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</x-app-layout>
