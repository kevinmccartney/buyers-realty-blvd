function gridImgSizer() {
  var ctaImg = document.querySelectorAll( '.custom-cta-inner' );

  for( i = 0; i < ctaImg.length; i++ ) {
    ctaImg[i].style.height = ( ctaImg[i].offsetWidth * 0.75 ) + 'px';
  }
}

window.onload = gridImgSizer();
window.addEventListener( 'resize', gridImgSizer );