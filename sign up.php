<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí ngay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
</head>
<body>


<main>

<div class="container" id ="content">

  <div class="row">
    <div class="col-8" id="text">
        <img class="img" src ="Image/hahalolo.png">
        <span> Hahalolo </span>
        <h3> Bạn thích </h3>
        <h1> đi du lịch ? </h1>
        <h3> Bạn muốn tìm hiểu thông tin về những điểm đến? </h3>
        <h3> Chỉ với vài thao tác, hãy nhanh chóng đăng nhập để trải nghiệm và cảm nhận các tiện ích tuyệt vời của chúng tôi. </h3>

    </div>
    <div class="col-4" id="login">
    <div class="container">
        <form class="form-signin" action="process-signup.php" method="post">

            <h1 class="h3 mb-5 font-weight-normal">Đăng ký</h1>
            <label for="inputuser" class="sr-only">Họ và tên</label>
            <input type="text" id="inputten" name="txtuser" class="form-control" placeholder="Name" required autofocus>
            <label for="inputuser" class="sr-only">Email hoặc số điện thoại</label>
            <input type="phone" id="inputuser" name="txtphone" class="form-control" placeholder="Email or phone number" required autofocus>
            <label for="inputPassword" class="sr-only">Mật khẩu</label>
            <input type="password" id="inputPassword" name="txtPass1" class="form-control" placeholder="Password" required>
            <label for="inputRetypePassword" class="sr-only">Nhập lại mật khẩu</label>
            <input type="password" id="inputRetypePassword" name="txtPass2" class="form-control" placeholder="Retype Password" required>
            <div class="checkbox mb-3">

                <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" name="btnSignUp">Đăng ký</button>

            </div>
            <p class="mt-5 mb-3 text-muted">Bạn đã có tài khoản ? <a style="text-decoration:none;" href ="login.php"> Đăng nhập </p>
        </form>
        </div>
    </div>
  </div>    
</div>
</div>
<div class="container_swap">
		<div class="div_left">	
	<div class="link">
	<button type="button" class="btn btn-primary btn-lg">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root MuiSvgIcon-colorAction" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29891"><g data-name="Group 29887"><path data-name="Path 21430" d="M12.813 17.97h-1.509c-.135 0-.107.107-.107.19v2c0 .242.005.484-.007.725a1.107 1.107 0 01-1.11 1.108A1.123 1.123 0 019 20.846c-.01-.884 0-1.768 0-2.651v-.227H7.688a.783.783 0 01-.805-.872v-1.507V8.97c0-.2.055-.24.229-.24q4.9.008 9.791 0h.211c0 .083.011.151.011.219v8.126a.785.785 0 01-.825.889c-.365 0-.731.006-1.1 0-.142 0-.2.036-.194.2q.011 1.24 0 2.48a2.016 2.016 0 01-.072.58 1.068 1.068 0 01-1.209.756 1.141 1.141 0 01-.912-1.142c-.005-.865 0-1.729 0-2.594z"></path><path data-name="Path 21431" d="M14.493 3.886a5.759 5.759 0 012.686 4.325H6.829a5.769 5.769 0 012.641-4.3l-.5-1.055-.242-.509c-.058-.122-.069-.239.065-.306s.2.032.248.14l.7 1.457c.013.028.028.055.052.1l.242-.1a4.745 4.745 0 013.941 0c.158.069.23.054.314-.115.222-.448.466-.884.7-1.324l.027-.049c.063-.116.145-.2.272-.114s.09.192.032.3l-.477.892zm-4.4 1.906a.426.426 0 10-.427.455.44.44 0 00.427-.455zm4.677-.014a.438.438 0 00-.434-.449.447.447 0 00-.417.47.427.427 0 10.851-.021z"></path><path data-name="Path 21432" d="M4.004 12.268V9.713a1.185 1.185 0 112.37 0q.008 2.593 0 5.186a1.187 1.187 0 01-1.165 1.176 1.172 1.172 0 01-1.2-1.152c-.017-.826 0-1.652 0-2.479z"></path><path data-name="Path 21433" d="M19.999 12.285v2.555a1.186 1.186 0 11-2.37.04c-.008-1.468 0-2.937 0-4.405 0-.273-.009-.547 0-.82a1.188 1.188 0 012.349-.21 1.22 1.22 0 01.021.246v2.593z"></path></g></g></svg>
	<a href="https://play.google.com/store/apps/details?id=com.hahalolo.android.social&hl=en">Google Play</a>
	</button>
	<button type="button" class="btn btn-secondary btn-lg">
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="MuiSvgIcon-root MuiSvgIcon-colorAction" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><g data-name="Group 29893"><g data-name="Group 29892"><g data-name="Group 29888"><path data-name="Path 21434" d="M19.497 8.699c-.371.336-.742.625-1.057.969a4.118 4.118 0 00-1.024 3.191 4.343 4.343 0 002.445 3.708c.146.079.165.146.114.3a11.666 11.666 0 01-1.877 3.473 8.731 8.731 0 01-.793.9 2.314 2.314 0 01-2.436.616 6.063 6.063 0 01-.732-.262 4.066 4.066 0 00-3.475 0 7.828 7.828 0 01-.9.313 2.071 2.071 0 01-2.005-.444 7.579 7.579 0 01-1.242-1.372 12.682 12.682 0 01-2.288-5.167 9.011 9.011 0 01.02-4.12 5.246 5.246 0 012.675-3.518 4.066 4.066 0 013.534-.16c.46.183.933.333 1.4.5a.95.95 0 00.642-.02c.647-.227 1.284-.5 1.945-.667a4.526 4.526 0 014.871 1.519c.075.077.134.173.183.241z"></path><path data-name="Path 21435" d="M16.071 2a3.447 3.447 0 01-.128 1.489 4.717 4.717 0 01-2.774 3.051 4.977 4.977 0 01-1.076.192c-.146.024-.2-.043-.2-.191a4.136 4.136 0 01.848-2.634 4.649 4.649 0 012.989-1.871c.101-.021.21-.023.341-.036z"></path></g></g></g></svg>
	<a href="https://apps.apple.com/us/app/hahalolo/id1437417120" >App Store</a>
	</button>
</div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>