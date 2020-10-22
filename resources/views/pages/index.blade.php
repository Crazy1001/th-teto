@extends('layouts.app')
@section('title', ' - 首页')

@section('content')
@include('layouts._marquee')
@include('layouts._header')

<div class="swiper-container">
    <div class="swiper-wrapper">
        <div href="" class="swiper-slide"><img src="./assets/images/bg/slider-banner.png" alt="" class="slidefilm-pic" /></div>
        <div href="" class="swiper-slide"><img src="./assets/images/bg/slider-banner.png" alt="" class="slidefilm-pic" /></div>
        <div href="" class="swiper-slide"><img src="./assets/images/bg/slider-banner.png" alt="" class="slidefilm-pic" /></div>
    </div>
    <div class="link">
        <a id="link-share" class="link-item"><img class="link-icon" src="./assets/images/SVG/share.svg" alt="" />
            <div class="link-text">分享</div>
        </a><a class="link-item-1">試玩</a>
        <div class="swiper-pagination"></div>
        <a href="./game-tw/twgame87.html" class="link-item"><img class="link-icon" src="./assets/images/SVG/Information.svg" alt="" />
            <div class="link-text">關於</div>
        </a>
    </div>
</div>
<div id="dialog-share" class="share-dialog" alt="">
    <div class="share-main">
        <div class="share-title">選擇分享方式</div>
        <div class="share-icon">
            <div class="share-icon-app"><img src="./assets/images/share/LINE.png" class="icon-app-img" />
                <div class="icon-app-text">Line</div>
            </div>
            <div class="share-icon-app"><img src="./assets/images/share/WECHAT.png" class="icon-app-img" />
                <div class="icon-app-text">Wechat</div>
            </div>
            <div class="share-icon-app"><img src="./assets/images/share/FB.png" class="icon-app-img" />
                <div class="icon-app-text">Facebook</div>
            </div>
            <div class="share-icon-app"><img src="./assets/images/share/IG.png" class="icon-app-img" />
                <div class="icon-app-text">Instagram</div>
            </div>
            <div class="share-icon-app"><img src="./assets/images/share/MAIL.png" class="icon-app-img" />
                <div class="icon-app-text">郵件</div>
            </div>
            <div class="share-icon-app"><img src="./assets/images/share/TEXT.png" class="icon-app-img" />
                <div class="icon-app-text">訊息</div>
            </div>
            <div class="share-bottom">更多...</div>
        </div>
    </div>
</div>
<div class="recommend-game">
    <div class="recommend-title">推薦遊戲</div>
    <div class="recommend-list">
        <a href="./game-tw/twgame85.html" class="recommend-item"><img class="recommend-item-pic" src="./assets/images/game-list/game85.png" alt="" /> </a>
        <a href="./game-tw/twgame73.html" class="recommend-item"><img class="recommend-item-pic" src="./assets/images/game-list/game73.png" alt="" /> </a>
        <a href="./game-tw/twgame81.html" class="recommend-item"><img class="recommend-item-pic" src="./assets/images/game-list/game81.png" alt="" /> </a>
        <a href="./game-tw/twgame29.html" class="recommend-item"><img class="recommend-item-pic" src="./assets/images/game-list/game29.png" alt="" /> </a>
        <a href="./game-tw/twgame323.html" class="recommend-item"><img class="recommend-item-pic" src="./assets/images/game-list/game323.png" alt="" /> </a>
        <a href="./game-tw/twgame96.html" class="recommend-item"><img class="recommend-item-pic" src="./assets/images/game-list/game96.png" alt="" /> </a>
        <a href="./game-tw/twgame201.html" class="recommend-item"><img class="recommend-item-pic" src="./assets/images/game-list/game201.png" alt="" /> </a>
        <a href="./game-tw/twgame23.html" class="recommend-item"><img class="recommend-item-pic" src="./assets/images/game-list/game23.png" alt="" /></a>
    </div>
</div>
<div class="banner">
    <div class="banner-title">秦朝末年,爭霸天下！</div>
    <a href="./game-tw/twgame87.html"><img class="banner-img" src="./assets/images/download/gpg87wallpaper.jpg" alt="" /></a>
</div>
<div class="sort-game">
    <div class="sort-title">經典博弈</div>
    <div class="sort-list">
        <a href="./game-tw/twgame55.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game55.jpg" alt="" /> </a>
        <a href="./game-tw/twgame62.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game62.jpg" alt="" /> </a>
        <a href="./game-tw/twgame72.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game72.jpg" alt="" /> </a>
        <a href="./game-tw/twgame82.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game82.jpg" alt="" /> </a>
        <a href="./game-tw/twgame84.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game84.jpg" alt="" /> </a>
        <a href="./game-tw/twgame31.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game31.jpg" alt="" /> </a>
        <a href="./game-tw/twgame96.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game96.jpg" alt="" /> </a>
        <a href="./game-tw/twgame85.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game85.jpg" alt="" /></a>
    </div>
</div>
<div class="ranking-game">
    <div class="ranking-title">熱門排行</div>
    <div class="ranking-list">
        <a href="./game-tw/twgame71.html" class="ranking-item"><img class="ranking-item-rank" src="./assets/images/rank/1.png" alt="" /> <img class="ranking-item-pic" src="./assets/images/game71.jpg" alt="" /> </a>
        <a href="./game-tw/twgame29.html" class="ranking-item"><img class="ranking-item-rank" src="./assets/images/rank/2.png" alt="" /> <img class="ranking-item-pic" src="./assets/images/game29.jpg" alt="" /> </a>
        <a href="./game-tw/twgame85.html" class="ranking-item"><img class="ranking-item-rank" src="./assets/images/rank/3.png" alt="" /> <img class="ranking-item-pic" src="./assets/images/game85.jpg" alt="" /> </a>
        <a href="./game-tw/twgame59.html" class="ranking-item"><img class="ranking-item-rank" src="./assets/images/rank/4.png" alt="" /> <img class="ranking-item-pic" src="./assets/images/game59.jpg" alt="" /> </a>
        <a href="./game-tw/twgame101.html" class="ranking-item"><img class="ranking-item-rank" src="./assets/images/rank/5.png" alt="" /> <img class="ranking-item-pic" src="./assets/images/game101.jpg" alt="" /> </a>
        <a href="./game-tw/twgame29.html" class="ranking-item"><img class="ranking-item-rank" src="./assets/images/rank/6.png" alt="" /> <img class="ranking-item-pic" src="./assets/images/game29.jpg" alt="" /></a>
    </div>
</div>
<div class="sort-game">
    <div class="sort-title">血脈噴張</div>
    <div class="sort-list">
        <a href="./game-tw/twgame55.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game55.jpg" alt="" /> </a>
        <a href="./game-tw/twgame62.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game62.jpg" alt="" /> </a>
        <a href="./game-tw/twgame72.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game72.jpg" alt="" /> </a>
        <a href="./game-tw/twgame82.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game82.jpg" alt="" /> </a>
        <a href="./game-tw/twgame84.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game84.jpg" alt="" /> </a>
        <a href="./game-tw/twgame31.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game31.jpg" alt="" /> </a>
        <a href="./game-tw/twgame96.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game96.jpg" alt="" /> </a>
        <a href="./game-tw/twgame85.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game85.jpg" alt="" /></a>
    </div>
</div>
<div class="video">
    <div class="video-title">經典拉霸：777</div><video class="video-film" poster="./assets/images/video-image/gpg24movie.jpg"></video>
    <div class="video-play"><img class="video-play-img" src="./assets/images/SVG/play.svg" alt="" /></div>
</div>
<div class="sort-game">
    <div class="sort-title">益智棋牌</div>
    <div class="sort-list">
        <a href="./game-tw/twgame55.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game55.jpg" alt="" /> </a>
        <a href="./game-tw/twgame62.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game62.jpg" alt="" /> </a>
        <a href="./game-tw/twgame72.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game72.jpg" alt="" /> </a>
        <a href="./game-tw/twgame82.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game82.jpg" alt="" /> </a>
        <a href="./game-tw/twgame84.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game84.jpg" alt="" /> </a>
        <a href="./game-tw/twgame31.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game31.jpg" alt="" /> </a>
        <a href="./game-tw/twgame96.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game96.jpg" alt="" /> </a>
        <a href="./game-tw/twgame85.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game85.jpg" alt="" /></a>
    </div>
</div>
<div class="bigersort-game">
    <div class="bigersort-title">中國風</div>
    <div class="bigersort-list">
        <a href="./game-tw/twgame55.html" class="bigersort-item"><img class="bigersort-item-pic" src="./assets/images/game55.jpg" alt="" /> </a>
        <a href="./game-tw/twgame82.html" class="bigersort-item"><img class="bigersort-item-pic" src="./assets/images/game82.jpg" alt="" /> </a>
        <a href="./game-tw/twgame84.html" class="bigersort-item"><img class="bigersort-item-pic" src="./assets/images/game84.jpg" alt="" /> </a>
        <a href="./game-tw/twgame31.html" class="bigersort-item"><img class="bigersort-item-pic" src="./assets/images/game31.jpg" alt="" /> </a>
        <a href="./game-tw/twgame96.html" class="bigersort-item"><img class="bigersort-item-pic" src="./assets/images/game96.jpg" alt="" /> </a>
        <a href="./game-tw/twgame85.html" class="bigersort-item"><img class="bigersort-item-pic" src="./assets/images/game85.jpg" alt="" /></a>
    </div>
</div>
<div class="sort-game">
    <div class="sort-title">可愛逗趣</div>
    <div class="sort-list">
        <a href="./game-tw/twgame55.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game55.jpg" alt="" /> </a>
        <a href="./game-tw/twgame62.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game62.jpg" alt="" /> </a>
        <a href="./game-tw/twgame72.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game72.jpg" alt="" /> </a>
        <a href="./game-tw/twgame82.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game82.jpg" alt="" /> </a>
        <a href="./game-tw/twgame84.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game84.jpg" alt="" /> </a>
        <a href="./game-tw/twgame31.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game31.jpg" alt="" /> </a>
        <a href="./game-tw/twgame96.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game96.jpg" alt="" /> </a>
        <a href="./game-tw/twgame85.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game85.jpg" alt="" /></a>
    </div>
</div>
<div class="sort-game">
    <div class="sort-title">一決高下</div>
    <div class="sort-list">
        <a href="./game-tw/twgame55.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game55.jpg" alt="" /> </a>
        <a href="./game-tw/twgame62.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game62.jpg" alt="" /> </a>
        <a href="./game-tw/twgame72.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game72.jpg" alt="" /> </a>
        <a href="./game-tw/twgame82.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game82.jpg" alt="" /> </a>
        <a href="./game-tw/twgame84.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game84.jpg" alt="" /> </a>
        <a href="./game-tw/twgame31.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game31.jpg" alt="" /> </a>
        <a href="./game-tw/twgame96.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game96.jpg" alt="" /> </a>
        <a href="./game-tw/twgame85.html" class="sort-item"><img class="sort-item-pic" src="./assets/images/game85.jpg" alt="" /></a>
    </div>
</div>
<div class="big-banner">
    <div class="big-banner-title">陽光、沙灘、香蕉船：BANANA</div>
    <a href="./game-tw/twgame74.html"><img class="big-banner-img" src="./assets/images/video-image/gpg74movie.jpg" alt="" /></a>
</div>
<div class="bottom"></div>

{{-- @if (!Auth::check())
@include('layouts._login')
@endif --}}

@include('layouts._menu')

@endsection

@section('pageJS')
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
        },
    });
</script>
<script src="/scripts/index.js"></script>

@endsection
