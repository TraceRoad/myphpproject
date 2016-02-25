<?php
/*
 * session
 * 注意：默认情况下，session是以文件形式存储在服务器上的，
 *     因此当一个页面开启了session之后，会独占这个session文件，这样会导致当前用户的其他并发访问无法执行而等待
 * 解决方案：可以采用缓存或者数据库的形式存储来解决这个问题
 */
session_start();//开启session
$_SESSION['test']='123456';
echo session_id()."<br/>";//显示session_id的值
echo $_SESSION['test'];//读取session的值
unset($_SESSION['test']);//销毁session
session_destroy();//session_destroy并不会立即的销毁全局变量$_SESSION中的值，只有当下次再访问的时候，$_SESSION才为空，但是session_id仍然存在。
var_dump($_SESSION['test']);
/*
 * 加密和解密
 */

 $str='123456';
 $secureKey='immoc';//加密密匙
 //加密
 $str = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), $str, MCRYPT_MODE_ECB));
 echo $str;
 //解密
 $str = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), base64_decode($str), MCRYPT_MODE_ECB);
 echo $str;