@extends('layout')

@section('content')
    <div class="container">
        <div class="login_box">
            <h2>新規登録</h2>
            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $message)
                                    <p>{{ $message }}</p>
                                @endforeach
                            </div>
                        @endif
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="box_text">
                    <lavel for="name">名前</lavel><br>
                    <input type="text" class="form_text" id="name" name="name" value="{{ old('name') }}" />
                </div>
                <div class="box_text">
                    <lavel for="email">メールアドレス</lavel><br>
                    <input type="text" class="form_text" id="email" name="email" value="{{ old('email') }}" />
                </div>
                <div class="box_text">
                    <lavel for="password">パスワード</lavel><br>
                    <input type="password" class="form_text" id="password" name="password" />
                </div>
                <div class="box_text">
                    <lavel for="password_confirm">パスワード確認</lavel><br>
                    <input type="password" class="form_text" id="password_confirm" name="password_confirmation" />
                </div>
                <div class="box_sub">
                    <button type="submit" class="btn_text">登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection
