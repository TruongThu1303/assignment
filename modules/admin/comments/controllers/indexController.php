<?php
function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['comments'] = get_list_comments();
    load_view('index', $data);
}

function createAction() {
    load_view('create');
}
function deleteAction() {
    $id = $_GET['id'];
    delete_comments($id);
    push_notification('success', ['Xoá bình luận thành công']);
    header('Location: ?role=admin&mod=comments');
}
?>
