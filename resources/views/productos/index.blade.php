<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Productos
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
              href="{{ route('producto.create') }}"
              class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Registrar Producto</a>
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">Nombre </th>
              <th class="px-4 py-3">Precio</th>
              <th class="px-4 py-3">Categoria</th>
              <th class="px-4 py-3">Acciones</th>
            </tr>
          </thead>
          <tbody class="bg-white">
              @foreach ($productos as $producto)                        
            <tr class="text-gray-700">
              <td class="px-4 py-3 border">
                <div class="flex items-center text-sm">
                  <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <a href="{{route('producto.show', $producto)}}"><p class="font-semibold text-black"> {{$producto->nombre}} </p></a>                    
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-ms font-semibold border">{{$producto->precio}}</td>
              @foreach ($categorias as $categoria)
              @if ($producto->categoria_id == $categoria->id)
              <td class="px-4 py-3 text-xs border">
                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$categoria->nombre}} </span>
              </td>                                                  
              @endif
              @endforeach
              <td class="px-4 py-3 text-ms font-semibold border">
                <a href=" {{route('producto.edit', $producto)}} " class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Editar</a>
                <form action="{{ route('producto.destroy', $producto) }}" method="POST">
                  @csrf @method('DELETE')
                  <button class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300">Eliminar</button>
                </form>
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