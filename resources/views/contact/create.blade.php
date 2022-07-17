@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <label>氏名</label>
    <input name="your_name" value="{{ old('your_name') }}" type="text">
    @if ($errors->has('your_name'))
        <p class="error-message">{{ $errors->first('your_name') }}</p>
    @endif
    <br>

    <label>件名</label>
    <input name="title" value="{{ old('title') }}" type="text">
    @if ($errors->has('title'))
        <p class="error-message">{{ $errors->first('title') }}</p>
    @endif
    <br>

    <label>メールアドレス</label>
    <input name="email" value="{{ old('email') }}" type="text">
    @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
    @endif
    <br>

    <label>ホームページ</label>
    <input name="url" value="{{ old('url') }}" type="text">
    @if ($errors->has('url'))
        <p class="error-message">{{ $errors->first('url') }}</p>
    @endif
    <br>

    <label>性別</label>
    <input name="gender" value="{{ old('gender') }}" value="0" type="radio">男性
    <input name="gender" value="{{ old('gender') }}" value="1" type="radio">女性
    @if ($errors->has('gender'))
        <p class="error-message">{{ $errors->first('gender') }}</p>
    @endif
    <br>


    <label>ホームページ</label>
    <input name="email" value="{{ old('email') }}" type="text">
    @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
    @endif
    <br>

    <label>タイトル</label>
    <input name="title" value="{{ old('title') }}" type="text">
    @if ($errors->has('title'))
        <p class="error-message">{{ $errors->first('title') }}</p>
    @endif
    <br>

    <label>お問い合わせ内容</label>
    <textarea name="body">{{ old('body') }}</textarea>
    @if ($errors->has('body'))
        <p class="error-message">{{ $errors->first('body') }}</p>
    @endif
    <br>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <button type="submit">
        入力内容確認
    </button>
</form>
@endsection
