<x-admin-layout>
    <form action="{{route('admin.categories.update',$category)}}" method="POST"
    class="bg-white rounded-lg p-6 shadow-lg"
    >
        @csrf
        @method('PUT')
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nombre: </label>
        <input
        name="name"
        value="{{$category->name}}"
        type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="nombre de categoria" required>
        <br><br>


        <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
        font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
        Actualizar</button>
    </form>
    <button
    onclick="deleteCategory()"
    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">
     Eliminar</button>
    <form
    id="formDelete"
    action="{{route('admin.categories.destroy',$category)}}" method="post">
        @csrf
        @method('DELETE')
    </form>
    @push('js')
        <script>
            function deleteCategory(){
                let form = document.getElementById('formDelete');
                form.submit();
            }
        </script>
    @endpush
</x-admin-layout>
