  
function disable() {
        $('#txtTo').attr('disabled', true);
          }
  


  
function enable() {
        $('#txtTo').attr('disabled', false);
}
 

function disable1() {
        $('#txtTo').attr('disabled', true);
          }
  


  
function enable1() {
        $('#txtTo').attr('disabled', false);
}  

  
$(function () {
            $("#txtFrom").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#txtTo").datepicker("option", "minDate", dt);
                }
            });
            $("#txtTo").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("#txtFrom").datepicker("option", "maxDate", dt);
                }
            });
        });


$(function () {
            $("#txtFrom1").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#txtTo1").datepicker("option", "minDate", dt);
                }
            });
            $("#txtTo1").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("#txtFrom1").datepicker("option", "maxDate", dt);
                }
            });
        });
      
      

      
        $(function () {
            $("#datepicker1").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#datepicker2").datepicker("option", "minDate", dt);
                }
            });
            $("#datepicker2").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("#datepicker1").datepicker("option", "maxDate", dt);
                }
            });
        });
      
        $(function () {
            $("#datepicker3").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() + 1);
                    $("#datepicker4").datepicker("option", "minDate", dt);
                }
            });
            $("#datepicker4").datepicker({
                numberOfMonths: 2,
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    $("#datepicker3").datepicker("option", "maxDate", dt);
                }
            });
        });
        
         $(function() {
            var availableTutorials = [
               "Boston",
               "New York",
               "Chicago",
               "Seattle",
               "San Francisco",
               "Los Angeles",
               "Bangalore",
               "Chennai",
               "Mumbai",
               "Delhi",
            ];
            $( "#automplete1" ).autocomplete({
               source: availableTutorials
            });
         });
        

            
         $(function() {
            var availableTutorials = [
               "Boston",
               "New York",
               "Chicago",
               "Seattle",
               "San Francisco",
               "Los Angeles",
               "Bangalore",
               "Chennai",
               "Mumbai",
               "Delhi",
            ];
            $( "#automplete2" ).autocomplete({
               source: availableTutorials
            });
         });
        

    
         $(function() {
            var availableTutorials = [
               "Boston",
               "New York",
               "Chicago",
               "Seattle",
               "San Francisco",
               "Los Angeles",
               "Bangalore",
               "Chennai",
               "Mumbai",
               "Delhi",
            ];
            $( "#automplete3" ).autocomplete({
               source: availableTutorials
            });
         });
        

                 $(function() {
            var availableTutorials = [
               "Boston",
               "New York",
               "Chicago",
               "Seattle",
               "San Francisco",
               "Los Angeles",
               "Bangalore",
               "Chennai",
               "Mumbai",
               "Delhi",
            ];
            $( "#automplete4" ).autocomplete({
               source: availableTutorials
            });
         });


                          $(function() {
            var availableTutorials = [
               "Boston",
               "New York",
               "Chicago",
               "Seattle",
               "San Francisco",
               "Los Angeles",
               "Bangalore",
               "Chennai",
               "Mumbai",
               "Delhi",
            ];
            $( "#automplete5" ).autocomplete({
               source: availableTutorials
            });
         });



                          $(function() {
            var availableTutorials = [
               "Boston",
               "New York",
               "Chicago",
               "Seattle",
               "San Francisco",
               "Los Angeles",
               "Bangalore",
               "Chennai",
               "Mumbai",
               "Delhi",
            ];
            $( "#automplete6" ).autocomplete({
               source: availableTutorials
            });
         });



                          $(function() {
            var availableTutorials = [
               "Boston",
               "New York",
               "Chicago",
               "Seattle",
               "San Francisco",
               "Los Angeles",
               "Bangalore",
               "Chennai",
               "Mumbai",
               "Delhi",
            ];
            $( "#automplete7" ).autocomplete({
               source: availableTutorials
            });
         });