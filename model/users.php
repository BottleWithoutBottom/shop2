<?php

function getUserById(int $id): ?array {
    $sql = "SELECT * FROM users WHERE user_id =:user_id";
    $query = getQuery($sql, ['user_id' => $id]);
    $user = $query->fetch();
    return $user === false ? null : $user;
}