<?php
/**
 * Class of function with execution
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 31.10.12
 * @time 8:31
 * @version 1.9
 *
 */
class My_execute
{

    /**
     * @param $image - класс
     * @param $srcImage - Source image
     * @param $destImage - Final Destination
     * @param string $resizeType - Тип изменения изображения
     * @param string $resizeWidth - ширина
     * @param string $resizeHeight - высота
     * @return bool
     */
    function SaveResizeImage ($image, $srcImage, $destImage, $resizeType='width', $resizeWidth='', $resizeHeight='') {
        $image->load($srcImage);
        $width = $image->get_width();
        $height = $image->get_height();
        switch ($resizeType) {
            case 'height':
                if ($resizeHeight<$height)
                    $image->fit_to_height($resizeHeight);
                break;
            case 'width':
                if ($resizeWidth<$width)
                    $image->fit_to_width($resizeWidth);
                break;
            case 'both':
                if ($resizeWidth<$width && $resizeHeight<$height)
                    $image->resize($resizeWidth, $resizeHeight);
                break;
            case 'best_fit_original':
                $image->best_fit($resizeWidth, $resizeHeight);
                break;
            case 'best_fit':
                $asRatio = $height/$width;
                $newHeight = $resizeWidth*$asRatio;
                if ($newHeight >= $resizeHeight) {
                    $x1 = 0;
                    $x2 = $resizeWidth;
                    $y1 = ($newHeight/2) - ($resizeHeight/2);
                    $y2 = $y1 + $resizeHeight;
                    $image->fit_to_width($resizeWidth);
                    $image->crop($x1, $y1, $x2, $y2);
                } else {
                    $asRatio = $width/$height;
                    $newWidth = $resizeHeight*$asRatio;
                    if ($newWidth >= $resizeWidth) {
                        $y1 = 0;
                        $y2 = $resizeHeight;
                        $x1 = ($newWidth/2) - ($resizeWidth/2);
                        $x2 = $x1 + $resizeWidth;
                        $image->fit_to_height($resizeHeight);
                        $image->crop($x1, $y1, $x2, $y2);
                    } else {
                        $image->fit_to_width($resizeWidth);
                    }
                }
                break;
            default:
                $image->resize($resizeWidth, $resizeHeight);
                break;
        }
        $image->save($destImage);
        if (is_file($destImage))
            return true;
        else
            return false;
    }

    function setUrl($sec, $act) {
        global $db;
        $newAct = array ('act' => 'show', 'id' => 0);
        if ($sec == 'photos') {
            $secc = 'photoscats';
        } elseif ($sec == 'personal') {
            $secc = 'personalcats';
        } else {
            $secc = $sec;
        }
        if (is_file(_TPL_PATH . "/modules/" . $sec . "/" . $act . ".tpl")) {
            $newAct['act'] = $act;
        } else {
            if (isset($act) && $act != '' && $sec != 'ext' && $sec != 'lang') {
                $checkPage = $db->getOne("SELECT id FROM " . $secc . " WHERE url='" . $act . "' LIMIT 1");
                if (!$checkPage) {
                    $newAct['act'] = $act;
                } else {
                    $newAct['id'] = $checkPage;
                }
            }
        }
        return $newAct;
    }

    function getText($lang) {
        global $db;
        $mainSEO = $db->getRow("SELECT * FROM seo WHERE sec='index'");
        $newSEO['title'] = $mainSEO['title'];
        $newSEO['keywords'] = $mainSEO['keywords'];
        $newSEO['description'] = $mainSEO['description'];

        if ($sec != 'ext') {
            if ($sec != 'index' && $sec != 'lc' && $sec != 'register') {
                if ($sec == 'photos') {
                    $secc = 'photoscats';
                } elseif ($sec == 'personal') {
                    $secc = 'personalcats';
                } else {
                    $secc = $sec;
                }
                $query = "SELECT title, keywords, description FROM seo WHERE sec='" . $secc . "'";
                if (isset($act) && $act != '') {
                    if (is_file(_TPL_PATH . "/modules/" . $sec . "/" . $act . ".tpl")) {
                        if ($id) {
                            $checkPage = $db->getOne("SELECT id FROM " . $secc . " WHERE url='" . $id . "' LIMIT 1");
                            if ($checkPage) {
                                $queryAdd = " AND url='" . $id . "'";
                            } else {
                                $queryAdd = " AND url=''";
                            }
                        } else {
                            $queryAdd = " AND url=''";
                        }
                    } else {
                        $checkPage = $db->getOne("SELECT id FROM " . $secc . " WHERE url='" . $act . "' LIMIT 1");
                        if ($checkPage) {
                            $queryAdd = " AND url='" . $act . "'";
                        } else {
                            $queryAdd = " AND url=''";
                        }
                    }
                } else {
                    $queryAdd = " AND url=''";
                }
                $getVars = $db->getRow($query . $queryAdd);
                if ($getVars) {
                    if (trim($getVars['title']) != '') {
                        $newSEO['title'] = $getVars['title'] . ' | ' . $mainSEO['title'];
                    } else {
                        $newSEO['title'] = $mainSEO['title'];
                    }
                    if ($getVars['keywords'] != '') {
                        $newSEO['keywords'] = $getVars['keywords'];
                    }
                    if ($getVars['description'] != '') {
                        $newSEO['description'] = $getVars['description'];
                    }
                }
            }
        }

        return $newSEO;
    }

    function getSEO($sec, $act, $id) {
        global $db;
        $mainSEO = $db->getRow("SELECT * FROM seo WHERE sec='index'");
        $newSEO['title'] = $mainSEO['title'];
        $newSEO['keywords'] = $mainSEO['keywords'];
        $newSEO['description'] = $mainSEO['description'];

        if ($sec != 'ext') {
            if ($sec != 'index' && $sec != 'lc' && $sec != 'register' && $sec != 'lang') {
                if ($sec == 'photos') {
                    $secc = 'photoscats';
                } elseif ($sec == 'personal') {
                    $secc = 'personalcats';
                } else {
                    $secc = $sec;
                }
                $query = "SELECT title, keywords, description FROM seo WHERE sec='" . $secc . "'";
                if (isset($act) && $act != '') {
                    if (is_file(_TPL_PATH . "/modules/" . $sec . "/" . $act . ".tpl")) {
                        if ($id) {
                            $checkPage = $db->getOne("SELECT id FROM " . $secc . " WHERE url='" . $id . "' LIMIT 1");
                            if ($checkPage) {
                                $queryAdd = " AND url='" . $id . "'";
                            } else {
                                $queryAdd = " AND url=''";
                            }
                        } else {
                            $queryAdd = " AND url=''";
                        }
                    } else {
                        $checkPage = $db->getOne("SELECT id FROM " . $secc . " WHERE url='" . $act . "' LIMIT 1");
                        if ($checkPage) {
                            $queryAdd = " AND url='" . $act . "'";
                        } else {
                            $queryAdd = " AND url=''";
                        }
                    }
                } else {
                    $queryAdd = " AND url=''";
                }
                $getVars = $db->getRow($query . $queryAdd);
                if ($getVars) {
                    if (trim($getVars['title']) != '') {
                        $newSEO['title'] = $getVars['title'] . ' | ' . $mainSEO['title'];
                    } else {
                        $newSEO['title'] = $mainSEO['title'];
                    }
                    if ($getVars['keywords'] != '') {
                        $newSEO['keywords'] = $getVars['keywords'];
                    }
                    if ($getVars['description'] != '') {
                        $newSEO['description'] = $getVars['description'];
                    }
                }
            }
        }

        return $newSEO;
    }

    function generatePassword($length, $type='') {
        if($type == 'numbers') {
            $numbers = "0123456789";
            return substr(str_shuffle($numbers),0,$length);
        } elseif ($type == 'captcha') {
            $chars = "ABCDEFGHJKLMNPQRTUVWXYZ0123456789";
            return substr(str_shuffle($chars),0,$length);
        } else {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            return substr(str_shuffle($chars),0,$length);
        }
    }

    function _sendMail($messageToSend, $subjectSend, $mailFrom, $mailTo, $attachment='', $attachFileName='', $attachType='') {
        global $mailConfig;

        $newMailFrom = array();
        if (is_array($mailFrom)) {
            foreach ($mailFrom as $mailValue) {
                if ($mailValue == 'mailer@rbix.ru') {
                    $newMailFrom[$mailValue] = 'Сайт';
                } else {
                    $newMailFrom['mailer@rbix.ru'] = 'Сайт';
                }
            }
        } else {
            $newMailFrom = array('mailer@rbix.ru'=>'Сайт');
        }

        $transport = Swift_SmtpTransport::newInstance(
            $mailConfig['smptServer'],
            $mailConfig['smtpProt']
        );
        $transport->setUsername($mailConfig['smtpUser']);
        $transport->setPassword($mailConfig['smtpPass']);

        try{
            $mailer = Swift_Mailer::newInstance($transport);
            $message = Swift_Message::newInstance();

            if ($attachment != '' && $attachFileName != '' && $attachType != '') {
                $attachment = Swift_Attachment::newInstance($attachment, $attachFileName, $attachType);
                $message->attach($attachment);
            }

            $message->setSubject($subjectSend);
            $message->setFrom($newMailFrom);
            $message->setTo($mailTo);
            $message->setBody($messageToSend);

            $result = $mailer->send($message);
            $mailer->getTransport()->stop();

            if ($result) {
                return array('response' => 'ok', 'descr' => 'E-mail sended');
            } else {
                return array('response' => 'error', 'descr' => 'E-mail can not be sent');
            }
        } catch (Swift_TransportException $e) {
            return array('response' => 'error', 'descr'=>$e->getMessage());
        } catch (Exception $e) {
            return array('response' => 'error', 'descr'=>$e->getMessage());
        }
    }

    function getVar($vari, $type="char", $default="")
    {
        if ($type=="char")
        {
            if (isset($_GET[$vari]) && $_GET[$vari]!="")
                $nvari=$this->quote_smart($_GET[$vari]);
            elseif (isset($_POST[$vari]) && $_POST[$vari]!="")
                $nvari=$this->quote_smart($_POST[$vari]);
            else
                $nvari=$default;
            return $nvari;
        }
        elseif ($type=="int")
        {
            if (isset($_GET[$vari]) && $_GET[$vari]!=0)
                $nvari=intval($_GET[$vari]);
            elseif (isset($_POST[$vari]) && $_POST[$vari]!=0)
                $nvari=intval($_POST[$vari]);
            else
                $nvari=0;
            return $nvari;
        }
    }

    function CheckForm ($data, $check_vars, $db_prop='')
    {
        global $db;
        $check_errors="";
        foreach ($check_vars as $key=>$value)
        {
            $types=explode("|", $value[1]);
            foreach ($types as $check_value)
            {
                switch($check_value)
                {
                    case 'empty':
                        if ($data[$key]=="")
                            $check_errors.="Поле \"".$value[0]."\" не заполнено<br>";
                        break;
                    case 'db':
                        $result=$db->getRow("select * from $db_prop where `".$key."`='".$data[$key]."'");
                        if ($db->num_rows>0)
                            $check_errors.="Данный ".$value[0]." уже имеется в базе<br>";
                        break;
                    case 'email':
                        if(!preg_match("/^(?:[a-z0-9]+(?:[-_]?[a-z0-9]+)?@[a-z0-9]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i",trim($data[$key])))
                            $check_errors.="Неправильный E-mail<br>";
                        break;
                    case 'equal':
                        $secvalue=$key."2";
                        if ($this->quote_smart($data[$key])!=$this->quote_smart($data[$secvalue]))
                            $check_errors.="Не совпадают $value<br>";
                        break;
                }
            }
        }
        return $check_errors;
    }

    function quote_smart($value)
    {
        /*
        if (get_magic_quotes_gpc())
        {
            $value = stripslashes($value);
        }
        */
        return $value;
    }

    function trim_r($array)
    {
        if (is_string($array)) {
            return trim($array, " \t\n\r\0\x0B");
        } else if (!is_array($array)) {
            return '';
        }
        $keys = array_keys($array);
        for ($i=0; $i<count($keys); $i++) {
            $key = $keys[$i];
            if ( is_array($array[$key]) ) {
                $array[$key] = trim_r($array[$key]);
            } else if ( is_string($array[$key]) ) {
                $array[$key] = trim($array[$key], " \t\n\r\0\x0B");
            }
        }
        return $array;
    }

    function filter($value)
    {
        return (mb_strlen($value, "UTF-8") >= 3);
    }

    function checkUserFio ($userfio) {
        if (preg_match('/^[ а-яА-ЯЁёa-zA-Z]{2,100}$/iu', $userfio)) {
            if (trim($userfio) != '') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function checkEmail ($email) {
        if (preg_match('|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i', $email)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Функция преобразования даты
     * @param $postdate - Форматируемая дата
     * @param string $explChar - символ разделения даты: день, месяц, год
     * @param string $posttime - форматируемое время
     * @param int $timezero - преобразовать время в нули
     * @param int $onlyDate - преобразовывать только дату
     * @return bool|string - возвращаем дату и время
     */
    function postDateToMysql($postdate, $explChar='-', $posttime='', $timezero=0, $onlyDate=0){
        $prep_date = explode($explChar, $postdate);
        if (isset($posttime) && $posttime!='') {
            $prep_time = explode(":", $posttime);
            $to_hour = $prep_time[0];
            $to_minute = $prep_time[1];
            $to_second = $prep_time[2];
        } elseif (isset($timezero) && $timezero!=0) {
            $to_hour = date("H");
            $to_minute = date("i");
            $to_second = date("s");
        } else {
            $to_hour = 0;
            $to_minute = 0;
            $to_second = 0;
        }
        $unixtime = mktime($to_hour, $to_minute, $to_second, $prep_date[1], $prep_date[0], $prep_date[2]);
        if ($onlyDate == 0) {
            $dateOut = date("Y-m-d H:i:s", $unixtime);
        } else {
            $dateOut = date("Y-m-d", $unixtime);
        }
        return $dateOut;
    }

    function MysqlDateToText($datadate, $type=0){
        global $globalSiteVars, $_show;
        $exp_date=explode(" ", $datadate);
        $exp_data=explode("-", $exp_date[0]);
        switch ($type)
        {
            case '1':
                $toDate = intval(strval($exp_data[2]));
                $toMonth = $globalSiteVars['monthRusArray'][intval(strval($exp_data[1]))];
                $dateOut = $toDate . ' ' . $toMonth;
                break;
            case '2':
                $dateOut = $exp_data[2]."-".$exp_data[1]."-".$exp_data[0];
                break;
            case '3':
                $toDate = intval(strval($exp_data[2]));
                $toMonth = $globalSiteVars['monthRusArray'][intval(strval($exp_data[1]))];
                $dateOut = $toDate . ' ' . $toMonth . ' ' . $exp_data[0] . ' '
                    . $_show->WeekDayTitle(date("N", mktime(0, 0, 0, $exp_data[1], $exp_data[2], $exp_data[0])));
                break;
            case '4':
                $dateOut = $exp_data[2].".".$exp_data[1].".".$exp_data[0]. " " . mb_substr($exp_date[1], 0 , 5, 'UTF-8');
                break;
            default:
                $dateOut = $exp_data[2].".".$exp_data[1].".".$exp_data[0];
                break;
        }
        return $dateOut;
    }

    function getClass ($i, $class1, $class2) {
        if($i%2) {
            $class = $class1;
        } else {
            $class = $class2;
        }
        return $class;
    }

    /**
     * Функция вывода страниц
     *
     * @param int $all_pages Сколько всего страниц
     * @param int $page какая сейчас страница
     * @param string $mpage Главная страница (модуль)
     * @return string вывод в виде html
     */
    function pages($all_pages, $page, $sec, $act, $id, $subid, $admin=0)
    {
        $page_view = '';
        $str = $page;
        $separeter = 3;
        $baseURL = _HTTP_URL . '/';
        if ($admin == 1) {
            $baseURL .= 'admin/';
        }
        $baseURL .= $sec . '/' . $act;
        if ($id!=0)
            $baseURL .= '/' . $id . '/';
        else
            $baseURL .= '/0/';
        if ($subid!=0)
            $baseURL .= $subid . '/';
        else
            $baseURL .= '0/';
        if ($all_pages > $separeter*3)
        {
            for ($i=0;$i<$separeter; $i++)
            {
                $link = '<a href="' . $baseURL . $i . '/">';
                if ($page == $i)
                    $page_view .= '<i class="here">' . ($i+1) . '</i>';
                else
                    $page_view .= $link . ($i+1) . '</a> ';
            }
            if ($str >= ($separeter-1) && $str < (($separeter*2)-1))
            {
                for ($i=$separeter;$i<($str+2); $i++)
                {
                    $link = '<a href="' . $baseURL . $i . '/">';
                    if ($page == $i)
                        $page_view .= '<i class="here">' . ($i+1) . '</i>';
                    else
                        $page_view .= $link . ($i+1) . '</a> ';
                }
                $page_view .= ' ... ';
            }
            if ($str >= (($separeter*2)-1) && $str <= ($all_pages-($separeter*2)))
            {
                $page_view .= ' ... ';
                for ($i=($str-1);$i<($str+2); $i++)
                {
                    $link = '<a href="' . $baseURL . $i . '/">';
                    if ($page == $i)
                        $page_view .= '<i class="here">' . ($i+1) . '</i>';
                    else
                        $page_view .= $link . ($i+1) . '</a> ';
                }
                $page_view .= ' ... ';
            }
            if ($str > ($all_pages-($separeter*2)) && $str <= ($all_pages-$separeter))
            {
                $page_view .= ' ... ';
                for ($i=($str-1);$i<$all_pages-$separeter; $i++)
                {
                    $link = '<a href="' . $baseURL . $i . '/">';
                    if ($page == $i)
                        $page_view .= '<i class="here">' . ($i+1) . '</i>';
                    else
                        $page_view .= $link . ($i+1) . '</a> ';
                }
            }
            if ($str < ($separeter-1) || $str > ($all_pages-$separeter))
                $page_view .= ' ... ';
            for ($i=($all_pages-$separeter);$i<$all_pages; $i++)
            {
                $link = '<a href="' . $baseURL . $i . '/">';
                if ($page == $i)
                    $page_view .= '<i class="here">' . ($i+1) . '</i>';
                else
                    $page_view .= $link . ($i+1) . '</a> ';
            }
        }
        else
        {
            for ($i=0;$i<$all_pages; $i++)
            {
                $link = '<a href="' . $baseURL . $i . '/">';
                if ($page == $i)
                    $page_view .= '<i class="here">' . ($i+1) . '</i>';
                else
                    $page_view .= $link . ($i+1) . '</a> ';
            }
        }
        return $page_view;
    }


    function translit($str)
    {
        $tr = array(
            'А'=>'A','Б'=>'B','В'=>'V','Г'=>'G',
            'Д'=>'D','Е'=>'E','Ё'=>'E','Ж'=>'J','З'=>'Z','И'=>'I',
            'Й'=>'Y','К'=>'K','Л'=>'L','М'=>'M','Н'=>'N',
            'О'=>'O','П'=>'P','Р'=>'R','С'=>'S','Т'=>'T',
            'У'=>'U','Ф'=>'F','Х'=>'H','Ц'=>'TS','Ч'=>'CH',
            'Ш'=>'SH','Щ'=>'SCH','Ъ'=>'','Ы'=>'Y','Ь'=>'',
            'Э'=>'E','Ю'=>'YU','Я'=>'YA','а'=>'a','б'=>'b',
            'в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j',
            'з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l',
            'м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r',
            'с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h',
            'ц'=>'ts','ч'=>'ch','ш'=>'sh','щ'=>'sch','ъ'=>'y',
            'ы'=>'y','ь'=>'','э'=>'e','ю'=>'yu','я'=>'ya', ' ' => '-'
        );
        return strtr($str,$tr);
    }

    function updateHoroscope() {
        global $db;
        $toDay = date("Y-m-d");
        $xml = simplexml_load_file("http://img.ignio.com/r/export/utf/xml/daily/com.xml");
        foreach ($xml as $key => $item) {
            if ($key != 'date') {
                $checkZodiac = $db->getRow("SELECT * FROM horoscope WHERE zodiac='" . trim($key) . "'");
                if ($checkZodiac) {
                    $db->exec("UPDATE horoscope SET main_text='" . $xml->$key->today . "', last_update='"
                        . $toDay . "' WHERE zodiac='" . trim($key) . "'");
                } else {
                    $db->exec("INSERT INTO horoscope SET zodiac='" . trim($key) . "', main_text='"
                        . $xml->$key->today . "', last_update='" . $toDay . "'");
                }
            }
        }
    }

    function commentDate ($regdate) {
        $toDay = date("Y-m-d");
        $cText = '';
        if ($toDay == substr($regdate, 0, 10)) {
            $cText .= 'Сегодня ' . substr($regdate, 11, 5);
        } else {
            $cText .= $this->MysqlDateToText($regdate, 1) . ' ' . substr($regdate, 11, 5);
        }
        return $cText;
    }

    function getComments($module, $id, $limitFrom=0, $limitTo=3) {
        global $db;
        $showComments = array();
        $countComments = $db->getOne("SELECT count(*) as c FROM comments WHERE module='" . $module . "' AND mid='" . $id
            . "' AND active='1'");
        $allComments = $db->getAll("SELECT * FROM comments WHERE module='" . $module . "' AND mid='" . $id
            . "' AND active='1' ORDER BY regdate DESC LIMIT " . $limitFrom . ", " . $limitTo);
        if ($allComments) {
            foreach ($allComments as $_oneComment) {
                $fioUser = $db->getRow("SELECT username, fio FROM users WHERE id='" . $_oneComment['uid'] . "'");
                if ($fioUser['fio']) {
                    $fio = $fioUser['fio'];
                } else {
                    $fio = $fioUser['username'];
                }
                $showComments[] = array(
                    'fio' => $fio,
                    'cDate' => $this->commentDate($_oneComment['regdate']),
                    'text' => $_oneComment['comment']
                );
            }
        }
        $return = array(
            'count' => $countComments,
            'comments' => $showComments
        );
        return $return;
    }

}
