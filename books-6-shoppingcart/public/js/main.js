$(document).ready(function(){

    $(".addtocart").click(function(){
        var idSP = $(this).attr("idSP");
        $.get("http://localhost/admin/Cart/DatHang/" + idSP, function(data){
            //alert("Add to cart successful.");
            //$("#listCart").html(data);
            data = JSON.parse(data);
            $("#listCart").html("");
            data.forEach(function(sp){                
                $("#listCart").append(`

                <div class="itemBooks">
                <img src="./public/upload/`+ sp.HINH +`" class="img-thumbnail sachItem" >
                ` +  sp.ID  +` - ` + sp.SOLUONG +`
                </div>

                `);
            });
        });
    });
    
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