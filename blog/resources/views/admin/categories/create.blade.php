<x-admin-layout>
    <form action="{{route('admin.categories.store')}}" method="POST"
    class="bg-white rounded-lg p-6 shadow-lg"
    >
    @csrf
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nombre: </label>
    <input
    name="name"
    type="text"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="nombre de categoria" required>
    <br><br>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Guardar</button>
</form>
</x-admin-layout>
