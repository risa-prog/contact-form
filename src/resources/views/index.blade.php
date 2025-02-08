@extends('layouts.default')

@section('content')
<h2 class="form-title">
    お問い合わせ
</h2>
<form class="form" action="/contacts/confirm" method="post">
    @csrf
    <div class="form__item">
        <p class="form__item__label">
            お名前
            <span class="form__item__label__required">
                必須
            </span>
        </p>
        <input type="text" name="name" class="form__item__input" placeholder="テスト太郎" value="{{old('name')}}">
    </div>
    @error('name')
    <p class="error-message">
        {{$errors->first('name')}}
    </p>
    @enderror

    <div class="form__item">
        <p class="form__item__label">
            メールアドレス
            <span class="form__item__label__required">
                必須
            </span>
        </p>
        <input type="email" name="email" class="form__item__input" placeholder="test@example.com" value="{{old('email')}}">
    </div>
    @error('email')
    <p class="error-message">
        {{$errors->first('email')}}
    </p>
    @enderror

    <div class="form__item">
        <p class="form__item__label">
            電話番号
            <span class="form__item__label__required">
                必須
            </span>
        </p>
        <input type="tel" name="tel" class="form__item__input" placeholder="09012345678" value="{{old('tel')}}">
    </div>
    @error('tel')
    <p class="error-message">
        {{$errors->first('tel')}}
    </p>
    @enderror

    <p class="form__item__label">
        お問い合わせ内容
    </p>
    <textarea name="content" class="form__item__textarea" placeholder="資料をいただきたいです">
    </textarea>

    <input type="submit" class="form__btn" value="送信">



</form>
@endsection