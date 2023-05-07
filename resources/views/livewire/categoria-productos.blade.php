<div>
    <div class="glider-contain">
        <ul class="glider">
            @foreach ($categoria->productos as $producto)
                <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'mr-4'}}">
                    <article>
                        
                        <figure>
                            <img src="{{ $producto->images->first() ? Storage::url($producto->images->first()->url) : '' }}"
                                alt="">
    
                        </figure>
                        <div class="py-4 px-6">
                            <h1 class="text-lg font-semibold">
                                <a href="">
                                    {{ Str::limit($producto->nombre,20) }}
                                </a>
                                
                                <p class="font-bold text-gray-600">US$ {{$producto->precio}}</p>
                            </h1>
                        </div>
                    </article>
                    
                </li>
            @endforeach


        </ul>

        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
</div>
