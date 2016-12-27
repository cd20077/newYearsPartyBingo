(function($){
    $('.button').click(function(){
      var buttonId = $(this).attr('id');
      $('#modal-container').removeAttr('class').addClass(buttonId);
      $('body').addClass('modal-active');
    });

    $('.modal-background ').click(function(){
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
    });

    mVideo = document.getElementById("video");
    mVideo.addEventListener("timeupdate", function() {
        $('#P').click(function(){mVideo.play();});
        $('#S').click(function(){mVideo.pause();});
    }, true);

})(jQuery);