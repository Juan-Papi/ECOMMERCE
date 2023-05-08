<x-auxi>

    <div class="max-w-7xl mx-auto p-6 lg:p-8 py-8">
    
        <div class="grid grid-cols-2 gap-6">
            {{-- estos dos seran nuestras columnas --}}
            {{-- columna1 --}}
            <div>
                {{-- aqui va el Slider --}}
                <div class="flexslider">
                    <ul class="slides">
                        @foreach ($producto->images as $imagen)
                        <li data-thumb="{{Storage::url($imagen->url)}}">
                            <img src="{{Storage::url($imagen->url)}}" />
                        </li> 
                        @endforeach
                                          
                    </ul>
                </div>
            </div>
            {{-- columna2 --}}
            <div>
               <h1 class="text-xl font-bold text-gray-500">{{$producto->nombre}}</h1>
               <div class="flex">
                      <p class="text-orange-500">Editorial: {{$producto->marca->nombre}}</p>
               </div>
               <p class="text-gray-700">USD {{$producto->precio}}</p>
            </div>
            @livewire('add-cart-item', ['producto' => $producto])
        </div>
    </div>
    @push('script')
        <script>
            $(document).ready(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails"
                });
            });
        </script>
    @endpush

</x-auxi>
