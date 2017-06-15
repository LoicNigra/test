


$(document).ready(function() {
//elementen die we straks te voorschijn willen halen met een effect moeten we eerst verbergen
    $("#simple + div").hide();
    $("#get + div").hide();
    $("#post + div").hide();
    $("#ajaxAdvanced + div").hide();


    $("#simple").click(function() {
        $("#simple + div").load("simple.php", "", function(data) {
            $("#simple + div").slideDown();
        });
    });

    $("#get").click(function() {
        $.get("get.php", {voornaam: "Maarten", naam: "Heylen"}, function(data) {
            $("#get + div").html(data);
            $("#get + div").fadeIn();

        });
    });

    $("#post").click(function() {
        $.post("post.php", {voornaam: "Maarten", naam: "Heylen"}, function(data) {
            $("#post + div").html(data);
            $("#post + div").slideDown();
        });
    });

    $("#ajaxAdvanced").click(function() {
        $.ajax({url: "onbestaand.php", error: function() {
                alert("Er is een fout opgetreden bij het laden van de onbestaande pagina.");
            }, success: function(data) {
                alert("De pagina is met succes geladen");
            }});
    });
});
