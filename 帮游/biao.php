<?php
/**
 * 替换表情
 *
 * @param $t
 */
function biaoqing($t){
    $emos = array(
        '[face1.gif]'=>'撇嘴',
        '[face2.gif]'=>'色',
        '[face3.gif]'=>'发呆',
        '[face4.gif]'=>'得意',
        '[face5.gif]'=>'流泪',
        '[face6.gif]'=>'害羞',
        '[face7.gif]'=>'闭嘴',
        '[face8.gif]'=>'睡',
        '[face9.gif]'=>'大哭',
        '[face10.gif]'=>'尴尬',
        '[face11.gif]'=>'发怒',
        '[face12.gif]'=>'调皮',
        '[face13.gif]'=>'龇牙',
        '[face14.gif]'=>'微笑',
        '[face15.gif]'=>'难过',
        '[face16.gif]'=>'酷',
        '[face17.gif]'=>'冷汗', //老表情 http://pub.idqqimg.com/lib/qqface/17.gif
        '[face18.gif]'=>'抓狂',
        '[face19.gif]'=>'吐',
         
        '[face20.gif]'=>'偷笑',
        '[face21.gif]'=>'可爱',
        '[face22.gif]'=>'白眼',
        '[face23.gif]'=>'傲慢',
        '[face24.gif]'=>'饥饿',
        '[face25.gif]'=>'困',
        '[face26.gif]'=>'惊恐',
        '[face27.gif]'=>'流汗',
        '[face28.gif]'=>'憨笑',
        '[face29.gif]'=>'大兵',
         
        '[face30.gif]'=>'奋斗',
        '[face31.gif]'=>'咒骂',
        '[face32.gif]'=>'疑问',
        '[face33.gif]'=>'嘘',
        '[face34.gif]'=>'晕',
        '[face35.gif]'=>'折磨',
        '[face36.gif]'=>'衰',
        '[face37.gif]'=>'骷髅',
        '[face38.gif]'=>'敲打',
        '[face39.gif]'=>'再见',
         
        '[face40.gif]'=>'企鹅发呆', //【属于老表情，新QQ表情里没有】
        '[face41.gif]'=>'发抖',
        '[face42.gif]'=>'爱情',
        '[face43.gif]'=>'跳跳',
        '[face44.gif]'=>'企鹅拿放大镜', //【属于老表情，新QQ表情里没有】
        '[face45.gif]'=>'企鹅Q妹',//【属于老表情，新QQ表情里没有】
        '[face46.gif]'=>'猪头',
        '[face47.gif]'=>'猫头',//【属于老表情，新QQ表情里没有】
        '[face48.gif]'=>'狗头',//【属于老表情，新QQ表情里没有】
        '[face49.gif]'=>'抱抱',
         
        '[face50.gif]'=>'美金标志', //【属于老表情，新QQ表情里没有】
        '[face51.gif]'=>'灯泡', //【属于老表情，新QQ表情里没有】
        '[face52.gif]'=>'冰淇淋',
        '[face53.gif]'=>'蛋糕',
        '[face54.gif]'=>'闪电',
        '[face55.gif]'=>'炸弹',
        '[face56.gif]'=>'刀',
        '[face57.gif]'=>'足球',
        '[face58.gif]'=>'音乐符号',
        '[face59.gif]'=>'便便',
         
        '[face60.gif]'=>'咖啡',
        '[face61.gif]'=>'饭',
        '[face62.gif]'=>'胶囊', //【属于老表情，新QQ表情里没有】
        '[face63.gif]'=>'玫瑰',
        '[face64.gif]'=>'凋谢',
        '[face65.gif]'=>'示爱',
        '[face66.gif]'=>'爱心',
        '[face67.gif]'=>'心碎',
        '[face68.gif]'=>'桌子', //【属于老表情，新QQ表情里没有】
        '[face69.gif]'=>'礼物',
         
        '[face70.gif]'=>'电话', //【属于老表情，新QQ表情里没有】
        '[face71.gif]'=>'钟表', //【属于老表情，新QQ表情里没有】
        '[face72.gif]'=>'信封', //【属于老表情，新QQ表情里没有】
        '[face73.gif]'=>'电视机', //【属于老表情，新QQ表情里没有】
        '[face74.gif]'=>'太阳',
        '[face75.gif]'=>'月亮',
        '[face76.gif]'=>'强',
        '[face77.gif]'=>'弱',
        '[face78.gif]'=>'握手',
        '[face79.gif]'=>'胜利',
         
        '[face80.gif]'=>'老鼠',//【属于老表情，新QQ表情里没有】
        '[face81.gif]'=>'小女孩',//【属于老表情，新QQ表情里没有】
        '[face82.gif]'=>'小男孩',//【属于老表情，新QQ表情里没有】
        '[face83.gif]'=>'墨镜男',//【属于老表情，新QQ表情里没有】
        '[face84.gif]'=>'QGG', //【属于老表情，新QQ表情里没有】
        '[face85.gif]'=>'飞吻',
        '[face86.gif]'=>'恼火',
        '[face87.gif]'=>'瓶子',//【属于老表情，新QQ表情里没有】
        '[face88.gif]'=>'可乐',//【属于老表情，新QQ表情里没有】
        '[face89.gif]'=>'西瓜',
         
        '[face90.gif]'=>'下雨天', //【属于老表情，新QQ表情里没有】
        '[face91.gif]'=>'阴转晴', //【属于老表情，新QQ表情里没有】
        '[face92.gif]'=>'雪人', //【属于老表情，新QQ表情里没有】
        '[face93.gif]'=>'星星', //【属于老表情，新QQ表情里没有】
        '[face94.gif]'=>'辫子女', //【属于老表情，新QQ表情里没有】
        '[face95.gif]'=>'分头男', //【属于老表情，新QQ表情里没有】
        '[face96.gif]'=>'冷汗',
        '[face97.gif]'=>'擦汗',
        '[face98.gif]'=>'抠鼻',
        '[face99.gif]'=>'鼓掌',
         
        '[face100.gif]'=>'糗大了',
        '[face101.gif]'=>'坏笑',
        '[face102.gif]'=>'左哼哼',
        '[face103.gif]'=>'右哼哼',
        '[face104.gif]'=>'哈欠',
        '[face105.gif]'=>'鄙视',
        '[face106.gif]'=>'委屈',
        '[face107.gif]'=>'快哭了',
        '[face108.gif]'=>'阴险',
        '[face109.gif]'=>'亲亲',
         
        '[face110.gif]'=>'吓',
        '[face111.gif]'=>'可怜',
        '[face112.gif]'=>'菜刀',
        '[face113.gif]'=>'啤酒',
        '[face114.gif]'=>'篮球',
        '[face115.gif]'=>'乒乓球',
        '[face116.gif]'=>'嘴唇',
        '[face117.gif]'=>'瓢虫',
        '[face118.gif]'=>'抱拳',
        '[face119.gif]'=>'勾引',
         
        '[face120.gif]'=>'拳头',
        '[face121.gif]'=>'差劲',
        '[face122.gif]'=>'爱你',
        '[face123.gif]'=>'NO',
        '[face124.gif]'=>'OK',
        '[face125.gif]'=>'转圈',
        '[face126.gif]'=>'磕头',
        '[face127.gif]'=>'回头',
        '[face128.gif]'=>'跳绳',
        '[face129.gif]'=>'挥手',
         
        '[face130.gif]'=>'激动',
        '[face131.gif]'=>'街舞',
        '[face132.gif]'=>'激吻',
        '[face133.gif]'=>'左太极',
        '[face134.gif]'=>'右太极',
        '[face136.gif]'=>'双喜',
        '[face137.gif]'=>'鞭炮',
        '[face138.gif]'=>'灯笼',
        '[face139.gif]'=>'发财',
        '[face140.gif]'=>'话筒',
        '[face141.gif]'=>'购物',
        '[face142.gif]'=>'邮件',
        '[face143.gif]'=>'帅',
        '[face144.gif]'=>'喝彩',
        '[face145.gif]'=>'祈祷',
        '[face146.gif]'=>'爆筋',
        '[face147.gif]'=>'棒棒糖',
        '[face148.gif]'=>'喝奶',
        '[face149.gif]'=>'下面',
        '[face150.gif]'=>'香蕉',
        '[face151.gif]'=>'飞机',
        '[face152.gif]'=>'开车',
        '[face153.gif]'=>'左车头',
        '[face154.gif]'=>'车厢',
        '[face155.gif]'=>'右车头',
        '[face156.gif]'=>'多云',
        '[face157.gif]'=>'下雨',
        '[face158.gif]'=>'钞票',
        '[face159.gif]'=>'熊猫',
        '[face160.gif]'=>'灯泡',
        '[face161.gif]'=>'风车',
        '[face162.gif]'=>'闹钟',
        '[face163.gif]'=>'红伞',
        '[face164.gif]'=>'气球',
        '[face165.gif]'=>'钻戒',
        '[face166.gif]'=>'沙发',
        '[face167.gif]'=>'纸巾',
        '[face168.gif]'=>'药',
        '[face169.gif]'=>'手枪',
        '[face170.gif]'=>'青蛙',
         
        '[image={4F161813-1E98-E664-008E-097DDC255C2F}.gif]'=>'潜水',
        '[image={3B6260FF-C1D5-0AB0-C22C-421843E091B8}.gif]'=>'敬礼',
        '[image={64A234EE-8657-DA63-B7F4-C7718460F461}.gif]'=>'石化',
        '[image={D2BD3A1C-0F04-9FE3-8B7A-766FFA55F931}.gif]'=>'安慰',
        '[image={514E8F56-87E1-5828-5039-A6897CF423C8}.gif]'=>'扮鬼脸',
        '[image={719024F2-16B9-C2E4-C3EF-952FC34925D2}.gif]'=>'无语',
        '[image={615393FB-C6E2-AAFE-0A90-8DE5D047DEAF}.gif]'=>'狂汗',
        '[image={B1AC14ED-DEF1-9DCA-5AC3-621B35A2B499}.gif]'=>'叹气',
        '[image={E00A7865-28F3-C5A2-99FE-5AF9017AC901}.gif]'=>'加油',
        '[image={D2991207-F843-5702-3098-B080E23A9549}.gif]'=>'生病',
        '[image={A4BEE470-7A78-F2C6-FD31-3419406CF1C3}.gif]'=>'拜托',
        '[image={CA51C7B7-8E8E-AF54-72B0-576C2B44E4A6}.gif]'=>'孤寂',
        '[image={A2CA8C10-8ACA-4ABD-FEF6-F12D1921ED71}.gif]'=>'惬意',
        '[image={B5F43A21-581C-6B6F-52A3-CFB9FFB264B2}.gif]'=>'烦躁',
        '[image={163F4E6F-DE25-0962-A72D-150580E4E478}.gif]'=>'牵手',
        '[image={98B392FD-ECF8-E435-879C-E1C52CE7D814}.gif]'=>'示爱',
        '[image={4EA75673-526D-F472-4628-8E0B1C2EEA36}.gif]'=>'情书',
        '[image={121340B4-E34A-084C-6B32-A704B51BA78C}.gif]'=>'月饼',
        '[image={17BA3C00-1123-312D-98D0-3D228CF547B8}.gif]'=>'玉兔',
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
 
$a='[face160.gif]你好啊';
echo biaoqing($a);