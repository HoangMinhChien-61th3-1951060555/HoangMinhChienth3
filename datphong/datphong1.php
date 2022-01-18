<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí ngay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="datphong.css">
</head>
<body>
<section class="header">
      <!-- Phần navigation chia làm 3 layout: 1 chứa logo, phần category và phần chức năng user    -->
      <div class="row container-fluid bg-light">
        <!-- Phần logo -->
        <div class="col-3 header-left">
          <img src="Image/Logo.jpg" style="width: 42px; margin-left: 10px; margin-top: 10px; margin-right:30px;"> 
        </div>
        <!-- Phần category -->
        <div class="col-7 header-center">
          <ul class="navbar-nav">
            <liv class="nav-item">
              <a class="a" href="#bangtin">
                <span class="material-icons-outlined">article</span>
                Bảng tin 
              </a>
              <a class="a " href="#trainghiem">
                <span class="material-icons-outlined">travel_explore</span>
                Trải nghiệm 
              </a>
              <a class="a" href="#tour">
                <span class="material-icons-outlined">location_on</span>
                Tour
              </a>
              <a class="a" href="#khachsan" aria-current="page">
                <span class="material-icons-outlined">business</span>
                Khách sạn</a
              >
              <a class="a" href="#vemaybay">
                <span class="material-icons-outlined">flight_takeoff</span>
                Vé máy bay
              </a>
              <a class="a" href="#chothuexe">
                <span class="material-icons-outlined">directions_car</span>
                Cho thuê xe
              </a>
              <a class="a" href="#muasam">
                <span class="material-icons-outlined">shopping_bag</span>
                Mua sắm
              </a>
            </liv>
          </ul>
        </div>
        <!-- Phần chức năng user -->
        <div class="col-2 header-right">
          <div class="row mt-3">
            <div class="col-3">
              <span class="material-icons-outlined">
                account_balance_wallet
                </span>
            </div>
            <div class="col-3">
              <span class="material-icons-outlined">
                chat
                </span>
            </div>
            <div class="col-3">
              <span style="font-size: 30px;" class="material-icons-outlined">
                account_circle
                </span>
            </div>
            <div class="col-3">
            <a class="nav-link" href="login.php">Login</a>
            </div>
            
          </div>
        </div>
      </div>
    </section>  

    <section class="container">
    <div class="main-about">
      <div class="main-head">
        <button class="col-md-2">
          <i class="bi bi-chevron-double-left" style="color: blue;"></i>
        
        <a href="detail.php" style="text-decoration:none">Quay Lại</a></button>
      </div>
      <h5>Thông tin đặt phòng</h5>
      <div class="main-root">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root MuiSvgIcon-colorAction"
          focusable="false" viewBox="0 0 24 24" aria-hidden="true">
          <g data-name="Group 28011">
            <path data-name="Rectangle 4480" fill="none" d="M0 0h24v24H0z"></path>
            <g data-name="Vector Smart Object21">
              <g data-name="Group 21" transform="translate(2 4)" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round">
                <path data-name="Path 44" d="M15.605 4.332a2.62 2.62 0 11-5.232 0V2.757a2.62 2.62 0 115.232 0z"></path>
                <ellipse data-name="Ellipse 9" cx="2.18" cy="2.216" rx="2.18" ry="2.216"
                  transform="translate(3.84 .443)"></ellipse>
                <path data-name="Path 45"
                  d="M8.805 10.302a5.085 5.085 0 00-3.653-1.45 5.261 5.261 0 00-5.136 4.3.872.872 0 00.863 1.019h5">
                </path>
                <path data-name="Path 46"
                  d="M12.984 9.734h0a7.015 7.015 0 00-6.907 6.082.886.886 0 00.871 1.007H19.02a.886.886 0 00.871-1.007 7.015 7.015 0 00-6.907-6.082z">
                </path>
              </g>
            </g>
          </g>
        </svg>
        <p style="padding-left:5px;">Một người lớn</p>
      </div>
    </div>
  </section>
  <section class="main-content">
    <div class="main-left row">
      <div class="col-md-6 row1">
        <div class="info-user">
          <div class="title"><b>Thông tin người liên hệ</b></div>
          <p>Nhập thông tin của bạn hoặc người chịu trách nhiệm giữ liên lạc với cung cấp dịch vụ lưu trú</p>
          <div class="mb-4 ">
            <div class="row my-info">

              <!--Grid column-->
              <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                  <!--Grid row-->
                  <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Họ">
                        <label for="name" class="">Họ tên như trên CMND/CCCD/Hộ chiếu (không dấu).</label>
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control" placeholder="Tên đệm &tên">
                        <label for="name" class=""></label>
                      </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                        <label for="email" class=""></label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Số điện thoại">
                        <label for="phone" class=""></label>
                      </div>
                    </div>
                  </div>

                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                      <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2"
                          class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                      </div>

                    </div>
                  </div>
                  <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                  <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
            </div>
          </div>

        </div>
        <div class="h-center mt-5">
          <div class="main-about">
            <div class="title2">
              <p>Thông tin thanh toán</p>
            </div>
            <div class="form-check" style="padding-left:10px ; padding-bottom:5px">
              <input class="form-check-input " type="checkbox" value="" id="flexCheckIndeterminate"
                style="padding-left:10px ; padding-bottom:5px">
              <label class="form-check-label" for="flexCheckIndeterminate">
                Sử dụng thông tin người liên hệ
              </label>
            </div>

          </div>
          <div class="container-menu my-info">
            <div class="mb-4 ">

              <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Họ">
                          <label for="name" class="">Họ tên như trên CMND/CCCD/Hộ chiếu (không dấu).</label>
                        </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Tên đệm &tên">
                          <label for="name" class=""></label>
                        </div>
                      </div>
                      <!--Grid column-->
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                          <label for="email" class=""></label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="md-form mb-0">
                          <input type="text" id="phone" name="phone" class="form-control" placeholder="Số điện thoại">
                          <label for="phone" class=""></label>
                        </div>
                      </div>
                    </div>
                    <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                        <div class="md-form">
                          <textarea type="text" id="text" name="text" rows="1" class="form-control md-textarea"
                            placeholder="Địa chỉ"></textarea>
                          <label for="message"></label>
                        </div>

                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="container-note mt-5" style="box-shadow: 0px 0px 5px 5px rgb(222, 223, 224);
  border: 1px solid rgb(222, 223, 224) ;  ">
     <div class="note" style="  margin: 20px 20px;">
         <h4>Bạn Cần thêm gì không?</h4>
         <p>Chúng tôi sẽ thông báo cho nới lưu trú biết rằng bạn đang quan tâm đến các dịch vụ này, để họ có thể cung cấp thông tin chi tiết và gửi cho bạn.</p>
         <p>Yêu cầu của bạn có thể không được đảm bảo.Đừng lo.Chỗ nghỉ sẽ cố gắng sắp xếp cho bạn.  </p>
         <input class="w3-input w3-border w3-animate-input" type="text" style="width:30%" placeholder="Yêu cầu">
        </div>
        </div>
        <div class="container-pay">
          <button type="button" class="btn btn-primary" style="boder-radius:15px">Thanh toán</button>
        </div>
      </div>
      <div class="col-md-6 row2" >
        <div class="container-about row " style=" box-shadow: 0px 0px 5px 5px rgb(222, 223, 224);
    border: 1px solid rgb(222, 223, 224); ">
         <div class="frames row">
          <div class=" col-md-6" >
            <p><b>Thông tin phòng</b></p>
            <hr>
            <div class="card" style="width: 15rem;">
              <img src="Image/Homewood.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"></p>
                <a href="detail.php" class="stretched-link" style=" text-decoration:none">Thay đổi lựa chọn</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <p><b>Chi tiết giá phòng của bạn</b></p>
            <hr>
            <div class="room-container">
              <div class="room-rate">
                <p style="float:left">1xPhòng</p>
                <div class="h-rightpay" style="float:right">
                  <p>(Giá 1 phòng,1 đêm)</p>
                  <a href="" style="text-decoration:none;color:red"> 2.750.000</a>

                </div>
              </div>
            </div>
          </div>
       </div>
        </div>
      </div>
    </div>

  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>
</html>