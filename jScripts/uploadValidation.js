/* 
 * This script include the code for 
 * validating the upload document via jquery
 */

//Loads the date picker
$(function() {
    $("#startdate").datepicker({ dateFormat: "yy-mm-dd" });
});

$(document).ready(function() {

    var form = $("#uploadForm");
    var validSubmit;
    //declare the fields
    var docDescription = $("#docDescription");
    var project = $('#selectedText');
    var strt = $('#startdate');
    var document = $('#document');
    var privilege = $('#privilege');

    //declares the span texts

    var prText = $('#project');
    var dateText = $('#strtDate');
    var documentText = $('#desText');
    var privilegeText = $('#privilegeText');
    var selectedFile = $('#selectedFile');

    form.submit(function() {

        //validate the input fields
        if (checkEmpty(project, prText)) {
            validSubmit = false;
        }
        if (checkEmpty(strt, dateText)) {
            validSubmit = false;
        }
        if (checkEmpty(docDescription, documentText)) {
            validSubmit = false;
        }
        if (checkEmpty(document, selectedFile)) {
            validSubmit = false;
        }
        if (privilegeTest()) {
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
                spn.addClass("error");
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
            privilegeText.addClass("error");
            privilegeText.text('Privilege level cannot be empty');
            return true;
        }
        else {
            return false;
        }
    }

});

