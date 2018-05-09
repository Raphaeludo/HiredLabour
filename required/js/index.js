$(document).ready(function() {

  $(".main-header-section").backgroundCycle({
      imageUrls: [
        'required/img/carousel/labour.jpg',
        'required/img/carousel/labour1.jpg',
        'required/img/carousel/labour2.jpg'
      ],
      fadeSpeed: 1000,
      duration: 4000,
      backgroundSize: SCALING_MODE_COVER
  });


  $('#requestBtn').click(function (){
    $('.requestForm').css("display","block");
    $('#closeBtn').css("display","block");
    $('#requestBtn').css("display","none");
  });
  $('#closeBtn').click(function (){
    $('.requestForm').css("display","none");
    $('#closeBtn').css("display","none");
    $('#requestBtn').css("display","block");
  });

});
