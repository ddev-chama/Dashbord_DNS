$(document).ready(function () {
    $('.group_1').hide();
    $('.group_2').hide();
    $('.group_3').hide();
    $('.group_4').hide();
    $('.show_form_1').click(function (e) { 
        $('.graph').hide();
        $('.group_1').hide();
        $('.graph').slideToggle();
        $('.group_1').slideToggle("fast");
        $('.graph').hide();
        $('.group_2').css("display", "none"); 
        $('.group_3').css("display", "none");
        $('.group_4').css("display", "none");
    });
    $('.show_form_2').click(function (e) { 
        $('.group_2').hide();
        $('.graph').hide();
        $('.group_2').slideToggle();
        $('.group_1').hide(); 
        $('.group_3').hide();
        $('.group_4').hide();
    });
    $('.show_form_3').click(function (e) { 
            $('.group_3').hide();
            $('.group_3').slideToggle();
            $('.group_1').hide();
            $('.group_2').hide();
            $('.group_4').hide();
    });
    $('.show_form_4').click(function (e) { 
        $('.group_4').hide();
        $('.group_4').slideToggle();
        $('.group_1').hide();
        $('.group_2').hide();
        $('.group_3').hide();
        
    });
});