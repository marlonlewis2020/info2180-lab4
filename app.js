window.onload = function(){

    $("#btn").click(function(e){
        e.preventDefault();
        $.get("superheroes.php",function(data){
            alert(data);
        })
    })
}