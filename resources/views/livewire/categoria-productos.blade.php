{{-- luego de haber mostrado todo lo de abajo quiero que me ejecutes un metodo del componente --}}
<div wire:init="loadPosts">
    @if (count($productos))
        <div class="glider-contain">
            <ul class="glider-{{$categoria->id}}">
                @foreach ($productos as $producto)
                    <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'mr-4' }}">
                        <article>

                            <figure>
                                <img  class="h-48 w-56 object-cover object-center" src="{{ $producto->images->first() ? Storage::url($producto->images->first()->url) : '' }}"
                                    alt="">

                            </figure>
                            <div class="py-4 px-6">
                                <h1 class="text-lg font-semibold">
                                    <a href="" style="text-decoration: none;">
                                        {{ Str::limit($producto->nombre, 20) }}
                                    </a>

                                    <p class="font-bold text-gray-600">US$ {{ $producto->precio }}</p>
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
    @else
    {{-- spinner que muestra cuando la imagen esta cargando --}}
    <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl">

        <svg class="rounded animate-spin ease duration-300 w-10 h-10 " fill="none" height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M4 24C4 35.0457 12.9543 44 24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4" stroke="#34d399" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/></svg>

        <h1 class="text-lg font-semibold py-4 px-6 text-emerald-400">Cargando...</h1>

    </div>
    @endif

</div>
