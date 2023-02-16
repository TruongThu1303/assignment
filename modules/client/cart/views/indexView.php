<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trending</title>
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
	<style>
		.xuhuong{
			font-family: 'Satisfy', cursive;
		}
		.danhmuc{
			font-family: 'Pacifico', cursive;
		
		}
		
	</style>
<body>
	<div class="">
		<div class="w-full flex justify-center">
			<!--sale-->
			<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/bannertop.jpg?1658475556147" alt="">
		</div>
		<!-- hết phần sale -->
		<header class="flex justify-between pt-1">
			<a href="html.html">
				<img src="assets/media/logos/trending.jpg" alt="" height="150px" width="150px">
			</a>
			<div class="flex mx-8">
				<!--menu1-->
				<div class="flex">
					
					<ul class="flex space-x-8 mt-8 p-2">
					<?php foreach ($categories as $category){
                                extract($category);
                                echo '<a href="?role=client&mod=home&id_cate='.$id.'" class="text-orange-500 hover:font-bold hover:text-orange-500 text-xl">'.$name.'</a>';

					} ?>	
					</ul>
				</div>
	
				
				<!--and đổi trả-->
			</div>
			<!--end menu1-->

			<div >
				<!--tìm kiếm-->
				<div class="flex space-x-5">
					<!--search-->
					<form action="" class="flex  rounded-lg space-x-3 pt-3 mr-3">
						<input type="email" placeholder="Tìm sản phẩm" required class="border-2 text-xl p-2 rounded-lg">
						<button type="submit" class="bg-red-500 border-2 text-xl w-1/2 rounded-lg text-white hover:font-bold "> Tìm kiếm</button>
					</form>
				</div>

				<!-- <div  class="flex space-x-2" >
					<a href="dangki.html" class="mx-4 mb-11 mt-3 border-2 rounded-lg hover:bg-orange-400 hover:text-white hover:font-bold text-orange-500 p-2"><span class="m-2">Đăng ký</span></a> 
				    <a href="dangnhap.html" class="mx-4 mb-11 mt-3 border-2 rounded-lg hover:bg-orange-400 hover:text-white hover:font-bold text-orange-500 p-2"><span>Đăng nhập</span></a>
				</div> -->
			</div>
			<!--end tìm kiếm-->


		</header>
		
		<section class="vh-100" >
			<div class="container h-100">
				<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col pb-10">
						<p class="mb-10"><span class=" h2 font-bold text-[56px] text-orange-400 " align="center">THÔNG TIN GIỎ HÀNG</span></p>
						<div class="card mb-4">
          				<div class="card-body p-4">

            			<div class="row align-items-center">
    <?php
        if(isset($cart)){
    ?>
     <form action="" method="POST">
          <table>
        <thead>
		<div class="col-md-2 d-flex justify-content-center">
            <tr class="mb-10">
                <th class="small  mb-4 pb-2 px-16 text-orange-400 text-[25px]">Id</th>
                <th class="small mb-4 pb-2 px-3 text-orange-400 text-[25px]" >Tên sản phẩm</th>
				<th class="small mb-4 pb-2 px-16 text-orange-400 text-[25px]">Ảnh</th>
                <th class="small mb-4 pb-2 px-16 text-orange-400 text-[25px]">Đơn giá</th>
                <th class="small mb-4 pb-2 px-16 text-orange-400 text-[25px]">Số lượng</th>
                <th class="small mb-4 pb-2 px-16 text-orange-400 text-[25px]">Thành tiền</th>
                <th class="small mb-4 pb-2 px-16 text-orange-400 text-[25px]">Hành động</th>
            </tr>
			</div>
        </thead>
        <tbody>	
       
        <?php
            foreach($cart['buy'] as $item){
			$hinhpath="upload/img/".$item['img'];
        ?>
            <tr>
                <td class="lead fw-normal mb-0 px-16"><?php echo $item['id']?></td>
                <td class="lead fw-normal mb-0 px-3"><?php echo $item['title']?></td>
				<td class="lead fw-normal mb-0 px-16"><img src="<?php echo $hinhpath ?>" width="50" alt=""></td>
                <td class="lead fw-normal mb-0 px-16"><?php echo $item['price']?></td>
                <td class="lead fw-normal mb-0 px-16"><input type="number" min="1" max="30"name="qty[<?php echo $item['id']?>]"value="<?php echo $item['qty']?>"></td>
                <td class="lead fw-normal mb-0 px-16"><?php echo $item['sub_total']?></td>
                <td class="lead fw-normal mb-0 px-16 hover:text-red-600"><a class="border-2 rounded-lg border-red-600 hover:bg-red-600 hover:text-white hover:font-bold py-1 px-1" href="?mod=cart&action=delete&id=<?php echo $item['id']?>">Xoá</a></td>
				
            </tr>
        <?php
            } 
        ?>
      
        </tbody>
    </table>
	<br><br>
	<p class="mb-0 me-5 d-flex align-items-center pb-5"><br>
                <span class="lead fw-normal text-orange-400">Tổng giá: <?php echo currency_format($total); ?></span>
				</p>
            <input class="btn btn-info btn-lg me-2" type="submit" id="update_cart" name="btn_update" value="Cập nhật giỏ hàng">
  
				
   				<!-- <a class="btn btn-danger btn-lg me-2" href="?mod=cart&action=delete">Xóa toàn bộ giỏ hàng</a>			 -->
				   <a class="btn btn-success btn-lg me-2" href="?role=client&mod=home" >Thêm sản phẩm</a>
   				<a class="btn btn-success btn-lg" name="checkout" href="?role=client&mod=cart&action=bill">Thanh toán</a>
				   </div>
    <?php
        }else{ 
            echo "Không co phan tu nao trong gio hang";
        }
    ?>
	
              
            </div>
			
				   </form>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
</section>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
		integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
		crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
		integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
		crossorigin="anonymous"></script>
        <footer class="bg-indigo-900 ">
		<div class="grid grid-cols-6 gap-4 mr-18 py-10">
			<div class="col-span-2 m-4">
				<!--Đăng kí thông tin-->
				<p class="danhmuc m-4 text-orange-300">“Đặt sự hài lòng của khách hàng là ưu tiên số 1 trong mọi suy nghĩ hành động
					của mình” là sứ mệnh, là
					triết lý, chiến lược.. luôn cùng YODY tiến bước”</p>
				<h3 class="text-white m-4 font-bold">ĐĂNG KÝ NHẬN THÔNG TIN</h3>
				<form action="" class="flex m-4 space-x-3">
					<input type="email" placeholder="Nhập email đăng kí của bạn" required
						class="border-2 text-xl rounded-lg p-2 bg-indigo-400 placeholder:text-white w-3/4">
					<button type="submit" class="bg-white text-orange-300 text-xl rounded-lg p-2 w-1/4hover:text-orange-300 hover:font-bold"> Đăng ký</button>
				</form>
				<div class="grid grid-cols-6 gap-4 span-x-4">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA6LSlH4PpKRTgJHBrG_fILXEwp5VGaczxjA&usqp=CAU"
						alt="">
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHjjI_i03PwvchXYZljAxgYEXvLT-S-1a_Kg&usqp=CAU"
						alt="">
					<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/social_3.png?1658742748962"
						alt="">
					<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/social_4.png?1658742748962"
						alt="">
					<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/social_6.png?1658742748962"
						alt="">
					<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/social_8.png?1658742748962"
						alt="">
				</div>
			</div>
			<div class="text-white m-4">
				<h3 class="xuhuong m-4" style="color:#fcaf17;">Về YODY</h3>
				<ul class="m-4">
					<li><a class="hover:text-orange-300" href="#">Giới thiệu</a></li>
					<li><a  class="hover:text-orange-300"  href="#">Liên Hệ</a></li>
					<li><a  class="hover:text-orange-300"  href="#">Tuyển dụng</a></li>
					<li><a  class="hover:text-orange-300"  href="#">Tin Tức</a></li>
					<li><a  class="hover:text-orange-300"  href="#">Hệ thống cửa hàng</a></li>
				</ul>
			</div>
			<div class="text-white m-4">
				<h3 class="xuhuong m-4" style="color:#fcaf17;">HỖ TRỢ KHÁCH HÀNG</h3>
				<ul class="m-4">
					<li><a  class="hover:text-orange-300"  href="#">Hướng dẫn chọn size</a></li>
					<li><a  class="hover:text-orange-300"  href="#">Chính sách khách hàng thân thiết</a></li>
					<li><a  class="hover:text-orange-300"  href="#">Chính sách đổi/trả</a></li>
					<li><a  class="hover:text-orange-300"  href="#">Chính sách bảo mật</a></li>
					<li><a  class="hover:text-orange-300"  href="#">Thanh toán, giao nhận</a></li>
					<li><a  class="hover:text-orange-300"  href="#">Chính sách Đồng phục</a></li>
				</ul>
			</div>
			<div class="text-white col-span-2 m-4">
				<h3 class="xuhuong text-xl mb-3" style="color:#fcaf17;">Công ty cổ phần Thời trang YODY</h3>
				<p  class="hover:text-orange-300" >Mã số thuế: 0801206940</p>
				<p  class="hover:text-orange-300" >Địa chỉ: Đường An Định - Phường Việt Hoa - Thành phố Hải Dương - Hải Dương</p>
				<div>
					<img src="">
					<a  class="hover:text-orange-300"  hefr="#">Tìm cửa hàng gần bạn nhất</a>
				</div>
				<div>
					<img src="">
					<a  class="hover:text-orange-300"  hefr="#">Liên hệ đặt hàng: 024 9996 6868
						Thắc mắc đơn hàng: 024 9996 6868
						Góp ý khiếu nại: 1800 2086</a>
				</div>
				<div>
					<img src="">
					<a  class="hover:text-orange-300"  hefr="#">Email: chamsockhachhang@xshop.vn
					</a>
				</div>
				<div>
					<img src="assets/media/logos/trending.jpg" width="100px" height="100px">
				</div>
			</div>
		</div>

		<hr>
		<p class="text-center text-white">Website bán hàng xshop <span class="text-orange-300">Yody.vn</span>@ All right
			reserved</p>
	</footer>
	<script type="module" src="product.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"
	integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>