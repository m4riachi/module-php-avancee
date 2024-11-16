@extends('layout/app')

@section('content')
    <div class="p-10">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Header with actions -->
            <div class="p-6 bg-gray-50 border-b flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800">Détails de l'Article</h1>
                <div class="space-x-2">
                    <a
                        href="{{ route('articles.edit', $article->id) }}"
                        class="inline-flex items-center px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white font-bold rounded transition duration-150 ease-in-out"
                    >
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Modifier
                    </a>
                </div>
            </div>

            <!-- Article details -->
            <div class="p-6">
                <div class="grid grid-cols-1 gap-6">
                    <!-- Name section -->
                    <div>
                        <h2 class="text-sm font-medium text-gray-500">Nom</h2>
                        <p class="mt-1 text-lg text-gray-900">{{ $article->name }}</p>
                    </div>

                    <!-- Price section -->
                    <div>
                        <h2 class="text-sm font-medium text-gray-500">Prix</h2>
                        <p class="mt-1 text-lg text-gray-900 font-semibold">
                            {{ number_format($article->price, 2, ',', ' ') }} €
                        </p>
                    </div>

                    <!-- Metadata section -->
                    <div class="border-t pt-4">
                        <div class="grid grid-cols-2 gap-4 text-sm text-gray-500">
                            <div>
                                <p>Créé le:</p>
                                <p class="text-gray-900">{{ $article->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                            <div>
                                <p>Dernière modification:</p>
                                <p class="text-gray-900">{{ $article->updated_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="px-6 py-4 bg-gray-50 border-t">
                <a
                    href="{{ route('articles.index') }}"
                    class="inline-flex items-center text-gray-600 hover:text-gray-800"
                >
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Retour à la liste
                </a>
            </div>
        </div>
    </div>
@endsection
