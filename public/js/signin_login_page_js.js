/**
 * Created by Abbir on 7/11/2017.
 */
//Getting the present screen size
    
    
function adjustHeight() {
    var size = {
        width: window.innerWidth || document.body.clientWidth,
        height: window.innerHeight || document.body.clientHeight
    }

    var body = document.getElementsByTagName('body');

    console.log(size.height)

    body[0].style.height = size.height + 'px';
}

