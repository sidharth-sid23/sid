<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('Content-Type: application/json; charset=utf-8');
    $name = $_POST['name'];
    $number = $_POST['number'];
    $password = $_POST['pass'];
    // =========================================first way validation==========================================================
    // if (empty($name)) {
    //     echo json_encode(['status' => 404, 'error' => 'Name is reqired']);
    // } else if (empty($number)) {
    //     echo json_encode(['status' => 404, 'error' => 'Number is reqired']);
    // } else if (empty($password)) {
    //     echo json_encode(['status' => 404, 'error' => 'Password is reqired']);
    // } else {
    //     echo json_encode(['status' => 200, 'success' => 'Form Success']);
    // }
    // ========================================= / first way validation==========================================================
    // =========================================second way==========================================================
    $errors = [];
    if (empty($name)) {
        $errors['name'] = 'name is required';
    }
    if (empty($number)) {
        $errors['number'] = 'number is required';
    }
    if (empty($password)) {
        $errors['pass'] = 'password is required';
    }
    if (!empty($name) && !empty($number) && !empty($password)) {
        echo json_encode(['status' => 200, 'success' => 'Form Success']);
    } else {
        echo json_encode(['status' => 401, 'errors' => $errors]);
    }
    // ========================================= / second way==========================================================
}?>

<?php
$email = 'kawalsohi14@gmail.com';
$users  = [
    [
        'name' => 'kawal',
        'email' => 'kawalsohi14@gmail.com'
    ],
    [
        'name' => 'priya',
        'email' => 'priya@gmail.com'
    ],
    [
        'name' => 'Sidharth',
        'email' => 'sidharth@gmail.com'
    ],
];
$emails = array_column($users, 'email');
if (in_array($email, $emails)) {
    echo "Email already exist";
} else {
    echo "Email not exist";
}
$obj = new User;
$obj->checkUser($email);
$obj->createUser($data);
$obj->findUser($id);
$obj->updateUser($id, $data);
$obj->deleteUser($id);
?>