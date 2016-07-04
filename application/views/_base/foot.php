
	<?php
		foreach ($scripts['foot'] as $file)
		{
			$url = starts_with($file, 'http') ? $file : base_url($file);
			echo "<script src='$url'></script>".PHP_EOL;
		}
	?>

	<?php // Google Analytics ?>
	<?php $this->load->view('_partials/ga') ?>
<!-- CALL CAMERA SLIDER -->
<script>
	jQuery(function(){
		jQuery('#camera_wrap_4').camera({
			height: 'auto',
			loader: 'bar',
			pagination: false,
			thumbnails: false,
			hover: true,
			opacityOnGrid: false,
			overlayer: false,
			imagePath: 'img/',
			width:'1140px'
		});
	});
</script>
<!-- CALL FEATURED WORK -->
<script type="text/javascript">
//CAROUSEL
jQuery(document).ready(function ($) {
	$('#recent-portfolio').carouFredSel({
		responsive: true,
		items       : {
        width       : 200,
        height      : 237,
        visible     : {
            min         : 1,
            max         : 4
        }
    },
		width: '100%',
		height: '227px',
		auto: true,
		circular	: true,
		infinite	: false,
		prev : {
			button		: "#car_prev",
			key			: "left",
				},
		next : {
			button		: "#car_next",
			key			: "right",
					},
		swipe: {
			onMouse: true,
			onTouch: true
			},
		scroll: {
        easing: "easeInOutSine",
        duration: 1200
    }
	});
});
//ISOTOPE
jQuery(document).ready(function ($) {
var $containerbox = $('#content');
  $containerbox.imagesLoaded( function(){
	$containerbox.isotope({
	filter: '*',
	animationOptions: {
	 duration: 750,
	 easing: 'linear',
	 queue: false,
   }
});
});
//FILTER
$('#filter a').click(function(){
  var selector = $(this).attr('data-filter');
	$containerbox.isotope({
	filter: selector,
	animationOptions: {
	 duration: 750,
	 easing: 'linear',
	 queue: false,
   }
  });
  return false;
});
$('#filter a').click(function (event) {
	$('a.selected').removeClass('selected');
	var $this = $(this);
	$this.addClass('selected');
	var selector = $this.attr('data-filter');
	$containerbox.isotope({
		 filter: selector
	});
	return false;
});
});
//ROLL ON HOVER
jQuery(document).ready(function ($) {
$(".roll").css("opacity","0");
$(".roll").hover(function () {
$(this).stop().animate({
opacity: .8
}, "slow");
},
function () {
$(this).stop().animate({
opacity: 0
}, "slow");
});
});
</script>
</body>
</html>
