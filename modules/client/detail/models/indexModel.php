<?php
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}
function get_list_categories() {
    $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
    return $result;
}
function get_one_category($id) {
    $result = db_fetch_row("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id WHERE c.id = $id");
    return $result;
}
function get_list_productions() {
    $result = db_fetch_array("SELECT p.*, c.name as category_name, u.full_name FROM `productions` p inner join categories c on p.category_id = c.id inner join users u on p.create_id = u.id");
    return $result;
}

function get_one_production($id) {
    $result = db_fetch_array("SELECT * FROM `productions` WHERE id = $id");
    return $result;
}
function get_pro_by_id_cate($cate_id){
    $result = db_fetch_array ("SELECT * FROM productions WHERE category_id = $cate_id");
    return $result;
}
function addComment($data){
    db_insert("comments",$data);
}
function get_list_comments($id){
    $result = db_fetch_array("SELECT c.*,u.full_name as `full_name` FROM `comments` c inner join `users` u on c.id_user = u.id where c.id_pro = $id  ");
    return $result;
}
//  function get_list_comments(){
//     $result = db_fetch_array("SELECT c.*,u.full_name as `full_name` FROM `comments` c inner join `users` u on c.id_user = u.id   ");
// } 
