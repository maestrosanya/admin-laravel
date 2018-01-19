@extends('admin::layouts.admin-panel')

@section('content')
    <h1>Статьи</h1>

    {{-- Breadcrumbs START--}}
    @include('admin::component.breadcrumbs')
    {{-- Breadcrumbs END--}}

    <table class="table table-striped">
        <thead class="table-light">
        <tr>
            <th scope="col" class="table-active">ID</th>
            <th scope="col">Заголовок</th>
            <th scope="col">Текст</th>
            <th scope="col">Изображение</th>
            <th scope="col">Категория</th>
            <th scope="col">Псевдоним</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>

        <tbody  class="table-hover">
        @if(!empty($articles))
            @foreach($articles as $article)
                <tr class="table-light">
                    <td>
                        {{ $article->articles_id }}
                    </td>
                    <td>
                        <a href="{{ route('admin.articles.edit', ['id' => $article->articles_id] ) }}">{{ $article->title }}</a>
                    </td>
                    <td>
                        {{ str_limit($article->description, 200) }}
                    </td>
                    <td>

                    </td>
                    <td>{{--{{ $article->category->title }}--}}</td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection