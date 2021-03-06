(function () {

  var bv = new Bideo();
  bv.init({
    videoEl: document.querySelector('#background_video'),
    container: document.querySelector('body'),
    resize: true,
    autoplay: true,
    isMobile: window.matchMedia('(max-width: 2048px)').matches,
    playButton: document.querySelector('#play'),
    pauseButton: document.querySelector('#pause'),
    src: [
      {
        src: 'https://www.nitul.net/x/video.php',
        type: 'video/mp4'
      },
      {
        src: 'https://www.nitul.net/x/video.php',
        type: 'video/webm;codecs="vp8, vorbis"'
      }
    ],
    onLoad: function () {
      document.querySelector('#video_cover').style.display = 'none';
    }
  });
}());
