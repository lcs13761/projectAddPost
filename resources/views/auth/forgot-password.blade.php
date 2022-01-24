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
                                    <h6>Entrar</h6>
                                </div>
                                <div class="card-content">
                                    <div class="">
                                        @if (session('status'))
                                            <span class="helper-text red-text left-align">
                                                {{ session('status') }}
                                            </span>
                                        @endif
                                        <form method="post" action="{{ Route('password.email') }}">
                                            @csrf
                                            <div class="input-field">
                                                <i class="material-icons prefix">mail</i>
                                                <input id="icon_prefix" type="email" name="email"
                                                    value="{{ old('email') }}" required>
                                                <label for="icon_prefix" style="user-select: none">E-mail</label>
                                                @if ($errors->has('email'))
                                                    <span class="helper-text red-text left-align">
                                                        {{ $errors->first('email') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="left-align" style="margin:10px 15px 5px 15px">
                                                <button class="btn waves-effect waves-light" type="submit" name="action">
                                                    Enviar
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
