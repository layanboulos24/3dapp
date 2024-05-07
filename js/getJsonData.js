$(document).ready(function() {
    //AJAX service request to get the main text data from the json data store
    $.getJSON('/3dapp/application/model/data.json', function(jsonObj) {
        console.log(jsonObj);

        // get coke main text data
        $('#x3dModelTitle_coke').html('<h2>' + jsonObj.pageTextData[0].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_coke').html('<p>' + jsonObj.pageTextData[0].x3dCreationMethod + '<p>');
		$('#title_coke').html('<h2>' + jsonObj.pageTextData[0].title + '<h2>');
		$('#subTitle_coke').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
		$('#description_coke').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

        //Get the fanta main text data
		$('#x3dModelTitle_sprite').html('<h2>' + jsonObj.pageTextData[1].x3dModelTitle + '<h2>');
		$('#x3dCreationMethod_sprite').html('<p>' + jsonObj.pageTextData[1].x3dCreationMethod + '<p>');
		$('#title_sprite').html('<h2>' + jsonObj.pageTextData[1].title + '<h2>');
		$('#subTitle_sprite').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
		$('#description_sprite').html('<p>' + jsonObj.pageTextData[1].description + '</p>');
    })
}) 