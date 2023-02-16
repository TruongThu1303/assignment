 <?php
  function construct(){
    if(!isset($_SESSION['auth'])){
      header('location: ?role=client&mod=auth');
      die;
    }
    load_model('index');
    load('helper','format');
  }
  //
  function indexAction(){
    
   if(isset($_GET['id_production'])){
     $id=$_GET['id_production'];
     $pro=get_pro_by_id($id);
     $qty=1;
     if(isset($_GET['id_cate'])){
      $cate_id=$_GET['id_cate'];
      $pro_cate=get_pro_by_id_cate($cate_id);
      $data['pro_cate']= $pro_cate;
  }
     if(isset($_SESSION['cart']['buy'])&& array_key_exists($id,$_SESSION['cart']['buy'])){
      $qty=$_SESSION['cart']['buy'][$id]['qty']+1;
     }
     $_SESSION['cart']['buy'][$id]=array(
          'id'=>$pro['id'],
          'title'=>$pro['title'],
          'img'=>$pro['img'],
          'price'=>$pro['price'],
          'qty'=>$qty,
          'sub_total'=>$pro['price']*$qty
     );
     update_info_cart();
   }
   if(!empty($_SESSION['cart'])){
     $data['categories'] = get_list_categories();
     $data['cart']=$_SESSION['cart'];
     $total=get_total_cart();
     $data['total']=$total;   
     load_view('index',$data);
   }   
    
  }
  function deleteAction(){
     if(isset($_GET['id'])){
          $id=(int)$_GET['id'];
          if(!empty($id)){
               unset($_SESSION['cart']['buy'][$id]);
               update_info_cart();
          }
                  
     }   
     header('Location:?mod=cart');

  }
  function indexPostAction(){
    
     update_cart($_POST['qty']);
     header ("Location:?mod=cart");
  }
  function billAction(){
    $data['categories'] = get_list_categories();
    load_view("bill",$data);
  }
  function addCartPostAction(){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $numberphone = $_POST['numberphone'];
    $data = [
      'full_name' => $full_name,
      'email' => $email,
      'numberphone' => $numberphone,
      'id_user' => $_SESSION['auth']['id']
    ];
    addBill($data);
    $bill= getOneBill();
    foreach($_SESSION['cart']['buy'] as $item){
      $data = [
        'id_order' => $bill['id'],
        'id_pro' => $item['id'],
        'name_product' => $item['title'],
        'img' => $item['img'],
        'price' => $item['price'],
        'quantity' => $item['qty'],
        'total' => $item['sub_total'],
        'date' => date('Y-m-d H:i:s'),
        'status' => 0
      ];
      addBillDetail($data);
    }
    header("location:?role=client&mod=cart&action=myCart");

  }
  function myCartAction(){
    $data['categories'] = get_list_categories();
    $data['carts'] = getBillDetail($_SESSION['auth']['id']);
   
    load_view("myCart",$data);
  }
  

?>