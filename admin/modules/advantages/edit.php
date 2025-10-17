<?php
/**
 * Admin add module
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 03.04.13
 * @time 0:29
 * @version 1.1
 *
 */
if (!$_user->checkLogin()) {
    exit("You don't have permission to access");
}
$_val=$db->getRow("select * from advantages where id='" . $id . "'");
$_val['title'] = htmlspecialchars($_val['title']);

$errorText = '';
$successText = '';

$formDetails = array('formTitle' => 'Изменить преимущество',
    'submitName' => 'edit_news',
    'submitValue' => 'Добавить');

if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
{
    $_val = $_POST;
    $check_data=array(
        'title',
    );

    if ($_adminka->ControlForm($_POST, $check_data)===true) {
        $errorText ='Обязательные поля для заполнения: Заголовок';
    } else {
        $title = $exe->quote_smart($_POST['title']);

        $data = array(
            'title' => $title,
        );
        if ($_adminka->UpdateBase("advantages", $data, "id=" . $id)) {
            if ($_FILES['adv']['tmp_name'])
            {
                $oldImage = $db->getOne("SELECT image FROM advantages WHERE id='" . $id . "'");
                if ($oldImage) {
                    unlink(_SERVER_ROOT . "/content/img/main/" . $oldImage);
                }
                $fileIn = $exe->translit($_FILES['adv']['name']);
                $_img = $exe->generatePassword(6);
                $filename = _SERVER_ROOT . "/content/img/main/" . $id . "_" . $_img . "_" . $fileIn;
                $dbName = $id . "_" . $_img . "_" . $fileIn;
                if ($_adminka->SaveResizeImage ($__image, $_FILES['adv']['tmp_name'], $filename, 'width', '97', '')) {
                    $data = array(
                        'image' => $dbName,
                    );
                    if ($_adminka->UpdateBase("advantages", $data, "id=" . $id)) {
                        $successText ='Информация успешно добавлена';
                        Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
                    } else {
                        $errorText ='Ошибка базы данных!!!';
                    }
                } else {
                    $errorText ='Файл не может быть записан';
                }
            } else {
                $successText ='Информация успешно добавлена';
                Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
            }
        } else {
            $errorText ='Ошибка базы данных!!!';
        }
    }
}

$hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">';

$smarty->assign('_val', $_val);

$smarty->assign('errorText', $errorText);
$smarty->assign('successText', $successText);
$smarty->assign('hiddenInputs', $hiddenInputs);
$smarty->assign('formDetails', $formDetails);
