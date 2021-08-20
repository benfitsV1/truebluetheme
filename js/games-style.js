var $filters = $(".filters .unicon");
var $content = $(".content");

$filters.on("click", "a", function(e) {
  e.preventDefault();

  var id = $(this).attr("href");

  $content.filter(":not([hidden])").attr("hidden", true);

  TweenMax.from(id, .5, {autoAlpha: 0, y: 100, ease:Power4.easeInOut});
  $(id).removeAttr("hidden");

  $filters.find(".active").removeClass("active");

  $(this).addClass("active");
});



