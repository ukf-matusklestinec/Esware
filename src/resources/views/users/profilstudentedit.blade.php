<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>profilstudentedit</title>
    </head>

    <body>
        <div class="container">
            <div class="jumbotron">
                <form action="/update/{{ auth()->user()->id }}" method="post">
                    {{ csrf_field()}}

                  
                    <div class="form-group">
                        <label>Meno</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ auth()->user()->name }}" aria-describedby="emailHelp"
                        placeholder="Meno">
                    </div> 

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ auth()->user()->email }}" aria-describedby="emailHelp"
                        placeholder="Email">
                    </div> 

                    <div class="form-group">
                        <label>Heslo</label>
                        <input type="password" class="form-control" name="password" id="password" value="{{ auth()->user()->password }}" aria-describedby="emailHelp"
                        placeholder="Heslo">
                    </div> 

                    <div class="form-group">
                        <label>Tel cislo</label>
                        <input type="text" class="form-control" name="tel_cislo" id="tel_cislo" value="{{ auth()->user()->tel_cislo }}" aria-describedby="emailHelp"
                        placeholder="0906 666 666">
                    </div> 
                    <button type="submit" name="submit" class="btn btn-primary" style="width: 50%;">UPDATE</button>
                </form>
            </div>
        </div>
    </body>
</html>






{{--<x-layout>

    <a href="/profilstudent" class="ml-6 block bg-blue-600 text-white py-2 rounded-xl hover:opacity-80 text-center"
        style="width: 80px;"><i class="fa-solid fa-arrow-left"></i> Naspäť
    </a>
    <x-card class="p-10 max-w-2xl mx-auto mt-6">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-6">Editácia profilu</h2>
        </header>
        <form method="POST" action="/profilstudentedit/{{ $users->id }}" enctype="multipart/form-data">
            @csrf
            <div class="text-center">
                <div class="mb-4">
                    <label for="name" class="inline-block text-lg mb-2">Meno:</label>
                    <input type="name" name="name" placeholder="{{ auth()->user()->name }}"
                        class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 73.68px;"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="inline-block text-lg mb-2">E-mail:</label>
                    <input type="email" name="email" placeholder="{{ auth()->user()->email }}"
                        class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 70.31px;"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="inline-block text-lg mb-2">Heslo: </label>
                    <input type="password" name="password"
                        class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 70.31px;"
                        value="{{ old('password') }}">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                 {{-- <div class="mb-4">
                    <label for="pohlavie" class="inline-block text-lg mb-2">Pohlavie:</label>
                    <select name="pohlavie" id="id" class="border border-gray-200 rounded p-2 w-half"
                        style="width: 350px; margin-left: 53.93px;">
                        <option value="1">Muž</option>
                        <option value="0">Žena</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="tel" class="inline-block text-lg mb-2">Tel. číslo:</label>
                    <input type="tel" name="tel" placeholder="{{ auth()->user()->tel_cislo }}"
                        class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 54.49px;"
                        value="{{ old('tel_cislo') }}">
                    @error('tel_cislo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="ulica" class="inline-block text-lg mb-2">Ulica:</label>
                    <input type="ulica" name="ulica" placeholder="{{ auth()->user()->Ulica }}"
                        class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 81.43px;"
                        value="{{ old('Ulica') }}">
                    @error('Ulica')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="mesto" class="inline-block text-lg mb-2">Mesto:</label>
                    <input type="mesto" name="mesto" placeholder="{{ auth()->user()->Mesto }}"
                        class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 70.13px;"
                        value="{{ old('Mesto') }}">
                    @error('Mesto')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="PSC" class="inline-block text-lg mb-2">PSČ:</label>
                    <input type="PSC" name="PSC" placeholder="{{ auth()->user()->PSC }}"
                        class="border border-black-200 rounded p-2 w-full" style="width: 350px; margin-left: 89.2px;"
                        value="{{ old('PSC') }}">
                    @error('PSC')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-6">
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Uložiť
                    </button>
                </div>
            </div>
        </form>
    </x-card>
</x-layout>
--}}