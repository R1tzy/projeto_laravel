<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script> 
    <x-slot name="header">
        Todas as Categorias
    </x-slot>
    <div class="bg-zinc-700 text-center text-[white] font-[Arial]  text-[20px] p-[10px]">
        Resultados
    </div>
    @if(isset($categorias))
        @foreach($categorias as $c)
            <div class="bg-zinc-500 p-[10px] text-[white] text-center text-[17px]">
               
                <div class="mt-[5px">
                    {{$c->descricao}} 
                </div>    
                <form action="{{route('Categoria.destroy', $c->id)}}" method="POST">
                    @csrf
                    @method("Delete")
                    <x-button>Excluir</x-button>
                    <x-button>
                    <a href="{{route('Categoria.edit', $c->id)}}">
                        Alterar
                    </a>
                    </x-button>
                </form>           
            </div>    
        @endforeach
    @endif
    <div class="bg-zinc-300 pb-[15px]">
        <x-button class="mt-5 ml-[10px]">
            <a href="{{route('Categoria.create')}}">
                Criar Categoria
            </a>
        </x-button>
    </div>
</x-app-layout>