<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script> 
    <x-slot name="header">
        Categorias
    </x-slot>
    <div class="bg-gray-800 p-[20px] font-['Arial'] text-[16px]">
        <form action="{{route('Categoria.store')}}" method="POST">
            @csrf
            <div class="mb-[10px] basis-1">
                <x-label class="text-[#fff]">Informe a descrição</x-label>
                <x-input name="descricao" class="mt-[5px]"></x-input>
            </div>
            <div>
                <x-button class="bg-gray-400 text-[white] rounded-[5px] border-none outline-none">Salvar</x-button>
            </div>
        </form>
    </div>
</x-app-layout>