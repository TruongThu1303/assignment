<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT p.*, c.name as category_name, u.full_name FROM `productions` p inner join categories c on p.category_id = c.id inner join users u on p.create_id = u.id");
    return $result;
}

function get_one_production($id) {
    $result = db_fetch_row("SELECT p.id, p.count, p.price, p.status, p.title, p.description, p.create_id, p.created_at, u.full_name, u.id as `uid` FROM `productions` p JOIN `users` u ON p.create_id = u.id WHERE p.id = $id");
    return $result;
}

function create_production($category_id,$count,$price,$title,$description,$img,$status) {
    $user = get_auth();
    $id = db_insert('productions', [
        'category_id' => $category_id,
        'count' => $count,
        'price' => $price,
        'title' => $title,
        'description' => $description,
        'img' => $img,
        'status' => $status,
        'create_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_production($id,$count,$price,$title,$description,$status,$category_id) {
    db_update('productions', [
        'count' => $count,
        'price' => $price,
        'title' => $title,
        'description' => $description,
        'status' => $status,
        'category_id' => $category_id,
        'created_at' => date('Y-m-d H:i:s')
    ], "id = $id");
    return true;
}

function delete_production($id) {
    db_delete('productions', "id = $id");
    return true;
}

function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}