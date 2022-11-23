<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Zmeniť ponuku</h2>
            <p class="mb-4">Edit: {{ $listing->title }}</p>
        </header>

        <form method="POST" action="/listings/{{ $listing->id }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Názov firmy</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                    value="{{ $listing->company }}" />

                @error('company')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Názov práce</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Napríklad: Senior Laravel Developer" value="{{ $listing->title }}" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Adresa</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Napríklad: Levice, Streda nad Bodrogom, Poprad" value="{{ $listing->location }}" />

                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    Email pre kontakt
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ $listing->email }}" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Webstránka URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                    value="{{ $listing->website }}" />

                @error('website')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- vloženie tagov podľa autorovho uváženia --}}
            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tagy (Čiarkou oddelene)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Napríklad: Laravel, Backend, Postgres, etc" value="{{ $listing->tags }}" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- autor ponuky môže vložiť obrázok ponuky, ak si nič nezvolí bude vložené logo UKF --}}
            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Logo firmy
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

                <img class="w-48 mr-6 mb-6"
                    src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-imageUKF.png') }}"
                    alt="" />

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Náplň práce
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Popis práce, pracovná doba, plat atď.">{{ $listing->description }}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Upraviť ponuku
                </button>

                <a href="/listings/manage" class="text-black ml-4"> Naspäť </a>
            </div>
        </form>
    </x-card>
</x-layout>

{{-- slúži ako šablona na úpravu ponúk praxí  --}}
