// Jquery with no conflict
jQuery(document).ready(function($) {
  //##########################################
  // HOME SLIDER
  //##########################################
  $('.home-slider').flexslider({
    animation: "fade",
    controlNav: false,
    keyboardNav: true
  });
  //##########################################
  // PROJECT SLIDER
  //##########################################
  $('.project-slider').flexslider({
    animation: "fade",
    controlNav: true,
    directionNav: false,
    keyboardNav: true
  });
  //##########################################
  // Tweet feed
  //##########################################
  $("#tweets").tweet({
    count: 3,
    username: "ansimuz"
  });
  //##########################################
  // Top Widget
  //##########################################
  var topContainer = $("#top-widget");
  var topTrigger = $("#top-open");
  topTrigger.click(function() {
    topContainer.animate({
      height: 'toggle'
    });
    if (topTrigger.hasClass('tab-closed')) {
      topTrigger.removeClass('tab-closed');
    } else {
      topTrigger.addClass('tab-closed');
    }
    return false;
  });
  //##########################################
  // PrettyPhoto
  //##########################################
  $('a[data-rel]').each(function() {
    $(this).attr('rel', $(this).data('rel'));
  });
  $("a[rel^='prettyPhoto']").prettyPhoto();
  //##########################################
  // Create Combo Navi
  //##########################################  
  // Create the dropdown base
  $("<select id='comboNav' />").appendTo("#combo-holder");
  // Create default option "Go to..."
  $("<option />", {
    "selected": "selected",
    "value": "",
    "text": "Navigation"
  }).appendTo("#combo-holder select");
  // Populate dropdown with menu items
  $("#nav a").each(function() {
    var el = $(this);
    var label = $(this).parent().parent().attr('id');
    var sub = (label == 'nav') ? '' : '- ';
    $("<option />", {
      "value": el.attr("href"),
      "text": sub + el.text()
    }).appendTo("#combo-holder select");
  });
  //##########################################
  // Combo Navigation action
  //##########################################
  $("#comboNav").change(function() {
    location = this.options[this.selectedIndex].value;
  });
  //close     
});
