
'use strict';
$(document).ready(function(){
	$('.toggleHeaderNav').on('click', function(){
		$('.header-Navigation').slideToggle();
	});
// start code for header menu left right scroll here =================
    let content = document.getElementById('subHeaderNav'),
    scrollStep = 260;

    document.getElementById('right_scroll_nav').addEventListener('click', function(e) {
      e.preventDefault();
      let sl = content.scrollLeft,
          cw = content.scrollWidth;
        
      if ((sl + scrollStep) >= cw) {
        content.scrollTo(cw, 0);
      } else {
        content.scrollTo((sl + scrollStep), 0);
      }
    });

    document.getElementById('left_scroll_nav').addEventListener('click', function(e) {
      e.preventDefault();
      let sl = content.scrollLeft;
        
      if ((sl - scrollStep) <= 0) {
        content.scrollTo(0, 0);
      } else {
        content.scrollTo((sl - scrollStep), 0);
      }
    });
// end code for header menu left right scroll here ===================
// ========= START CODE FOR TAB VIEW HERE  ====================
	$('.tabsButtonSet li').on('click', function(){
		let getNav = $(this).data('tabnav');
        
		console.log(getNav);
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		$(this).parents('.tabSecCntWrap').find('.tabbedCntWrap').removeClass('active');
		$('#showTab_' + getNav).addClass('active');
	});
	$('.swipInit li').on('click', function(){
		$('.programSwipe').slick('setPosition');
	});
// ========= END CODE FOR TAB VIEW HERE  ======================
    $('.selected_currency').on('click', function(){
        $(this).toggleClass('active');
        $('.currencyList').toggleClass('active');
    });
    $('.currencyList li').on('click', function(){
        let getCurreny = $(this).data('currency');
        let getSymbool = $(this).data('symbool');
        console.log(getCurreny);
        $('#header_selected_currency').text(getCurreny);
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $(this).parents('.currencyList').removeClass('active');
        $('.selected_currency').removeClass('active');

        $('#header_selected_currency').attr({
            'data-currency' : getCurreny,
            'data-symbool': getSymbool
        });
        $('.currency_item').text(getSymbool);
    });

    $('.currency_item').each(function(){
        var crncySymbool = $('#header_selected_currency').data('symbool');
        $(this).text(crncySymbool);
    });
    $('.toggleNavLink').on('click', function(){
       let dataNav = $(this).data('nav');
       $('.toggleCnt').removeClass('active');
       $('#show_' + dataNav).addClass('active');
       console.log(dataNav);
    });
//======  START CODE FOR SCROLL STATIC HERE  =====================================
    let scrollSpyTabNav = $('.scrollSpyTabNav');
    if ($(scrollSpyTabNav)[0]){
      $('.scrollSpyLink').click(function() {
        $('html, body').animate({
          scrollTop: $($(this).attr('href')).offset().top - 140}, 700);
        return false;
      });

      $(window).scroll(function() {
       
        let getScroll = $('.scrollCntWrap');
        if ($(getScroll)[0]){
            $(getScroll).each(function(index) {
                var x = ($(".scrollSpyTabNav").offset().top) + 140;
                var z = $(this).attr("id");
              if (x > $(this).offset().top && x <= ($(this).offset().top + $(this).height())+160) {
                $('a.' + z).addClass('active');
              } else {
                $('a.' + z).removeClass('active');
              }
            });
        }
      });
    }
//======  END CODE FOR SCROLL STATIC HERE  =======================================
    $('.showHideLink').on('click', function(){
        $('.showHideContent').slideToggle();
    });
    $('.questionHead').on('click', function(){        
        $(this).next('.answerCntWrap').slideToggle();
        $(this).toggleClass('active');
    });

    $('.expcolBtn').on('click', function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });

    $('.videoPopupLink').on('click', function(){
        $('.fullModelWrap').show();
    });
    $('.videoClose').on('click', function(){
        $('.fullModelWrap').hide();
    });

// =========== start code for category filter here  ============
    $('.listingFilterTab span').on('click', function(){
        let dataFilter = $(this).attr('dataFilter');
        $('.listingFilterWrap').show();

        $('.filterContentDisp').hide();
        $('#show_' + dataFilter).show();
        console.log(dataFilter);
    });
    $('#closeFilterBar').on('click', function(){
        $('.listingFilterWrap').hide();
    });
// =========== end code for category filter here  ==============

});