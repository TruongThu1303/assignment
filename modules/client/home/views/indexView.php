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
			<a href="?role=client">
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

			<div class="mb-3">
				<!--tìm kiếm-->
				<div class="flex space-x-5 mb-3">
					<!--search-->
					<form action="" class="flex  rounded-lg space-x-3 pt-3 mr-3" id="kt_datatable_search_query">
						<input type="email" placeholder="Tìm sản phẩm" required class="border-2 text-xl p-2 rounded-lg">
						<button type="submit" class="bg-red-500 border-2 text-xl w-1/2 rounded-lg text-white hover:font-bold "> Tìm kiếm</button>
						<span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
					</form>
				</div>
					<?php 
						if(!isset($_SESSION['auth'])):
					?>
				<div  class="flex space-x-2" >
					<a href="?role=client&mod=home&action=dangky" class="mx-4 mb-11 mt-3 border-2 rounded-lg hover:bg-orange-400 hover:text-white hover:font-bold text-orange-500 p-2"><span class="m-2">Đăng ký</span></a> 
				    <a href="?role=client&mod=auth" class="mx-4 mb-11 mt-3 border-2 rounded-lg hover:bg-orange-400 hover:text-white hover:font-bold text-orange-500 p-2"><span>Đăng nhập</span></a>
				</div>
				<?php else : ?> <p class="border-2 rounded-lg text-white bg-orange-400 border-orange-400 p-1 mr-28 mb-3">Xin chào <?= $_SESSION['auth']['full_name'] ?></p>
					<?php if($_SESSION['auth']['role']==2){
						?>
						<a href="?role=admin" class="border-2 rounded-lg text-white bg-orange-400 border-orange-400 p-1 hover:bg-green-600 hover:border-green-600">Admin</a>
					<?php
					}
					?>
					<a href="?role=client&mod=auth&action=logout" class="border-2 rounded-lg text-white bg-orange-400 border-orange-400 p-1 hover:bg-green-600 hover:border-green-600">Đăng xuất</a>

				<?php endif ?>
			</div>
			<!--end tìm kiếm-->


		</header>
	</div>
	<!-- đầu trang -->

	<!--end menu 2-->
	<!-- slider dau trang -->
					<?php
						if (!isset($_GET['id_cate'])){
echo '	<div id="carouselExampleControls" class="carousel slide z-0" data-bs-ride="carousel">
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/slider_1.jpg?1658550439528"
			class="d-block w-100" alt="...">
	</div>
	<div class="carousel-item">
		<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/slider_2.jpg?1658650672344"
			class="d-block w-100" alt="...">
	</div>
	<div class="carousel-item">
		<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/slider_3.jpg?1658550439528"
			class="d-block w-100" alt="...">
	</div>
	<div class="carousel-item">
		<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/slider_4.jpg?1658550439528"
			class="d-block w-100" alt="...">
	</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
	data-bs-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
	data-bs-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="visually-hidden">Next</span>
</button>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
crossorigin="anonymous"></script>





<div class="flex justify-between m-5">
<a href="" class="vanchuyen" style="text-decoration:none ;">
	<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/ser_1.png?1658650672344" alt="">
	<p class="my-3 text-xl">Miễn phí vận chuyển đơn 0đ <br>
		<span class="danhmuc" style="color:#fcaf17 ;">Freeship</span> mọi đơn hàng từ 30/6-31/7
	</p>
</a>
<a href="https://yody.vn/chinh-sach-ship-cod-tai-yody" class="vanchuyen" style="text-decoration:none ;">
	<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/ser_2.png?1658650672344" alt="">
	<p class="my-3 text-xl">
		Thanh toán COD <br>
		Thanh toán khi <span class="danhmuc" style="color:#fcaf17 ;">nhận hàng (COD)</span>
	</p>
</a>

<a href="https://yody.vn/chinh-sach-khach-hang-than-thiet" class="vanchuyen" style="text-decoration:none ;">
	<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/ser_3.png?1658650672344" alt="">
	<p class="my-3 text-xl">
		Khách hàng VIP <br>
		Ưu đãi dành cho <span class="danhmuc" style="color:#fcaf17 ;">khách hàng VIP</span>
	</p>
</a>
<a href="https://yody.vn/chinh-sach-doi-tra" class="vanchuyen" style="text-decoration:none ;">
	<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/ser_4.png?1658650672344" alt="">
	<p class="my-3 text-xl">
		Hỗ trợ bảo hành <br>
		<span class="danhmuc" style="color:#fcaf17;"> Dễ dàng đổi, sửa sản phẩm</span> tại YODY Store
	</p>
</a>
</div>
<section>
<h2 class="text-orange-500 text-center text-6xl font-bold my-5 ">DANH MỤC NỔI BẬT</h2>
<div class="grid grid-cols-6" id="product">

</div>
</section>';
						}
					?>



	<p class="xuhuong text-center text-red-500 text-4xl ">XU HƯỚNG TÌM KIẾM </p>

	<div class="flex justify-center space-x-8 mt-3 mb-5">
	<?php foreach ($categories as $category){
                                extract($category);
                                echo '<a href="?role=client&mod=home&id_cate='.$id.'"><button type="button" id="btn-new" class="btn btn-outline-warning hover:text-white">'.$name.'</button></a>';

					} ?>
		
	</div>
	<aside>
					<div class="row mx-20 p-5" id="fullproducts">
	<?php   
	if(isset($_GET['id_cate'])){
		foreach ($pro_cate as $production){
			extract($production);
			$hinhpath="upload/img/".$img;
			if(is_file($hinhpath)){
					$hinh="<img src='".$hinhpath."' height='150' width='150' >";
			}else {
					$hinh= "no photo";
			}
			echo '
			<div class="products col-2 mr-28 border-2 border-black-600 hover:border-red-600 hover:border-4 mt-3">
						<div class="product-item p-3">
						  <p class="p-3">
						  <a href="?role=client&mod=detail&id_production='.$id.'" style="text-decoration: none">'.$hinh.'</a></p>
							<p class="text-orange-400 text-[24px] pb-3 hover:text-orange-400 hover:font-bold pl-5">
							<a href="?role=client&mod=detail&id_production='.$id.'" style="text-decoration: none">'.$title.'</a></p>      
						  <p class="font-bold text-blue-600 pl-10 pb-3">
							'.$price.'</p>
						  
						</div>
					  </div>
			';
	}
}
	?>
	</div>
				</aside>

		
	<!-- slider than trang  -->
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/b1.jpg?1658650672344"
					class="news_img d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/b2.jpg?1658650672344"
					class="news_img d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="https://bizweb.sapocdn.net/100/438/408/themes/863105/assets/b3.jpg?1658650672344"
					class="news_img d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!-- end -->
	

	<p class="xuhuong text-center text-red-500 text-2xl pb-3 pt-5 hover: italic">
		EVERYDAY WEAR - THOẢI MÁI, TỰ TIN MỌI LÚC MỌI NƠI
	</p>
	<!-- sua ho phan nay -->

	<!-- danh muc san pham -->
	<aside>
		<div class="row  p-5" id="fullproducts">
		<?php foreach ($productions as $production){
                                extract($production);
								$hinhpath="upload/img/".$img;
								if(is_file($hinhpath)){
										$hinh="<img src='".$hinhpath."' height='100' width='200' >";
								}else {
										$hinh= "no photo";
								}
                                echo '<div class="col-2 mr-28 border-2 border-black-600 hover:border-red-600 hover:border-4 mt-3">
								<div class="product-item ">
								  <p class="p-3">
								  <a href="?role=client&mod=detail&id_production='.$id.'" style="text-decoration: none">'.$hinh.'</a></p>
									<p class="text-orange-400 text-[24px] pb-3 hover:text-orange-400 hover:font-bold pl-5">
									<a href="?role=client&mod=detail&id_production='.$id.'" style="text-decoration: none">'.$title.'</a></p>      
								  <p class="font-bold text-blue-600 pl-10 pb-3">
									'.$price.'</p>
								  
								</div>
							  </div>';

					} ?>

		</div>
	</aside>
	<!-- end -->


	<!-- chân trang -->
	<footer class="bg-indigo-900 ">
		<div class="grid grid-cols-6 gap-4 mr-18 py-10">
			<div class="col-span-2 m-4">
				<!--Đăng kí thông tin-->
				<p class="danhmuc m-4 text-orange-300">“Đặt sự hài lòng của khách hàng là ưu tiên số 1 trong mọi suy nghĩ hành động
					của mình” là sứ mệnh, là
					triết lý, chiến lược.. luôn cùng TRENDING tiến bước”</p>
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
				<h3 class="xuhuong m-4" style="color:#fcaf17;">Về TRENDING</h3>
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
				<h3 class="xuhuong text-xl mb-3" style="color:#fcaf17;">Công ty cổ phần Thời trang TRENDING</h3>
				<p  class="hover:text-orange-300" >Mã số thuế: 0801206940</p>
				<p  class="hover:text-orange-300" >onlne</p>
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
			</div>
		</div>

		<hr>
		<p class="text-center text-white">Website bán hàng xshop <span class="text-orange-300">trending.vn</span>@ All right
			reserved</p>
	</footer>
	<script type="module" src="product.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"
	integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>