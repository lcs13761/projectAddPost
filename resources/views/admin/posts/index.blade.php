@extends('template.layout.template')

@include('template.includes.dialog-action')
@include('template.includes.dialog-remove')

@section('content')
    @if (session('success'))
        <input id="resultSucess" type="hidden" value="{{ session('success') }}">
    @endif
    @if (session('error'))
        <input id="resultError" type="hidden" value="{{ session('error') }}">
    @endif
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <div class="row grey lighten-4">
                        <div class="col s6">
                            <h5>Posts</h5>
                        </div>
                        <div class="col s6 valign-wrapper right" style="margin:1rem 0;justify-content: right;">
                            <a href="{{ Route('posts.create') }}" class="waves-effect waves-light btn">Novo Post</a>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            @if (!empty($posts))
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($posts as $post)
                                    <div id="post-{{ $i }}" class="col s12 m4 l4 xl-3">
                                        <div class="card">
                                            <div class="card-image">
                                                <img style="max-height:207.188px;" src="{{ $post->urlImage }}">
                                            </div>
                                            <div class="card-content">
                                                <div class="card-title truncate">
                                                    {{ $post->title }}
                                                </div>
                                                <p class="truncate">{{ $post->description }}</p>
                                            </div>
                                            <div class="card-action center-align">

                                                <a href="{{ Route('posts.edit', ['post' => $post->id]) }}"
                                                    class="waves-effect waves-light btn">Editar</a>
                                                <a onclick="remove('post-{{ $i }}','{{ route('posts.destroy', $post->id) }}')"
                                                    class="btn waves-effect waves-light  red darken-1"
                                                    data-placement="bottom" title="" data-toggle="tooltip"
                                                    data-original-title="Excluir">Excluir</a>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
