///* 
// * To change this template, choose Tools | Templates
// * and open the template in the editor.
// */
//
$(function() {
    $("#birthday").datepicker({dateFormat: "yy-mm-dd"});
});

$(document).ready(function() {

    var form = $("#signupForm");
    var validSubmit;
    //declare the fields
    var firstname = $("#firstname");
    var lastname = $('#lastname');
    var username = $('#username');
    var password = document.getElementById('password');
    var confirmPword = document.getElementById('confirmPword');
    var email = $('#email');
    var mobile = $('#mobile');
    var aboutMe = $('#aboutMe');
    var gender = $('#gender');
    var birthday = $('#birthday');
    var fName = $('#fName');
    var lName = $('#lName');
    var iNum = $('#iNum');
    var pswd = $('#pswd');
    var cnpswd = $('#snpswd');
    var eml = $('#eml');
    var gndr = $('#gndr');
    var bday = $('#bday');
    var mob=$('#mob');
    form.submit(function() {

        if (checkEmpty(firstname, fName)) {
            validSubmit = false;
        }
        if (checkEmpty(lastname, lName)) {
            validSubmit = false;
        }
        if (checkEmpty(email, eml)) {
            validSubmit = false;
        }
        if (checkEmpty(birthday, bday)) {
            validSubmit = false;
        }
        if (checkGenderSelect()) {
            validSubmit = false;
        }
        if (passwordDontMatch()) {
            validSubmit = false;
        }
        if (checkUsername(username, iNum)) {
            validSubmit = false;
        }
        if (checkMobile()) {
            validSubmit = false;
        }


        return validSubmit;
    });
    function checkEmpty(field, spn) {
        if (field.val() === "") {
            spn.addClass("error");
            spn.text(field.attr("name") + " Field cannot be empty");
            return true;
        }
        else {
            spn.text("*");
            return false;
        }
    }
    function checkGenderSelect() {
        if (gender.val() === '0') {
            gndr.text('Please select your Gender');
            gndr.addClass("error");
            return true;
        }
        else {
            return false;
        }
    }

    function passwordDontMatch() {
        if (password.value === "" || password.value.length < 8) {
            pswd.text('Password should be at least 8 characters long');
            pswd.addClass("error");
            return true;
        }
        else if (password.value !== "" && password.value !== confirmPword.value) {
            pswd.text('Password confirmation invalid');
            pswd.addClass("error");
            password.value = "";
            confirmPword.value = "";
            return true;
        }
        else {
            return false;
        }
    }

    function checkUsername(field, spn) {
        var regex = new RegExp("^[0-9]{6}[A-Z]{1}", "i");
        if (!regex.test(field.value) || field.value === "") {
            spn.addClass("error");
            spn.text("Enter valid username");
            return true;
        }
        else {
            return false;
        }
    }

    function checkMobile() {
        var regex = new RegExp("^0[0-9]{9}");
        if (!(mobile.value === "") && !regex.test(mobile.value)) {
            mob.addClass("error");
            mob.text("Enter valid Mobile No:");
            return true;
        }
        else{
            return false;
        }
    }

});