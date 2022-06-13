
<?php

        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            header('Content-Type: application/json; charset=utf-8');
            $name=$_POST["name"];
            $age=$_POST["age"];
            $qualification=$_POST["qualification"];
            $hobbies=$_POST["hobbies"];
            $address=$_POST["address"];
            $city=$_POST["city"];
            $errors = [];
            if (empty($name)) {
                $errors['name'] = 'name is required';
            }
            if (empty($age)) {
                $errors['age'] = 'age is required';
            }
            if (empty($qualification)) {
                $errors['qualification'] = 'qualification is required';
            }
            if (empty($hobbies)) {
                $errors['hobbies'] = 'hobbies is required';
            } 
            if (empty($address)) {
                $errors['address'] = 'address is required';
            }
            if (empty($city)) {
                $errors['city'] = 'city is required';
            }
            if (!empty($name) && !empty($age) && !empty($qualification) &&!empty($hobbies) &&!empty($address) &&!empty($city)) {
                echo json_encode(['status' => 200, 'success' => 'Form Success']);
            } else {
                echo json_encode(['status' => 401, 'errors' => $errors]);
            }
        }
?>
