<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            DetalleCompra
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="max-w-lg mx-auto">
    
                    <form action="{{route('compradetalle.store')}}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="cantidad" class="text-sm font-medium text-gray-900 block mb-2">Cantidad:</label>
                            <input type="number" id="cantidad" name="cantidad" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese la cantidad" required="">
                        </div>
                        <div class="mb-6">
                            <label for="preciototal" class="text-sm font-medium text-gray-900 block mb-2">Precio_Total:</label>
                            <input type="text" id="precio" name="preciototal" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>                        
                        <div class="mb-6">
                            <label for="compra_id" class="text-sm font-medium text-gray-900 block mb-2">Compra</label>
                            <select name="compra_id">
                                @foreach ($compras as $compra)
                                    <option value={{$compra->id}}>{{$compra->detalle}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="categoria_id" class="text-sm font-medium text-gray-900 block mb-2">Producto</label>
                            <select name="categoria_id">
                                @foreach ($productos as $producto)
                                    <option value={{$producto->id}}>{{$producto->nombre}} </option>
                                @endforeach
                            </select>
                        </div>
                        <button class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>