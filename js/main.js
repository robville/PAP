/**
 * Created by Tori on 9/9/17.
 */

$(window).scroll ( function() {
        if ($(document).scrollTop() > 50) {
            document.getElementById('nav-div').style.height = '100px'; //For eg
        } else {
            document.getElementById('nav-div').style.height = '150px';
        }
    }
);


