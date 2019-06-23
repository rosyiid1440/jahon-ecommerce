$('.page').on('click', function(e) {

    var tujuan = $(this).attr('href');
   
    var elemenTujuan = $(tujuan);
    


    //pindah scroll

    $('html,body').animate({
        scrollTop: elemenTujuan.offset().top - 60
    }, 1000, 'easeInOutExpo');

    e.preventDefault();
   });