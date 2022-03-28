$(function(){ 
     // menu desplegable de la izquierda 
   $menu = $('#header').find('ul').find('li');
        $menu.hover(function() {
            $(this).children('ul').stop();
            $(this).children('ul').slideDown();     
        }, function() {
            $(this).children('ul').stop();
            $(this).children('ul').slideUp();
        });
    //carrusel 
    $menu = $('#menu_2').find('ul').find('li');
        $menu.hover(function() {
            $(this).children('ul').stop();
            $(this).children('ul').slideDown();     
        }, function() {
            $(this).children('ul').stop();
            $(this).children('ul').slideUp();
        });
    $('.flexslider').flexslider();
    /*$carrusel = $('.flexslider').find('li').find('a');
    $carrusel.hover(function() {
            $(this).css({ background: "#2E2E2E"});   
        }, function() {
            $(this).css({background: "#777777"});
        });*/
    //////cambio de paginas
    $("#inicio").click(function(){
         $("#page2").hide();
         $("#page3").hide();
         $("#page4").hide();
         $("#page5").hide();
         $("#page6").hide();
         $("#page7").hide();
         $("#page8").hide();
         $("#page9").hide();
         $("#page10").hide();
         $("#page11").hide();
         $("#page12").hide();
         $("#page13").hide();
         $("#page14").hide();
    });
    $("#l1").click(function(){
        $("#main").hide();
        $("#page2").show();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
    $("#l2").click(function(){
        $("#main").hide();
        $("#page3").show();
        $("#page2").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
     $("#l3").click(function(){
        $("#main").hide();
        $("#page4").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
  $("#l4").click(function(){
        $("#main").hide();
        $("#page5").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
     $("#l5").click(function(){
        $("#main").hide();
        $("#page6").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
     $("#l6").click(function(){
        $("#main").hide();
        $("#page7").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
     $("#l7").click(function(){
        $("#main").hide();
        $("#page8").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
    $("#l8").click(function(){
        $("#main").hide();
        $("#page9").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
    $("#l9").click(function(){
        $("#main").hide();
        $("#page10").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
    $("#l10").click(function(){
        $("#main").hide();
        $("#page11").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page12").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
     $("#l11").click(function(){
        $("#main").hide();
        $("#page12").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page13").hide();
        $("#page14").hide();
    });
    $("#l12").click(function(){
        $("#main").hide();
        $("#page13").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page14").hide();
    });
     $("#l13").click(function(){
        $("#main").hide();
        $("#page14").show();
        $("#page2").hide();
        $("#page3").hide();
        $("#page4").hide();
        $("#page5").hide();
        $("#page6").hide();
        $("#page7").hide();
        $("#page8").hide();
        $("#page9").hide();
        $("#page10").hide();
        $("#page11").hide();
        $("#page12").hide();
        $("#page13").hide();
    });
    ///login 
    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("form").submit(function () {
        switch(this.id) {
            case "login-form":
                var $lg_username=$('#login_username').val();
                var $lg_password=$('#login_password').val();
                if ($lg_username == "ERROR") {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
                } else {
                    msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
                }
                return false;
                break;
            case "lost-form":
                var $ls_email=$('#lost_email').val();
                if ($ls_email == "ERROR") {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Send error");
                } else {
                    msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Send OK");
                }
                return false;
                break;
            case "register-form":
                var $rg_username=$('#register_username').val();
                var $rg_email=$('#register_email').val();
                var $rg_password=$('#register_password').val();
                if ($rg_username == "ERROR") {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
                } else {
                    msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
                }
                return false;
                break;
            default:
                return false;
        }
        return false;
    });
    
    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }
    
    function msgFade ($msgId, $msgText) {
        $msgId.fadeOut($msgAnimateTime, function() {
            $(this).text($msgText).fadeIn($msgAnimateTime);
        });
    }
    
    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
        var $msgOld = $divTag.text();
        msgFade($textTag, $msgText);
        $divTag.addClass($divClass);
        $iconTag.removeClass("glyphicon-chevron-right");
        $iconTag.addClass($iconClass + " " + $divClass);
        setTimeout(function() {
            msgFade($textTag, $msgOld);
            $divTag.removeClass($divClass);
            $iconTag.addClass("glyphicon-chevron-right");
            $iconTag.removeClass($iconClass + " " + $divClass);
  		}, $msgShowTime);
    }

    
});
