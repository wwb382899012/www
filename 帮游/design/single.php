<?php


/**
 * ���ģʽ֮����ģʽ
 * $_instance��������Ϊ��̬��˽�б���
 * ���캯����������Ϊ˽��,��ֹ�ⲿ����new��Ӷ�ʧȥ����ģʽ������
 * getInstance()������������Ϊ���е�,������ô˷����Է���ʵ����һ������
 * ::������ֻ�ܷ��ʾ�̬�����;�̬����
 * new���󶼻������ڴ�
 * ʹ�ó���:��õĵط������ݿ����ӡ�
 * ʹ�õ���ģʽ����һ������󣬸ö�����Ա������ڶ������ʹ�á�
 */
class man
{
    //������ʵ���ڴ�������
    private static $_instance;

    //���캯������Ϊprivate,��ֱֹ�Ӵ�������
    private function __construct()
    {
        echo '�ұ�ʵ�����ˣ�';
    }

    //��������
    public static function get_instance()
    {
        var_dump(isset(self::$_instance));
        
        if(!isset(self::$_instance))
        {
            self::$_instance=new self();
        }
        return self::$_instance;
    }

    //��ֹ�û����ƶ���ʵ��
    private function __clone()
    {
        trigger_error('Clone is not allow' ,E_USER_ERROR);
    }

    function test()
    {
        echo("test");

    }
}

// ���д���������Ϊ���췽��������Ϊprivate
//$test = new man;

// ���潫�õ�Example��ĵ�������
$test = man::get_instance();
$test = man::get_instance();
$test->test();

// ���ƶ��󽫵���һ��E_USER_ERROR.
//$test_clone = clone $test;