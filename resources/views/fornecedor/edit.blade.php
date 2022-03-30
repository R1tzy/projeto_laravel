<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script> 
    <x-slot name="header">
        Editar Fornecedores
    </x-slot>
    <div class="bg-gray-800 p-[20px] font-['Arial'] text-[16px]">
        <form action="{{route('Fornecedor.update', $fornecedor->id)}}" method="POST">
            @csrf
            @method("Patch")
            <div class="mb-[10px] basis-1">
                <x-label class="text-[#fff]">Informe o nome</x-label>
                <x-input name="nome" class="mt-[5px] w-[200px] h-[30px] pl-[0]" placeholder="Empresa Kabum" value="{{$fornecedor->nome}}"></x-input>

                <x-label class="text-[#fff]">Informe o nome fantasia</x-label>
                <x-input name="fantasia" class="mt-[5px] w-[200px] h-[30px] pl-[0]" placeholder="Kabum" value="{{$fornecedor->fantasia}}"></x-input>

                <x-label class="text-[#fff]">Informe o cnpj</x-label>
                <x-input name="cnpj" class="mt-[5px] w-[200px] h-[30px] pl-[0]" type="text" pattern="[0-9]{14}" placeholder="99345869000135" value="{{$fornecedor->cnpj}}"></x-input>

                <x-label class="text-[#fff]">Informe o Endereço</x-label>
                <x-input name="endereco" class="mt-[5px] w-[200px] h-[30px] pl-[0]" placeholder="Rua Osvaldo 1261" value="{{$fornecedor->endereco}}"></x-input>

                <x-label class="text-[#fff]">Informe o Telefone</x-label>
                <x-input name="telefone" class="mt-[5px] w-[200px] h-[30px] pl-[0]" type="tel" pattern="[0-9]{9}" placeholder="988294370" value="{{$fornecedor->telefone}}"></x-input>

                <x-label class="text-[#fff]">Informe a Área de Atuação</x-label>
                <select name="atuacao" class="mt-[5px] w-[200px] h-[30px] pl-[0]">
                    <option value="{{$fornecedor->atuacao}}" selected disabled="disabled">{{$fornecedor->atuacao}}</option>
                    <option value="Eletrônico">Eletrônico</option>
                    <option value="Comércio">Comércio</option>
                    <option value="Alimentício">Alimentício</option>
                    <option value="Matéria-Prima">Matéria-Prima</option>
                    <option value="Saúde">Saúde</option>
                </select>

                <x-label class="text-[#fff]">Informe o UF</x-label>
                <select name="uf" class="mt-[5px] w-[200px] h-[30px] pl-[0]">
                    <option value="{{$fornecedor->uf}}" selected disabled="disabled">{{$fornecedor->atuacao}}</option>
                    <option value="AC" selected>Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espirito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
            <div>
                <x-button class="bg-gray-400 text-[white] rounded-[5px] border-none outline-none">Alterar</x-button>
            </div>
        </form>
    </div>
</x-app-layout>