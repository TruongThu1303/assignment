<?php

function construct() {
    load_model('index');
}
function indexAction() {
    if(isset($_GET['id_cate'])){
        $cate_id=$_GET['id_cate'];
        $pro_cate=get_pro_by_id_cate($cate_id);
        $data['pro_cate']= $pro_cate;
    }
    $data['categories'] = get_list_categories();
    $data['productions'] = get_list_productions();
    load_view('index', $data);
}
function createAction() {
    load_view('index');
}
function dangkyAction(){
    load_view('dangky');
}

function luuDangKyPostAction() {
    $email = $_POST['email'];
    $numberphone = $_POST['numberphone'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

    $data = [
        "email" => $email,
        "numberphone" => $numberphone,
        "full_name" => $fullname,
        "password" => $password,
        "role" => 1
    ];

    insert_taikhoan($data);
    header("location: ?role=client");

}
?> 