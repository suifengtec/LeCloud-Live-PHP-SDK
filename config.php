<?php
/**
 * @Author: suifengtec
 * @Date:   2016-04-05 12:40:30
 * @Last Modified by:   suifengtec
 * @Last Modified time: 2016-04-05 14:30:41
 */
class LeCloud_Live_Config{

/*
'activityCategory'的取值
        static $v_types = array(
            '001' => '发布会',
            '002' => '婚礼',
            '003' => '年会',
            '004' => '体育',
            '005' => '游戏',
            '006' => '旅游&amp;户外',
            '007' => '财经',
            '008' => '演唱会',
            '009' => '烹饪',
            '010' => '宠物&amp;动物',
            '011' => '访谈',
            '012' => '教育',
            '013' => '竞技',
            '014' => '剧场',
            '015' => '晚会',
            '016' => '电视节目',
            '017' => '秀场',
            '999' => '其它',

        );
 */
    public static function config(){
        $config = array(
        'user_id'=>'',
        'app_id'=>'',
        'app_key'=>'',
        'activityCategory'=>'012'
        );
        return $config;

    }


}