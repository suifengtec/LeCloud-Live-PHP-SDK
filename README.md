# LeCloud Live PHP SDK

乐视云直播 SDK: PHP 版,版本v1.0。

## 通用参数

在 `config.php`中填写相关应用信息:
```
        $config = array(
        'user_id'=>'',
        'app_id'=>'',
        'app_key'=>'',
        'activityCategory'=>'012'//教育
        );

```

实例化 `LeCloud_Live`,并将上述参数传递给它:
```
$config = LeCloud_Live_Config::config();
$api = new LeCloud_Live($config);

```

## 创建直播
创建直播前,需定义创建直播所需参数,如下`$args`:

```
$args = array();
$event_id = $api->create($args);
var_dump($event_id);

```
如果`$args` 为空数组,将默认采用以下参数:
```
        $this->default_args = array(
            'activityName' => 'TEST_TITLE_' . (string) date('Y-m-d H:i:s'),
            'startTime' => self::get_start_time(),
            'endTime' => self::get_end_time(self::get_start_time()),
            'coverImgUrl' => '',
            'description' => 'TEST_DESC_' . (string) date('Y-m-d H:i:s'),
            'liveNum' => 1,
            'codeRateTypes' => '13,16,19,22,25',
            'needRecord' => 1,
            'needTimeShift' => 0,
            'needFullView' => 0,
            'activityCategory' => $this->activityCategory,
            'playMode' => 0,
        );
```
 以上各个参数的含义解释见[创建活动接口](http://help.lecloud.com/Wiki.jsp?page=Activitycreate) 页面。

上述 `create`方法将会返回直播ID。

## 获取直播信息

```
$event_id = '直播ID';
$live = $api->retrieve($event_id);
var_dump($live );

```

该方法将返回如下数据：
```
string(451) "[{"activityCategory":"012","activityId":"A2016040500000dy","activityName":"TEST_TITLE_2016-04-05 13:48:41","activityStatus":0,"coverImgUrl":"","createTime":"20160405134841","description":"TEST_DESC_2016-04-05 13:48:41","endTime":"20160405154841","liveNum":1,"needFullView":0,"needIpWhiteList":0,"needRecord":1,"needTimeShift":0,"neededPushAuth":1,"playMode":0,"pushIpWhiteList":"","pushUrlValidTime":1800,"startTime":"20160405134841","userCount":"0"}]"
```

## 获取直播的推流信息
```
$event_id = '直播ID';
$live_push_stream_info = $api->get_push_stream_url($event_id);
var_dump($live_push_stream_info);

```
该方法将返回如下数据:

```
string(204) "{"liveNum":1,"lives":[{"machine":"1","pushUrl":"rtmp://w.gslb.lecloud.com/live/201604053000000gd99?sign=8b9f38a7d1122f9207ba4954f92d5463&tm=20160405135013","status":"0","streamId":"201604053000000gd99"}]}"

```

## 获取在线播放地址

```
$event_id = '直播ID';
$player_url = $api->get_play_url($event_id);
var_dump($player_url);

```
该方法将返回如下数据：

```
string(19) "http://t.cn/RqUCYvj"
```

## 获取直播状态码

```
$event_id = '直播ID';
$status = $api->get_event_status($event_id,false);
$status_arr = $api->get_event_status($event_id,true);
var_dump($status_arr);

```
该方法第二个参数用于确定返回数组还是返回状态码,如果为`true`,将会返回：
```
array(3) { ["status"]=> int(1) ["startTime"]=> string(14) "20160405134841" ["endTime"]=> string(14) "20160405154841" }
```
否则将返回:
```
int(1)
```

## 实例
某客户定制的 [WordPress 插件](http://coolwp.com/lecloud-for-wplms.html)。
