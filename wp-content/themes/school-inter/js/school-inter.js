$(window).on('load', function() {
    $('.equal').matchHeight({ property: 'min-height' });
});
function parseUrlParamsArr(name) {
	url = location.search;
	if (url.match(/%5B\d*%5D/)) {
		url = url.replace(/%5B\d*%5D/g, '[]');
	}
	var paramArr = url.split(name + '=');
	var newParamArr = [];
	paramArr.forEach(function(param){
		newParam = param.replace(/\D/g,'');
		if(newParam){
		newParamArr.push(newParam);
		}
	});
	return newParamArr;
}
var checkedNewsTags = parseUrlParamsArr('tag_ids[]');
checkedNewsTags.forEach(function(tag){ 
$(".news-filter[value=" + tag +"]").attr('checked', true);
});

$(document).ready(function(){
  var maxSlides = 4;
  var slideWidth = 190;
  var moveSlides = 4;
  var slideMargin = 18;
  if (window.matchMedia('(max-width: 480px)').matches) {
		maxSlides = 1;
		slideWidth = 250;
		moveSlides = 1;
		slideMargin = 0;
  }
  var slider1 = $('#tslider').bxSlider({
  maxSlides: maxSlides,
  minSlides: 1,
  slideWidth: slideWidth,
  slideMargin: slideMargin,
  moveSlides: moveSlides,
  mode: 'horizontal',
  infiniteLoop: false,
  hideControlOnEnd: true,
  pager:false,
  });
  var slider2 = $('#nslider').bxSlider({
  maxSlides: maxSlides,
  minSlides: 1,
  slideWidth: slideWidth,
  slideMargin: slideMargin,
  moveSlides: moveSlides,
  mode: 'horizontal',
  infiniteLoop: false,
  hideControlOnEnd: true,
  pager:false,
  });
  var slider3 = $('#pslider').bxSlider({
  maxSlides: 1,
  minSlides: 1,
  slideWidth: 820,
  slideMargin: 18,
  moveSlides: 1,
  mode: 'horizontal',
  infiniteLoop: false,
  hideControlOnEnd: true,
  pager:false,
  });
  
    $('.triangle-left').click(function(){
      slider1.goToPrevSlide();
      return false;
    });
	 $('.triangle-right').click(function(){
      slider1.goToNextSlide();
      return false;
    });
	$('.tr-left').click(function(){
      slider2.goToPrevSlide();
      return false;
    });
	 $('.tr-right').click(function(){
      slider2.goToNextSlide();
      return false;
    });
	$('.t-left').click(function(){
      slider3.goToPrevSlide();
      return false;
    });
	 $('.t-right').click(function(){
      slider3.goToNextSlide();
      return false;
    });
});
$('.news-filter').change(function () {
		tag_ids_string = '';
		var tags_number = $(":checkbox:checked").length;
		$(':checkbox:checked').each(function(i){
		  tag_ids_string += (i == (tags_number -1))? $(this).val():$(this).val() + "&" + "tag_ids[]=";
        });
		if (tag_ids_string){
			if (window.location.href.indexOf('page') !== -1){
				var newsUrl = window.location.href.split('page')[0];
				window.location = newsUrl + "?tag_ids[]=" + tag_ids_string;
			}
			else {
			window.location = window.location.href.split('?')[0] + "?tag_ids[]=" + tag_ids_string;
			}
		}
		else {window.location = window.location.href.split('?')[0];};
		
	});

$('.cday').each(function() {
	var text = $(this).text();
	var reg1 = /[0-9:0-9]+/;
	var reg2 =  "<strong>$&</strong>";
	text = text.replace(reg1, reg2);
	$(this).html(text);
});

$(".age-filter").change(function(){
	var val = $( "input[type=checkbox][name=options]:checked").val();
	var filterArr = $('input[type=checkbox]:checked').map(function(_, el) {
    return $(el).val();
	}).get();
	$(".course-tile").each(function(){
		var postTags = ($(this).attr('data-tag-ids')).split(',');
		var isSuperset = filterArr.every(function(val) { return postTags.indexOf(val) >= 0; });
		if (isSuperset){
			$(this).show();
		}
		else {
			$(this).hide();
		}
	});
});
$('#mobile-dropdown').on('click',function(){
   $('.primary-mobile-nav li').toggle();
    });
$('.btn-sign').click(function(){
	$('.sp-popup-outer').removeClass( "sp-hide" );
	$('.sp-popup-outer').show();
	
	});
/*
$(".news-filter").change(function(){
	var val = $( "input[type=checkbox][name=options]:checked").val();
	var filterArr = $('input[type=checkbox]:checked').map(function(_, el) {
    return $(el).val();
	}).get();
	$(".n-bg").each(function(){
		var postTags = ($(this).attr('data-tag-ids')).split(',');
		var isSuperset = filterArr.every(function(val) { return postTags.indexOf(val) >= 0; });
		if (isSuperset){
			$(this).show();
		}
		else {
			$(this).hide();
		}
	});
});*/
