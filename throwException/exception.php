<?php
/*
 * �׳��쳣
 * Exception���м������������뷽�������а����ˣ�
 *	message �쳣��Ϣ����
 *	code �쳣����
 *	file �׳��쳣���ļ���
 *	line �׳��쳣�ڸ��ļ�������
 *  ���õķ�����
 *  getTrace() ��ȡ�쳣׷����Ϣ
 *	getTraceAsString() ��ȡ�쳣׷����Ϣ���ַ���
 *	getMessage() ��ȡ������Ϣ
 *  
 */
 try {
 	throwException(2);
 } catch (Exception $e) {
 	echo $e->getMessage();
 }
//����һ�����׳��쳣����
function throwException($number){
	if($number>1){
		throw  new Exception('�쳣��Ϣ��ʾ�����ֱ���С��1<br/>');
	}
}	
/*
 * ͨ���̳л���Exception���Զ����Լ����쳣��
 */
	class myException extends Exception {
		function getmydefineException() {
			return '�Զ��������Ϣ';
		}
	}
	try {
		throw  new myException('error');
	} catch (myException $e) {
		echo $e->getmydefineException();
	}

