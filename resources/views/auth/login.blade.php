@extends('template.layout.template')

@include('template.includes.dialog-action')

@section('content')
    @if (session('status'))
        <input id="resultSucess" type="hidden" value="{{ session('status') }}">
    @endif
    <section>
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="center">
                        <div class="col s7" style="margin:auto;float: none;">
                            <div class="card">
                                <div class="card-header left-align grey" style="padding:5px 15px">
                                    <h6>Entrar</h6>
                                </div>
                                <div class="card-content">
                                    <div class="">
                                        @if ($errors->has('credential'))
                                            <span class="helper-text red-text">
                                                {{ $errors->first('credential') }}
                                            </span>
                                        @endif
                                        <form method="post" action="{{ Route('auth.login') }}">
                                            @csrf
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
                                                <input id="icon_https" type="password" name="password">
                                                <label id="icon_https" style="user-select: none">Senha</label>
                                                @if ($errors->has('password'))
                                                    <span class="helper-text red-text">
                                                        {{ $errors->first('password') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <diV class="left-align row" style="margin:5px 0px 5px 3px">
                                                <div class="col s6">
                                                    <label>
                                                        <input type="checkbox" />
                                                        <span>Lembrar</span>
                                                    </label>
                                                </div>
                                                <div class="col s6 right-align"
                                                    style="padding-right: 0px;padding-top: 5px;">
                                                    <a href="{{ route('password.request') }}">Esqueceu a senha?</a>
                                                </div>
                                            </diV>
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
        </div>
    </section>

@endsection
