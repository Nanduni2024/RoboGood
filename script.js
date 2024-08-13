function submit() {
    var f = document.getElementById("f");
    var l = document.getElementById("l");
    var e = document.getElementById("e");
    var p = document.getElementById("p");
    var m = document.getElementById("m");
    var z = document.getElementById("z");
    var ad1 = document.getElementById("ad1");
    var ad2 = document.getElementById("ad2");
    var c = document.getElementById("c");

    var form = new FormData(); // Corrected: Added parentheses
    form.append("f", f.value);
    form.append("l", l.value);
    form.append("e", e.value);
    form.append("p", p.value);
    form.append("m", m.value);
    form.append("z", z.value);
    form.append("ad1", ad1.value);
    form.append("ad2", ad2.value); // Corrected: Removed trailing comma
    form.append("c", c.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            if (request.status == 200) { // Added: Check for successful request
                var text = request.responseText;
                if (text == "success") {
                    document.getElementById("msg").innerHTML = text;
                    document.getElementById("msg").className = "bi bi-check2-circle fs-5";
                    document.getElementById("alertdiv").className = "alert alert-success";
                    document.getElementById("msgdiv").className = "d-block";
                } else {
                    // Handle errors
                    document.getElementById("msg").innerHTML = "An error occurred.";
                    document.getElementById("msgdiv").className = "d-block";
                }
            }
        };

        request.open("POST", "signUpProcess.php", true); // Added: Specify the server endpoint and method
        request.send(form); // Added: Send the form data
    }
}

    // 8

    function signIn() {
        var email = document.getElementById("email2");
        var password = document.getElementById("password2");
        var rememberMe = document.getElementById("rememberme");

        var formData = new FormData();
        formData.append("e", email.value);
        formData.append("p", password.value);
        formData.append("r", rememberMe.checked);

        var request = new XMLHttpRequest();

        request.onreadystatechange = function () {
            if (request.readyState == 4) {
                if (request.status == 200) { // Added: Check for successful request
                    var responseText = request.responseText;
                    if (responseText == "success") {
                        window.location = "home.php";
                    } else {
                        document.getElementById("msg2").innerHTML = responseText;
                    }
                } else {
                    // Handle errors
                    document.getElementById("msg2").innerHTML = "An error occurred.";
                }
            }
        };

        request.open("POST", "logInProcess.php", true);
        request.send(formData);
    }

