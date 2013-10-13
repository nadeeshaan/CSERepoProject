/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//$(document).ready(function() {
//
//    var form = $("#loginForm");
//    var validSubmit;
//    //declare the fields
//    var index = $("#index");
//    var pword = $('#pword');
//
//    //declares the span texts
//
//    var loginError = $('#loginError');
//
//    form.submit(function() {
//
//        //validate the input fields
//        if (checkEmpty(index, loginError)) {
//            validSubmit = false;
//        }
//        if (checkEmpty(pword, loginError)) {
//            validSubmit = false;
//        }
//
//        return validSubmit;
//
//    });
//
//    //function check the empty input fields
//    function checkEmpty(field, spn) {
//        if (field.val() === "") {
//            spn.text(field.attr("name") + " Error occured");
//            return true;
//        }
//        else {
//            spn.text("*");
//            return false;
//        }
//    }
//});


// JScript source code

$(document).ready(function() {

//global variables

    var form = $("#loginForm");

    var name = $("#index"); //textbox u are going to validate

    var nameInfo = $("#loginError"); //to display error message

//first validation on form submit

    form.submit(function() {

// validation begin before submit

        if (validateName()) {

            return true;

        } else {
            return false;
        }

    });

//declare name validation function

    function validateName() {

//validation for empty

        if (name.val() === "") {

            name.addClass("error");

            nameInfo.text("Names cannot be empty!");

            nameInfo.addClass("error");

            return false;

        } else {

            name.removeClass("error");

            nameInfo.text("*");

            nameInfo.removeClass("error");

        }

//if it's NOT valid

//        if (name.val().length < 2) {
//
//            name.addClass("error");
//
//            nameInfo.text("Names with more than 2 letters!");
//
//            nameInfo.addClass("error");
//
//            return false;
//
//        }
//
////if it's valid
//
//        else {
//
//            name.removeClass("error");
//
//            nameInfo.text("*");
//
//            nameInfo.removeClass("error");
//
//        }
//
//// validation only for characters no numbers
//
//        var filter = /^[a-zA-Z]*$/;
//
//        if (filter.test(name.val())) {
//
//            name.removeClass("error");
//
//            nameInfo.text("*");
//
//            nameInfo.removeClass("error");
//
//            return true;
//
//        }
//
//        else {
//
//            name.addClass("error");
//
//            nameInfo.text("Names cannot have numbers!");
//
//            nameInfo.addClass("error");
//
//            return false;
//
//        }

    }

});
