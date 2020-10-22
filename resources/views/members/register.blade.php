@extends('layouts.app')
@section('title', ' - 註冊')

@section('pageCSS')
<style>
    .a {
        fill: #f2f2f2;
    }

    .form-control {
        color: #f2f2f2;
    }
    .help-block {
        color: chocolate;
    }
</style>
@endsection

@section('content')
<div class="registered-bg">
    <div class="registered-en-title">Sign up</div>
    <div class="registered-title">{{ __('註冊會員') }}</div>
    <div class="registered-form">
        <form action="/register" method="POST" id="form">
            @csrf
        <input type="text" class="form-control" name="account" placeholder="{{ __('Name') }}" value="{{ old('account') }}"/>
            @if ($errors->has('account'))
            <span class="help-block">
                <strong>{{ $errors->first('account') }}</strong>
            </span>
            @endif
            <input type="password" class="form-control" name="password" placeholder="{{ __('Password') }}" />
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <input type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" />

            <input type="text" class="form-control" name="name" placeholder="{{ __('暱稱') }}"  value="{{ old('name') }}"/>
            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
            <input type="email" class="form-control" name="email" placeholder="{{ __('E-Mail Address') }}"  value="{{ old('email') }}" />
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            <input type="text" class="form-control" name="phone" placeholder="{{ __('手機') }}"  value="{{ old('phone') }}" />
            @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
            @endif

            <input type="text" class="form-control" name="promotecode" placeholder="推廣碼"  value="{{ old('promotecode') }}" />
            @if ($errors->has('promotecode'))
            <span class="help-block">
                <strong>{{ $errors->first('promotecode') }}</strong>
            </span>
            @endif

            {{-- <input class="form-control" placeholder="手機密碼" />
            <div class="password-captcha">驗證</div>
            <input class="form-control" placeholder="驗證碼" /> --}}
            <div class="registered-check">
                <input type="checkbox" id="a2" name="checkit" checked /> &nbsp;
                <label for="a2" class="form-check-text">{{ __('我已閱讀並同意會員約定條款說明') }}</label>
                <div class="detail">{{ __('詳細條款') }}</div>
            </div>
            @if ($errors->has('checkit'))
            <p class="help-block">
                <strong>{{ $errors->first('checkit') }}</strong>
            </p>
            @endif
        </form>
    </div>
    <div class="registered-btn">
        <a href="javascript:;" class="registered-btn-item" id="btn-submit">{{ __('註冊') }}</a>
    </div>
</div>
@endsection

@section('pageJS')
<script src="/scripts/index.js"></script>
<script>
    $(function(){
        $("#btn-submit").click(function() {
            $("#form").submit();
        });
    })
</script>
@endsection
