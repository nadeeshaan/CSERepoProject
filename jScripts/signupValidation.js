/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

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
    var password = $('#password');
    var confirmPword = $('#confirmPword');
    var email=$('email');
    var mobile=$('mobile');
    var aboutMe=$('aboutMe');
    var gender=$('gender');
    var birthday=$('birthday');
    

    //declares the span texts

    var fName = $('#fName');
    var lName = $('#lName');
    var iNum = $('#iNum');
    var pswd = $('#pswd');
    var cnpswd = $('#snpswd');
    var eml = $('#eml');
    var gndr=$('#gndr');
    var bday=$('#bday');
    

    form.submit(function() {

        //validate the input fields
        if (checkEmpty(firstname, fName)) {
            validSubmit = false;
        }
        if (checkEmpty(lastname, lName)) {
            validSubmit = false;
        }
        if (checkEmpty(username, iNum)) {
            validSubmit = false;
        }
        if (checkEmpty(gender, gndr)) {
            validSubmit = false;
        }
        if (checkEmpty(birthday, bday)) {
            validSubmit = false;
        }

        return validSubmit;

    });

    //function check the empty input fields
    function checkEmpty(field, spn) {
        if (field.val() === "") {

            //if the start date field is disabled then neglect checking for the
            //empty input field
            if (field === strt & field.is(':disabled')) {
                return false;
            }
            else {
                spn.text(field.attr("name") + " Field cannot be empty");
                return true;
            }
        }
        else {
            spn.text("*");
            return false;
        }
    }

    //check the privilege input field contains a valid 
    //privilege level
    function privilegeTest() {
        if (privilege.val() === '0') {
            privilegeText.text('Privilege level cannot be empty');
            return true;
        }
        else {
            return false;
        }
    }

});
