<x-app-layout>
    <br>
    <div class="flex justify-center">
        <div class="container mx-auto px-4 py-8">
            <h1 class="max-w-lg text-3xl  leading-relaxed text-gray-900 font-bold mb-4">{{ $post->title }}</h1>
            @if ($post->image_path)
                <img
                src="{{ asset('storage/images/' . $post->image_path) }}"
                alt="{{ $post->title }}"
                class="aspect-[16/9]  max-w-lg rounded-lg object-cover object-center w-full h-auto mb-4">
            @endif
            <div class="mb-4">
                <span class="text-gray-600">Por: {{ $post->user->name }}</span> <!-- Asumiendo que tienes una relación con User -->
                <span class="text-gray-600">Categoría: {{ $post->category->name }}</span> <!-- Asumiendo que tienes una relación con Category -->
            </div>
            <p class="text-teal-600 italic text-lg">{{ $post->excerpt }}</p>
            <div class="prose max-w-none mt-4">
                {!! $post->body !!} <!-- Asegúrate de escapar o sanear el contenido si es necesario -->
            </div>
        </div>
    </div>

</x-app-layout>
