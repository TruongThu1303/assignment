<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['productions'] = get_list_productions();
    load_view('index', $data);
}

function createAction() {
    $data['categories'] = get_list_categories();
    load_view('create', $data);
}

function createPostAction() {
    $category_id = $_POST['category_id'];
    $count = $_POST['count'];
    $price = $_POST['price'];
    $title = $_POST['title'];
   // $thumb = $_POST['thumb'];
    $img = $_FILES['img']['name'];
                    $target_dir = "upload/img/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file) ;
    $status = $_POST['status'];
    $description = $_POST['description'];
    if (empty($title)) {
        push_notification('danger', ['Vui lòng nhập vào tên sản phẩm']);
        header('Location: ?role=admin&mod=production&action=create');
        die();
    }
    create_production($category_id,$count,$price,$title,$description,$img,$status);
    push_notification('success', ['Tạo mới sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
}

function deleteAction() {
    $id = $_GET['id'];
    delete_production($id);
    push_notification('success', ['Xoá sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
}

function updateAction()
{
    $id = $_GET['id'];
    $cate = get_one_production($id);
    $data['categories'] = get_list_categories();
    $data['production'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=production');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    // $cate = get_one_production($id);
    // if (!$cate) {
    //     header('Location: ?role=admin&mod=production');
    //     die();
    // }
    $title = $_POST['title'];
    $description = $_POST['description'];
    $count = $_POST['count'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $category_id = $_POST['category_id'];
    if (empty($title)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên sản phẩm'
        ]);
        header('Location: ?role=admin&mod=production&action=update&id='.$id);
    }
    update_production($id,$count,$price,$title,$description,$status,$category_id) ;
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
}