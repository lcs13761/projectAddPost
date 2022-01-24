@extends('Mails.layout.template')


@section('content')

    <div class="content">
        <h3 style="color: #fff;">Novo Post Adicionado!</h3>
        <p>Nome do Post:<span>{{$body['postName']}}</span></p>
        <p>Author:<span>{{$body['auth']}}</p>
        <p>Adicionado em:<span id="newTime">{{$body['created']}}</span></p>
        <hr>
        <p>Atenciosamente, PostProject !</p>
    </div>
    <hr style = "color:#ccc;margin-top: 5px">
@endsection
