<?php
    function construct() {
        request_auth();
        load_model('index');
    }
    function indexAction() {
        $data['bills'] = getBill();
        load_view('index', $data);
    }
    function detailAction(){

        $data['details'] = getBillDetail($_GET['id']);
        load_view('detail', $data);
    }
    function updateAction(){
        $order_id = $_GET['order_id'];
        update_status($_GET['id']);
        header("location:?role=admin&mod=cart&action=detail&id=$order_id");
    }
?>