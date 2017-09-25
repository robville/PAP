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

function contactSend(){

    var fname = document.getElementById('firstname').value;
    var lname = document.getElementById('lastname').value;
    var mail = document.getElementById('email').value;
    var number = document.getElementById('phone').value;
    var cMessage = document.getElementById('message').value;

    $.ajax({
        type:"post",
        url:"www/contactSend.php",
        data: {
            first: fname,
            last:lname,
            email:mail,
            phone:number,
            msg:cMessage
        },
        cache: false,
        success: swal({
            title: "Success",
            text: "We have received your Message! ",
            // timer: 5000,
            showConfirmButton: true
        })
    })

}