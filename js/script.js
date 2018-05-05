$(document).ready(function ()
{
    //global vars:
    tableHead = "<thead><tr><th>ID</th><th>Title</th><th>Platform</th><th>Done %</th><th>Installed?</th><th>Playing?</th></tr></thead>";
    
    updateList("*");
    
    $("#selector").on("change", function()
    {
        var sel = $(this).val();
        updateList(sel);
    })

    function updateList(what)
    {
        $.post( "./incl/query_script.php", { select: what })
        .done(function(resp)
        {
            $("#games").empty();
            $("#games").append(tableHead);
            $("#games").append(resp);
        });
    }
});