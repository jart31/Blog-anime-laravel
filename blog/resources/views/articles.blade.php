<x-app-layout>
    <div class="container mx-auto px-4">
        <h1 class="text-xl font-bold mb-4">Artículos</h1>
        <ul class="space-y-8">
            @foreach ($articles as $article)
                <li class="grid grid-cols-2 gap-4">
                    <div class="w-1/2">
                        <!-- Aquí puedes enlazar a una vista de detalle del artículo si existe -->
                        <a href="{{ route('posts.show', $article) }}">
                            <img class="aspect-[16/9] object-cover object-center w-full" src="{{ asset('storage/images/' . $article->image_path) }}" alt="{{ $article->title }}">
                        </a>
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold">
                            {{ $article->title }}
                        </h2>
                        <hr class="mt-1 mb-2">
                        <p class="text-gray-700 mt-2">
                            {{ $article->excerpt }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="mt-4">
            {{ $articles->links() }} <!-- Paginación -->
        </div>
    </div>
</x-app-layout>
