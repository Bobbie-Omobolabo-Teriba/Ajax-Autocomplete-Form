/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {

    $("#county").hide();
    $("#town").hide();

    var country;

    $("#country").keyup(function () {
        $.ajax({
            url: "readCountry.php",
            type: "POST",
            data: {"countryKey": $("#country").val()},
            async: false,
            success: function (data) {
                var assocArray = jQuery.parseJSON(data);
                country = assocArray;
            }
        });
        $("#country").autocomplete({
            source: country,
            select: function () {
                getCounty();
            }
        });

    });

    function getCounty()
    {
        $("#county").show();
        var county;

        $("#county").keyup(function () {
            $.ajax({
                url: "readCounty.php",
                type: "POST",
                data: {"countryKey": $("#country").val(), "countyKey": $("#county").val()},
                async: false,
                success: function (data) {
                    var assocArray = jQuery.parseJSON(data);
                    county = assocArray;
                    //alert(county);
                }
            });

            $("#county").autocomplete({
                source: county,
                select: function () {
                   getTown();
                }
            });
        });
    }
    
    function getTown()
    {
        $("#town").show();
        $("#county").change(function () {
            
           $.ajax({
                url: "readTown.php",
                type: "POST",
                data: {"countyKey": $("#county").val()},
                async: false,
                success: function (data) {
                    $("#town").html(data);
                    //alert(data);
                }
            });

        });
        
    }

});





