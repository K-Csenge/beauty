window.onload = function(){
    $.get("../fejlec.html", function(data){
        $("#nav").html(data);
    })
}