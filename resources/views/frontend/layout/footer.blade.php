<footer>
    <div class="top-footer">
        <a href="#"><img src="../image/image_banner/24h_1.png" alt=""></a>
        <a href="#"><img src="../image/image_banner/nghenhin_1.png" alt=""></a>
        <a href="#"><img src="../image/image_banner/saigon_2.png" alt=""></a>
        <a href="#"><img src="../image/image_banner/thanhnien_2.png" alt=""></a>
        <a href="#"><img src="../image/image_banner/thegioiso_1.png" alt=""></a>
        <a href="#"><img src="../image/image_banner/vnexpress_1.png" alt=""></a>
    </div>
    <div class="mid-footer">
      <div class="center-footer">
        <div class="text-title">
          <p>Hệ thống 24 cửa hàng Di Động Việt</p>
        </div>
        <div class="text-content">
        Nơi có tất cả các sản phẩm Di Động Việt đang kinh doanh và là nơi Trade-in Thu cũ lên đời. Đặc biệt: Máy qua sử dụng giá rẻ, Trả góp linh hoạt với nhiều phương thức
        </div>
        <ul class="nav">
          <li>16 Nguyễn An Ninh, TP. Dĩ An, Bình Dương </li>
          <li> </li>
          <li>300 Lê Hồng Phong, P.1, Quận 10, TP.HCM</li>
          <li></li>
          <li>79 Đồng Khởi, P. Bến Nghé, Quận 1, TP.HCM</li>
        </ul>
      </div>
      <div class="center-footer">
      <div class="text-title">
          <p>Hệ thống 11 cửa hàng SiS Mobifone - Di Động Việt</p>
        </div>
        <div class="text-content">
        Hệ thống liên kết theo mô hình Shop in Shop (SiS) giữa Mobifone và Di Động Việt. Nơi chỉ bán điện thoại Samsung, Oppo, Vsmart, Xiaomi với giá rẻ nhất thị trường.
        </div>
        <ul class="nav">
          <li>16 Nguyễn An Ninh, TP. Dĩ An, Bình Dương </li>
          <li></li>
          <li>300 Lê Hồng Phong, P.1, Quận 10, TP.HCM</li>
          <li></li>
          <li>79 Đồng Khởi, P. Bến Nghé, Quận 1, TP.HCM</li>
        </ul>
      </div>
    </div>
    <div class="bottom-footer">
        <div class="left-footer">
          <table>
            <tr>
              <td>Mua hàng trả góp</td>
              <td>Khuyến mãi tháng 10</td>
            </tr>
            <tr>
              <td>Chính sách bảo hành</td>
              <td>Tin công nghệ 24h</td>
            </tr>
            <tr>
              <td>Chính sách đổi trả</td>
              <td>Trade-in thu cũ lên đời</td>
            </tr>
            <tr>
              <td>Chính sách bán hàng</td>
              <td>Tra cứu điểm thành viên</td>
            </tr>
            <tr>
              <td>Chính sách bảo mật</td>
              <td>Phụ kiện chính hãng</td>
            </tr>
            <tr>
              <td>Chính sách sử dụng</td>
              <td>Tuyển dụng mới nhất</td>
            </tr>
            <tr>
              <td>Hướng dẫn mua hàng từ xa</td>
              <td>Trung tâm bảo hành Apple tại Việt Nam</td>
            </tr>
          </table>
        </div>
        <div class="right-footer">
            <table>
              <tr>
                <td colspan="2" class="add"><i class="far fa-comment-dots"></i> &nbsp;Hỗ trợ</td>
              </tr>
              <tr>
                <td>Gọi tư vấn máy - phụ kiện<br>(08:30 – 21:30)</td>
                <td>1800.6018</td>
              </tr>
              <tr>
                <td>Khiếu nại - Góp ý<br>(08:30 – 21:30)</td>
                <td>1800.6306</td>
              </tr>
              <tr>
                <td>Bảo hành - Hỗ trợ kỹ thuật<br>(09:00 – 21:00)</td>
                <td>1800.6729</td>
              </tr>
              <tr>
                <td>Gọi mua hàng từ xa<br>(09:00 – 21:00)</td>
                <td>1800.6018</td>
              </tr>
            </table>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/7325a13ba4.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script>
              $(document).ready(function() {
          $(".icon-bar").click(function() {
              $('.nav').toggleClass("active");
          })
      })
  </script>
  <script>
    

//khai báo biến slideIndex đại diện cho slide hiện tại
var slideIndex;
// KHai bào hàm hiển thị slide
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex].style.display = "block";  
    dots[slideIndex].className += " active";
    //chuyển đến slide tiếp theo
    slideIndex++;
    //nếu đang ở slide cuối cùng thì chuyển về slide đầu
    if (slideIndex > slides.length - 1) {
      slideIndex = 0
    }    
    //tự động chuyển đổi slide sau 5s
    setTimeout(showSlides, 6000);
}
//mặc định hiển thị slide đầu tiên 
showSlides(slideIndex = 0);


function currentSlide(n) {
  showSlides(slideIndex = n);
}

</script>
</body>
</html>