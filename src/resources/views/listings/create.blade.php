<x-layout>

    <a href="javascript:history.back()"
        class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center" style="width: 80px;"><i
            class="fa-solid fa-arrow-left"></i> Naspäť
    </a>

    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Vytvorte ponuku práce</h2>
            <p class="mb-4"> </p>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Názov firmy</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                    value="{{ old('company') }}" />

                @error('company')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Názov prace</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Napríklad: Senior Laravel Developer" value="{{ old('title') }}" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Adresa</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Napríklad: Levice, Streda nad Bodrogom, Poprad" value="{{ old('location') }}" />

                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    Email
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ old('email') }}" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Webstránka URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                    value="{{ old('website') }}" />

                @error('website')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tagy (Čiarkou oddelene)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Napríklad: Laravel, Backend, Postgres, atď" value="{{ old('tags') }}" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Logo firmy
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Náplň práce
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Popis práce, pracovná doba, plat atď.">{{ old('description') }}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Vytvoriť ponuku
                </button>

                <a href="/" class="text-black ml-4"> Naspäť </a>
            </div>
        </form>
    </x-card>
</x-layout>


{{-- vytvorenie ponuky na zamestnanie --}}
