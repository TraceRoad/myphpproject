<?php
/*
 * UNIX 时间戳:它表示从 1970年1月1日 00:00:00 到当前时间的秒数之和。time()函数获取
 */
  $unixTime = time();
  echo $unixTime.'<br/>';
  /*
   * 获取当前时间
   */
  echo  date('Y-m-d H:i:s',$unixTime).'<br/>';
  /*
   * 设置默认的时区
   */
  date_default_timezone_set('Asia/Shanghai');
  /*
   * 获取某个时间的时间戳:strtotime()
   */
  echo  strtotime('2016-02-25').'<br/>';
  echo strtotime("now");//相当于将英文单词now直接等于现在的日期和时间
  echo '<br/>';
  echo strtotime("+1 seconds");//相当于将现在的日期和时间加上了1秒
  echo '<br/>';
  echo strtotime("+1 day");//相当于将现在的日期和时间加上了1天
  echo '<br/>';
  echo strtotime("+1 week");//相当于将现在的日期和时间加上了1周
  echo '<br/>';
  echo strtotime("+1 week 3 days 7 hours 5 seconds");//相当于将现在的日期和时间加上了1周3天7小时5秒。
  echo '<br/>';
  /*
   * 格式化格林威治（GMT）标准时间:假设我们现在所在的中国时区是东八区，领先格林威治时间8个小时。格林威治时间是现在中国时区的时间减去8个小时
   */
  echo gmdate('Y-m-d H:i:s',time());