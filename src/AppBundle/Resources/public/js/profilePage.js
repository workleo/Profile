function OpenInMyFrame(linkUrl,linkUrlReturn) {
 var video = document.getElementById('cartmanVideo');
 var videoSrc=document.getElementById('cartmanVideoSrc');
 video.pause();
 videoSrc.setAttribute('src', linkUrl);
 video.load();
 video.play();

     video.addEventListener('ended',function(){
         videoSrc.setAttribute('src',linkUrlReturn);
         video.load();
         video.remote();
     });
 }

