@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="btn btn-primary" href={{ route('blog.admin.categories.create') }}>Add</a>
    </nav>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Parent</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paginator as $item)
                    @php
                        /** @var \App\Models\BlogCategory $item */
                    @endphp
                <tr>
                    <td>{{$item->id}}</td>
                    <td>
                        <a href={{ route('blog.admin.categories.edit', $item->id) }}>{{$item->title}}</a>
                    </td>
                    <td @if (in_array($item->parent_id, [0, 1])) style="color: #AAAAAA" @endif>
                        {{$item->parent_id}}
                    </td>
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
