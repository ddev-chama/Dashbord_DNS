$(document).ready(function () {
//Hide Form
    $('.group_2').hide();
    $('.group_3').hide();
    $('.group_4').hide();
    $('.show_form_2').hide();
    $('.show_form_3').hide();
    $('.show_form_4').hide();
//Show Form Table
    $('.show_form_1').click(function (e) { 
        if($(".group_1").is(":hidden"))
            {
              
                $('.graph').hide();
                $('.group_2').hide();    
                $('.group_3').hide();   
                $('.group_4').hide();  
               
            }
        else{
            if($(".show_form_1").hasClass("col-md-12") == false){
                    alertify.confirm('Confirm Message', function(){
                        $('.show_form_1').removeClass("col-lg-3").addClass("col-lg-12");            
                        $('.graph').show();
                        $( ".date_assessment" ).empty();
                        $('.show_form_2').hide();
                        $('.show_form_3').hide();
                        $('.show_form_4').hide();
                    }, 
                    function()
                        { alertify.error('Cancel');
                        $('.group_1').show();
                    });
                }
            else{
                $('.graph').show();
                $( ".date_assessment" ).empty();
                $('.show_form_2').hide();
                $('.show_form_3').hide();
                $('.show_form_4').hide();
              }
              
                
            }

        $('.group_1').slideToggle("fast");
    });
    $('.show_form_2').click(function (e) { 
        if($(".group_2").is(":hidden"))
            {
                $('.graph').hide();
                $('.group_1').hide();    
                $('.group_3').hide();   
                $('.group_4').hide();  
            }
        else{ $('.graph').show();}        
        $('.group_2').slideToggle();
    });
    $('.show_form_3').click(function (e) { 
        if($(".group_3").is(":hidden"))
        {
            $('.graph').hide();
            $('.group_1').hide();    
            $('.group_2').hide();   
            $('.group_4').hide();  
        }
        else{ $('.graph').show();}        
        $('.group_3').slideToggle();
    });
    $('.show_form_4').click(function (e) { 
        if($(".group_4").is(":hidden"))
        {
            $('.graph').hide();
            $('.group_1').hide();    
            $('.group_2').hide();   
            $('.group_3').hide();  
        }
        else{ $('.graph').show();}        
        $('.group_4').slideToggle();
       
    });
    //Get Date
    $('.get_date').click(function (e) {
        $('.show_form_2').show("fast");
        $('.show_form_3').show("fast");
        $('.show_form_4').show("fast");
        $.notify({
            title: '<strong>Submit Success</strong>',
            message: 'You can comeback to edit again '
        },{
            delay: 3,
            type: 'success'
        })
       $( ".date_assessment" ).empty();
        $( ".date_assessment" ).append( this.id );
        
    });
});