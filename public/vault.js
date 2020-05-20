setInterval(function (){
    var url = window.location.origin + "/mc/vault"
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        var json = JSON.parse(this.responseText);
        var html = "<table class='table'><tr><th scope='col'>#</th><th scope='col'>Name</th><th scope='col'>Money</th></tr>";
        json.forEach( function(player, num){
            num++
            entry ="<tr><th scope='col' id='numbers'>#%number% </th><th scope='col' id='name'> %name% </th><th scope='col' id='money'>$%money% </th></tr>";
            entry = entry.replace("%number%", num.toString());
            entry = entry.replace("%name%", player.player_name);
            entry = entry.replace("%money%", player.money);
            html += entry
        });
        html += "</table>"
        $("#money").html(html);
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}, 3000)