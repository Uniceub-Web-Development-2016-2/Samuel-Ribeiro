$(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 20) {
          $('#cabecalho')
            .css({
              'height': '116px'
            });
          $('#logado')
            .css({
              'margin-top': '0px'
            });
          $('#main_content')
            .css({
              'top': '116px'
            })
          $('#loginform')
            .css({
              'width': '500px',
              'margin-top' : '0px'
            });
          $('#logo')
            .css({
              'padding': '0px',
            });
          $('#img_logo')
            .css({
              'height': '80px'
            });
          $('#logo_bg')
            .css({
              'height': '116px'
            });
          $('#input_senha')
            .css({
              'margin-top': '0px'
            });
          $('#btn_logar')
            .css({
              'margin-top': '0px'
            });
        } else {
          $('#cabecalho')
            .css({
              'height': '200px'
            });
          $('#logado')
            .css({
              'margin-top': '-20px'
            });
          $('#main_content')
            .css({
              'top': '200px'
            });
          $('#loginform')
            .css({
              'width': '180px',
              'margin-top' : '-20px'
            });
          $('#img_logo')
            .css({
              'height': '120px'
            });
          $('#logo')
            .css({
              'padding': '20px',
            });
          $('#logo_bg')
            .css({
              'height': '164px'
            });
          $('#input_senha')
            .css({
              'margin-top': '20px'
            });
          $('#btn_logar')
            .css({
              'margin-top': '10px'
            });
        }
    });
