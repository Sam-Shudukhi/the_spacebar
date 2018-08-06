$(document).ready(function () {
   $('.js-like-artice').on('click',function (e) {
       e.preventDefault(); // prevent browser from following the link

       var $link = $(e.currentTarget); // link that was just clicked
       $link.toggleClass('fa-heart-o').toggleClass('fa-heart');

       $('.js-like-article-count').html('TEST');
   });
});