@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                @if (Auth::check())
                <span class="my-navbar-item">ようこそ, {{ Auth::user()->name }}さん</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')" class="my-navbar-item"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </a>
                </form>
                @else
                <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
                <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
                @endif
            </div>
            <nav class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        こちらは会員ページです
                    </div>
                </div>
            </nav>
        </div>
    </div>
@endsection
