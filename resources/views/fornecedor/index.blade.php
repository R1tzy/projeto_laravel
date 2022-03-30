<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script> 
    <x-slot name="header">
        Todos os Fornecedores
    </x-slot>
    <div class="bg-zinc-700 text-center text-[white] font-[Arial]  text-[20px] p-[10px]">
        Resultados
    </div>
    @if(isset($fornecedor))
        @foreach($fornecedor as $f)
            <div class="bg-zinc-500 p-[10px] text-[white] text-center text-[17px]">
                <div class="mt-[5px">
                    <p>Nome: {{$f->nome}}</p>
                    <p>Nome Fantasia: {{$f->fantasia}}</p>
                    <p>Cnpj: {{$f->cnpj}}</p>
                    <p>Endereço: {{$f->endereco}}</p>
                    <p>Telefone: {{$f->telefone}}</p>
                    <p>Atuação: {{$f->atuacao}}</p>
                    <p>UF: {{$f->uf}}</p>
                </div>    
                <form action="{{route('Fornecedor.destroy', $f->id)}}" method="POST">
                    @csrf
                    @method("Delete")
                    <x-button>Excluir</x-button>
                    <x-button>
                    <a href="{{route('Fornecedor.edit', $f->id)}}">
                        Alterar
                    </a>
                    </x-button>
                </form>           
            </div>    
        @endforeach
    @endif
    <div class="bg-zinc-300 pb-[15px]">
        <x-button class="mt-5 ml-[10px]">
            <a href="{{route('Fornecedor.create')}}">
                Criar Fornecedor
            </a>
        </x-button>
    </div>
</x-app-layout>