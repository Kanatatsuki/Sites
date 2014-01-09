<?php
/*
 * yjs-ini.php
 *
 * update:
 */
$config = array(
    'debug' => false,
    'log_facility'  => 'echo',
    'log_level' => 'warning',
    'log_option' => 'pid,function,pos',
    'log_alert_level' => 'crit',
    'log_alert_mailaddress' => '',
    'log_filter_do' => '',
    'log_filter_ignore' => 'Undefined index.*%%.*tpl',

    'appid' => 'please input developer api key',
    'services' => array(
                        'web'=>'http://api.search.yahoo.co.jp/WebSearchService/V1/webSearch',
                        'image'=>'http://api.search.yahoo.co.jp/ImageSearchService/V1/imageSearch',
                        'video'=>'http://api.search.yahoo.co.jp/VideoSearchService/V1/videoSearch'
                        ),
    


);
?>
