<x-auxi>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">

        @foreach ($categorias as $categoria)
            <section class="mb-10">

                <h1 class="text-lg uppercase font-semibold text-gray-700">
                    {{ $categoria->nombre }}
                </h1>
                @livewire('categoria-productos', ['categoria' => $categoria])
            </section>
        @endforeach

    </div>


    {{-- se coloca el mismo nombre que esta en este caso en el componente auxi ->stack(script) 
        de esa manera el script se colocara justo donde esta el stack (justo antes de cerrar el body) --}}
    @push('script')
        <script>
            Livewire.on('glider', function(id) {


                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 5.5,
                    slidesToScroll: 5,
                    draggable: true,
                    dots: '.glider-' + id +'~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    }
                });
            });
        </script>
    @endpush

</x-auxi>
