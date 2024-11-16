@extends('layout/app')

@section('content')
    <div class="p-10">
        @session('success')
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endsession
        <h1 class="text-3xl text-blue-500 mb-8">List des Articles</h1>
        <a href="{{ route('articles.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-8">Créer un
            article</a>
        <ul class="mt-8">
            @foreach ($articles as $index => $article)
                <li class="flex items-center justify-between p-2 {{$index % 2 === 0 ? 'bg-gray-200' : ''}}">
                    <a href="{{ route('articles.edit', $article->id) }}"
                       class="text-blue-500 underline">{{ $article->name }}</a>
                    <div class="flex gap-x-8">
                        <a href="{{ route('articles.edit', $article->id) }}"
                           class="bg-yellow-500 text-white px-4 py-2 rounded">Modifier</a>
                        <button onclick="confirmDelete({{$article->id}})"
                                class="bg-red-500 text-white px-4 py-2 rounded">Supprimer
                        </button>
                    </div>
                </li>
            @endforeach
        </ul>

        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')

        </form>
        <script>
            function confirmDelete(id) {
                if (confirm('Voulez-vous vraiment supprimer cet article ?')) {
                    document.getElementById('deleteForm').action = '/articles/' + id;
                    document.getElementById('deleteForm').submit();
                }
            }
        </script>
    </div>
@endsection
