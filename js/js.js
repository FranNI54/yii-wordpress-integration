console.log("asda");

jQuery( window ).load(function() {
	console.log("pagina cargada");
	SameHeight();
	CenterToParent();
	ShowLoads();
});

function CenterToParent(){
	jQuery(".center-to-parent").each(function(){
		jQuery(this).css("margin-top",0);
		jQuery(this).css("margin-bottom",0);
		jQuery(this).css("padding-bottom",0);
		jQuery(this).css("padding-top",0);
		var parent= jQuery(this).parent();
		//console.log($(this).outerHeight());
		if(jQuery(this).outerHeight()>0){
			var paddingTop= (jQuery(parent).innerHeight()/2)-(jQuery(this).outerHeight()/2);
			jQuery(this).css("padding-top",paddingTop+"px");
		}
	});

}

function SameHeight(){
		//console.log("entra same height");

		var auxId=1;
		while(jQuery( "[hid="+auxId+"]" ).length||auxId<20){
			var hidHeight=0;
			//ResetHeight();
			jQuery("[hid="+auxId+"]").each(function(){
				if(jQuery(this).innerHeight()>hidHeight){
					hidHeight= jQuery(this).innerHeight();
				}

			});
			//console.log(hidHeight);
			jQuery("[hid="+auxId+"]").css("height",hidHeight+"px");
			auxId++;
		}
	}
	
function ShowLoads(){
	jQuery(".loadit").css("opacity","1");
}