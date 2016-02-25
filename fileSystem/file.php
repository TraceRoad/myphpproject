<?php
/*
 * 读取文件内容
 * 最简单的读取文件的函数为file_get_contents，可以将整个文件全部读取到一个字符串中 example：$content = file_get_contents('./test.txt');
 * 也可以通过参数控制读取内容的开始点以及长度。$content = file_get_contents('./test.txt', null, null, 100, 500);
 */
 $content = file_get_contents("C:\\Users\\larry\\Desktop\\tmp.txt");
// echo $content;
/*
 * 使用fopen，fgets，fread等方法，fgets可以从文件指针中读取一行，freads可以读取指定长度的字符串。
 * 注意：使用fopen打开的文件，最好使用fclose关闭文件指针，以避免文件句柄被占用。
 */
 /* $fp = fopen("C:\\Users\\larry\\Desktop\\tmp.txt", 'rb');
 while(!feof($fp)){
     //echo fgets($fp);
 }
 fclose($fp); */
 /*
  * 判断文件是否存在file_exists(文件名)
  * is_readable(文件名)
  * is_writeable(文件名)
  * file_put_contents(文件名,要写入的内容)
  * fwrite($fp, 'hello');写入内容到文件
  */
 $filename="C:\\Users\\larry\\Desktop\\tmp.txt";
 var_dump(file_exists($filename));
 /*
  * 获取文件的元素
  * fileowner：获得文件的所有者
  * filectime：获取文件的创建时间
  * filemtime：获取文件的修改时间
  * fileatime：获取文件的访问时间
  * 通过文件的修改时间，可以判断文件的时效性，经常用在静态文件或者缓存数据的更新
  */
   $author =  fileowner($filename);
   $modifytime = filemtime($filename);
   $createtime = filectime($filename);
   $avsitortime = fileatime($filename);
   echo '文件作者：'.$author.'</br>文件修改时间：'.date('Y-M-d H:i:s',$modifytime).'<br/>文件创建时间：'.$createtime.'<br/>文件访问时间：'.$avsitortime.'<br/>';
 /*
  * 取得文件的大小.filesize函数可以取得文件的大小，文件大小是以字节数表示的。
  * 
  */
   $size = filesize($filename);
   echo $size;
   /*
    * 删除文件使用unlink函数
    * 删除文件夹使用rmdir函数，文件夹必须为空，如果不为空或者没有权限则会提示失败。
    * 如果文件夹中存在文件，可以先循环删除目录中的所有文件，然后再删除该目录，循环删除可以使用glob函数遍历所有文件
    *     foreach (glob("*") as $filename) {
    *       unlink($filename);
    *    }
    */
    