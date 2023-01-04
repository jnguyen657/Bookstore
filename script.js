function ValidateName() {

  var name = document.getElementById("username").value;
  var FirstNameRegex = new RegExp("^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$");

  if (name.length == 0)
  {
    alert("Please enter your username.");
  }

  else if (FirstNameRegex.test(name) != true)
  {
      alert("Invalid username. It must have only letters and at least one number.");
  }

}

function ValidatePassword() {
  var pw = document.getElementById("password").value;
  var pwRegex = new RegExp("^(?=.*[0-9])");

  if (pw.length == 0)
  {
    alert("Please enter your password.");
  }

  else if (pwRegex.test(pw) != true) 
  {
    alert("Invalid password. It must contain at least one digit.");
  }
}