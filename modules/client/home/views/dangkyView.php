<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cssdangky/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="yody/cs.css">
	<link rel="stylesheet" href="   https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
		integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<div class="row khoangcach mx-auto">
    <div class="boxtrai marginphai" >
        <div class="row khoangcach formtaikhoan">
            <div align="center" class="text-white text-4xl bg-gray-500 tracking-wider py-3 pl-3 rounded-lg my-3 font-bold">Đăng ký thành viên</div>
            <div class="row boxcontent" align="center">
                <form action="?role=client&mod=home&action=luuDangKy" method="post">
                    <div class="py-3">
                        <p class="font-bold text-[20px] mb-2" >Email</p> <br>
                        <input type="email" name="email" class=" border-2 py-2 px-56 rounded-lg text-black-600 mb-3">
                    </div>
                    <div class="font-bold text-[20px] mb-2">
                        Số điện thoại<br>
                        <input type="text" name="numberphone" class=" border-2 py-2 px-56 rounded-lg text-black-600 mb-3 ">
                    </div>
                    <div class="font-bold text-[20px] mb-2">
                        Tên tài khoản<br>
                        <input type="text" name="fullname" class=" border-2 py-2 px-56 rounded-lg text-black-600 mb-3">
                    </div>
                    <div class="font-bold text-[20px] mb-2">
                        Mật khẩu<br>
                        <input type="password" name="password" class=" border-2 py-2 px-56 rounded-lg text-black-600 mb-3">
                    </div>
                   <div class="pt-3">
                   <input class=" py-2 px-2 border-2 border-green-600 bg-green-600 text-black-600 hover:font-bold  rounded-full mr-5" type="submit" value="Đăng ký" name="dangky">
                    <input class=" py-2 px-2 border-2 border-green-600 bg-green-600 text-black-600 hover:font-bold  rounded-full mr-5"  type="reset" value="Nhập lại">
                    <a class="py-2 px-2 border-2 border-green-600 bg-green-600 text-white hover:font-bold  rounded-full mr-5" href="http://localhost/duan1/shop.projectmvc.vn/">Quay lại</a>
                   </div>
                </form>
                <h2 class="thongbao">
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>



    </div>

</div>
</body>
</html>
