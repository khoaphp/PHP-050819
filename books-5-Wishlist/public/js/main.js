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

    $(".heart").click(function(){
        var wishlist = getCookie("Wishlist");

        var idSP = $(this).attr("idSP");

        // Kiểm tra idSP này đã được yêu thích rồi

        if(wishlist.length==0){
            wishlist = wishlist + idSP;
        }else{
            wishlist = wishlist + "," + idSP;
        }

        setCookie("Wishlist", wishlist, 30);

        $("img[idSP='" + idSP +"']").attr("src", "./public/images/heart-red.png");

    });

});

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }