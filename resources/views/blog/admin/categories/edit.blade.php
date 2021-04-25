@extends('layouts.app')

@section('content')

@if ($item->exists)
<form method="POST" action={{ route('blog.admin.categories.update', $item->id) }}>
    @method('PATCH')

    @else
    <form method="POST" action={{ route('blog.admin.categories.store') }}>
        @endif


        @csrf
        <div class='container'>
            @if($errors->any())
            @foreach ($errors->all(':message') as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endforeach
            @endif

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session()->get('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="row">
                <div class="col-9">
                    @include('blog.admin.categories.includes.item_edit_main_col')
                </div>
                <div class="col-3">
                    @include('blog.admin.categories.includes.item_edit_add_col')
                </div>
            </div>
        </div>
    </form>
    @endsection
