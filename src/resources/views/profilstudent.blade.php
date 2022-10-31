<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div>
            <div class="text-center">
                <div>
                <div style="padding-bottom: 10px;">
                       
                    <img class="rounded-circle mx-auto d-block" alt="avatar1" src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp" />
                    <p>Meno:</p>
                    <p style="font-weight: bold;">{{auth()->user()->name}}</p>
                    </div>

                    <div>
                        <p>ID:</p>
                        <p style="font-weight: bold;">{{auth()->user()->id}}</p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div>
                    <div style="padding-bottom: 10px;">
                        <p>E-mail:</p>
                        <p style="font-weight: bold;">{{auth()->user()->email}}</p>
                    </div>
                    <div style="padding-bottom: 10px;">
                        <p>Tel. číslo:</p>
                        <p style="font-weight: bold;">0999 999 999</p>
                    </div>
                </div>
                <div>
                    <div style="padding-bottom: 10px;">
                        <p>Odbor:</p>
                        <p style="font-weight: bold;">AI22M</p>
                    </div>
                    <div style="padding-bottom: 10px;">
                        <p>Adresa:</p>
                        <p style="font-weight: bold;">XXX, XXX, XXX</p>
                    </div>
                </div>
            </div>
        </div>
    </x-card>
</x-layout>