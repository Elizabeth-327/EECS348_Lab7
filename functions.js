
function validate(){
    //Get the values of the two passwords 
    var password = document.getElementById("pass1").value;
    var confirmedPassword = document.getElementById("pass2").value;

    //Check if the passwords are empty
    if (password.trim() === "" || confirmedPassword.trim() === ""){
        alert("Please enter both passwords.");
        return;
    }

    //Check if the passwords are at least eight characters long and match
    if (password.length < 8) {
        alert("Password must be at least eight characters long.");
    }
    else if (password !== confirmedPassword) {
        alert("Passwords do not match. Please try again.");
    }
    else {
        alert("Passwords match!");
    }

}