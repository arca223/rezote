/**
 * Created with JetBrains PhpStorm.
 * User: Max TOMPOUCE
 * Date: 29/07/15
 * Time: 17:00
 * To change this template use File | Settings | File Templates.
 */


$("#btn").click( function()
    {
        alert('button clicked');
    }
);

function ok() {
    alert('button clicked ok');
    var name = $(this).attr('name');
    $.ajax({
        type: 'POST',
        url: 'scripts/addCart.php',
        data: name
    });
}


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();

    // problems of wrong char with browsers (Safari for ex)
    if ('btoa' in window) {
        cvalue = btoa(cvalue);
    }

    document.cookie = cname + "=" + cvalue + "; " + expires+';path=/';
}

/*
 $('#btn').on('click', function(e){
 alert("ok");
 var name = $(this).attr('name');
 $.ajax({
 type: 'POST',
 url: 'scripts/addCart.php',
 data: {
 name: name
 }
 });
 });*/