jQuery(document).ready(function($) {
   /**
	* Hi?n th? khung upload c?a wordpress sau khi click #upload_logo_button
	*/
	$('.vmz-button-upload').click(function() {
		tb_show('Upload file', 'media-upload.php?referer=vmz_theme_options&type=image&TB_iframe=true&post_id=0', false);
		var a = $(this).attr("id");
		window.send_to_editor = function(html){
		$(".url[id='" + a + "-url']").val($('img',html).attr('src'));
		$("." + a + "-img").attr("src",$(".url[id='" + a + "-url']").val());
		tb_remove();
		}
		return false;
	});
	
	$('.vmz-button-remove').click(function() {
		var a = $(this).attr("id");
		$("#" + a +"url").val('');
		$("." + a + "img").attr("src",'');
	});
});
