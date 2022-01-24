@extends('template.layout.template')


@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="center">
                        <div class="col s7" style="margin:auto;float: none;">
                            <div class="card">
                                <div class="card-header left-align grey" style="padding:5px 15px">
                                    <h6>Modificar senha</h6>
                                </div>
                                <div class="card-content">
                                    <div class="">
                                        <form method="post" action="{{ Route('password.update') }}">
                                            @csrf
                                            <input type="hidden" name="token" value="{{$request->route('token')}}">
                                            <div class="input-field">
                                                <i class="material-icons prefix">mail</i>
                                                <input id="icon_prefix" type="email" name="email"
                                                    value="{{ old('email') }}" required>
                                                <label for="icon_prefix" style="user-select: none">E-mail</label>
                                                @if ($errors->has('email'))
                                                    <span class="helper-text red-text">
                                                        {{ $errors->first('email') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">https</i>
                                                <input id="icon_password"
                                                    {{ $errors->has('password') ? 'class=border-bottom-color' : '' }}
                                                    type="password" name="password" required>
                                                <label id="icon_password" style="user-select: none">Senha</label>
                                                @if ($errors->has('password'))
                                                    <span class="helper-text red-text left-align">
                                                        {{ $errors->first('password') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="input-field">
                                                <i class="material-icons prefix">https</i>
                                                <input id="icon_password_re"
                                                    {{ $errors->has('password') ? 'class=border-bottom-color' : '' }}
                                                    type="password" name="password_confirmation" required>
                                                <label id="icon_password_re" style="user-select: none">Repita a
                                                    senha</label>
                                            </div>
                                            <div class="left-align" style="margin:10px 15px 5px 15px">
                                                <button class="btn waves-effect waves-light" type="submit" name="action">
                                                    Entrar
                                                </button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
