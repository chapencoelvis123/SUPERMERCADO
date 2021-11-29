<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">                    
                    <div class="min-h-screen bg-white">                    
                        <form action="{{route('tiendas.store')}}" method="POST">
                            @csrf                            
                            <div class="mb-6">
                                <label for="nit" class="text-sm font-medium text-gray-900 block mb-2">NIT:</label>
                                <input type="number" id="nit" name="nit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese el nombre" required="">
                            </div>
                            <div class="mb-6">
                                <label for="cantidad" class="text-sm font-medium text-gray-900 block mb-2">Cantidad:</label>
                                <input type="number" id="cantidad" name="cantidad" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="" min="1" pattern="^[0-9]+" value="1">
                            </div>                        
                            <button class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Guardar</button>
                        </form>
    
                    </div>        
                </div>
            </div>
        </div>
    </div>
  </x-app-layout>
  