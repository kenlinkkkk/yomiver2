<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('time2ago')) {
    function time2ago($time)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $x = time() - $time;

        if ($x < 3600) return intval($x / 60) . ' phút trước';
        if ($x < 86400) return intval($x / 3600) . ' giờ trước';
        if ($x < 2592000) return intval($x / 86400) . ' ngày trước';
        if ($x < 31104000) return intval($x / 2592000) . ' tháng trước';
        return gmdate('d/m/Y');
    }
}

//Láy ID nằm ở cuối chuỗi
if (!function_exists('getID')) {
    function getID($st)
    {
        $arr = explode('-', $st);
        return intval(end($arr));
    }
}

// Giới hạn hiển thị tiêu đề
if (!function_exists('subTitle')) {
    function subTitle($st, $len)
    {
        $arr = explode(' ', $st);
        $c = count($arr);
        if ($c < $len) {
            return $st;
        } else {
            $str = '';
            for ($i = 0; $i < $len; $i++) {
                $str = $str . ' ' . $arr[$i];
            }
            return $str . '...';
        }
    }
}


//Ham điều hướng nhưng trước khi điều hướng thì hiển thị một thông điệp
if (!function_exists('redirectMsg')) {
    function redirectMsg($url, $msg)
    {
        echo '
		
		<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Redirect</title>
		</head>
		<body>
		<noscript>
		<div align="center" style="font-weight: bold; color: blue; border: 1px dotted #FF6600; padding: 10px; margin-top: 200px; margin-left: 100px; margin-right: 100px;">' . $msg . '</div>
		<META HTTP-EQUIV=Refresh CONTENT="3; ' . site_url($url) . '/">
		</noscript>
		<script type="text/javascript">
			alert(\'' . str_replace("'", "\'", $msg) . '\');
			window.location = \'' . site_url($url) . '\';
		</script>
		</body>
		</html>';
        exit();
    }
}
//Hàm điều hướng quay lại trang cũ
if (!function_exists('goback')) {
    function goback()
    {
        echo '<script type="text/javascript">window.history.go(-1);</script>';
        exit();
    }
}
//Ham l lay ra 1 chuoi ngau nhien gom chu cai va so
if (!function_exists('randomText')) {
    function randomText($leng)
    {
        $st = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $_return = '';
        for ($i = 1; $i <= $leng; $i++) {
            $_return .= $st[rand(0, strlen($st) - 1)];
        }
        return $_return;
    }
}
//Ham chuyen 1 mang cac phan tu thanh integer - hay dung trong viec xoa du lieu
if (!function_exists('array_int')) {
    function array_int($arr, $removeZero = true)
    {
        if (!is_array($arr)) return array();
        foreach ($arr as $k => $v) {
            $arr[$k] = intval($v);
            if ($removeZero == true && intval($v) == 0) unset($arr[$k]);
        }
        return $arr;
    }
}
//Hàm chuyển tất cả các phẩn tử của 1 mảng sang dữ liệu an toàn - hay dùng trong việc lấy dữ liệu post của form da ngôn ngữ
if (!function_exists('array_text')) {
    function array_text($arr, $trim = true, $htmlspecialchars = true)
    {
        if (!is_array($arr)) return array();
        foreach ($arr as $k => $v) {
            if ($trim) $arr[$k] = trim($arr[$k]);
            if ($htmlspecialchars) $arr[$k] = htmlspecialchars($arr[$k]);
        }
        return $arr;
    }
}
//Hàm chuyển tất cả các phẩn tử của 1 mảng sang dữ liệu an toàn - hay dùng trong việc lấy dữ liệu post của form da ngôn ngữ
if (!function_exists('array_remove_item')) {
    function array_remove_item($arr, $partem = '')
    {
        if (!is_array($arr)) return array();
        foreach ($arr as $k => $v) {
            if ($v == $partem) unset($arr[$k]);
        }
        return $arr;
    }
}
//Hàm kiểm tra 2 mảng xem có phần tử chung nào hay không
if (!function_exists('array_in_array')) {
    function array_in_array($arr1, $arr2)
    {
        foreach ($arr1 as $v1) {
            foreach ($arr2 as $v2) {
                if ($v1 == $v2) return true;
            }
        }
        return false;
    }
}
//Kiểm tra 1 chuỗi có đúng định dạng ngày hay ko - return false hoặc (int) thời gian
if (!function_exists('date_valid')) {
    function date_valid($st, $delim = '-', $startDay = true, $comparToday = true)
    {
        $arr = explode($delim, $st);
        if (count($arr) != 3) return false;
        $day = intval($arr[0]);
        $month = intval($arr[1]);
        $year = intval($arr[2]);

        if ($day < 10) $day = '0' . $day;
        if ($month < 10) $month = '0' . $month;

        //echo $month."/".$day."/".$year."<br>";

        $stime = strtotime($month . "/" . $day . "/" . $year) + (7 * 3600) + 1;

        $today = time() + 7 * 3600;

        if ($day == 0 || $day > 31) return false;
        if ($month == 0 || $month > 12) return false;
        if ($year < 1970 || $year > 2100) return false;

        //if($comparToday && $stime > $today) return false;

        $stime = ($startDay) ? $stime : $stime + 24 * 3600 - 2;//Khi dùng hàm strtotime convert thì nó trả lại thời điểm đầu tiên của 1 ngày => muốn lấy thời điểm
        return $stime;
    }
}
//xuất ra một chuỗi ngày tháng với định dạng gần - hôm nay - hôm qua - cách đây
if (!function_exists('format_date')) {
    function format_date($time, $format = "d/m/Y h:i a", $space = 3, $gmt = 7, $h = "giờ", $i = "phút", $s = "giây", $today = "Hôm nay", $yesterday = "Hôm qua", $space_here = "Cách đây")
    {
        $now = time() + ($gmt * 3600);
        $date = (time() + $gmt * 3600) - (gmdate("H", time() + $gmt * 3600) * 3600) - (gmdate("i", time() + $gmt * 3600) * 60) - gmdate("s", time() + $gmt * 3600);//int time - ngày hôm nay
        if ($now - $time <= $space * 3600) {
            $n1 = intval(($now - $time) / 3600);//Số giờ cách đây
            $n2 = intval(($now - $time - $n1 * 3600) / 60);//Số phút cách đây
            $n3 = ($now - $time) % 60;//Số giây cách đây
            $_return = $space_here . " ";
            if ($n1 > 0) $_return .= $n1 . " " . $h . " ";
            if ($n2 > 0) $_return .= $n2 . " " . $i;
            if ($_return == $space_here . " ") return $_return . $n3 . " " . $s;

            if ($n1 == 0 && $n2 < 2)
                return $_return . " " . $n3 . " " . $s;
            else
                return $_return;
        }
        $day_time = gmdate("H", time() + $gmt * 3600) * 3600 + gmdate("i", time() + $gmt * 3600) * 60 + gmdate("s", time() + $gmt * 3600);
        if ($time - $date < $day_time && $time - $date > 0) return $today . " " . gmdate("h:i a", $time);
        if ($time - $date + 24 * 3600 > 0) return $yesterday . " " . gmdate("h:i a", $time);
        return gmdate($format, $time);
    }
}
//Kiểm tra 1 chuỗi có đúng định dạng ngày hay ko - return false hoặc (int) thời gian
if (!function_exists('base64_encode_fix')) {
    function base64_encode_fix($st)
    {
        $st = base64_encode($st);
        $st = str_replace(array('/', '=', '+'), array('.', '_', ':'), $st);
        return $st;
    }
}
//Chuyển tiếng việt sang không dấu
if (!function_exists('vie2eng')) {
    function vie2eng($st)
    {
        $vietChar = 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ|é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|ó|ò|ỏ|õ|ọ|ơ|ớ|ờ|ở|ỡ|ợ|ô|ố|ồ|ổ|ỗ|ộ|ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|í|ì|ỉ|ĩ|ị|ý|ỳ|ỷ|ỹ|ỵ|đ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ|Ó|Ò|Ỏ|Õ|Ọ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự|Í|Ì|Ỉ|Ĩ|Ị|Ý|Ỳ|Ỷ|Ỹ|Ỵ|Đ';
        $engChar = 'a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|a|e|e|e|e|e|e|e|e|e|e|e|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|o|u|u|u|u|u|u|u|u|u|u|u|i|i|i|i|i|y|y|y|y|y|d|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|A|E|E|E|E|E|E|E|E|E|E|E|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|O|U|U|U|U|U|U|U|U|U|U|U|I|I|I|I|I|Y|Y|Y|Y|Y|D';
        $arrVietChar = explode("|", $vietChar);
        $arrEngChar = explode("|", $engChar);
        return str_replace($arrVietChar, $arrEngChar, $st);
    }
}
//chuyen 1 chuoi sang dang url
if (!function_exists('string2url')) {
    function string2url($st)
    {
        $st = vie2eng($st);
        $st = htmlspecialchars_decode($st);
        $st = preg_replace("/[^a-zA-Z0-9 _\.-]/is", false, $st);
        $st = preg_replace('/\s+/u', ' ', $st);
        $st = str_replace(" ", "-", $st);
        while (strpos($st, "--")) {
            $st = str_replace('--', '-', $st);
        }
        $st = strtolower($st);
        return $st;
    }
}
//Chuyển những string kiểu link -> link
if (!function_exists('text2Link')) {
    function text2Link($Text)
    {
        $OutPut = $Text;
        $OutPut = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $OutPut);
        $OutPut = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $OutPut);
        $OutPut = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $OutPut);
        return $OutPut;
    }
}


function get_web_page_curl($url)
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true, // return web page
        CURLOPT_HEADER => false, // don't return headers
        CURLOPT_FOLLOWLOCATION => true, // follow redirects
        CURLOPT_ENCODING => "", // handle all encodings
        CURLOPT_USERAGENT => "xemlien", // who am i
        CURLOPT_AUTOREFERER => true, // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 30, // timeout on connect
        CURLOPT_TIMEOUT => 60, // timeout on response
        CURLOPT_MAXREDIRS => 10, // stop after 10 redirects
    );

    $ch = curl_init($url);
    curl_setopt_array($ch, $options);
    $content = curl_exec($ch);
    $err = curl_errno($ch);
    $errmsg = curl_error($ch);
    $header = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    curl_close($ch);

    //$header['errno']   = $err;
    //$header['errmsg']  = $errmsg;
    //change errmsg here to errno
    if ($errmsg) {
        echo "CURL:" . $errmsg . "<BR>";
    }
    return $content;
}


function getTime($time)
{
    $str_search = array(
        "Mon",
        "Tue",
        "Wed",
        "Thu",
        "Fri",
        "Sat",
        "Sun",
        "am",
        "pm",
        ":"
    );
    $str_replace = array(
        "Thứ hai",
        "Thứ ba",
        "Thứ tư",
        "Thứ năm",
        "Thứ sáu",
        "Thứ bảy",
        "Chủ nhật",
        "AM",
        "PM",
        ":"
    );
    $timenow = gmdate("D, d/m/Y - g:i A", $time);
    $timenow = str_replace($str_search, $str_replace, $timenow);
    return $timenow;
}

function getTimeShort($time)
{
    $str_search = array(
        "Mon",
        "Tue",
        "Wed",
        "Thu",
        "Fri",
        "Sat",
        "Sun",
        "am",
        "pm",
        ":"
    );
    $str_replace = array(
        "Thứ hai",
        "Thứ ba",
        "Thứ tư",
        "Thứ năm",
        "Thứ sáu",
        "Thứ bảy",
        "Chủ nhật",
        "AM",
        "PM",
        ":"
    );
    $timenow = gmdate("d/m/Y", $time);
    $timenow = str_replace($str_search, $str_replace, $timenow);
    return $timenow;
}

function get_sdt($sdt)
{
    $regmail = "/\d{10}/";
    preg_match_all($regmail, $sdt, $arr);
    return $arr;

}

function get_mail($mail)
{
    $regmail = "/\S+@\S+\.\S+/";
    preg_match_all($regmail, $mail, $arr);
    return $arr;

}

?>