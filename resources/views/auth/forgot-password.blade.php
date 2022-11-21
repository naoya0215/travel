@extends('layout')

@section('content')
<x-guest-layout>
    <x-auth-card>
        <div class="container">
            <div class="login_box">
                <div class="reset_text">パスワードをお忘れの場合、<br>メールアドレスを入力することで新しいパスワードを選択できる<br>パスワードリセットリンクをメールでお送りします。</div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="email_reset" for="email">メールアドレス</div>
                    <div class="reset_block">
                        <x-input id="email" class="block" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <div class="reset_button">
                        <x-button>
                            {{ __('パスワードリセットリンク生成') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
@endsection

