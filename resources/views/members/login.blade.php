@extends('layouts.app')
@section('title', ' - 登入')

@section('pageCSS')
<style>
    .a {
        fill: #f2f2f2;
    }
    .form-control {
        color:#f2f2f2;
    }
    .help-block {
        color: chocolate;
    }
</style>
@endsection

@section('content')
<div class="login-bg"><img class="login-logo" src="./assets/images/icon/login-logo.png" alt="" />
    <form action="/login" method="POST" id="form">
    <div class="login-form">
            @csrf
            {{-- @if ($errors->has('regOK'))
            <span class="help-block">
                <strong>{{ $errors->first('regOK') }}</strong>
            </span>
            @endif --}}
            <input type="text" class="form-control" placeholder="{{ __('Name') }}" name="name" />
            {{-- <p class="help-block">
                <strong>{{ $message }}</strong>
            </p> --}}
            <input type="password" class="form-control" placeholder="{{ __('Password') }}" name="password" />
            {{-- <svg class="form-examination" width="18.996" height="11.323" viewBox="0 0 18.996 11.323">
            <g transform="translate(0 -98.725)">
                <path class="a"
                    d="M9.5,98.725c-3.629,0-6.921,1.986-9.349,5.211a.752.752,0,0,0,0,.9c2.429,3.229,5.72,5.215,9.349,5.215s6.921-1.986,9.349-5.211a.752.752,0,0,0,0-.9C16.419,100.711,13.127,98.725,9.5,98.725Zm.26,9.649a4,4,0,1,1,3.727-3.727A4,4,0,0,1,9.758,108.374Zm-.12-1.842a2.151,2.151,0,1,1,2.009-2.009A2.148,2.148,0,0,1,9.638,106.532Z"
                    transform="translate(0)" />
            </g>
            </svg> --}}
        </div>
        <div class="login-btn">
            <a href="javascript:;" id="btn-login" class="login-btn-item">{{ __('Login') }}</a>
        </div>
        <div class="registered-text">{{ __('還沒申請會員嗎') }}? &nbsp;<a href="/register" class="btn-registered">{{ __('Register') }}</a></div>
    </form>
</div>
@endsection

@section('pageJS')
<script src="/scripts/index.js"></script>
<script>
$(function(){
    $( "#btn-login" ).click(function() {
        $( "#form" ).submit();
    });

    @if ($message)
    Swal.fire({
        icon: 'error',
        // background: '#ccc',
        title: '{{ $message }}',
        // text: 'Something went wrong!'
    })
    @endif

    @if ($errors->has('regOK'))
    Swal.fire({
        icon: 'info',
        title: '{{ $errors->first('regOK') }}',
    })
    @endif
})
</script>
@endsection
