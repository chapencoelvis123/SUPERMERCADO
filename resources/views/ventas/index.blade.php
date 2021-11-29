<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Ventas
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <!-- component -->
<section class="container mx-auto p-6 font-mono">
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <th class="px-4 py-3">Cantidad</th>
            <th class="px-4 py-3">Precio Total</th>
            <th class="px-4 py-3">Producto</th>
            <th class="px-4 py-3">Usuario</th>
          </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($ventas as $venta)                        
          <tr class="text-gray-700">
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <p class="font-semibold text-black">{{$venta->cantidad}}</p>                    
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-ms font-semibold border">{{$venta->precio_total}}</td>
            @foreach ($productos as $producto)
            @if ($venta->producto_id == $producto->id)
            <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$producto->nombre}} </span>
            </td>                                                  
            @endif
            @endforeach
            @foreach ($users as $user)
            @if ($venta->user_id == $user->id)
            <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$user->name}} </span>
            </td>                                                  
            @endif
            @endforeach
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