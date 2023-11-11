<x-admin-layout>
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endpush
    <h1 class="text-3xl font-semibold mb-2">
        editar Articulo
    </h1>
    <form action="{{route('admin.post.update', $post)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6 relative">

            <figure>
                <img class="aspect-[16/9] object-cover object-center w-full" src="{{ $post->image }}" alt=""
                    id="imgPreview">
            </figure>

            <div class="absolute top-8 right-8">

                <label class="bg-white px-4 py-2 rounded-lg cursor-pointer">

                    <i class="fa-solid fa-camera mr-2"></i>

                    Actualizar imagen
                    <input type="file" accept="image/*" name="image" class="hidden"
                        onchange="previewImage(event, '#imgPreview')">
                </label>

            </div>

        </div>
        <br><br>
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Título:</label>
        <input
        name="title"
        value="{{ old('title', $post->title) }}"
        x-model="title"
        type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="title" name="title" placeholder="Introduce el título" required>
        <br><br>
        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Slug:</label>
        <input
        name="slug"
        value="{{ old('slug', $post->slug) }}"
        x-model="slug"
        type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="slug" name="slug" placeholder="introduce-el-slug" required>
        <br><br>
        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">Categoría:</label>
        <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>

            @foreach ($categories as $category)
                    <option @selected(old('category_id', $post->category_id) == $category->id) value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
            @endforeach
        </select>
        <br><br>
        <label for="excerpt" class="block mb-2 text-sm font-medium text-gray-900">Resumen:</label>
        <textarea
        name="excerpt"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="excerpt" name="excerpt" rows="3" required>
            {{ old('excerpt', $post->excerpt) }}</textarea>
        <br><br>
        <div class="mb-4">
            <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Etiquetas:</label>

            <select class="tag-multiple" name="tags[]" multiple="multiple" style="width: 100%">

                {{-- @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" --}}
                        {{-- @selected($post->tags->contains($tag->id)) --}}
                        {{-- @selected(collect(old('tags', $post->tags->pluck('id')) )->contains($tag->id))
                        >
                        {{ $tag->name }}
                    </option>
                @endforeach --}}
                @foreach ($post->tags as $tag)
                    <option value="{{ $tag->name }}" selected>
                        {{ $tag->name }}
                    </option>
                @endforeach

            </select>
        </div>
        <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Cuerpo:</label>
        <textarea
        name="body"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="body" name="body" rows="5" required>{{ old('body', $post->body) }}</textarea>
        <br><br>
                <div class="mb-4">

            <input type="hidden" name="published" value="0">

            <label class="relative inline-flex items-center cursor-pointer">
                <input name="published" type="checkbox" value="1" class="sr-only peer"
                    @checked(old('published', $post->published) == 1)>
                <div
                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                </div>
                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Publicar</span>
            </label>

        </div>
        <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
        font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Actualizar</button>
    </form>
    <br><br>
    <button
    onclick="deletePost()"
    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">
     Eliminar</button>
    <form
    id="formDelete"
    action="{{route('admin.post.destroy',$post)}}" method="post">
        @csrf
        @method('DELETE')
    </form>
    @push('js')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
              $(document).ready(function() {
                $('.tag-multiple').select2({
                    tags: true,
                    tokenSeparators: [',', ' '],
                    ajax: {
                        url: "{{ route('api.tags.index') }}",
                        dataType: 'json',
                        delay: 250,
                        data: function(params) {
                            return {
                                term: params.term
                            }
                        },
                        processResults: function(data) {
                            return {
                                results: data
                            }
                        },
                    }
                });
            });
        </script>
        <script>
            function previewImage(event, querySelector) {

                //Recuperamos el input que desencadeno la acción
                const input = event.target;

                //Recuperamos la etiqueta img donde cargaremos la imagen
                $imgPreview = document.querySelector(querySelector);

                // Verificamos si existe una imagen seleccionada
                if (!input.files.length) return

                //Recuperamos el archivo subido
                file = input.files[0];

                //Creamos la url
                objectURL = URL.createObjectURL(file);

                //Modificamos el atributo src de la etiqueta img
                $imgPreview.src = objectURL;

                }
        </script>
        <script>

            function deletePost(){
                let form = document.getElementById('formDelete');
                form.submit();
            }
        </script>
    @endpush
</x-admin-layout>
