<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    --> <div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
                        <form method="POST" action="/twet">
                            @csrf

                            <textarea name="body" class="w-full" placeholder="What's up doc?" style="border-radius: 20px" required
                                autofocus></textarea>

                            <hr class="my-4">

                            <footer class="flex justify-between items-center">

                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10">
                                    Publish
                                </button>
                            </footer>
                        </form>



                    --></div>
                    



                    @can('user')
                        Oque está acontecendo?
                    @elsecan('admin')
                        Somente o administrador pode ler isso<br />
                        Aqui sera exibido as publicacões de todos usuarios
                    @endcan


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
