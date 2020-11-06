window.onload = function(){
    var requests = new XMLHttpRequest();
    var data;
    const search = document.getElementById("search");
    const display = document.getElementById("disp");

    search.addEventListener('click', function(e){
        
        requests.onreadystatechange = function(){
            if(requests.readyState == 4 && requests.status == "200") {
                data = requests.responseText;
                alert(data);
            }
        }
        requests.open('GET', 'superheroes.php', true);
        requests.send();

        console.log(data);
        //alert(data);
        
    });
}