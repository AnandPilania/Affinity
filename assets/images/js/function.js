$(window).scroll(function(){
    if($(window).scrollTop() > 50){
        $('main').addClass('header-fixed')
    }else{
        $('main').removeClass('header-fixed')
    }

});

// <------------------------------Reasons To use---------------------->

$('.cb_btn').click(function(){
	$('.cb_btn_text').slideToggle('slow');
});

// <---------------------------Video-Section-------------------->

$('.video_pup').click(function(){$('.video_pup_con').fadeToggle('fast')})
$('.video_pup2').click(function(){$('.video_pup_con2').fadeToggle('fast')})
$('.video_pup3').click(function(){$('.video_pup_con3').fadeToggle('fast')})
$('.video_pup4').click(function(){$('.video_pup_con4').fadeToggle('fast')})

$('.cb_toggle').click(function(){$('.cb_toggle_text').slideToggle('fast')})
$('.cb_toggle2').click(function(){$('.cb_toggle_text2').slideToggle('fast')})
