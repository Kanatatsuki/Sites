<?php
/**
 * Yjs_QueryManager
 *
 * @author halt <halt.hde@gmail.com>
 *
 */
class Yjs_QueryManager extends Ethna_AppManager
{

    var $services = array(
        'web'=>'http://api.search.yahoo.co.jp/WebSearchService/V1/webSearch',
        'image'=>'http://api.search.yahoo.co.jp/ImageSearchService/V1/imageSearch',
        'video'=>'http://api.search.yahoo.co.jp/VideoSearchService/V1/videoSearch'
    );

    /**
     * getServices
     *
     */
    function getServices()
    {
        return $this->services;
    }
  
    /**
     * buildQuery
     *
     */
    function buildQuery($query_str, $appid, $service_url, $start = 0)
    {
    
   }

    /**
     * getQuery
     *
     */
    function getQuery($query_str, $appid, $service_url, $start = 0)
    {
        return $xml;
    }

    /**
     * executeQuery
     *
     * @return array
     */
    function executeQuery($query, $type, $start = 0)
    {
        $appid = $this->config->get('appid');
        
        //make query-string
        $query_encoded = rawurlencode($query);
        $query_string = "?query={$query_encoded}&appid={$appid}";
        
        if($start) {
            $query_string .= "&start={$start}";
        }

        //make service-url
        $service_list = $this->getServices();
        $url = $service_list[$type] . $query_string;

        //$raw_data = file_get_contents($service_list[$type] . $query_string);

        require_once "HTTP/Request.php";
        $req =& new HTTP_Request($url);
        
        if (!PEAR::isError($req->sendRequest())) {
            $raw_data = $req->getResponseBody();
        }
        
        $xml = simplexml_load_string($raw_data);

        foreach ($xml->attributes() as $name => $attr) {
            $res[$name] = $attr;
        }

        $from = $res['firstResultPosition'];
        $last = $from + $res['totalResultsReturned'] - 1;

        $i = 0;
        while ($i < $last) {
        
            foreach ($xml->Result[$i] as $key => $value) {
            
                switch($key) {

                case 'Thumbnail':
                    $result[$i]['Thumbnail'] = "<img src=\"{$value->Url}\" height=\"{$value->Height}\" width=\"{$value->Width}\" / noborder>";
                    break;
                case 'Cache':
                    $result[$i]['Cache'] = "Cache: <a href=\"{$value->Url}\">{$value->Url}</a> [{$value->Size}]<br />";
                    break;
                case 'PublishDate':

                case 'ModificationDate':
                    $result[$i][$key] = "".strftime('%X %x',$value[0])."";
                    break;
                default:
                    $result[$i][$key] = mb_convert_encoding("$value", 'EUC-JP', 'UTF-8');
                    break;
                }
            
            }
            $i++;
        }

        $result['totalResultsAvailable'] = $res['totalResultsAvailable'];

        return $result;
 
    }

}
?>
