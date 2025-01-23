@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
            会員登録
        </a>
    </div>
</header>

<body>
    <form class="form" action="register" method="post">
        @csrf
        <div class="register-form__group register-form__name-group">
            <div class="register-label" for="name">
                お名前
                <span class="register-form__required">
                    ※
                </span>
                <div class="register-form__name-inputs">
                    <input class="register-form__input register-form__name-input" type="text" name="name" placeholder="山田次郎" value="{{ old('name')}}" />
                </div>
            </div>
            <div class="register-form__required">
                email
                <span class="register-form__required">
                    ※
                </span>
                <div class="register-form__email-inputs">
                    <input class="register-form__input register-form__email-input" type="text" name="email" placeholder="test@example.com" value=" {{ old('email') }}" />
                </div>
            </div>
            <div class="register-form__required">
                password
                <span class="register-form__required">
                    ※
                </span>
                <div class="register-form__password-inputs">
                    <input class="register-form__input register-form__password-input" type="text" name="password" value=" {{ old('password') }}" />
                </div>
            </div>
        </div>
    </form>
</body>