<?php

class UsersModel
{
    private $users = array(
        array(
            'id' => 1,
            'first_name' => 'Mark',
            'last_name' => 'Dwan',
            'mail' => 'mark@gmail.com',
            'age' => 24,
            'gender' => 'm'
        ),
        array(
            'id' => 2,
            'first_name' => 'Katty',
            'last_name' => 'Mao',
            'mail' => 'katty19@gmail.com',
            'age' => 19,
            'gender' => 'f'
        ),
        array(
            'id' => 3,
            'first_name' => 'Tommy',
            'last_name' => 'Chan',
            'mail' => 'tom_chan@gmail.com',
            'age' => 34,
            'gender' => 'm'
        ),
        array(
            'id' => 4,
            'first_name' => 'Liza',
            'last_name' => 'Simpson',
            'mail' => 'liza@gmail.com',
            'age' => 14,
            'gender' => 'f'
        ),
        array(
            'id' => 5,
            'first_name' => 'Gomer',
            'last_name' => 'Simpson',
            'mail' => 'gommy_sim@gmail.com',
            'age' => 50,
            'gender' => 'm'
        )
    );

    public function getUserList()
    {
        return $this->users;
    }

    private function getUserById($userId) {
        $res = array();

        foreach ($this->users as $user) {
            if ($user['id'] === $userId) {
                $res = $user;
                break;
            }
        }

        return $res;
    }

    public function getUserAge($userId) {
        $user = $this->getUserById($userId);

        return array_key_exists('age', $user) ? $user['age'] : null;
    }
}


/* This is controller actions */
$userModel = new UsersModel();
$users = $userModel->getUserList();
/* -------------------------- */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['first_name']; ?></td>
                    <td><?php echo $user['last_name']; ?></td>
                    <td><?php echo $user['age']; ?></td>
                    <td><?php echo $user['mail']; ?></td>
                    <td><?php echo $user['gender']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
