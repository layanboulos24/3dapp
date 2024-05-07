var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#fantaDescription').hide(); 
	$('costaDescription').hide(); 


	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#fantaDescription').hide(); 
		$('#costaDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#fantaDescription').hide(); 
		$('#costaDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		$('#cokeDescription').show();
		$('#fantaDescription').hide(); 
		$('#costaDescription').hide();
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_costa").hide();
		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_costa").hide(); 
	});
}


function cokeDescription() {
	$("button").click(function(){
		
		$("#cokeDescription").show();
        $("#fantaDescription").hide();
		$("#costaDescription").hide();
		
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_costa").hide();

		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_costa").hide();

    }); 
}

function fantaDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#fantaDescription").show();
		$("#costaDescription").hide();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_fanta").show();
		$("#x3dModelTitle_costa").hide();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_fanta").show();
		$("#x3dCreationMethod_costa").hide();
    }); 
}

function costaDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#fantaDescription").hide();
		$("#costaDescription").show();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_fanta").hide();
		$("#x3dModelTitle_costa").show();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_fanta").hide();
		$("#x3dCreationMethod_costa").show();
    }); 
}