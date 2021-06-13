<?php
    $host       = '127.0.0.1';
    $user       = 'abelikov';
    $password   = 'Goodman5!';
    $dbname     = 'lara_productstar';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
    // PDO instance, наследуем класс PDO в переменную $pdo;
    $pdo = new PDO($dsn, $user, $password);
    // PDO attribute, чтобы результат был ассоциативным массивом.
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    function get_userid ($pdo, $email) {
        // Prepare statements (prepare & execute)
        $sql  = 'SELECT * FROM users';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email'=>$email, 'email_add'=>$email]);
        $posts = $stmt->fetchAll();

//        var_dump($posts);
//        if (isset($posts[0]->id)) {
//            return ($posts[0]->id);
//        }
        echo "<h1>Admin page: </h1><p>Зарегистрированные пользователи:</p><br>";
        foreach ($posts as $post) {
            echo 'user_id: ' . $post->id . '<br>' . 'user_name: ' . $post->name . '<br>' . 'user_email: ' . $post->email . "<br><br>";
        }

//        add_log(' user not found ' . $email);
        return false;
    };

    get_userid($pdo, '');
