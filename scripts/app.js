window.onload = function(){

    $("#btn").click(function(e){
        e.preventDefault();
        $.get("./superheroes.php?hero="+String($("#hero").val()).trim(),
        function(data){
            $('#result').html(data);
            $("#hero").val("");
        })
    })
}
