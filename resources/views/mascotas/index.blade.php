<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis mascotas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (App\Models\Mascota::where('user_id', auth()->id())->count() == 0)
                    <div class="my-6 mx-auto text-center">
                        <a href="{{ route('mascota.create') }}" class="bg-blue-500 hover:bg-blue-700 rounded-xl text-white p-3 shadow-lg ">Agregar
                            mascota</a>
                    </div>
                @else
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="flex justify-end my-3">
                                    <a href="{{ route('mascota.create') }}" class="p-2 m-2 text-white bg-blue-500 hover:bg-blue-700 rounded-xl shadow">Agregar mascota</a>
                                </div>
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Nombre
                                                </th>
                                                <th
                                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                    Próxima cita
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($mascotas as $mascota)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <a href="{{ route('mascota.show',$mascota->identificator) }}" target="blank">
                                                                    @if($mascota->photo==null)
                                                                    <img class="h-10 w-10 rounded-full"
                                                                    src="https://ui-avatars.com/api/?name={{ $mascota->name }}&color=7F9CF5&background=EBF4FF"
                                                                    alt="{{ $mascota->name }}">
                                                                    @else
                                                                    <img class="h-10 w-10 rounded-full"
                                                                    src="public/{{ Storage::url($mascota->photo) }}"
                                                                    alt="{{ $mascota->name }}">
                                                                    @endif
                                                                    

                                                                </a>
                                                            </div>
                                                            <div class="ml-4">
                                                                <div
                                                                    class="text-sm leading-5 font-medium text-gray-900">
                                                                    {{ $mascota->name }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm leading-5 text-gray-900">
                                                            Zoo Habitat
                                                        </div>
                                                        <div class="text-sm leading-5 text-gray-500">
                                                            {{ Carbon\Carbon::now()->toDayDateTimeString() }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
