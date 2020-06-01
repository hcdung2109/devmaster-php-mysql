<?php


$mysqli = mysqli_connect('localhost', 'root', '', 'webshop');

if (!$mysqli) {
    echo 'kêt noi thất bại';
    exit();
}

$result = $mysqli->query("SELECT id, name FROM users u  LEFT JOIN roles r ON u.role_id = r.id");

//print_r($result->num_rows);

$data = [];
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}

echo '<pre>';
print_r($data);DIE;

$sql_insert = "INSERT INTO roles (name) VALUES ('TEST ')";

$sql_update = "UPDATE roles SET name = 'GUEST' WHERE id = 3 ";

$sql_delete = "DELETE FROM roles WHERE id = 4 ";

$sql_left_join = "SELECT id, name FROM users u  LEFT JOIN roles r ON u.role_id = r.id";

if ($mysqli->query($sql_delete) == TRUE) {
    echo "Thành công";
} else {
    echo "Lỗi: ". $mysqli->error;
}

/* free result set */
// $result->close();
// ngắt kết nối đang mở tới CSDL
mysqli_close($mysqli);

