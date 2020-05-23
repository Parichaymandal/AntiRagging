/**
 * Created by Abbir on 2/3/2017.
 */
/****
 * Carousel Programming Section
 * ****/

//Getting the present screen size
var size = {
    width: window.innerWidth || document.body.clientWidth,
    height: window.innerHeight || document.body.clientHeight
}

var carousel_section = document.getElementById('carousel_section');

//Getting all the images size
var images = document.getElementById('carousel_section').getElementsByTagName('img');
//Getting all the img tag for styling
var items = document.getElementsByClassName('imgJS');

var ratio;
var adjust;
for(var i=0;i<images.length;i++){
    if(size.width<750){
        ratio = Math.round(images[i].width / images[i].height); //Calculating ratio for each image
        items[i].style.width = size.width + 'px'; //Setting width of the selected images
        adjust = (size.width / ratio) + 250;
        items[i].style.height = adjust +'px'; //Setting height of the selected images
        carousel_section.style.marginTop = 50 + 'px';
    }else{
        ratio = Math.round(images[i].width / images[i].height); //Calculating ratio for each image
        items[i].style.width = size.width + 'px'; //Setting width of the selected images
        items[i].style.height = (size.width / ratio)+'px'; //Setting height of the selected images
    }

}








