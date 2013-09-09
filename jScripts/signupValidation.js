///* 
// * To change this template, choose Tools | Templates
// * and open the template in the editor.
// */
//
$(function() {
    $("#birthday").datepicker();
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

    form.submit(function() {

        if (checkEmpty(firstname, fName)) {
            validSubmit = false;
        }
        if (checkEmpty(lastname, lName)) {
            validSubmit = false;
        }
        if (checkEmpty(username, iNum)) {
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
        if(passwordDontMatch()){
            validSubmit=false;
        }
        
        
        return validSubmit;

    });  

    function checkEmpty(field, spn) {
        if (field.val() === "") {
            spn.text(field.attr("name") + " Field cannot be empty");
            return true;
        }
        else {
            spn.text("*");
            return false;
        }
    }
    function checkGenderSelect(){
        if(gender.val()==='0'){
            gndr.text('Please select your Gender');
            return true;
        }
        else{
            return false;
        }
    }
    
    function passwordDontMatch(){
        if(password.value===""){
            pswd.text('Password field cannot be Empty');
            return true;
        }
        else if(password.value!=="" && password.value!==confirmPword.value){
            pswd.text('Password confirmation invalid');
            password.value="";
            confirmPword.value="";
            return true;
        }
        else{
            return false;
        }
    }

});