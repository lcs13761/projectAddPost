@extends('Mails.layout.template')


@section('content')

    <div class="content">
        <h3 style="color: #fff;">Ola {{ $body['name'] }}!</h3>
        <p>{{ $body['description'] }}</p>
        <div>
            <p style="text-align: center;"><a title='test' target='_blank' class="button button-blue"
                    href='{{ $body['link'] }}'>{{ $body['button'] }}</a></p>
        </div>
        <p>{{ $body['descriptionFooter'] }}</p>
        <p>Atenciosamente, PostProject !</p>
    </div>
    <div style="border-top: 1px solid #ccc ;padding-top: 5px"></div>
    <p>Se você estiver tendo problemas para clicar no botão "{{ $body['button'] }}",copie e cole a URL
        abaixo em seu navegador:
        <span style="color:#8e8efff2">{{ $body['link'] }}</span>
    </p>

@endsection
