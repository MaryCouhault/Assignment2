function validateForm() {
  var name = document.forms["WebForm"]["fname"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  var email = document.forms["WebForm"]["Email"].value;
  var emailcheck = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/;
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
  if(!email.match(emailcheck)) {
    alert("Please enter a valid email address!");
    return false;
  }
  var birth_month = document.forms["WebForm"]["birth_month"].value;
  if (birth_month == "") {
    alert("Birth month is invalid");
    return false;
  }
  var birth_day = document.forms["WebForm"]["birth_day"].value;
  if (birth_day == "") {
    alert("Birthday is invalid");
    return false;
  }
  var agreement = document.forms["WebForm"]["Yes"].checked;
  if (agreement == false) {
    alert("Please agree to continue")
    return false;
  }

var applecake = document.forms["WebForm"]["AppleCake"].checked;
var custardslice = document.forms["WebForm"]["custardslice"].checked;
var donuts = document.forms["WebForm"]["Donuts"].checked;
var eggtart = document.forms["WebForm"]["eggtart"].checked;
var fruittart = document.forms["WebForm"]["Fruittart"].checked;
var rasberryCheese = document.forms["WebForm"]["RasberryCheese"].checked;

if  (( applecake == false ) && ( custardslice == false ) && ( donuts == false ) && ( eggtart == false ) && ( fruittart == false ) && ( rasberryCheese == false )) {
    alert ( "Please select at least 1 product you are interested in" );
    return false;
  }
}
