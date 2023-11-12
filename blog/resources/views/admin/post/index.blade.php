<x-admin-layout>
    <div class="flex justify-end mb-4">
        <a href="{{route('admin.post.create')}}"
        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py2.5 mr-2 mb-2"
        >Nuevo</a>
    </div>
    <ul class="space-y-8">
        @foreach ($post as $post1)
            <li class="grid grid-cols-2 gap-4">
                <div>
                    <a href="{{route('admin.post.edit', $post1)}}">
                        <img class="aspect-[16/9] object-cover object-center w-full" src="{{ asset('storage/images/' . $post1->image_path) }}" alt="">
                    </a>
                </div>
                <div>
                    <h1 class="text-xl font-semibold">
                        {{$post1->title}}
                    </h1>
                    <hr class="mt-1 mb-2">
                    <span @class([
                        'bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300' => $post1->published,
                        'bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300' => ! $post1->published

                        ])>
                        {{$post1->published ? 'publicado':'borrador'}}
                    </span>
                    <p class="text-gray-700 mt-2">
                        {{$post1->excerpt}}
                    </p>
                    <div class="flex justify-end mt-4">
                        <a href="{{route('admin.post.edit',$post1)}}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">
                        Editar
                        </a>
                    </div>
                </div>
            </li>
        @endforeach

    </ul>
    <div class="mt-4">
        {{$post -> links()}}

    </div>
</x-admin-layout>
