<?php
    function getBillDetail($id){
        $sql = db_fetch_array("SELECT od.* from `order_detail` od inner join `orders` o on od.id_order = o.id where od.id_order = $id");
        return $sql;
     } 
     function getBill(){
        $sql = db_fetch_array("SELECT * from `orders`");
        return $sql;
     }
     function update_status($id) {
        db_update('order_detail', [
            'status' => 1
        ], "id = $id");
        return true;
    }
?>