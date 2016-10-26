$(document).ready(function() {
$("form").submit(function(eve){
eve.preventDefault();

$.ajax({
method: "POST",
url : "contact_action.php",
data : {
email : $("#email").val(),
sujet : $("#sujet").val(),
message : $("#message").val(),
newsletter:$("#newsletter").prop("checked")?1:0
},

success : function(data) {
console.log(data)
if (data.retour==1) 
var msg="succès  "+data.sujet+" ";
else 
msg="erreur";
$('#notif').html(msg).show();
}
});



});
});
