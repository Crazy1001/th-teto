!function(e){var n={};function t(i){if(n[i])return n[i].exports;var o=n[i]={i:i,l:!1,exports:{}};return e[i].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=e,t.c=n,t.d=function(e,n,i){t.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:i})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,n){if(1&n&&(e=t(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(t.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var o in e)t.d(i,o,function(n){return e[n]}.bind(null,o));return i},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="",t(t.s=0)}([function(e,n,t){e.exports=t(1)},function(e,n,t){"use strict";t.r(n);t(2),t(3)},function(e,n,t){},function(e,n){$("#btn-menu").on("click",(function(){$("#dialog-menu").toggleClass("active"),$("#btn-menu").toggleClass("active"),$("#btn-member").toggleClass("member-active")})),$("#dialog-menu").on("click",(function(){$("#dialog-menu").toggleClass("active"),$("#btn-menu").toggleClass("active"),$("#btn-member").toggleClass("member-active")})),$("#link-share").on("click",(function(){$("#dialog-share").toggleClass("share-active")})),$("#dialog-share").on("click",(function(){$("#dialog-share").toggleClass("share-active")})),$("#btn-game").on("click",(function(){$("#game-list").toggleClass("active"),$("#all-game-height").toggleClass("all-game-active"),$("#mainContainer").toggleClass("freeze")})),$("#btn-game-list").on("click",(function(){$("#game-list-move").toggleClass("move")})),$("#buy-btn,#buy-btn-1,#buy-btn-2,#buy-btn-3").on("click",(function(){$("#dialog-buy").toggleClass("dialog-active"),$("#mainContainer").toggleClass("freeze")})),$("#buy-check-btn").on("click",(function(){$("#buy-main-1").toggleClass("hiden"),$("#buy-main-2").toggleClass("hiden")})),$("#buy-main-2").on("click",(function(){$("#buy-main-2").toggleClass("hiden"),$("#buy-main-3").toggleClass("hiden")})),$("#buy-main-3").on("click",(function(){$("#buy-main-3").toggleClass("hiden"),$("#buy-main-4").toggleClass("hiden")})),$("#buy-finish-btn,#close-buy-btn").on("click",(function(){$("#dialog-buy").toggleClass("dialog-active"),$("#mainContainer").toggleClass("freeze"),$("#buy-main-4").toggleClass("hiden"),$("#buy-main-1").toggleClass("hiden")}))}]);