<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' ') }}
        </h2>
    </x-slot>

   
                      

                    <form method="POST" action="/edicao-perfil">
                        @csrf
                            <label for="">Escolha a imagem de perfil</label>
                            <input type='file' id="image" name="image" />

                        <div>
                            <input type="text" placeholder="Nome">
                            <input type="text" placeholder="numero">
                            <input type="text" placeholder="escolaridade">
                            <input type="date" placeholder="nascimento">
                           

                        </div>
                        

                    </form





     >
</x-app-layout>
