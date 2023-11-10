<x-admin-layout>
<div class="flex justify-end mb-4">
    <a href="{{route('admin.categories.create')}}"
    class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py2.5 mr-2 mb-2"
    >Nuevo</a>
</div>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">

                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr class="bg-white border-b">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                   {{$category->id}}
                </th>
                <td class="px-6 py-4">
                {{$category->name}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('admin.categories.edit',$category)}}">Editar</a>
                </td>

            </tr>
            @endforeach


        </tbody>
    </table>
</div>
<div  class="mt-4">
    {{$categories -> links()}}
</div>
</x-admin-layout>
