window.onload = function(){
    $.get("../fejlec.php", function(data){
        $(".nav").html(data);
    })
}