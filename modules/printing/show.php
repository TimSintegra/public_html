<?php
if (!isset($TPL_URL)) {
    $TPL_URL = '/templates/default';
}

$print_title = '3D/5D Печать (FDM)';

$print_intro = 'FDM (Fused Deposition Modeling) — метод послойного наплавления, один из самых популярных и доступных способов 3D-печати. Создаёт объекты путём послойного нанесения расплавленного материала.';

$print_benefits = [
    'Экономичность: низкая стоимость оборудования и материалов.',
    'Разнообразие материалов: PLA, ABS, PETG, TPU, инженерные пластики.',
    'Быстрое прототипирование: от идеи до физической модели за часы.',
    'Скорость производства: подходит для малых серий и единичных изделий.',
];

$print_gallery = [
    ['src' => $TPL_URL . '/assets/images/print-1.png', 'caption' => 'Мембраны насосов'],
    ['src' => $TPL_URL . '/assets/images/print-2.png', 'caption' => 'Ролики, в т.ч. с подшипником'],
    ['src' => $TPL_URL . '/assets/images/print-3.png', 'caption' => 'Резиновые ролики'],
    ['src' => $TPL_URL . '/assets/images/print-4.png', 'caption' => 'Шнеки, винты'],
    ['src' => $TPL_URL . '/assets/images/print-5.png', 'caption' => 'Рабочие колеса насосов'],
    ['src' => $TPL_URL . '/assets/images/print-6.png', 'caption' => 'Крыльчатки охлаждения'],
    ['src' => $TPL_URL . '/assets/images/print-7.png', 'caption' => 'Шестерни, в т.ч. конические'],
    ['src' => $TPL_URL . '/assets/images/print-8.png', 'caption' => 'Корпусные детали, крышки'],
    ['src' => $TPL_URL . '/assets/images/print-9.png', 'caption' => 'Демпферы, в т.ч. эластичные муфты'],
    ['src' => $TPL_URL . '/assets/images/print-10.png', 'caption' => 'Уплотнения, прокладки'],
    ['src' => $TPL_URL . '/assets/images/print-11.png', 'caption' => 'Направляющие, ограничители'],
    ['src' => $TPL_URL . '/assets/images/print-12.png', 'caption' => 'Органы управления, рукоятки'],
];

$smarty->assign('print_title', $print_title);
$smarty->assign('print_intro', $print_intro);
$smarty->assign('print_benefits', $print_benefits);
$smarty->assign('print_gallery', $print_gallery);
?>
