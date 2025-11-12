<?php

$contactsData = array(
    'title' => 'Контакты',
    'qr' => array(
        'image' => 'qr-code-contacts.png',
        'title' => 'Сканируйте QR-код',
        'description' => 'для быстрого доступа к контактам'
    ),
    'offices' => array(
        array(
            'icon' => '📍',
            'title' => 'Офис в Москве',
            'country' => 'Российская Федерация',
            'region' => '',
            'address' => 'г. Москва, ул. Матросская Тишина, 23с1, помещение XXVI, ком.1',
            'email' => 'office@s-nk.su'
        ),
        array(
            'icon' => '🏭',
            'title' => 'Офис и производственная база в Нижнекамске',
            'country' => 'Российская Федерация',
            'region' => 'Республика Татарстан',
            'address' => 'г. Нижнекамск, БСИ, ул. Заводская 3 В',
            'email' => 'info@s-nk.su'
        )
    )
);

$smarty->assign('contactsData', $contactsData);

?>