<style type="text/css">
    .text-link{
        transition: all 0.5s;
        cursor: pointer;
    }
    .text-link:hover{
        padding-top: 15px;
        padding-bottom: 15px;
    }
</style>
<div class="sidebar-header text-center">
    <h3 class="buttonCollaps"><button type="button" id="sidebarCollapse" class="btn text-white mt-2 btnCollapsActive">
        <i class="fas fa-align-justify"></i>
    </button></h3>
</div>

<ul class="list-unstyled components">
    <li class="text-link" rdr="home">
        <a><i class="fas fa-home"></i> <label class="sidebar_text_menu hide" for=""> หน้าแรก </label></a>
    </li>
    <li class="text-link" rdr="market">
        <a><i class="fas fa-cart-arrow-down"></i> <label class="sidebar_text_menu hide" for=""> สินค้า </label></a>
    </li>
    <li class="text-link" rdr="cart">
        <a><i class="fas fa-luggage-cart"></i> <label class="sidebar_text_menu hide" for=""> ตะกร้าสินค้าของฉัน </label></a>
    </li>
    <li class="text-link" rdr="about">
        <a><i class="fas fa-address-card"></i> <label class="sidebar_text_menu hide" for=""> เกี่ยวกับเรา </label></a>
    </li>
    <li class="text-link" rdr="contact">
        <a><i class="fas fa-phone-alt"></i> <label class="sidebar_text_menu hide" for=""> ติดต่อ </label></a>
    </li>
    <li class="text-link">
        <a class="sign-out"><i class="fas fa-sign-out-alt"></i> <label class="sidebar_text_menu hide" for=""> ออกจากระบบ </label></a>
    </li>
</ul>
<script type="text/javascript">

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
    $(".sidebar_text_menu").toggleClass('hide');
    $(this).toggleClass('btnCollapsActive');
    $("#content").toggleClass('active');
});
$(".text-link").click(function(){
    window.location.href=$(this).attr('rdr');
});

// $("#sidebarCollapse").click();
// $(".sign-out").click(function(){

// });
</script>