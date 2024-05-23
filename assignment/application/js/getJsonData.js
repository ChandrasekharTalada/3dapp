
// JavaScript Document
$(document).ready(function(){

    //AJAX service request to get the main text data from the json data store
    $.getJSON('../index.php/apiGetData', function(jsonObj) {
       console.log(jsonObj);
       //Get the home page main text data
       $('#cocacolaCardTitle').html('<h2>' + jsonObj[0].title + '<h2>');
       $('#cocacolaCardSubTitle').html('<h3>' + jsonObj[0].subTitle + '</h3>');
       $('#cocacolaCardDescription').html('<p>' + jsonObj[0].description + '</p>');
       
        //Get the home page left column text data
       $('#spriteCardTitle').html('<h2>' + jsonObj[1].title + '<h2>');
       $('#spriteCardSubTitle').html('<h3>' + jsonObj[1].subTitle + '</h3>');
       $('#spriteCardDescription').html('<p>' + jsonObj[1].description + '</p>');	
       
       //Get the home page centre column text data
       $('#pepperCardTitle').html('<h2>' + jsonObj[2].title + '<h2>');
       $('#pepperCardSubTitle').html('<h3>' + jsonObj[2].subTitle + '</h3>');
       $('#pepperCardDescription').html('<p>' + jsonObj[2].description + '</p>');	
       
       $('#cokeName').html('<h3>' + jsonObj[3].item + '</h3>');
       $('#coke3Ddescription').html('<p>' + jsonObj[3].description + '</p>');			
     
       $('#spriteName').html('<h3>' + jsonObj[4].item + '</h3>');
       $('#sprite3Ddescription').html('<p>' + jsonObj[4].description + '</p>');

       $('#pepperName').html('<h3>' + jsonObj[5].item + '</h3>');
       $('#pepper3Ddescription').html('<p>' + jsonObj[5].description + '</p>');
    });
});
