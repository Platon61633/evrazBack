<?php
// echo 'e';
require_once __DIR__.'/configuration/connect.php';

$method = $_SERVER['REQUEST_METHOD'];

// if ($connect) {
//         echo 'gg';
//     }else {
//         echo 'badg';
//     }

$NS = mysqli_fetch_all(mysqli_query($connect, 'SELECT * FROM `NS`'));
echo $NS[0][2];

?>





<?php
// require_once __DIR__.'/configuration/connect.php';


// $method = $_SERVER['REQUEST_METHOD'];

// // if ($connect) {
// //     echo 'gg';
// // }else {
// //     echo 'badg';
// // }

// switch ($_GET['for']) {
//     case 'event':
//         $event = mysqli_fetch_all(mysqli_query($connect, 'SELECT * FROM `event`'));

//         switch ($method) {
//             case 'GET':
//                     echo json_encode($event);
//                     break;
//             case 'POST':
//                     $arr = json_decode(file_get_contents('php://input'));
//                     mysqli_query($connect, "INSERT INTO `event` (`id`, `name`, `description`, `image`) VALUES (NULL, '$arr[0]', '$arr[1]', '$arr[2]')");
//                     break;        
//             case 'DELETE':
//                     mysqli_query($connect, 'DELETE from event where id='.file_get_contents('php://input').';');
//                     break;
//             case 'PATCH':
//                     $fix = json_decode(file_get_contents('php://input'));
//                     mysqli_query($connect, "UPDATE `event` SET `name` = '$fix[1]', `description` = '$fix[2]', `image` = '$fix[3]' WHERE `event`.`id` = ".$fix[0]);
//                     break;
//         }
//         break;
    
//     case 'useful':

//         $useful =  mysqli_fetch_all(mysqli_query($connect, 'SELECT * FROM `useful`'));

//         switch ($method) {
//             case 'GET':
//                 echo json_encode($useful);
//                 break;
            
//             case 'POST':
//                 $arr = json_decode(file_get_contents('php://input'));
//                 if (!mysqli_query($connect, "INSERT INTO `useful` (`id`, `name`, `date`, `desc`, `time`,`number`) VALUES (NULL, '$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]')")) {
//                     echo 1;
//                 }
//                 break;
//             case 'DELETE':
//                 $Did = file_get_contents('php://input');
//                 if (!mysqli_query($connect, 'DELETE from useful where id='.$Did.';')) {
//                     echo 1;
//                 }
//                 break;
//             case 'PATCH':
//                 $fix = json_decode(file_get_contents('php://input'));
//                 if (!mysqli_query($connect, "UPDATE `useful` SET `name` = '$fix[1]', `date` = '$fix[2]', `desc` = '$fix[3]', `time` = '$fix[4]', `number` = '$fix[5]' WHERE `useful`.`id` = ".$fix[0])) {
//                     echo 1;
//                 }
//                 break;
//         }
//         break;
//     case 'kitchen':
//         switch ($_GET['type']) {
//             case 'kitchen':
//                 $kitchen = [
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ЗАКУСКИ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ОСНОВНОЕ БЛЮДО'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'САЛАТЫ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'СУПЫ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ДЕСЕРТ'"))                
//                 ];
//                 break;
//             case 'breakfast':
//                 $kitchen = [
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'БАНКЕТНОЕ МЕНЮ'"))  
//                     // mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'СЛАДКОЕ'")),
//                     // mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'НЕ СЛАДКОЕ'"))               
//                 ];
//                 break;
//             case 'bar':
//                 $kitchen = [
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'КОФЕ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'БЕЗАЛКОГОЛЬНЫЕ НАПИТКИ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ЧАЙ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ВИНО'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ВИНО ИГРИСТОЕ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'КОКТЕЙЛИ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ПИВО'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ВОДКА'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'КОНЬЯК'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ВИСКИ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'БРЭНДИ'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'ДЖИН'")),
//                     mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = 'РОМ'")),          
//                 ];
//                 break;
            
//             default:
//             $kitchen =  mysqli_fetch_all(mysqli_query($connect, "SELECT * FROM `restoraunt`.`type_kitchen` WHERE `type` = '".$_GET['type']."'"));
//                 break;
//         }
        

//         switch ($method) {
//             case 'GET':
//                 echo json_encode($kitchen);
//                 break;
            
//             case 'POST':
//                 $arr = json_decode(file_get_contents('php://input'));
//                 if (!mysqli_query($connect, "INSERT INTO `type_kitchen` (`id`, `type`, `name`, `desc`, `weight`, `price`) VALUES (NULL, '$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]')")) {
//                     echo json_encode($arr);
//                 }
//                 break;
//             case 'DELETE':
//                 $Did = file_get_contents('php://input');
//                 if (!mysqli_query($connect, 'DELETE from type_kitchen where id='.$Did.';')) {
//                     echo 1;
//                 }
//                 break;
//             case 'PATCH':
//                 $fix = json_decode(file_get_contents('php://input'));
//                 if (!mysqli_query($connect, "UPDATE `type_kitchen` SET `type` = '$fix[5]', `name` = '$fix[1]', `desc` = '$fix[2]', `weight` = '$fix[3]', `price` = '$fix[4]' WHERE `type_kitchen`.`id` = ".$fix[0])) {
//                     echo 1;
//                 }
//                 break;
//         }
//         break;
//         case 'special':

//             $special = mysqli_fetch_all(mysqli_query($connect, 'SELECT * FROM `special`'));
    
//             switch ($method) {
//                 case 'GET':
//                     echo json_encode($special);
//                     break;
                
//                 case 'POST':
//                     $arr = json_decode(file_get_contents('php://input'));
//                     if (!mysqli_query($connect, "INSERT INTO `special` (`id`, `desc`, `img`, `price`, `weight`) VALUES (NULL, '$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]')")) {
//                         echo json_encode($arr);
//                     }
//                     break;
//                 case 'DELETE':
//                     $Did = file_get_contents('php://input');
//                     if (!mysqli_query($connect, 'DELETE from special where id='.$Did.';')) {
//                         echo 1;
//                     }
//                     break;
//                 case 'PATCH':
//                     $fix = json_decode(file_get_contents('php://input'));
//                     if (!mysqli_query($connect, "UPDATE `special` SET `desc` = '$fix[1]', `img` = '$fix[2]', `price` = '$fix[3]', `weight` = '$fix[4]' WHERE `special`.`id` = ".$fix[0])) {
//                         echo 1;
//                     }
//                     break;
//             }
//             break;
//         case 'reserved':

//             $reserved = mysqli_fetch_all(mysqli_query($connect, 'SELECT * FROM `reserved`'));

//             switch ($method) {
//                 case 'GET':
//                     echo json_encode($reserved);
//                     break;
//                 case 'POST':
//                     $arr = json_decode(file_get_contents('php://input'));
//                     if (mysqli_query($connect, "INSERT INTO `reserved` (`id`, `name`, `surname`, `date`, `time`, `tel`, `kolvo`, `info`) 
//                     VALUES (NULL, '$arr[0]', '$arr[1]', '$arr[2]', '$arr[3]', '$arr[4]', '$arr[5]', '$arr[6]')")) {
//                         echo 1;
//                     }else {
//                         echo 2;
//                     }
//                     break;
                
//                 default:
//                     # code...
//                     break;
//             }
//             break;
// }
?>
