<x-app-layout>
  <style>
      .juice {
          background-image: url('https://i.ibb.co/SN2Sp4T/juice.png');
      }
  
      .juice2 {
        background-image: url('https://i.ibb.co/yyMXMSF/juice2.png');
      }
   
      .juice3 {
        z-index: 10;
        position: relative;
      }
   
      .juice3::after {
        content: '';
        position: absolute;
        opacity: .2;
        z-index: -999;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-image: url('https://previews.123rf.com/images/olgasiv/olgasiv1403/olgasiv140300026/27343111-image-en-noir-sur-un-fond-blanc-dessin-de-l%C3%A9gumes-de-fruits-et-de-baies-.jpg');
      }
  
      .text-primary {
          color: #f9b529;
      }
  
      .text-primary-lite {
          color: #fac251;
      }
  
      .text-secondary {
          color: #294356;
      }
  
      .text-secondary-lite {
          color: #d5dee5;
      }
  
      .bg-primary {
          background-color: #f9b529;
      }
  
      .bg-primary-lite {
          background-color: #fac251;
      }
  
      .bg-secondary {
          background-color: #294356;
      }
  
      .bg-secondary-lite {
          background-color: #d5dee5;
      }
  
      .product {
        background-image: url('https://i.ibb.co/L00dH6V/2021-11-07-14h07-51.png');
      }
      .product2 {
        background-image: url('https://i.ibb.co/1fZMKPh/2021-11-07-14h08-07.png');
      }
      .product3 {
        background-image: url('https://i.ibb.co/f9tpvV3/2021-11-07-14h08-32.png');
      }
      .product4 {
        background-image: url('https://i.ibb.co/42BsKQ2/2021-11-07-14h08-17.png');
      }
  </style>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="container">                    
                  <div class="min-h-screen bg-white">                    
                      
                    @include('_partials.flash-message')

                    <!-- body -->
                    <main>
                        
                      <section class="juice3 bg-gray-100 bg-opacity-90 py-10">
                        <div class="container mx-auto px-4 flex flex-col lg:flex-row">
                          
                          @if (!empty($productos))
                            @foreach ($productos as $producto)                                                        
                                <div class="juice2 mt-6 lg:mt-0 lg:ml-6 lg:w-1/3 rounded-xl bg-primary-lite bg-cover p-8 md:p-16">
                                  <div class="max-w-sm">
                                    <p class="text-3xl md:text-4xl font-semibold uppercase">{{$producto->nombre}}</p>
                                    <p class="text-xl mt-8 font-bold">Precio: <br /> <span class="font-semibold">Bs. {{$producto->precio}}</span></p>
                                    <p class="text-xl mt-8 font-bold">Cantidad: <br /> 
                                    
                                      <form action="{{route('tiendas.store')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="producto_id" value="{{$producto->id}}">
                                        <input type="hidden" name="precio" value="{{$producto->precio}}">
                                        <input name="cantidad" type="number"  min="1" pattern="^[0-9]+" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        @error('cantidad')
                                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                            role="alert">
                                            <span class="block sm:inline">{{$message}}</span>
                                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                                <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <title>Close</title>
                                                    <path
                                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                                </svg>
                                            </span>
                                        </div>
                                        @enderror
                                      </p>
                                      <p class="text-xl mt-8 font-bold">Categoria: <br /><span
                                        class="inline-flex items-center justify-center px-2 py-1 font-semibold leading-none text-white bg-blue-400 rounded-full
                                        ">{{$producto->categoria->nombre}}</span
                                      ></p>
                                      <br>
                                      <button type="submit" class="mt-20 bg-white font-semibold px-8 py-2 rounded">Realizar Pedido</button>
                                      </form>


                                  </div>
                                </div>                            
                            @endforeach
                          @else                                                                      
                            <p class="text-xl text-center mt-8 font-bold">No existen productos. Pronto se cargarán los productos</p>                            
                          @endif
                        </div>
                  
                      </section>                

                    </main>
                  </div>        
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
