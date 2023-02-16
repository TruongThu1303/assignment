<?php
 function get_pro_by_id($id){
    $result=db_fetch_row("SELECT * FROM `productions` WHERE id={$id}");
    return $result;
 }
  function get_total_cart(){
      if(isset($_SESSION['cart'])){
         return $_SESSION['cart']['infor']['total'];
      }
      return FALSE;
  }
  function update_info_cart(){
         $num_order=0;
         $total=0;
         foreach($_SESSION['cart']['buy'] as $item){
            $num_order+=$item['qty'];
            $total+=$item['sub_total'];
         }
         $_SESSION['cart']['infor']=array(
            'num_order'=>$num_order,
            'total'=>$total,
         );
  }
  function update_cart($qty){
      foreach($qty as $id=>$new_qty){
         $qty=$_SESSION['cart']['buy'][$id]['qty']=$new_qty;
         $_SESSION['cart']['buy'][$id]['sub_total']=$new_qty*$_SESSION['cart']['buy'][$id]['price'];
      }
      update_info_cart();
  }
  function get_list_categories() {
   $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
   return $result;
}
   function addBill($data){
      db_insert("orders",$data);
   }
   function getOneBill(){
      $sql = db_fetch_row("SELECT * from `orders` order by id desc limit 0,1");
      return $sql;
   }
   function addBillDetail($data){
      db_insert("order_detail",$data);
   }
   function getBillDetail($id){
      $sql = db_fetch_array("SELECT od.* from `order_detail` od inner join `orders` o on od.id_order = o.id where o.id_user = $id");
      return $sql;
   } 
?>