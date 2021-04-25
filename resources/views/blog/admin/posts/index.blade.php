@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="btn btn-primary" href={{ route('blog.admin.categories.create') }}>Create</a>
    </nav>

    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Date publication</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paginator as $item)
                @php
                /** @var \App\Models\BlogPost $item */
                @endphp
                <tr @if (!$item->is_published)
                    style="color: #BBBBBB;"

                    @endif>
                    <td>{{$item->id}}</td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->category->title}}</td>
                    <td>
                        <a href="{{ route('blog.admin.posts.edit', $item->id) }}">
                        {{$item->title}}
                        </a>
                    </td>
                    <td>{{$item->is_published ? \Carbon\Carbon::parse($item->published_at)->format('d.M H:i') : "not published"}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div style="width: 100%; display: flex; justify-content: center">
        @if ($paginator->total() > $paginator->count())
        <br>
        {{$paginator->links()}}
        @endif
    </div>
</div>
@endsection
