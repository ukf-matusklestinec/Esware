@extends('layout')
@section('content')

    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Registrácia</div>
                        <div class="card-body">


                            <form action="{{ route('register.post') }}" method="POST">

                                @csrf
                                <div class="form-group row">
                                    <label for="meno" class="col-md-4 col-form-label text-md-right">Meno</label>
                                    <div class="col-md-6">
                                        <input type="text" id="meno" class="form-control" name="meno" required autofocus>

                                        @if ($errors->has('meno'))
                                            <span class="text-danger">{{ $errors->first('meno') }}</span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="priezvisko" class="col-md-4 col-form-label text-md-right">Priezvisko</label>
                                    <div class="col-md-6">
                                        <input type="text" id="priezvisko" class="form-control" name="priezvisko" required autofocus>

                                        @if ($errors->has('priezvisko'))
                                            <span class="text-danger">{{ $errors->first('priezvisko') }}</span>
                                        @endif

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email" class="form-control" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="heslo" class="col-md-4 col-form-label text-md-right">Heslo</label>
                                    <div class="col-md-6">
                                        <input type="password" id="heslo" class="form-control" name="heslo" required>
                                        @if ($errors->has('heslo'))
                                            <span class="text-danger">{{ $errors->first('heslo') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrovať sa
                                    </button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

