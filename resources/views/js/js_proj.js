var principal = {};

principal.start = function(){
  $('#footer').css('position','static');
};

$(window).scroll(function(){   
  //var s = $(document.body)[0].scrollHeight;
  var h = $(window).height();
  s > h ? $('#footer').css('position','static') : $('#footer').css('position','fixed');;
  //$('#footer').css('top',h-42); // CASO PRECISE DESCONTAR O NAVBAR
  $('#footer').css('top',h); // PARA FIXAR O FOOTER NA PARTE INFERIOR DA PAGINA
});

principal.start();