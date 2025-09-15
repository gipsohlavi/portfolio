const ww = window.innerWidth;
const wh = window.innerHeight;
const hw = ww / 2;
const hh = wh / 2;
const pm = 20; // parallax margin

const $bg = $('#frame');
const $box = $('#box');

$(window).on('mousemove', (e) => {
  
  // 中心から端までの距離を、余分に大きくとった背景画像の分（ここでは10px）に割り当てる
  const mw = ( e.clientX - hw ) / hw * ( pm / 2 );
  const mh = ( e.clientY - hh ) / hh * ( pm / 2 );
  console.log( mw, mh );
  
  $bg.css('margin-left', mw );
  
  // これでも同じ
  // $bg.css('left', hw + mw );
  // $bg.css('top', hh + mh );
  
  $box.css('margin-left', mw * -0.5 );
  
})
// クラスの付け外しのみ
window.addEventListener('load', function () {
  const text = document.querySelector('.move-text');
  text.classList.add('is-active');
});