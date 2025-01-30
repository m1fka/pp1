<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $file = "C:/Users/KOMP.COM/OneDrive/Desktop/m1fka/dataBase/base.txt"; 

    // Регистрация
    if (isset($_POST["usernameUp"]) && isset($_POST['passwordUp'])) {
        $usernameUp = htmlspecialchars($_POST["usernameUp"]); 
        $passwordUp = htmlspecialchars($_POST['passwordUp']); 

        // Проверяем, существует ли уже пользователь
        $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
        $exists = false;

        foreach ($users as $user) { 
            list($storedUsername, ) = explode(':', $user); 
            if ($storedUsername === $usernameUp) { 
                $exists = true; 
                break; 
            } 
        }

        if (!$exists) {
            // Хешируем пароль и сохраняем
            $data = $usernameUp. ':' . password_hash($passwordUp, PASSWORD_DEFAULT) . "\n"; 
            file_put_contents($file, $data, FILE_APPEND); 
            echo "Регистрация успешна"; 
        } else {
            echo "Пользователь уже существует"; 
        }
    }

    // Вход
    if (isset($_POST['usernameIn']) && isset($_POST['passwordIn'])) {
        $usernameIn = htmlspecialchars($_POST['usernameIn']); 
        $passwordIn = htmlspecialchars($_POST['passwordIn']); 

        // Читаем файл и проверяем данные 
        $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $found = false; 

        foreach ($users as $user) { 
            list($storedUsername, $storedPassword) = explode(':', $user); 
            // Проверяем, совпадает ли имя пользователя и хеш пароля
            if ($storedUsername === $usernameIn) {
                if (password_verify($passwordIn, $storedPassword)) { 
                    $found = true; 
                    break; 
                }
            }
        } 

        if ($found) { 
            echo "Успех"; 
        } else { 
            echo "Неверное имя пользователя или пароль"; 
        } 
    }
}



// if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
//     $file = "C:/Users/KOMP.COM/OneDrive/Desktop/m1fka/dataBase/base.txt"; 

//     // Регистрация
//     if (isset($_POST["usernameUp"]) && isset($_POST['passwordUp'])) {
//         $usernameUp = htmlspecialchars($_POST["usernameUp"]); 
//         $passwordUp = htmlspecialchars($_POST['passwordUp']); 

//         // Проверяем, существует ли уже пользователь
//         $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
//         $exists = false;

//         foreach ($users as $user) { 
//             list($storedUsername, ) = explode(':', $user); 
//             if ($storedUsername === $usernameUp) { 
//                 $exists = true; 
//                 break; 
//             } 
//         }

//         if (!$exists) {
//             // Хешируем пароль и сохраняем
//             $data = $usernameUp. ':' . password_hash($passwordUp, PASSWORD_DEFAULT) . "\n"; 
//             file_put_contents($file, $data, FILE_APPEND); 
//             echo "Регистрация успешна"; 
//         } else {
//             echo "Пользователь уже существует"; 
//         }
//     }

//     // Вход
//     if (isset($_POST['usernameIn']) && isset($_POST['passwordIn'])) {
//         $usernameIn = htmlspecialchars($_POST['usernameIn']); 
//         $passwordIn = htmlspecialchars($_POST['passwordIn']); 

//         // Читаем файл и проверяем данные 
//         $found = false; 

//         foreach ($users as $user) { 
//             list($storedUsername, $storedPassword) = explode(':', $user); 
//             // Проверяем, совпадает ли имя пользователя и хеш пароля
//             if ($storedUsername === $usernameIn && password_verify($passwordIn, $storedPassword)) { 
//                 $found = true; 
//                 break; 
//             } 
//         } 

//         if ($found) { 
//             echo "Успех"; 
//         } else { 
//             echo "Неверное имя пользователя или пароль"; 
//             echo($storedUsername . $usernameIn .' '. $passwordIn. $storedPassword);

//         } 
//     }
// }







// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     $file = "C:/Users/KOMP.COM/OneDrive/Desktop/m1fka/dataBase/base.txt";

//     // Регистрация
//     if (isset($_GET["usernameUp"]) && isset($_GET['passwordUp'])) {
//         $usernameUp = htmlspecialchars($_GET["usernameUp"]);
//         $passwordUp = htmlspecialchars($_GET['passwordUp']);

//         // Проверяем, существует ли уже пользователь
//         $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//         $exists = false;

//         foreach ($users as $user) {
//             list($storedUsername,) = explode(':', $user);
//             if ($storedUsername === $usernameUp) {
//                 $exists = true;
//                 break;
//             }
//         }

//         if (!$exists) {
//             // Хешируем пароль и сохраняем
//             $data = $usernameUp. ':' . password_hash($passwordUp, PASSWORD_DEFAULT) . "\n"; 
//             // $data = $usernameUp . ':' . $passwordUp . "\n";

//             file_put_contents($file, $data, FILE_APPEND);
//             echo "<script> console.log('Регистрация успешна');</script>";
//         } else {
//             echo "<script> console.log('Пользователь уже существует');</script>";
//         }
//     }

//     // Вход
//     if (isset($_GET['usernameIn']) && isset($_GET['passwordIn'])) {
//         $usernameIn = htmlspecialchars($_GET['usernameIn']);
//         $passwordIn = htmlspecialchars($_GET['passwordIn']);

//         // Читаем файл и проверяем данные 
//         $found = false;

//         foreach ($users as $user) {
//             list($storedUsername, $storedPassword) = explode(':', $user);
//             if ($storedUsername === $usernameIn && password_verify($passwordIn, $storedPassword)) {
//                 $found = true;
//                 break;
//             }
//         }

//         if ($found) {
//             echo "<script> console.log('успех');</script>";
//         } else {
//             echo "<script> console.log('Неверное имя пользователя или пароль');</script>";
//         }
//     }
// }








// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     $file = "C:/Users/KOMP.COM/OneDrive/Desktop/m1fka/dataBase" . '/base.txt';
//     //рег
//     $usernameUp = htmlspecialchars($_GET["usernameUp"]);
//     $passwordUp = htmlspecialchars($_GET['passwordUp']);

//     // $data = $usernameUp. ':' . password_hash($passwordUp, PASSWORD_DEFAULT) . "\n"; // Хешируем пароль
//     $data = $usernameUp. ':' . $passwordUp . "\n";

//     file_put_contents($file, $data, FILE_APPEND);


//     //вход
//     $usernameIn = htmlspecialchars($_GET['usernameIn']);
//     $passwordIn = htmlspecialchars($_GET['passwordIn']);

//     // Читаем файл и проверяем данные
//     $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//     $found = false;

//     foreach ($users as $user) {
//         list($storedUsername, $storedPassword) = explode(':', $user);
//         if ($storedUsername === $usernameIn && password_verify($passwordIn, $storedPassword)) {
//             $found = true;
//             break;
//         }
//     }

//     if ($found) {
//         echo "<script> console.log('успех');</script>";
//     } else {
//         echo "<script> console.log('Неверное имя пользователя или пароль');</script>";
//         // echo "Неверное имя пользователя или пароль.";
//     }
// }
