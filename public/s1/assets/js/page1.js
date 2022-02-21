window.onscroll = function() {
  var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  if(scrolled >= 20){
    document.querySelector(".links").style.display = 'none';
  }
  if(scrolled <= 10){
    document.querySelector(".links").style.display = 'block';
  }
}
// $(document).ready(function(){
// 	$(".caption___jGR_0").click(function(){
// 		$(".languageSwitcher___1Aelp .dropdownListItems___fYtqM .items___3CjD4").toggleClass("display-block"); return false;
// 	});
// });
$(".caption___jGR_0").click(function() {
  $(".languageSwitcher___1Aelp .dropdownListItems___fYtqM .items___3CjD4").toggleClass("display-block"); return false;
});
$(document).on('click', function(e) {
  if (!$(e.target).closest(".caption___jGR_0").length) {
    $('.languageSwitcher___1Aelp .dropdownListItems___fYtqM .items___3CjD4').removeClass("display-block");
  }
  e.stopPropagation();
});

$(".sandwichMenu___WDedW").click(function() {
  $(".sandwichMenu___WDedW").toggleClass("isActive___3Jj_6");
  $(".appHeader___2GdyR").toggleClass("isExpanded___qu6SJ"); return false;
});

$(document).on('click', function(e) {
  if (!$(e.target).closest(".sandwichMenu___WDedW").length) {
    $('.sandwichMenu___WDedW').removeClass("isActive___3Jj_6");
    $('.appHeader___2GdyR').removeClass("isExpanded___qu6SJ");
  }
  e.stopPropagation();
});

$('a[href*="#"]').on('click', function (e) {
  e.preventDefault();

  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top
  }, 500, 'linear');
});

$('.accordion-item .heading').on('click', function(e) {
    e.preventDefault();

    // Add the correct active class
    if($(this).closest('.accordion-item').hasClass('active')) {
        // Remove active classes
        $('.accordion-item').removeClass('active');
    } else {
        // Remove active classes
        $('.accordion-item').removeClass('active');

        // Add the active class
        $(this).closest('.accordion-item').addClass('active');
    }

    // Show the content
    var $content = $(this).next();
    $content.slideToggle(100);
    $('.accordion-item .content').not($content).slideUp('fast');
});
jQuery(window).on('resize', function() {
    var viewportWidth = jQuery(window).width();

    if (viewportWidth < 480) {
        $('.multiple-items').slick('unslick');
    }
});
