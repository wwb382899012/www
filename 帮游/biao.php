<?php
/**
 * �滻����
 *
 * @param $t
 */
function biaoqing($t){
    $emos = array(
        '[face1.gif]'=>'Ʋ��',
        '[face2.gif]'=>'ɫ',
        '[face3.gif]'=>'����',
        '[face4.gif]'=>'����',
        '[face5.gif]'=>'����',
        '[face6.gif]'=>'����',
        '[face7.gif]'=>'����',
        '[face8.gif]'=>'˯',
        '[face9.gif]'=>'���',
        '[face10.gif]'=>'����',
        '[face11.gif]'=>'��ŭ',
        '[face12.gif]'=>'��Ƥ',
        '[face13.gif]'=>'����',
        '[face14.gif]'=>'΢Ц',
        '[face15.gif]'=>'�ѹ�',
        '[face16.gif]'=>'��',
        '[face17.gif]'=>'�亹', //�ϱ��� http://pub.idqqimg.com/lib/qqface/17.gif
        '[face18.gif]'=>'ץ��',
        '[face19.gif]'=>'��',
         
        '[face20.gif]'=>'͵Ц',
        '[face21.gif]'=>'�ɰ�',
        '[face22.gif]'=>'����',
        '[face23.gif]'=>'����',
        '[face24.gif]'=>'����',
        '[face25.gif]'=>'��',
        '[face26.gif]'=>'����',
        '[face27.gif]'=>'����',
        '[face28.gif]'=>'��Ц',
        '[face29.gif]'=>'���',
         
        '[face30.gif]'=>'�ܶ�',
        '[face31.gif]'=>'����',
        '[face32.gif]'=>'����',
        '[face33.gif]'=>'��',
        '[face34.gif]'=>'��',
        '[face35.gif]'=>'��ĥ',
        '[face36.gif]'=>'˥',
        '[face37.gif]'=>'����',
        '[face38.gif]'=>'�ô�',
        '[face39.gif]'=>'�ټ�',
         
        '[face40.gif]'=>'��췢��', //�������ϱ��飬��QQ������û�С�
        '[face41.gif]'=>'����',
        '[face42.gif]'=>'����',
        '[face43.gif]'=>'����',
        '[face44.gif]'=>'����÷Ŵ�', //�������ϱ��飬��QQ������û�С�
        '[face45.gif]'=>'���Q��',//�������ϱ��飬��QQ������û�С�
        '[face46.gif]'=>'��ͷ',
        '[face47.gif]'=>'èͷ',//�������ϱ��飬��QQ������û�С�
        '[face48.gif]'=>'��ͷ',//�������ϱ��飬��QQ������û�С�
        '[face49.gif]'=>'����',
         
        '[face50.gif]'=>'�����־', //�������ϱ��飬��QQ������û�С�
        '[face51.gif]'=>'����', //�������ϱ��飬��QQ������û�С�
        '[face52.gif]'=>'�����',
        '[face53.gif]'=>'����',
        '[face54.gif]'=>'����',
        '[face55.gif]'=>'ը��',
        '[face56.gif]'=>'��',
        '[face57.gif]'=>'����',
        '[face58.gif]'=>'���ַ���',
        '[face59.gif]'=>'���',
         
        '[face60.gif]'=>'����',
        '[face61.gif]'=>'��',
        '[face62.gif]'=>'����', //�������ϱ��飬��QQ������û�С�
        '[face63.gif]'=>'õ��',
        '[face64.gif]'=>'��л',
        '[face65.gif]'=>'ʾ��',
        '[face66.gif]'=>'����',
        '[face67.gif]'=>'����',
        '[face68.gif]'=>'����', //�������ϱ��飬��QQ������û�С�
        '[face69.gif]'=>'����',
         
        '[face70.gif]'=>'�绰', //�������ϱ��飬��QQ������û�С�
        '[face71.gif]'=>'�ӱ�', //�������ϱ��飬��QQ������û�С�
        '[face72.gif]'=>'�ŷ�', //�������ϱ��飬��QQ������û�С�
        '[face73.gif]'=>'���ӻ�', //�������ϱ��飬��QQ������û�С�
        '[face74.gif]'=>'̫��',
        '[face75.gif]'=>'����',
        '[face76.gif]'=>'ǿ',
        '[face77.gif]'=>'��',
        '[face78.gif]'=>'����',
        '[face79.gif]'=>'ʤ��',
         
        '[face80.gif]'=>'����',//�������ϱ��飬��QQ������û�С�
        '[face81.gif]'=>'СŮ��',//�������ϱ��飬��QQ������û�С�
        '[face82.gif]'=>'С�к�',//�������ϱ��飬��QQ������û�С�
        '[face83.gif]'=>'ī����',//�������ϱ��飬��QQ������û�С�
        '[face84.gif]'=>'QGG', //�������ϱ��飬��QQ������û�С�
        '[face85.gif]'=>'����',
        '[face86.gif]'=>'�ջ�',
        '[face87.gif]'=>'ƿ��',//�������ϱ��飬��QQ������û�С�
        '[face88.gif]'=>'����',//�������ϱ��飬��QQ������û�С�
        '[face89.gif]'=>'����',
         
        '[face90.gif]'=>'������', //�������ϱ��飬��QQ������û�С�
        '[face91.gif]'=>'��ת��', //�������ϱ��飬��QQ������û�С�
        '[face92.gif]'=>'ѩ��', //�������ϱ��飬��QQ������û�С�
        '[face93.gif]'=>'����', //�������ϱ��飬��QQ������û�С�
        '[face94.gif]'=>'����Ů', //�������ϱ��飬��QQ������û�С�
        '[face95.gif]'=>'��ͷ��', //�������ϱ��飬��QQ������û�С�
        '[face96.gif]'=>'�亹',
        '[face97.gif]'=>'����',
        '[face98.gif]'=>'�ٱ�',
        '[face99.gif]'=>'����',
         
        '[face100.gif]'=>'�ܴ���',
        '[face101.gif]'=>'��Ц',
        '[face102.gif]'=>'��ߺ�',
        '[face103.gif]'=>'�Һߺ�',
        '[face104.gif]'=>'��Ƿ',
        '[face105.gif]'=>'����',
        '[face106.gif]'=>'ί��',
        '[face107.gif]'=>'�����',
        '[face108.gif]'=>'����',
        '[face109.gif]'=>'����',
         
        '[face110.gif]'=>'��',
        '[face111.gif]'=>'����',
        '[face112.gif]'=>'�˵�',
        '[face113.gif]'=>'ơ��',
        '[face114.gif]'=>'����',
        '[face115.gif]'=>'ƹ����',
        '[face116.gif]'=>'�촽',
        '[face117.gif]'=>'ư��',
        '[face118.gif]'=>'��ȭ',
        '[face119.gif]'=>'����',
         
        '[face120.gif]'=>'ȭͷ',
        '[face121.gif]'=>'�',
        '[face122.gif]'=>'����',
        '[face123.gif]'=>'NO',
        '[face124.gif]'=>'OK',
        '[face125.gif]'=>'תȦ',
        '[face126.gif]'=>'��ͷ',
        '[face127.gif]'=>'��ͷ',
        '[face128.gif]'=>'����',
        '[face129.gif]'=>'����',
         
        '[face130.gif]'=>'����',
        '[face131.gif]'=>'����',
        '[face132.gif]'=>'����',
        '[face133.gif]'=>'��̫��',
        '[face134.gif]'=>'��̫��',
        '[face136.gif]'=>'˫ϲ',
        '[face137.gif]'=>'����',
        '[face138.gif]'=>'����',
        '[face139.gif]'=>'����',
        '[face140.gif]'=>'��Ͳ',
        '[face141.gif]'=>'����',
        '[face142.gif]'=>'�ʼ�',
        '[face143.gif]'=>'˧',
        '[face144.gif]'=>'�Ȳ�',
        '[face145.gif]'=>'��',
        '[face146.gif]'=>'����',
        '[face147.gif]'=>'������',
        '[face148.gif]'=>'����',
        '[face149.gif]'=>'����',
        '[face150.gif]'=>'�㽶',
        '[face151.gif]'=>'�ɻ�',
        '[face152.gif]'=>'����',
        '[face153.gif]'=>'��ͷ',
        '[face154.gif]'=>'����',
        '[face155.gif]'=>'�ҳ�ͷ',
        '[face156.gif]'=>'����',
        '[face157.gif]'=>'����',
        '[face158.gif]'=>'��Ʊ',
        '[face159.gif]'=>'��è',
        '[face160.gif]'=>'����',
        '[face161.gif]'=>'�糵',
        '[face162.gif]'=>'����',
        '[face163.gif]'=>'��ɡ',
        '[face164.gif]'=>'����',
        '[face165.gif]'=>'���',
        '[face166.gif]'=>'ɳ��',
        '[face167.gif]'=>'ֽ��',
        '[face168.gif]'=>'ҩ',
        '[face169.gif]'=>'��ǹ',
        '[face170.gif]'=>'����',
         
        '[image={4F161813-1E98-E664-008E-097DDC255C2F}.gif]'=>'Ǳˮ',
        '[image={3B6260FF-C1D5-0AB0-C22C-421843E091B8}.gif]'=>'����',
        '[image={64A234EE-8657-DA63-B7F4-C7718460F461}.gif]'=>'ʯ��',
        '[image={D2BD3A1C-0F04-9FE3-8B7A-766FFA55F931}.gif]'=>'��ο',
        '[image={514E8F56-87E1-5828-5039-A6897CF423C8}.gif]'=>'�����',
        '[image={719024F2-16B9-C2E4-C3EF-952FC34925D2}.gif]'=>'����',
        '[image={615393FB-C6E2-AAFE-0A90-8DE5D047DEAF}.gif]'=>'��',
        '[image={B1AC14ED-DEF1-9DCA-5AC3-621B35A2B499}.gif]'=>'̾��',
        '[image={E00A7865-28F3-C5A2-99FE-5AF9017AC901}.gif]'=>'����',
        '[image={D2991207-F843-5702-3098-B080E23A9549}.gif]'=>'����',
        '[image={A4BEE470-7A78-F2C6-FD31-3419406CF1C3}.gif]'=>'����',
        '[image={CA51C7B7-8E8E-AF54-72B0-576C2B44E4A6}.gif]'=>'�¼�',
        '[image={A2CA8C10-8ACA-4ABD-FEF6-F12D1921ED71}.gif]'=>'���',
        '[image={B5F43A21-581C-6B6F-52A3-CFB9FFB264B2}.gif]'=>'����',
        '[image={163F4E6F-DE25-0962-A72D-150580E4E478}.gif]'=>'ǣ��',
        '[image={98B392FD-ECF8-E435-879C-E1C52CE7D814}.gif]'=>'ʾ��',
        '[image={4EA75673-526D-F472-4628-8E0B1C2EEA36}.gif]'=>'����',
        '[image={121340B4-E34A-084C-6B32-A704B51BA78C}.gif]'=>'�±�',
        '[image={17BA3C00-1123-312D-98D0-3D228CF547B8}.gif]'=>'����',
        );
    if(!empty($t) && preg_match_all('/\[.+?\]/',$t,$matches)){
        $matches = array_unique($matches[0]);
        foreach ($matches as $data) {
            if(isset($emos[$data]))
                $t = str_replace($data,$emos[$data],$t);
        }
    }
    return $t;
}
 
$a='[face160.gif]��ð�';
echo biaoqing($a);