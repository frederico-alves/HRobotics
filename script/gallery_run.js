$(document).ready(function() {
    $('#lightgallery').lightGallery({
      pager: true
    });
  });

  $('#video-gallery').lightGallery({
    loadYoutubeThumbnail: true,
    youtubeThumbSize: 'default',
    loadVimeoThumbnail: true,
    vimeoThumbSize: 'thumbnail_medium',
}); 