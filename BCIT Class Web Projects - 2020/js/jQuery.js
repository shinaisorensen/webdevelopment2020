/*
    Author: Shinai Sorensen
    Date: March 17, 2020
*/

// Page will finish loading and then run the .js file

$(document).ready(function() {
    
    /*
        The following code is used for the 'autocomplete' plug-in available with jQuery.
        Allows the user to see suggestions from a drop-down menu, click on one of the those
        options, and then populate the input box with the user's selection.
    */

    // List of cities available for the autocomplete plug-in
    var cities = [
        "Vancouver",
        "Victoria",
        "Kelowna",
        "Nanaimo",
        "Duncan",
        "Sooke",
        "Langford",
        "Sidney",
        "Tofino",
        "Guelph",
        "Toronto",
        "Ottawa"
    ];

    // Gets the list of cities available for the input with an id of 'cities'
    $('#cities').autocomplete({
        source: cities
    });

    /*
        The following code is used for the 'datepicker' plug-in available with jQuery.
        Allows the user to select a date using a calendar, rather than typing out the
        date and formats the date, default format is mm/dd/yyyy

        Behavioural change was added so that the format of the date picked would be
        MM d, DD, yy, i.e March 14, Saturday, 2020
    */

    var date = $('#date').datepicker({
        dateFormat: 'MM d, DD, yy '
    });
});
    
