<?php


/**
     * 
     * �����������࣬������ȥ�̳�ʵ����
     *
     */
     abstract class Operation{
         //���󷽷����ܰ���������
         abstract public function getValue($num1,$num2);//ǿ��Ҫ���������ʵ�ָù��ܺ���
     }
     
     
     
     /**
      * �ӷ���
      */
     class OperationAdd extends Operation {
         public function getValue($num1,$num2){
             return $num1+$num2;
         }
     }
     /**
      * ������
      */
     class OperationSub extends Operation {
         public function getValue($num1,$num2){
             return $num1-$num2;
         }
     }
     /**
      * �˷���
      */
     class OperationMul extends Operation {
         public function getValue($num1,$num2){
             return $num1*$num2;
         }
     }
     /**
      * ������
      */
     class OperationDiv extends Operation {
         public function getValue($num1,$num2){
             try {
                 if ($num2==0){
                     throw new Exception("��������Ϊ0");
                 }else {
                     return $num1/$num2;
                 }
             }catch (Exception $e){
                 echo "������Ϣ��".$e->getMessage();
             }
         }
     }
	 
	 /**
     * �����࣬��Ҫ������������
     * ���ܣ����������������ţ���������ʵ���������ʵĶ���
     *
     */
    class Factory{
        public static function createObj($operate){
            switch ($operate){
                case '+':
                    return new OperationAdd();
                    break;
                case '-':
                    return new OperationSub();
                    break;
                case '*':
                    return new OperationSub();
                    break;
                case '/':
                    return new OperationDiv();
                    break;
            }
        }
    }
    $test=Factory::createObj('+');
    $result=$test->getValue(1,2);
    echo $result;
	 