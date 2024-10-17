@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Adicionar Novo Livro</h1>

                    <form action="{{ route('livros.store') }}" method="POST">
                        @csrf
                        <div class="space-y-4">
                            @foreach ([
                                ['name' => 'titulo', 'label' => 'Título', 'type' => 'text'],
                                ['name' => 'autor', 'label' => 'Autor', 'type' => 'text'],
                                ['name' => 'isbn', 'label' => 'ISBN', 'type' => 'text'],
                                ['name' => 'editora', 'label' => 'Editora', 'type' => 'text'],
                                ['name' => 'ano_publicacao', 'label' => 'Ano de Publicação', 'type' => 'number'],
                            ] as $field)
                                <div class="mb-4">
                                    <label for="{{ $field['name'] }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                        {{ $field['label'] }}:
                                    </label>
                                    <input 
                                        type="{{ $field['type'] }}" 
                                        name="{{ $field['name'] }}" 
                                        id="{{ $field['name'] }}" 
                                        required 
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                    >
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Adicionar Livro
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
