
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' criar posts') }}
        </h2>

        
    </x-slot>

    <div class="pt-5 ">
        <?php foreach ($posts as $key => $value): ?>
        <div class="max-w-full mx-auto lg:px-5">
            <div class="bg-white overflow-hidden shadow-md shadow-indigo-400 sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    
                    <div class=" flex ">
    
                        <a href=""> <img class="ring-2 ring-blue-500 ring-offset-4 rounded-full w-16 h-16 "
                                src="{{ asset('site/img/eyes.jpeg') }}" />
                        </a>
                        <!-- onde vai ser chamada a imagem que o usuario tem como de perfil -->
    
                        <div class="pl-10">
                            <h3>{!! $value->body !!}</h3>
                            <span class="pull-right"> {!! $value->created_at->diffForHumans() !!}</span>
                        </div>
    
    
                        <form action="" method="" class="absolute right-8 hover:text-rose-700">
    
                            <button type="submit">Excluir</button>
    
                        </form>
                    </div>
    
                    <div class="static font-normal hover:font-bold">
                        <a href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                    </div>
    
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</x-app-layout>

