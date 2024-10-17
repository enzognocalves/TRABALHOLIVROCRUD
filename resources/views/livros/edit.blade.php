@extends('layouts.app')

@section('slot')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">Editar Livro</h1>

                    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="titulo" class="block text-gray-700 dark:text-gray-200">Título</label>
                            <input type="text" name="titulo" id="titulo" value="{{ old('titulo', $livro->titulo) }}" class="w-full border-gray-300 rounded-lg dark:bg-gray-700">
                        </div>

                        <div class="mb-4">
                            <label for="autor" class="block text-gray-700 dark:text-gray-200">Autor</label>
                            <input type="text" name="autor" id="autor" value="{{ old('autor', $livro->autor) }}" class="w-full border-gray-300 rounded-lg dark:bg-gray-700">
                        </div>

                        <div class="mb-4">
                            <label for="isbn" class="block text-gray-700 dark:text-gray-200">ISBN</label>
                            <input type="text" name="isbn" id="isbn" value="{{ old('isbn', $livro->isbn) }}" class="w-full border-gray-300 rounded-lg dark:bg-gray-700">
                        </div>

                        <div class="mb-4">
                            <label for="editora" class="block text-gray-700 dark:text-gray-200">Editora</label>
                            <input type="text" name="editora" id="editora" value="{{ old('editora', $livro->editora) }}" class="w-full border-gray-300 rounded-lg dark:bg-gray-700">
                        </div>

                        <div class="mb-4">
                            <label for="ano_publicacao" class="block text-gray-700 dark:text-gray-200">Ano de Publicação</label>
                            <input type="number" name="ano_publicacao" id="ano_publicacao" value="{{ old('ano_publicacao', $livro->ano_publicacao) }}" class="w-full border-gray-300 rounded-lg dark:bg-gray-700">
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Atualizar Livro
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
