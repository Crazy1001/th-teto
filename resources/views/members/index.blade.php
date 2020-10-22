@extends('layouts.app')
@section('title', ' - ' . __('會員中心title'))

@section('content')
@include('layouts._marquee')
@include('layouts._header')

<div class="member-container main">
    <div id="memberBox" class="member-main-box member-box">
        <div class="set-scroll">
            <div class="member-main-title-box">
                <h3 class="sub-title">Member</h3>
                <h1 class="title">{{ __('會員中心title') }}</h1>
            </div>
            <div class="member-function-box">
                <div class="member-function-title-box"><span class="title">{{ __('快速選項') }}</span></div>
                <nav class="member-function-list-box">
                    <a href="/member/personal" class="member-function-list-item information"><svg
                            class="member-function-list-item-icon" viewBox="0 0 36.369 36.684">
                            <g transform="translate(-0.332)">
                                <path class="icon-path"
                                    d="M101.618,7.975A7.975,7.975,0,1,1,93.643,0,7.975,7.975,0,0,1,101.618,7.975Zm0,0"
                                    transform="translate(-78.956)" />
                                <path class="icon-path"
                                    d="M18.729,270.035a4,4,0,0,1,.324-4.466,4,4,0,0,1-.324-4.466l1.291-2.233a4,4,0,0,1,3.455-1.993,4.053,4.053,0,0,1,.576.041,4.188,4.188,0,0,1,.185-.378A7.524,7.524,0,0,0,21.466,256H7.909a7.585,7.585,0,0,0-7.576,7.576v5.583a1.2,1.2,0,0,0,1.2,1.2H18.912Zm0,0"
                                    transform="translate(0 -236.86)" />
                                <path class="icon-path"
                                    d="M295.474,286.055a5.809,5.809,0,0,0,.075-.748,6.106,6.106,0,0,0-.075-.748l1.437-1.088a.8.8,0,0,0,.209-1.035l-1.29-2.233a.8.8,0,0,0-1-.337l-1.654.7a5.936,5.936,0,0,0-1.306-.777l-.22-1.756a.8.8,0,0,0-.791-.7h-2.579a.8.8,0,0,0-.791.7l-.22,1.756a5.961,5.961,0,0,0-1.306.777l-1.654-.7a.8.8,0,0,0-1,.337l-1.291,2.233a.8.8,0,0,0,.209,1.035l1.437,1.088a5.8,5.8,0,0,0-.075.748,6.107,6.107,0,0,0,.075.748l-1.437,1.088a.8.8,0,0,0-.209,1.035l1.291,2.235a.8.8,0,0,0,1,.336l1.654-.7a5.935,5.935,0,0,0,1.306.777l.22,1.756a.8.8,0,0,0,.789.7h2.579a.8.8,0,0,0,.791-.7l.22-1.756a5.952,5.952,0,0,0,1.306-.777l1.654.7a.8.8,0,0,0,1-.337l1.29-2.234a.8.8,0,0,0-.209-1.035Zm-5.906,2.442a3.19,3.19,0,1,1,3.19-3.19A3.189,3.189,0,0,1,289.568,288.5Zm0,0"
                                    transform="translate(-260.526 -256.598)" />
                            </g>
                        </svg> <span class="text">{{ __('個人資訊') }} </span></a>
                    <a class="member-function-list-item transaction"><svg class="member-function-list-item-icon"
                            viewBox="0 0 38.435 34">
                            <g transform="translate(0 -29.539)">
                                <g transform="translate(0 39.517)">
                                    <g transform="translate(0)">
                                        <path class="icon-path"
                                            d="M33.261,178.722a3.325,3.325,0,0,1-2.741-1.442l-1.628-2.367a11.093,11.093,0,0,1-20.707-4.321H9.239a1.109,1.109,0,0,0,.914-1.737L8.537,166.5l-2.449-3.562a1.109,1.109,0,0,0-1.827,0L.2,168.855a1.109,1.109,0,0,0,.914,1.737H2.253A17,17,0,0,0,31.238,181.5a17.115,17.115,0,0,0,2.258-2.791C33.419,178.718,33.34,178.722,33.261,178.722Z"
                                            transform="translate(0 -162.461)" />
                                    </g>
                                </g>
                                <g transform="translate(15.575 39.517)">
                                    <g transform="translate(0 0)">
                                        <path class="icon-path"
                                            d="M211.961,168.376h-1.689a.581.581,0,0,1-.581-.581v-.845a.581.581,0,0,1,.581-.581h1.689a.581.581,0,0,1,.581.581,1.109,1.109,0,0,0,2.217,0,2.8,2.8,0,0,0-2.534-2.785v-.594a1.109,1.109,0,1,0-2.217,0v.594a2.8,2.8,0,0,0-2.534,2.785v.845a2.8,2.8,0,0,0,2.8,2.8h1.689a.581.581,0,0,1,.581.581v.845a.581.581,0,0,1-.581.581h-1.689a.581.581,0,0,1-.581-.581,1.109,1.109,0,0,0-2.217,0,2.8,2.8,0,0,0,2.534,2.785v.593a1.109,1.109,0,1,0,2.217,0V174.8a2.8,2.8,0,0,0,2.534-2.785v-.845A2.8,2.8,0,0,0,211.961,168.376Z"
                                            transform="translate(-207.473 -162.463)" />
                                    </g>
                                </g>
                                <g transform="translate(4.938 29.539)">
                                    <g transform="translate(0 0)">
                                        <path class="icon-path"
                                            d="M99.153,46.023a1.109,1.109,0,0,0-.981-.593H97.028A17,17,0,0,0,68.042,34.518a17.116,17.116,0,0,0-2.258,2.791c.078-.006.157-.009.236-.009a3.325,3.325,0,0,1,2.741,1.442l1.628,2.367A11.093,11.093,0,0,1,91.1,45.43H90.041a1.109,1.109,0,0,0-.914,1.737l1.616,2.351,2.449,3.562a1.109,1.109,0,0,0,1.827,0l1.468-2.135,2.6-3.778A1.109,1.109,0,0,0,99.153,46.023Z"
                                            transform="translate(-65.784 -29.539)" />
                                    </g>
                                </g>
                            </g>
                        </svg> <span class="text">{{ __('交易中心') }} </span></a><a href="./member-message.html"
                        class="member-function-list-item mail"><svg class="member-function-list-item-icon"
                            viewBox="0 0 34.667 26">
                            <g transform="translate(0 -64)">
                                <g transform="translate(0 64)">
                                    <g transform="translate(0 0)">
                                        <path class="icon-path"
                                            d="M7.169,66.11c4.758,4.029,13.106,11.118,15.56,13.329a1.45,1.45,0,0,0,2.1,0c2.456-2.213,10.8-9.3,15.562-13.332a.722.722,0,0,0,.1-1A2.868,2.868,0,0,0,38.223,64H9.334a2.868,2.868,0,0,0-2.267,1.113A.722.722,0,0,0,7.169,66.11Z"
                                            transform="translate(-6.446 -64)" />
                                        <path class="icon-path"
                                            d="M34.248,126.479a.719.719,0,0,0-.77.1C28.2,131.056,21.467,136.79,19.348,138.7a2.925,2.925,0,0,1-4.031,0c-2.258-2.035-9.821-8.464-14.128-12.114A.722.722,0,0,0,0,127.134V145.3a2.892,2.892,0,0,0,2.889,2.889H31.778a2.892,2.892,0,0,0,2.889-2.889V127.134A.722.722,0,0,0,34.248,126.479Z"
                                            transform="translate(0 -122.186)" />
                                    </g>
                                </g>
                            </g>
                        </svg> <span class="text">{{ __('訊息中心') }} </span></a>
                    <a href="./member-attention.html" class="member-function-list-item attention"><svg
                            class="member-function-list-item-icon" viewBox="0 0 33.989 31.183">
                            <g transform="translate(-178.494 -3.617)">
                                <path class="icon-path"
                                    d="M198.075,14.392a6.6,6.6,0,1,1-6.6-6.6h0A6.6,6.6,0,0,1,198.075,14.392Z"
                                    transform="translate(-1.099 -0.719)" />
                                <path class="icon-path"
                                    d="M196.577,26.962q-.294-.03-.59-.031H184.765q-.3,0-.591.031a6.277,6.277,0,0,0-5.68,6.24v4.621a.993.993,0,0,0,.993.993h21.777a.994.994,0,0,0,.993-.993V33.2A6.278,6.278,0,0,0,196.577,26.962Z"
                                    transform="translate(0 -4.016)" />
                                <path class="icon-path"
                                    d="M202.058,13.673a8.213,8.213,0,0,1-.453,2.681,6.6,6.6,0,1,0-3.223-9.545A8.255,8.255,0,0,1,202.058,13.673Z"
                                    transform="translate(-3.426)" />
                                <path class="icon-path"
                                    d="M209.952,22.788q-.293-.03-.59-.031H199.4a8.3,8.3,0,0,1-2.621,1.8h2.364c.247,0,.5.014.74.038a7.9,7.9,0,0,1,7.181,7.888v2.16h7.577a.993.993,0,0,0,.993-.993V29.028A6.278,6.278,0,0,0,209.952,22.788Z"
                                    transform="translate(-3.15 -3.297)" />
                            </g>
                        </svg> <span class="text">{{ __('關注名單') }} </span></a><a href="./member-mining.html"
                        class="member-function-list-item mining"><svg class="member-function-list-item-icon"
                            viewBox="0 0 40.667 39.069">
                            <g transform="translate(-2.999 -5.28)">
                                <path class="icon-path" d="M13.554,38.988l-7.319-.019,6.4,3.221Z"
                                    transform="translate(-0.967 -10.068)" />
                                <path class="icon-path" d="M26.022,5.9,17.393,15.07l4.314,4.314Z"
                                    transform="translate(-4.301 -0.186)" />
                                <path class="icon-path" d="M11.3,43.756,4.235,40.2l3.533,7.087Z"
                                    transform="translate(-0.369 -10.436)" />
                                <path class="icon-path" d="M54.663,39h-7.3l.914,3.2Z"
                                    transform="translate(-13.259 -10.077)" />
                                <path class="icon-path" d="M34.667,19.807,30.018,5.28,25.369,19.807Z"
                                    transform="translate(-6.685)" />
                                <path class="icon-path" d="M53.259,47.3l3.511-7.064-7.042,3.532Z"
                                    transform="translate(-13.964 -10.446)" />
                                <path class="icon-path" d="M4.57,53.945l8.3,4.694h1.861l-7.2-5.54Z"
                                    transform="translate(-0.469 -14.29)" />
                                <path class="icon-path" d="M42.928,15.07,34.3,5.9l4.316,13.485Z"
                                    transform="translate(-9.353 -0.185)" />
                                <path class="icon-path" d="M3,42.205v7.34l3.2-.915Z" transform="translate(0 -11.035)" />
                                <path class="icon-path" d="M43.718,40.549,39,48.765v2l5.569-7.239Z"
                                    transform="translate(-10.758 -10.54)" />
                                <path class="icon-path" d="M45.512,46.512l-6.161,8.011,1.93,1.93,8.01-6.161Z"
                                    transform="translate(-10.863 -12.322)" />
                                <path class="icon-path" d="M44.982,58.638h1.929l8.218-4.7L52.182,53.1Z"
                                    transform="translate(-12.546 -14.29)" />
                                <path class="icon-path" d="M56.471,48.646l3.174.907V42.258Z"
                                    transform="translate(-15.979 -11.05)" />
                                <path class="icon-path" d="M17.1,43.525l5.555,7.221.013-1.911-4.72-8.277Z"
                                    transform="translate(-4.213 -10.542)" />
                                <path class="icon-path" d="M10.511,50.291,18.5,56.44l1.935-1.934-6.15-7.994Z"
                                    transform="translate(-2.245 -12.322)" />
                                <path class="icon-path"
                                    d="M17.672,22.086l3.117,14.805,3.361,5.892a.7.7,0,0,1,.092.352l-.029,4.136a.688.688,0,0,1-.048.238l1.156.9-3.864-22.54Z"
                                    transform="translate(-4.385 -5.022)" />
                                <path class="icon-path"
                                    d="M36.62,42.711l3.323-5.785,3.124-14.839L39.284,25.87,35.42,48.408l1.154-.9a.707.707,0,0,1-.048-.241V43.061a.705.705,0,0,1,.094-.35Z"
                                    transform="translate(-9.689 -5.023)" />
                                <path class="icon-path" d="M25.184,28l3.967,23.138h1.622L34.741,28Z"
                                    transform="translate(-6.63 -6.789)" />
                            </g>
                        </svg> <span class="text">{{ __('挖礦養成') }} </span></a>
                    <a href="./member-record.html" class="member-function-list-item record"><svg
                            class="member-function-list-item-icon" viewBox="0 0 31 31.011">
                            <path class="icon-path"
                                d="M2.905,25.184H.966a.966.966,0,0,1,0-1.933H2.905a.966.966,0,1,1,0,1.933ZM31,3.888V27.123a3.888,3.888,0,0,1-3.888,3.888H5.81a3.888,3.888,0,0,1-3.888-3.888h.983a2.905,2.905,0,0,0,0-5.81H1.939V9.687h.966a2.905,2.905,0,0,0,0-5.8H1.939A3.888,3.888,0,0,1,5.827,0h21.3A3.888,3.888,0,0,1,31,3.888Zm-1.939,0A1.939,1.939,0,0,0,27.123,1.95H9.687V29.061H27.123a1.944,1.944,0,0,0,1.939-1.939ZM.966,7.776H2.905a.972.972,0,1,0,0-1.939H.966a.972.972,0,0,0,0,1.939Zm25.19-3.888H12.592a.966.966,0,0,0,0,1.933H26.156a.966.966,0,1,0,0-1.933Zm0,3.888H12.592a.972.972,0,0,0,0,1.939H26.156a.972.972,0,0,0,0-1.939Zm0,3.888H12.592a.972.972,0,0,0,0,1.939H26.156a.972.972,0,0,0,0-1.939Zm0,3.888H12.592a.972.972,0,0,0,0,1.939H26.156a.972.972,0,0,0,0-1.939Zm0,3.888H12.592a.972.972,0,0,0,0,1.939H26.156a.972.972,0,0,0,0-1.939Zm-5.816,3.888H12.592a.966.966,0,0,0,0,1.933h7.749a.966.966,0,0,0,0-1.933Z" />
                            </svg> <span class="text">{{ __('帳戶紀錄') }}</span></a>
                </nav>
            </div>
        </div>
    </div>
</div>

@include('layouts._menu')

@endsection

@section('pageJS')
<script src="/lib/jquery/dist/jquery.min.js"></script>
<script src="/lib/js-cookie/src/js.cookie.js"></script>
<script src="/scripts/main.js"></script>
<script src="/scripts/member.js"></script>
<script src="/scripts/index.js"></script>

@endsection
