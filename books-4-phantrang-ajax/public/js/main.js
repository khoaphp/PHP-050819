$(document).ready(function(){
    
    $("#username").keyup(function(){
        var user = $(this).val();
        $.post("./Ajax/checkUsername", {un:user}, function(data){
            $("#messageUn").html(data);
        });
    });


    $(".trangAjax").click(function(){
        var idLoai = $(this).attr("idloai");
        var trang = $(this).attr("trang");
        var url = "http://localhost/admin/SanPham/AJAX_SPTheoLoai/"+idLoai+"/"+trang;
        $.get(url, function(data){
            $("#ajaxContent").html(data);
        });
    });

});