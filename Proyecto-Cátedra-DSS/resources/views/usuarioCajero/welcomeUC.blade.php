@extends('main.menuUsers')


@section('title')
    Cajero | ApexFinance
@endsection

@section('menu-options')
    <li>
        <a href="#0">
            <i class="fa-solid fa-file" style="margin: 0 10px 0 0px"></i>
            <span>Préstamos</span>
        </a>
    </li>
    <li>
        <a href="#0">
            <i class="fa-solid fa-users" style="margin: 0 10px 0 0px"></i>
            <span>Clientes</span>
        </a>
    </li>
    <li>
        <a href="#0">
            <i class="fa-solid fa-chart-column" style="margin: 0 10px 0 0px"></i>
            <span>Abonos/retiros</span>
        </a>
    </li>
    <li>
        <a href="#0">
            <i class="fa-solid fa-book-bookmark" style="margin: 0 10px 0 0px"></i>
            <span>Préstamos</span>
        </a>
    </li>
    <li>
        <a href="#0">
            <i class="fa-solid fa-comments" style="margin: 0 10px 0 0px"></i>
            <span>Casos préstamos</span>
        </a>
    </li>
@endsection

@section('name-user')
    @if (session('user'))
        Bienvenido, {{ session('user')->name }}!
    @endif
@endsection

@section('content-panel')
    <article></article>
    <article></article>
    <article></article>
    <article></article>
    <article></article>
    <article></article>
    <article></article>
    <article></article>
@endsection

@section('logout-button')
    <form action="{{ route('logoutemployees') }}" method="POST">
        @csrf
        <button type="submit" class="button-logout" style="display: flex; align-items: center; font-size: 0.9rem;">
            <i class="fa-solid fa-right-from-bracket" style="margin: 0 10px 0 0px"></i>
            <span>Cerrar secióm</span>
        </button>
    </form>
@endsection
