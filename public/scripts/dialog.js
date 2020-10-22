// menu
$('#btn-menu').on('click', () => {
    $('#dialog-menu').toggleClass('active');
    $('#btn-menu').toggleClass('active');
    $('#btn-member').toggleClass('member-active');
});
$('#dialog-menu').on('click', () => {
    $('#dialog-menu').toggleClass('active');
    $('#btn-menu').toggleClass('active');
    $('#btn-member').toggleClass('member-active');
});

// 分享
$('#link-share').on('click', () => {
    $('#dialog-share').toggleClass('share-active');
});

$('#dialog-share').on('click', () => {
    $('#dialog-share').toggleClass('share-active');
});

// game-list
$('#btn-game').on('click', () => {
    $('#game-list').toggleClass('active');
    $('#all-game-height').toggleClass('all-game-active');
    $('#mainContainer').toggleClass('freeze');
});

// game-list滾動
$('#btn-game-list').on('click', () => {
    $('#game-list-move').toggleClass('move');
});

// buy-btn
$('#buy-btn,#buy-btn-1,#buy-btn-2,#buy-btn-3').on('click', () => {
    $('#dialog-buy').toggleClass('dialog-active');
    $('#mainContainer').toggleClass('freeze');
});

// buy-dialog
$('#buy-check-btn').on('click', () => {
    $('#buy-main-1').toggleClass('hiden');
    $('#buy-main-2').toggleClass('hiden');
});
$('#buy-main-2').on('click', () => {
    $('#buy-main-2').toggleClass('hiden');
    $('#buy-main-3').toggleClass('hiden');
});
$('#buy-main-3').on('click', () => {
    $('#buy-main-3').toggleClass('hiden');
    $('#buy-main-4').toggleClass('hiden');
});
$('#buy-finish-btn,#close-buy-btn').on('click', () => {
    $('#dialog-buy').toggleClass('dialog-active');
    $('#mainContainer').toggleClass('freeze');
    $('#buy-main-4').toggleClass('hiden');
    $('#buy-main-1').toggleClass('hiden');
});