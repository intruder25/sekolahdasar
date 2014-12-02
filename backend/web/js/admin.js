// JavaScript Document
$(document).on('click','.uplaod-foto', function(e){
	targetInput = $(this).data('input');
	targetView = $(this).data('view');
	$(targetInput).click();
	$(targetInput).change(function(e) {
		var file = !!this.files?this.files:[];
		if(!file.length || !window.FileReader) return;
		
		if(/^image/.test(file[0].type)){
			var reader = new FileReader();
			reader.readAsDataURL(file[0]);
			
			reader.onloadend = function(){
				$(targetView).attr('src',this.result);
				$(targetView).css({'max-width':'140px', 'min-width':'128px', 'max-height':'140px', 'min-height':'128px'});
			}
		}
    });
});
