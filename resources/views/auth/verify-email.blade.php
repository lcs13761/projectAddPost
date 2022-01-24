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
                                    <h6>Falta pouco! Confirme seu cadastro.</h6>
                                </div>
                                <div class="card-content">
                                    <div class="">
                                        <p>Enviamos um link de confirmação para seu e-mail. Acesse e siga as instruções para
                                            concluir seu cadastro.</p>
                                        <form method="post" action = "{{ route('verification.send') }}">
                                            @csrf
                                            <p>Ser voçê não recebeu o e-mail,<button style="font-size: 16px;
                                                color: #26a69a;
                                                border: 0;
                                                background-color: transparent;
                                                cursor: pointer;">Reenviar E-mail</button></p>
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
