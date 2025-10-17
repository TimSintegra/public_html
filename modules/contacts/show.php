<?php
// Логика для страницы контактов
$contacts_data = array(
    'phone' => $mainPage['tel'],
    'email' => 'info@sintegra-nk.ru',
    'address' => 'Нижнекамск, ул. Примерная, 123'
);

$smarty->assign('contacts', $contacts_data);
$smarty->assign('about_text', 'Это страница о нас');
?>