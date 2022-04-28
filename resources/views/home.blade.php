@extends('posts.twets')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Bem vindo a HomePage') }}
        </h2>

        
    </x-slot>
    <!--trecho do js exibe a aba de tweet--> 

    <div class="">
        <button type="button" aria-label="Clique para fechar"
            class="btn btn-primary btn-lg bg-blue-400 rounded-lg absolute right-10 bottom-10 " data-toggle="modal"
            data-target="#myModal">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                    clip-rule="evenodd" />
            </svg>
        </button>



        <div class="max-w-full mx-auto  lg:px-5">






            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body ">
                            <div class="max-w-full mx-auto lg:px-5 ">



                                <div class="p-6 absolute rounded-lg shadow-md shadow-indigo-400 bg-cyan-400  right-10 bottom-24">




                                    <form method="POST" action="/twet">
                                        @csrf

                                        <textarea name="body" id="body" class="w-full" placeholder="tweet aqui ó" style="border-radius: 20px" required
                                            autofocus></textarea>


                                        <hr class="my-4">



                                        <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow  text-sm  h-5 w-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <input type='file' id="image" name="image" />



                                    </form>


                                    

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!--fim do trecho-->

</x-app-layout>
