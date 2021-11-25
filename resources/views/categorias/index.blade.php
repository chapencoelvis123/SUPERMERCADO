<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categoria
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <a 
        href="{{ route('categoria.create') }}"
        class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Registrar Categoria</a>
        <table class="w-full">
          <thead>
            
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Nombre </th>
           
            </tr>
          </thead>
          <tbody class="bg-white">
              @foreach ($categorias as $categoria)                        
            <tr class="text-gray-700">
              <td class="px-4 py-3 border">
                <div class="flex items-center text-sm">
                  <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold text-black"> {{$categoria->nombre}} </p>                    
                  </div>
                </div>
                
              </td>
             
            
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
            </div>
        </div>
    </div>
</x-app-layout>