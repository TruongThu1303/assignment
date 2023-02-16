<?php
function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['users'] = get_list_users();
    load_view('index', $data);
}

function createAction() {
    load_view('create');
}
function deleteAction() {
    $id = $_GET['id'];
    delete_users($id);
    push_notification('success', ['Xoá tài khoản thành công']);
    header('Location: ?role=admin&mod=users');
}
?>
