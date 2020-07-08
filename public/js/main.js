$(document).ready(function() {
    $("#viewproduct").click(function() {
        $.post("./ajax/viewAllProduct", function(data) {
            $("#listproduct").html(data);
        });
    });
    $("#addproduct").click(function(){
        $.post("./ajax/addProduct",function(data){
            $("#listproduct").html(data);
        });
    });
    $("#orderpage").click(function(){
        $.post('./ajax/order',function(data){
            $("#mainhome").html(data);
        });
    });
    
    
});
