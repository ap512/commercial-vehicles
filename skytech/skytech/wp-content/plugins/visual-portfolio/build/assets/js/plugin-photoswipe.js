!function(){"use strict";var t={9924:function(t){t.exports=function(t){return"number"==typeof t?t-t==0:"string"==typeof t&&""!==t.trim()&&(Number.isFinite?Number.isFinite(+t):isFinite(+t))}}},e={};function o(i){var n=e[i];if(void 0!==n)return n.exports;var s=e[i]={exports:{}};return t[i](s,s.exports,o),s.exports}o.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(e,{a:e}),e},o.d=function(t,e){for(var i in e)o.o(e,i)&&!o.o(t,i)&&Object.defineProperty(t,i,{enumerable:!0,get:e[i]})},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},function(){var t=o(9924),e=o.n(t),i=window.jQuery,n=o.n(i);const{Image:s,VPData:r,VPPopupAPI:p,PhotoSwipe:l,PhotoSwipeUI_Default:a}=window,{__:__,settingsPopupGallery:c}=r;function d(t,e){if(void 0===e)return void(t&&t.itemHolders.length&&t.itemHolders.forEach((e=>{e.item&&e.item.html&&d(t,e.item)})));const o=t.viewportSize.x;let i=t.viewportSize.y;const s=e.vw/e.vh;let r;const p=n()(e.container),l=t.options.barsSize;let a=0,c=0;l&&(a=l.top&&"auto"!==l.top?l.top:0,c=l.bottom&&"auto"!==l.bottom?l.bottom:0),i-=a+c,r=s>o/i?o:i*s;const u=p.find(".vp-pswp-video");u.css("max-width",r),u.children().css({paddingBottom:e.vh/e.vw*100+"%"}),p.css({top:a,bottom:c})}if(l&&p){let t;if(!n()(".vp-pswp").length){const t=`\n        <div class="pswp vp-pswp${c.click_to_zoom?"":" vp-pswp-no-zoom"}" tabindex="-1" role="dialog" aria-hidden="true">\n            <div class="pswp__bg"></div>\n            <div class="pswp__scroll-wrap">\n                <div class="pswp__container">\n                    <div class="pswp__item"></div>\n                    <div class="pswp__item"></div>\n                    <div class="pswp__item"></div>\n                </div>\n                <div class="pswp__ui pswp__ui--hidden">\n                    <div class="pswp__top-bar">\n                        <div class="pswp__counter"></div>\n                        <button class="pswp__button pswp__button--close" title="${__.pswp_close}"></button>\n                        <button class="pswp__button pswp__button--share" title="${__.pswp_share}"></button>\n                        <button class="pswp__button pswp__button--fs" title="${__.pswp_fs}"></button>\n                        <button class="pswp__button pswp__button--zoom" title="${__.pswp_zoom}"></button>\n                    </div>\n                    <div class="pswp__preloader">\n                        <div class="pswp__preloader__icn">\n                            <div class="pswp__preloader__cut">\n                                <div class="pswp__preloader__donut"></div>\n                            </div>\n                        </div>\n                    </div>\n                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">\n                        <div class="pswp__share-tooltip"></div>\n                    </div>\n                    <button class="pswp__button pswp__button--arrow--left" title="${__.pswp_prev}"></button>\n                    <button class="pswp__button pswp__button--arrow--right" title="${__.pswp_next}"></button>\n                    <div class="pswp__caption">\n                        <div class="pswp__caption__center"></div>\n                    </div>\n                </div>\n            </div>\n        </div>\n        `;n()("body").append(t)}p.vendor="photoswipe",p.open=function(o,i,r){const u=[];o.forEach((t=>{"embed"===t.type?u.push({html:`<div class="vp-pswp-video"><div>${t.embed}</div></div>`,vw:t.width||0,vh:t.height||0,title:t.caption}):u.push({src:t.src,el:t.el,w:t.width||0,h:t.height||0,title:t.caption,o:{src:t.src,w:t.width||0,h:t.height||0},...t.srcMedium?{m:{src:t.srcMedium,w:t.srcMediumWidth||0,h:t.srcMediumHeight||0},msrc:t.srcMedium}:{}})}));const w=n()(".vp-pswp"),_=w[0],h={captionAndToolbarShowEmptyCaptions:!1,closeEl:c.show_close_button,captionEl:!0,fullscreenEl:c.show_fullscreen_button,zoomEl:c.show_zoom_button,shareEl:c.show_share_button,counterEl:c.show_counter,arrowEl:c.show_arrows,shareButtons:[{id:"facebook",label:__.pswp_share_fb,url:"https://www.facebook.com/sharer/sharer.php?u={{url}}"},{id:"twitter",label:__.pswp_share_tw,url:"https://twitter.com/intent/tweet?text={{text}}&url={{url}}"},{id:"pinterest",label:__.pswp_share_pin,url:"https://www.pinterest.com/pin/create/button/?url={{url}}&media={{image_url}}&description={{text}}"}],getImageURLForShare(){const e=o[t.getCurrentIndex()];return"image"===e.type&&e.src?e.src:t.currItem.src||""},getPageURLForShare(){const e=o[t.getCurrentIndex()];return"image"===e.type&&e.src?e.src:window.location.href},getTextForShare(){const e=o[t.getCurrentIndex()];if(e.caption){const t=n()(e.caption);if(t.filter(".vp-portfolio__item-popup-title").length)return t.filter(".vp-portfolio__item-popup-title").text();if(t.filter(".vp-portfolio__item-popup-description").length)return t.filter(".vp-portfolio__item-popup-description").text()}return""},bgOpacity:1,tapToClose:!1,tapToToggleControls:!0,showHideOpacity:!0,history:!1,getThumbBoundsFn(t){if(!u[t]||!u[t].el)return!1;const e=n()(u[t].el).find("img")[0];if(!e)return!1;const o=e.getBoundingClientRect(),i=window.pageYOffset||document.documentElement.scrollTop,s=parseFloat(w.css("top"))||0;return{x:o.left,y:o.top+i-s,w:o.width,h:o.height}},getDoubleTapZoom(t,e){return t?c.click_to_zoom?e.w>window.innerWidth&&e.w*e.initialZoomLevel/window.innerWidth<.25?window.innerWidth/e.w:1:e.initialZoomLevel:e.initialZoomLevel<.7?1:1.5}};if(h.index=parseInt(i,10),!e()(h.index))return;let m;t=new l(_,a,u,h);let v,f=!1,b=!0;t.listen("beforeResize",(()=>{m=t.viewportSize.x*window.devicePixelRatio,f&&m<1e3?(f=!1,v=!0):!f&&m>=1e3&&(f=!0,v=!0),v&&!b&&t.invalidateCurrItems(),b&&(b=!1),v=!1})),t.listen("gettingData",((t,e)=>{e.html?e.html=e.html.replace(/autoplay=1/,"autoplay=0"):f&&e.o?(e.o.src&&(e.src=e.o.src),e.o.w&&(e.w=e.o.w),e.o.h&&(e.h=e.o.h)):e.m&&(e.m.src&&(e.src=e.m.src),e.m.w&&(e.w=e.m.w),e.m.h&&(e.h=e.m.h))})),t.listen("imageLoadComplete",((e,o)=>{if(o.h<1||o.w<1){const e=new s;e.onload=()=>{o.w=e.width,o.h=e.height,t.invalidateCurrItems(),t.updateSize(!0)},e.src=o.src}})),t.listen("resize",(function(){d(this)})),t.listen("afterChange",(function(){d(this),r&&r.emitEvent("afterChangePhotoSwipe",[this,t])})),t.listen("beforeChange",(function(){const e=this;if(e&&e.itemHolders.length){const t=e.getCurrentIndex();e.itemHolders.forEach((e=>{const o=!!e.el&&n()(e.el).find(".vp-pswp-video iframe");o&&o.length&&(e.index===t?o.attr("src",o.attr("src").replace(/autoplay=0/,"autoplay=1")):o.attr("src",o.attr("src").replace(/autoplay=1/,"autoplay=0")))}))}r&&r.emitEvent("beforeChangePhotoSwipe",[e,t])})),t.listen("destroy",(function(){const e=this;if(e){e.itemHolders.length&&e.itemHolders.forEach((t=>{t.el&&n()(t.el).find(".vp-pswp-video").remove()}));const i=o[e.getCurrentIndex()];i&&p.maybeFocusGalleryItem(i),r&&r.emitEvent("beforeClosePhotoSwipe",[h,o,t])}t=!1})),r&&r.emitEvent("beforeInitPhotoSwipe",[h,u,i,t]),t.init(),r&&r.emitEvent("initPhotoSwipe",[h,u,i,t])},p.close=function(){t&&(t.close(),t=!1)}}}()}();