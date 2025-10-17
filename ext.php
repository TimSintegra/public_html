<?
switch ($act)
{
    case 'clearform':
        $smarty->assign('sectorData', 1);
        break;
    case 'findstreet':
        $street = $exe->quote_smart(trim($_POST['street']));
        $allHouses = array();
        $streetData = $db->getRow("SELECT * FROM streets WHERE title='" . $street . "'");
        if ($streetData) {
            $getAllHouses = $db->getAll("SELECT h.title FROM `houses` AS h LEFT JOIN sectors AS s ON s.id=h.sector_id WHERE h.street_id='" .
                $streetData['id'] . "' ORDER BY h.title");
            if ($getAllHouses) {
                foreach($getAllHouses as $oneHouse) {
                    $allHouses[] = array(
                        'house' => $oneHouse['title']
                    );
                }
            }
        }
        $smarty->assign('houses', $allHouses);
        $smarty->assign('streetData', $streetData);
        break;
    case 'findhouse':
        $streetId = intval($_POST['streetid']);
        $house = $exe->quote_smart(trim($_POST['house']));
        $streetData = $db->getRow("SELECT * FROM streets WHERE id='" . $streetId . "'");
        $getSectorData = $db->getRow("SELECT s.* FROM `houses` AS h LEFT JOIN sectors AS s ON s.id=h.sector_id WHERE h.title='" . $house . "' AND h.street_id='" . $streetId . "'");
        if ($getSectorData['doctor'] != '' && $getSectorData['id'] != NULL) {
            if ($getSectorData['mon'] != '' || $getSectorData['tue'] != '' || $getSectorData['wed'] != '' || $getSectorData['thu'] != '' || $getSectorData['fri'] != '') {
                $duty_table = '';
                if ($getSectorData['mon'] != ''){
                    $duty_table .= '<div class="tr"><div class="td">Пн</div>';
                    if ($getSectorData['mon'] != '') {
                        $duty_table .= '<div class="td">' . $getSectorData['mon'] . '</div>';
                    }
                    $duty_table .= '</div>';
                }
                if ($getSectorData['tue'] != ''){
                    $duty_table .= '<div class="tr"><div class="td">Вт</div>';
                    if ($getSectorData['tue'] != '') {
                        $duty_table .= '<div class="td">' . $getSectorData['tue'] . '</div>';
                    }
                    $duty_table .= '</div>';
                }
                if ($getSectorData['wed'] != ''){
                    $duty_table .= '<div class="tr"><div class="td">Ср</div>';
                    if ($getSectorData['wed'] != '') {
                        $duty_table .= '<div class="td">' . $getSectorData['wed'] . '</div>';
                    }
                    $duty_table .= '</div>';
                }
                if ($getSectorData['thu'] != ''){
                    $duty_table .= '<div class="tr"><div class="td">Чт</div>';
                    if ($getSectorData['thu'] != '') {
                        $duty_table .= '<div class="td">' . $getSectorData['thu'] . '</div>';
                    }
                    $duty_table .= '</div>';
                }
                if ($getSectorData['fri'] != ''){
                    $duty_table .= '<div class="tr"><div class="td">Пт</div>';
                    if ($getSectorData['fri'] != '') {
                        $duty_table .= '<div class="td">' . $getSectorData['fri'] . '</div>';
                    }
                    $duty_table .= '</div>';
                }

                $duty = $duty_table;
            } else {
                $duty = 'Нет расписания';
            }
            $getOtdData = $db->getRow("SELECT * FROM sector_poli WHERE id='" . $getSectorData['poli_id'] . "'");
            $smarty->assign('getOtdData', $getOtdData);
            $smarty->assign('getSectorData', $getSectorData);
            $smarty->assign('showDuty', $duty);
        } else {
            $smarty->assign('getSectorData', array());
        }
        $smarty->assign('streetData', $streetData);
        break;
    case 'sendmail':
        $mainPage = array();
        $mainPageVars = $db->getAll("SELECT sql_cache * FROM settings");
        foreach ($mainPageVars as $mainPageVar) {
            $mainPage[$mainPageVar['setname']] = $mainPageVar['value'];
        }
        require_once (_MAIN_PATH . '/libs/swift/swift_required.php');
        $messageToSend = "Уважаемый администратор! \n\nЗаявка с сайта:\n"
            . "Имя: " . $_POST['uname'] . "\n"
            . "Телефон: " . $_POST['tel'] . "\n\n"
            . "Это письмо было отправлено автоматически. Пожалуйста не отвечайте на него\n\n";
        $subjectSend = "Заявка с сайта";
        $mailFrom = array('noreply@rbix.ru');
        $mailTo = array($mainPage['main_email']);
        $emailResult = $exe->_sendMail($messageToSend, $subjectSend, $mailFrom, $mailTo);
        if ($emailResult['response'] == 'ok') {
            $smarty->assign('ok', '1');
        } else {
            $smarty->assign('ok', '0');
        }
        break;
    case 'calc':
        $area = intval($_POST['area']);
        $repair_type = intval($_POST['repair_type']);
        $repair_adds = $exe->quote_smart(trim($_POST['repair_adds']));
        $repairTypePrice = $db->getOne("SELECT price FROM repair_types WHERE id='" . $repair_type . "'");
        $repairAdds = explode("_", $repair_adds);
        $repairAddsPrice = 0;
        if (count($repairAdds) > 0) {
            foreach($repairAdds as $_add) {
                if (intval($_add) != 0) {
                    $_addPrice = $db->getOne("SELECT price FROM repair_adds_prices WHERE raid='" . intval($_add) . "' AND rtid='" . $repair_type . "'");
                    if ($_addPrice) {
                        $repairAddsPrice += $_addPrice;
                    }
                }
            }
        }
        $allPrice = ($repairTypePrice+$repairAddsPrice)*$area;
        $formattedPrice = number_format($allPrice, 0, ',', ' ');
        $smarty->assign('allPrice', $formattedPrice);
        break;
    case 'addcomment':
        $moduleName = $exe->quote_smart($_POST['moduleName']);
        $moduleId = $exe->quote_smart($_POST['moduleId']);
        $comment = $exe->quote_smart($_POST['comment']);
        $uid = $_user->uid();
        $uInfo = $db->getRow("SELECT * FROM users WHERE id='" . $uid . "'");
        $checkDate = date("Y-m-d H:i:s", mktime(date("H"), date("i") - 5, date("s"), date("m"), date("d"), date("Y")));
        if ($uid) {
            if ($uInfo['active'] != 0) {
                $query = "SELECT * FROM comments WHERE uid='" . $uid . "' AND module='" . $moduleName
                    . "' AND mid='" . $moduleId . "' AND comment='" . $comment . "' AND regdate>='" . $checkDate . "'";
                $checkMessage = $db->getRow($query);
                if ($checkMessage) {
                    $addComment['result'] = 'error';
                    $addComment['details'] = 'Повторный комментарий в течении 5 минут. Если вы уже писали комментарий, дождитесь подтверждения администратора.';
                } else {
                    $commentDate = date("Y-m-d H:i:s");
                    $db->exec("INSERT INTO comments SET `module`='" . $moduleName . "', mid='"
                        . $moduleId . "', uid='" . $uid . "', comment='" . $comment . "', regdate='" . $commentDate
                        . "', active='0'");
                    $addComment['result'] = 'ok';
                    $addComment['details'] = 'Ваш комментарий отправлен. Появится на сайте после проверки администратором.';
                }
            } else {
                $addComment['result'] = 'error';
                $addComment['details'] = 'Пользователь заблокирован!';
            }
        } else {
            $addComment['result'] = 'error';
            $addComment['details'] = 'Произошла ошибка!';
        }
        $jsonData = json_encode($addComment);
        $smarty->assign('addComment', $jsonData);
        break;
    default:
        $smarty->assign('infoText', '<p>Выберите раздел!</p>');
        break;
}
?>