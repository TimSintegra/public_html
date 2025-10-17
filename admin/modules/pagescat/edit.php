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
$delExceptions = array();
if (isset($id) && $id != 0) {
    $_val = $db->getRow("SELECT * FROM pagescats WHERE id='" . $id . "'");
    $_val['title'] = htmlspecialchars($_val['title']);
    $_val['main_content'] = $_val['main_text'];
    $errorText = '';
    $successText = '';
    $dbtable = 'pagescats';

    $formDetails = array('formTitle' => 'Изменить категорию',
        'submitName' => 'edit_cat',
        'submitValue' => 'Изменить');

    if (isset($_POST[$formDetails['submitName']]) && $_POST[$formDetails['submitName']]== $formDetails['submitValue'])
    {

        $_val = $_POST;
        $check_data=array(
            'title',
        );
        $title=$exe->quote_smart($_POST['title']);
        $main_text = $exe->quote_smart($_POST['main_content']);
        if ($_adminka->ControlForm($_POST, $check_data)===true)
        {
            $errorText ='Обязательные поля для заполнения: Название категории';
        }
        else
        {
            $url = $_adminka->generateUrl($dbtable, mb_strtolower($title, 'UTF-8'), '', 0, $_POST['url']);
            $data=array(
                'title' => $title,
                'url' => $url,
                'main_text' => $main_text,
            );
            if ($_adminka->UpdateBase($dbtable, $data, 'id=' . $id)) {
                $successText ='Информация успешно исправлена';
                Header ("Location: ". _ADMIN_URL . "/" . $sec . "/");
            } else {
                $errorText ='Ошибка базы данных!!!';
            }
        }
    }

    $hiddenInputs = '<input type="hidden" name="sec" value="' . $sec . '">'
        . '<input type="hidden" name="id" value="' . $id . '">'
        . '<input type="hidden" name="url" value="' . $_val['url'] . '">';

    $smarty->assign('_val', $_val);

    $smarty->assign('errorText', $errorText);
    $smarty->assign('successText', $successText);
    $smarty->assign('hiddenInputs', $hiddenInputs);
    $smarty->assign('formDetails', $formDetails);

} else {
    header("Location:" . _ADMIN_URL . "/");
}