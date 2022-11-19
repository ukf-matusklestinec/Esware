<x-layout>

    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <form method="POST" action="/profilstudentedit/{{$users->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Meno</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                       value="{{$users->name}}" />

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

                <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Upraviť
                </button>

                <a href="/profilstudent" class="text-black ml-4"> sss </a>
            </div>
            </div>
            </form>
</x-layout>