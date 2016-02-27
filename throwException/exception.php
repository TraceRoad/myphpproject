<?php
/*
 * 抛出异常
 * Exception具有几个基本属性与方法，其中包括了：
 *	message 异常消息内容
 *	code 异常代码
 *	file 抛出异常的文件名
 *	line 抛出异常在该文件的行数
 *  常用的方法：
 *  getTrace() 获取异常追踪信息
 *	getTraceAsString() 获取异常追踪信息的字符串
 *	getMessage() 获取出错信息
 *  
 */
 try {
 	throwException(2);
 } catch (Exception $e) {
 	echo $e->getMessage();
 }
//创建一个可抛出异常函数
function throwException($number){
	if($number>1){
		throw  new Exception('异常信息提示：数字必须小于1<br/>');
	}
}	
/*
 * 通过继承基类Exception，自定义自己的异常类
 */
	class myException extends Exception {
		function getmydefineException() {
			return '自定义错误信息';
		}
	}
	try {
		throw  new myException('error');
	} catch (myException $e) {
		echo $e->getmydefineException();
	}

