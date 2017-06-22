// Script.js - This file contain the js / jquery used



// ------------- Live restart the rig situed in Matrix environment

$('#submit').click(function()
{
        $.ajax({
    url: "echo.php",
    context: document.body
    }).done(function() {
    alert("Votre rig selectionné vas maintenant redémarer.");
    });
});


// ------------- Do some cool stuff like 'reload a part of a page yay!'...

$(document).ready(
        function() {
            setInterval(function() {
              $('#status').load('status.php').fadeIn("fast");
              $('#status2').load('status_nano.php').fadeIn("fast");
            }, 1000);

});
