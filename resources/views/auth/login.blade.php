@extends('layout')

@section('content')
    <div class="container">
        <div class="login_box">
            <h2>ログイン</h2>
            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $message)
                                    <p>{{ $message }}</p>
                                @endforeach
                            </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="box_text">
                    <lavel for="email">メールアドレス</lavel><br>
                    <input type="text" class="form_text" id="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="box_text">
                    <lavel for="password">パスワード</lavel><br>
                    <input type="password" class="form_text" id="password" name="password" />
                </div>
                <div class="box_sub">
                    <button type="submit" class="btn_text">送信</button>
                    <h2 class="btn_register"><a href="{{ route('auth.register') }}">新規登録はこちら</a></h2>
                </div>
                <div class="text-center">
                    <a href="{{ route('password.request') }}">パスワードの変更はこちらから</a>
                </div>
            </form>
        </div>
    </div>
@endsection