<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Empresa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="max-w-lg mx-auto">
    
                    <form action="{{route('empresa.update', $empresa)}}" method="POST">
                        @csrf @method('PUT')
                        <div class="mb-6">
                            <label for="nombre" class="text-sm font-medium text-gray-900 block mb-2">Nombre de Empresa:</label>
                            <input value=" {{old('nombre'), $empresa->nombre}} " type="text" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese el nombre" required="">
                        </div>
                        <div class="mb-6">
                            <label for="ubicacion" class="text-sm font-medium text-gray-900 block mb-2">Ubicacion:</label>
                            <input value=" {{old('ubicacion'), $empresa->ubicacion}} " type="text" id="ubicacion" name="ubicacion" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>                        
                        <div class="mb-6">
                            <label for="telefono" class="text-sm font-medium text-gray-900 block mb-2">Teléfono</label>
                            <input value=" {{old('telefono'), $empresa->telefono}} " type="text" id="telefono" name="telefono" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <button class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>