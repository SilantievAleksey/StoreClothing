@extends('layouts.site')

@section('breadcrumbs')
    {{ DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs::render('admin') }}
@endsection

@section('main')
    <div class="container">

        <h1>Панель управления</h1>
        <p>Добро пожаловать, {{ auth()->user()->name }}</p>
        <p>Это панель управления для администратора интернет-магазина.</p>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">Выйти</button>
        </form>

    </div>
@endsection
