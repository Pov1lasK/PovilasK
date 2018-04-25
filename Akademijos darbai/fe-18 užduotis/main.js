function Function() {
    var oldpasswprd = document.getElementById('oldPassword').value;
    var newpassword = document.getElementById('newPassword').value;
    var confirmpassword = document.getElementById('confirmPassword').value;
    if (oldPassword == "" || newpassword == "" || confirmpassword == "") {
        alert('Užpildyk viską');
    }
    else if (oldpasswprd == newpassword) {
        alert("Senas ir naujas neturi sutapti");
    }
    else if (newpassword != confirmpassword) {
        alert("Skirtingi slaptažodžiai");
    }
}