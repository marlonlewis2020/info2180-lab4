window.onload = function(){
    var requests = new XMLHttpRequest();
    var data;
    const url = 'superheroes.php';
    const search = document.getElementById("search");
    const clear = document.getElementById("clear");
    const display = document.getElementById("result");
    const res = "<h2>Avengers Character Search Results</h2>"
    
    search.addEventListener('click', function(e) {
        e.preventDefault();
        var hero_query = document.getElementById("hero").value;
        var input = ""+hero_query;
        document.getElementById("hero").value = "";
        requests.onreadystatechange = function() {
            if(requests.readyState == 4 && requests.status == 200) {
                data = requests.responseText;
                display.innerHTML = res+"<hr>"+data;
            }
        }
        requests.open('GET', url+"?query="+input, true);
        requests.send(input);
    });

    clear.addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById("hero").value = "";
        display.innerHTML = "";
    })
}