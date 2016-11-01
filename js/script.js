/* Author:

*/

$(function() {

	 /*
	  * Gear Grid Stuff
	  *
	  */

	  $("#expand-grid").click(function() {
	  		$('#gear-grid').addClass('expand');

	  		return false
	  });


	  /*
	   * Play Movie Stuff
	   *
	   */

	   /*
	   $('.video-splash .play').click(function() {

			$('.video-splash').removeClass('finished');
	      			   		
	   		// Vimeo Stuff

	   		$('iframe.vimeo').each(function() { $f(this).addEvent('ready', ready) });
	   		
	   		function ready(player_id) {
	   			$f(player_id).addEvent('play', play);
			    $f(player_id).api('play');

			    $f(player_id).addEvent('finish', finish);
			    $f(player_id).api('finish');
			}

			function play() {
				play();
			}

			function finish() {
				$('.video-splash').css('z-index', '1');
				$('.video-splash').toggleClass('finished');
				$('.video-splash').toggleClass('hide');
				$('.top-video').toggleClass('lights-down');
			}

			$('.video-splash').toggleClass('hide');
			$('.top-video').toggleClass('lights-down');
	   		setTimeout(function(){ $('.video-splash').css('z-index', '-1') }, 500);

	   		return false

	   });
	   */

	   $('.splash .play').click(function() {

	   		// Vimeo Stuff

	   		$('.splash').toggleClass('hide');

	   		$('iframe.vimeo').each(function() { $f(this).addEvent('ready', ready) });
	   		
	   		function ready(player_id) {
	   			$f(player_id).addEvent('play', play);
			    $f(player_id).api('play');

			    $f(player_id).addEvent('finish', finish);
			    $f(player_id).api('finish');
			}

			function play() {
				play();
			}

			function finish() {
				$('.splash').css('z-index', '2');
				$('.splash').toggleClass('hide');
			}

			setTimeout(function(){ $('.splash').css('z-index', '-1') }, 500);

	   		return false
	   });
});





















