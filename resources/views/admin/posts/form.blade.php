@extends('template.layout.template')


@push('css')
    <link href="{{ url('/') }}/assets/css/style.css" rel="stylesheet" />
@endpush


@section('content')


    <section>
        <div class="container">
            <div class="card">
                <div class="card-header left-align grey" style="padding:5px 15px">
                    <h6>Nova conta</h6>
                </div>
                <div class="card-content">
                    <div class="">
                        @if (isset($post))
                            <form method="post" action="{{ Route('posts.update', ['post' => $post->id]) }}">
                                @method('put')
                            @else
                                <form method="post" action="{{ Route('posts.store') }}">
                        @endif
                        @csrf
                        <div class="input-field">
                            <input {{ $errors->has('title') ? 'class=border-bottom-color' : '' }} id="icon_accout"
                                type="text" name="title" value="{{ old('title') ?? ($post->title ?? '') }}" required>
                            <label for="icon_accout" style="user-select: none">Titulo</label>
                            @if (isset($errors) && $errors->has('title'))
                                <span class="helper-text red-text">
                                    {{ $errors->first('title') }}
                                </span>
                            @endif
                        </div>
                        <div class="input-field">
                            <textarea id="textarea1" name="description"
                                class="materialize-textarea  {{ $errors->has('description') ? 'border-bottom-color' : '' }}">{{ $post->description ?? old('description') }}</textarea>
                            <label id="icon_password" style="user-select: none">Descrição</label>
                            @if (isset($errors) && $errors->has('description'))
                                <span class="helper-text red-text">
                                    {{ $errors->first('description') }}
                                </span>
                            @endif
                        </div>
                        <div class="input-field">
                            <input {{ $errors->has('urlImage') ? 'class=border-bottom-color' : '' }} pattern="https://.*"
                                id="icon_mail" type="url" name="urlImage"
                                value="{{ $post->urlImage ?? old('urlImage') }}">
                            <label for="icon_mail" style="user-select: none">URL da imagem</label>
                            @if (isset($errors) && $errors->has('urlImage'))
                                <span class="helper-text red-text">
                                    {{ $errors->first('urlImage') }}
                                </span>
                            @endif
                        </div>
                        <div class="left-align">
                            <a href="{{ Route('posts.index') }}" class="waves-effect waves-light btn grey">Voltar</a>
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                {{ isset($post) ? 'Editar' : 'Cadastrar' }}
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
