/**
 * Created by Abbir on 7/12/2017.
 */
function coverImgAdjust() {
    var size = {
        width: window.innerWidth || document.body.clientWidth,
        height: window.innerHeight || document.body.clientHeight
    }

    var imgResponsive = document.getElementsByClassName('img-responsive');

    imgResponsive[0].style.width = size.width + 'px';
    imgResponsive[0].style.height = ((size.height/100) * 70) + 'px';

}