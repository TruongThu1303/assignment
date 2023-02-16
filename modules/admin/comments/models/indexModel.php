<?php

function get_list_comments() {
    $result = db_fetch_array("SELECT * FROM `comments`");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `comments` WHERE `user_id` = {$id}");
    return $item;
}
function delete_comment($id) {
    db_delete('comments', "id = $id");
    return true;
}
