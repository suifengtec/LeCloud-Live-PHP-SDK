<?php
/**
 * @Author: suifengtec
 * @Date:   2016-04-05 12:40:05
 * @Last Modified by:   suifengtec
 * @Last Modified time: 2016-04-05 14:45:29
 */
require_once __DIR__.DIRECTORY_SEPARATOR.'loader.php';


$config = LeCloud_Live_Config::config();
$api = new LeCloud_Live($config);



/*
创建直播并返回直播ID
===================================================
 */

/*
A2016040500000du
 */

/*$args = array();
$event_id = $api->create($args);
var_dump($event_id);*/


/*
获取直播信息
===================================================
 */
/*

string(451) "[{"activityCategory":"012","activityId":"A2016040500000dy","activityName":"TEST_TITLE_2016-04-05 13:48:41","activityStatus":0,"coverImgUrl":"","createTime":"20160405134841","description":"TEST_DESC_2016-04-05 13:48:41","endTime":"20160405154841","liveNum":1,"needFullView":0,"needIpWhiteList":0,"needRecord":1,"needTimeShift":0,"neededPushAuth":1,"playMode":0,"pushIpWhiteList":"","pushUrlValidTime":1800,"startTime":"20160405134841","userCount":"0"}]"
 */

/*$args = array();
$event_id = $api->create($args);
$live = $api->retrieve($event_id);
var_dump($live );*/


/*
获取推流信息
===================================================
 */
/*
string(204) "{"liveNum":1,"lives":[{"machine":"1","pushUrl":"rtmp://w.gslb.lecloud.com/live/201604053000000gd99?sign=8b9f38a7d1122f9207ba4954f92d5463&tm=20160405135013","status":"0","streamId":"201604053000000gd99"}]}"
 */

/*$event_id = 'A2016040500000dy';
$live_push_stream_info = $api->get_push_stream_url($event_id);
var_dump($live_push_stream_info);*/


/*
获取在线播放地址
===================================================
 */
/*
string(19) "http://t.cn/RqUCYvj"
 */
/*$event_id = 'A2016040500000dy';
$player_url = $api->get_play_url($event_id);
var_dump($player_url);*/

/*
获取直播状态码
===================================================
 */
/*
int(1)
或
array(3) { ["status"]=> int(1) ["startTime"]=> string(14) "20160405134841" ["endTime"]=> string(14) "20160405154841" }
 */
/*$event_id = 'A2016040500000dy';
$status = $api->get_event_status($event_id,false);
$status_arr = $api->get_event_status($event_id,true);
var_dump($status_arr);*/

/*
获取直播状态文本
===================================================
 */
/*
string(9) "未开始"
 */
/*$event_id = 'A2016040500000dy';
$status_name = $api->parse_status($api->get_event_status($event_id,true),false);
var_dump($status_name);*/
