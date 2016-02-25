<?php
/*
 * cookie通过setcookie函数进行Cookie的设置,
 * 存储在$_COOKIE的全局变量之中,
 * 通过$_COOKIE['key']的形式来读取某个Cookie值
 */
 /*设置cookie的方式一：
  * setcookie具有7个可选参数，我们常用到的为前5个
  * name:Cookie名,通过$_COOKIE['name'] 进行访问
  * value:Cookie的值
  * expire:过期时间,Unix时间戳格式，默认为0，表示浏览器关闭即失效
  * path:有效路径,如果路径设置为'/'，则整个网站都有效
  * domain:有效域,默认整个域名都有效，如果设置了'www.imooc.com',则只在www子域中有效
  * 
  */
setcookie("test",time());
/*
 * 设置cookie的方式二：
 * setrawcookie跟setcookie基本一样，唯一的不同就是value值不会自动的进行urlencode，因此在需要的时候要手动的进行urlencode。
 */
 setrawcookie("test", urlencode(time()),time()*24*60*60*365);
 /*
  * 设置cookie的方式三：
  * 通过HTTP标头进行设置
  */
header("SetCookie:test=value");
/*
 * cookie的删除和过期时间
 * setcookie('test', '', time()-1); 或
 * header("SetCookie:test=12345789;expires=".gmdate('D,d M Y H:i:s \G\M\T',time()-1)); 
 * .gmdate()生成格林威治标准时间，以便排除时差的影响。
 */
 var_dump($_COOKIE) ;
header("SetCookie:test=12345789;expires=".gmdate('D,d M Y H:i:s \G\M\T',time()-1)); 
/*
 * cookie的路径：默认为'/'，在所有路径下都有
 * 设定了其他路径之后，则只在设定的路径以及子路径下有效
 */