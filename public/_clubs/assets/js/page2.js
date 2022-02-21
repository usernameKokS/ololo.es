$(".caption___jGR_0").click(function() {
  $(".languageSwitcher___1Aelp .dropdownListItems___fYtqM .items___3CjD4").toggleClass("display-block"); return false;
});
$(document).on('click', function(e) {
  if (!$(e.target).closest(".caption___jGR_0").length) {
    $('.languageSwitcher___1Aelp .dropdownListItems___fYtqM .items___3CjD4').removeClass("display-block");
  }
  e.stopPropagation();
});
jQuery(window).scroll(function() {
    var the_top = jQuery(document).scrollTop();
	console.log(the_top);
    if (the_top > 20) {
        jQuery('.appHeaderInner___3lkmP').addClass('isStick___3N1cu');
    }
    else {
        jQuery('.appHeaderInner___3lkmP').removeClass('isStick___3N1cu');
    }
});
$(function() {
    $('.sampleItems___3YT8P img').hover(function() {
      var src = $(".sampleItems___3YT8P img").attr('src');
      $(".sampleView___2XsKp img").attr(src);
    });
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
