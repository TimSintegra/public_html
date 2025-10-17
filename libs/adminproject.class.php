<?php
/**
 * Desc
 *
 * @author Almaz Ibragimov <kraftnk@gmail.com>
 * @date 01.10.13
 * @time 17:45
 * @version 1.0
 *
 */

class adminproject {
    function setMenuArray($role) {
        switch ($role) {
            case '1':
                $adminMenu = array(
                    'system' => array(
                        'module' => 'none',
                        'title' => 'Настройки',
                        'class' => 'system_ico',
                        'submenu' => array(
                            'settings' => array(
                                'module' => 'settings',
                                'title' => 'Настройки главной',
                                'class' => 'settings_ico'
                            ),
                            'mainmenu' => array(
                                'module' => 'mainmenu',
                                'title' => 'Основное меню',
                                'class' => 'cities_ico'
                            ),
                            'advantages' => array(
                                'module' => 'advantages',
                                'title' => 'Преимущества',
                                'class' => 'system_ico'
                            ),
                            'partners' => array(
                                'module' => 'partners',
                                'title' => 'Партнеры',
                                'class' => 'partner_ico'
                            ),
                        )
                    ),
                    'pages_menu' => array(
                        'module' => 'none',
                        'title' => 'Страницы',
                        'class' => 'profiles_ico',
                        'submenu' => array(
                            'pagescat' => array(
                                'module' => 'pagescat',
                                'title' => 'Категории',
                                'class' => 'sections_ico'
                            ),
                            'pages' => array(
                                'module' => 'pages',
                                'title' => 'Страницы',
                                'class' => 'services_ico'
                            ),
                        )
                    ),
                    'services_menu' => array(
                        'module' => 'none',
                        'title' => 'Услуги',
                        'class' => 'services_ico',
                        'submenu' => array(
                            'servicescats' => array(
                                'module' => 'servicescats',
                                'title' => 'Категории',
                                'class' => 'sections_ico'
                            ),
                            'services' => array(
                                'module' => 'services',
                                'title' => 'Услуги',
                                'class' => 'services_ico'
                            ),
                        )
                    ),
                    'certificates' => array(
                        'module' => 'certificates',
                        'title' => 'Сертификаты',
                        'class' => 'price_ico',
                        'submenu' => array(
                        )
                    ),
                    'docs' => array(
                        'module' => 'docs',
                        'title' => 'Документы',
                        'class' => 'records_ico',
                        'submenu' => array(
                        )
                    ),
                    'projects' => array(
                        'module' => 'projects',
                        'title' => 'Проекты',
                        'class' => 'clinic_ico',
                        'submenu' => array(
                        )
                    ),
                    'news' => array(
                        'module' => 'news',
                        'title' => 'Новости',
                        'class' => 'news_ico',
                        'submenu' => array(
                        )
                    ),
                    'contacts' => array(
                        'module' => 'contacts',
                        'title' => 'Контакты',
                        'class' => 'about_ico',
                        'submenu' => array()
                    ),
                );
                break;
            case '2':
                $adminMenu = array(
                    'pages' => array(
                        'module' => 'pages',
                        'title' => 'Страницы',
                        'class' => 'news_ico',
                        'submenu' => array()
                    ),
                );
                break;
            default:
                $adminMenu = array();
                break;
        }
        return $adminMenu;
    }

}