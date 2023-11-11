<x-admin-layout>
    <h1 class="text-3xl font-semibold mb-2">
        Nuevo Articulo
    </h1>
    <form action="{{route('admin.post.store')}}" method="POST"
    x-data="data()"
    x-init="$watch('title', value => {string_to_slug(value)})">
        @csrf
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Título:</label>
        <input
        x-model="title"
        type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="title" name="title" placeholder="Introduce el título" required>
        <br><br>
        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Slug:</label>
        <input
        x-model="slug"
        type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="slug" name="slug" placeholder="introduce-el-slug" required>
        <br><br>
{{--


        <label for="excerpt" class="block mb-2 text-sm font-medium text-gray-900">Extracto:</label>
        <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="excerpt" name="excerpt" rows="3" required></textarea>
        <br><br>

        <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Cuerpo:</label>
        <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="body" name="body" rows="5" required></textarea>
        <br><br>

        <label for="image_path" class="block mb-2 text-sm font-medium text-gray-900">Ruta de la Imagen:</label>
        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="image_path" name="image_path" placeholder="ruta/de/la/imagen.jpg">
        <br><br>

        <label for="published" class="block mb-2 text-sm font-medium text-gray-900">Publicado:</label>
        <input type="checkbox" class="rounded text-blue-600" id="published" name="published">
        <br><br> --}}

        <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">Categoría:</label>
        <select id="category_id" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>

            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br><br>

        {{-- <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900">ID de Usuario:</label>
        <input type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" id="user_id" name="user_id" required>
        <br><br> --}}

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Guardar</button>
    </form>
    @push('js')
        <script>
            function data(){
                return {
                    title: '',
                    slug: '',
                    string_to_slug(str){
                        str = str.replace(/^\s+|\s+$/g, '');
                        str = str.toLowerCase();
                        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
                        var to = "aaaaeeeeiiiioooouuuunc------";
                        for (var i = 0, l = from.length; i < l; i++) {
                            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                        }
                        str = str.replace(/[^a-z0-9 -]/g, '')
                            .replace(/\s+/g, '-')
                            .replace(/-+/g, '-');
                        this.slug = str;
                    }
                }
            }
        </script>
    @endpush
</x-admin-layout>
