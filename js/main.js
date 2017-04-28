(function($) {
    "use strict"; // Start of use strict


    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    
    $(document).scroll(function() {
        if( $(document).scrollTop() >= $("header").height() ){
            $(".navbar-default").addClass('navbar-fixed-top');
        } else {
            $(".navbar-default").removeClass('navbar-fixed-top');
        }
    })

    $('.owl-carousel').owlCarousel({        
        margin:0,
        responsiveClass:true,
        nav:true,
        slideBy: 1,               
        loop: false,
        navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
        responsive:{
            0:{
                items:1,
                nav:true
            },
            480:{
                items:1,
                nav:true
            },
            768:{
                items:1,
                nav:true
            }
        }
    })

    $(window).resize(function(){
        $('header .cover').height( $(window).height() );
    })
    $(window).load(function(){
        $('header .cover').height( $(window).height() );
    })
    
    
    $("input, textarea").keydown(function(){
        $(this).removeClass('error');
    })
    $("#frmContacto .btn").click(function(){
        var err=0;
        $("#frmContacto input, #frmContacto textarea").each(function(){
            if( $(this).val() == "" ){
                $(this).addClass('error');
                err++;
            }
        })
        if( err == 0 ){
            $.ajax({
    			type: "POST",
    			url: "ajax/ajax.contacto.php",
    			data: $("#frmContacto").serialize(),
                dataType: 'html',
                beforeSend: function(){                    
                },
    			success: function () {
    			     alert("Gracias por su mensaje\nNos contactaremos a la brevedad");
                     $("#frmContacto input.txt, #frmContacto textarea").val("");
                     $('html, body').stop().animate({
                        scrollTop: 0
                    }, 1250, 'easeInOutExpo');                     
                }
    		})
        }
    })
    
    
    $("#frmNewsletter .btn").click(function(){        
        if( $("#email_news") == "" ){
            $("#email_news").addClass('error');
        } else {
            $.ajax({ 
    			type: "POST",
    			url: "ajax/ajax.newsletter.php",
    			data: $("#frmNewsletter").serialize(),
                dataType: 'html',
                beforeSend: function(){                    
                },
    			success: function () {
    			     alert("Gracias por tu suscripción");
                     $("#email_news").val("");
                     $('html, body').stop().animate({
                        scrollTop: 0
                    }, 1250, 'easeInOutExpo');                     
                }
    		})
        }
    })
    
    

})(jQuery); // End of use strict

