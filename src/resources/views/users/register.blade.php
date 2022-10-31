<x-layout>
    <x-card class="p-10 max-w-2xl mx-auto mt-24" >

        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1" style="padding-bottom: 20px;">Registrácia</h2>
        </header>

        <form action="/users" method="POST">
        @csrf
            <div class="text-center">
            <div style="padding-bottom: 15px;">
                <label for="name" class="inline-block text-lg mb-2">Meno<span style="color:red;"> *</label> 
                <input type="name" name="email" class="border border-black-200 rounded p-2 w-full" 
                    style="width: 350px; margin-left: 73.68px;" value="{{old('name')}}" >
                    @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div style="padding-bottom: 15px;">
                <label for="email" class="inline-block text-lg mb-2">E-mail<span style="color:red;"> *</label>
                <input type="email" name="email" class="border border-black-200 rounded p-2 w-full" 
                    style="width: 350px; margin-left: 70.31px;" value="{{old('email')}}" >
                    @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div style="padding-bottom: 15px;">
                <label for="password" class="inline-block text-lg mb-2">Heslo<span style="color:red;"> *</label>
                <input type="password" class="border border-black-200 rounded p-2 w-full" name="password"
                       value="{{old('password')}}" style="width: 350px; margin-left: 75.26px;"/>
                       @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="password_confirmation" class="inline-block text-lg mb-2">Potvrdiť heslo<span style="color:red;"> *</label>
                <input type="password" class="border border-black-200 rounded p-2 w-full" name="password_confirmation"
                       value="{{old('password_confirmation')}}" style="width: 350px; margin-left: 9.1px;"/>
                       @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div><span style="color: red;">* sú označené povinné polia</div>
            <div style="padding-top: 25px;">
            <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Registrovať
                </button>
            </div>
            <div style="padding-top: 15px;">
            <a href="/login" class="text-laravel">Účet už mám</a>
            <br>
            </div>
            </div>
        </form>
        

        </x-card>
</x-layout>