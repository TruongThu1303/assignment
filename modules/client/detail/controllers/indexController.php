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
    $id = $_GET['id_production'];
    $data['comments'] = get_list_comments($id);
    $data['categories'] = get_list_categories();
    $data['productions'] = get_list_productions();
    if(isset($_GET['id_production'])){
        $production_id=$_GET['id_production'];
        $production_id=get_one_production($production_id);
        $data['production_id']= $production_id;
    } 
    load_view('index', $data);
}
function createAction() {
    load_view('index', $data);
}
function commentAction() {
  //  $id = $_GET['id_production'];

    $data['comments'] = get_list_comments();
    load_view('comment', $data);
}
function addCommentPostAction(){
    $id_pro = $_GET['id_production'];
    $detail = $_POST['detail'];
    $id_user = $_SESSION['auth']['id'];
    $date = date("Y-m-d H:i:s");
    $data = [
        'detail' => $detail,
        'id_user'=> $id_user,
        'id_pro' => $id_pro,
        'date' => $date
    ];
    addComment($data);
    header("location: ?role=client&mod=detail&id_production=".$id_pro);
}
?>