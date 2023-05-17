<?php

$cache_file = "category.json";
    header('Content-Type: text/javascript; charset=utf8');
?>
var categoryList = <?php echo file_get_contents($cache_file); ?> ; 

CTchange = function(event, ui){
	$(this).data("autocomplete").menu.activeMenu.children(":first-child").trigger("click");
}
    function allcategoryList() {
      
        $( ".categorySelection" ).autocomplete(
		{
            source: categoryList,
			delay:300,
			focus: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value2").val(ui.item.value);
				$(this).val(ui.item.label);
				return false;
			},
			select: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value2").val(ui.item.value);
				$(this).val(ui.item.label);
				$(this).unbind("change");
				return false;
			}
		});
			$( ".categorySelection" ).focus(function(){
				$(this).change(CTchange);
			
			});
    }
    


