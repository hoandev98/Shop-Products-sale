function validateForm() {
    var firstname = document.forms["contactForm"]["firstname"].value;
    var lastname = document.forms["contactForm"]["lastname"].value;
    var email = document.forms["contactForm"]["email"].value;
    var atposition = email.indexOf("@");
    var dotposition = email.lastIndexOf(".");
    var password = document.forms["contactForm"]["password"].value;
    var birthday = document.forms["contactForm"]["birthday"].value;
    var gender = document.forms["contactForm"]["gender"].value;
    var country = document.forms["contactForm"]["country"].value;
    var about = document.forms["contactForm"]["about"].value;

    if (firstname.length < 2 || firstname.length > 30) {
        alert(" Please enter firstname must be lenght 2 to 30 characters");
        return false;
    } else if (lastname.length < 2 || lastname.length > 30) {
        alert("Please enter lastname must be lenght 2 to 30 characters");
        return false;

    } else if (atposition < 1 || dotposition < 1 ||
        (dotposition + 1) >= email.length) {
        alert("Please enter a valid e-mail address.");
        return false;
    } else if (password == '' || password.length < 2 || password.length > 30) {
        alert("Please enter password must be lenght 2 to 30 characters");
        return false;
    } else if (birthday == null || birthday == "") {
        alert("Please birthday must be select");
        return false;
    } else if (gender == null || gender == "") {
        alert(" Please gender must be select");
        return false;
    } else if (country == null || country == "") {
        alert(" Please country must be have");
        return false;
    } else if (about.length > 10000) {
        alert(" Please abouts must be less 10000 characters");
        return false;
    } else {
        alert(" Congratulations, all information has been verified");
        return true;
    }
}