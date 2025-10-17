<?php
/**
 * URL: http://rche.ru/1068_php-kategorii-beskonechnogo-urovnya-vlozhennosti.html
 *
 */


/**
 *
 *  Пример использования
 *
 *  $category = new TreeCategory ($DB); // передаем в класс интерфес работы с БД
 *  $category->table='category'; // запрос на выборку списка категорий, название таблицы
 *  $category->outCategory($category->getCategory()); // подготовка вывода категорий(запрос массива категорий)
 *  echo $category->html; // вывод категорий в HTML <option value="id">name</option>
 *
 */


class TreeCategory
{
    /**
     *   Строка запроса в БД
     */
    var $table;

    /**
     *   Интерфейс работы с БД
     */
    var $DB;

    /**
     *   Массив категорий с вложенными подкатегориями
     */
    var $arrayCat;

    /**
     *   Авто-подстчет кол-ва прочерков перед названием категории при выводе
     */
    var $countPodcat;

    var $allCount;

    /**
     *   HTML код для вывода категорий с подкатегориями
     */
    var $html;


    /**
     *   Получаем интерфейс для работы с БД и кладем его в локальные переменную
     */
    function __construct($DB)
    {
        $this->DB = $DB;
    }


    /**
     *   Получает список категорий, сортирует и помещает в массив с вложенными массивами и т.д.
     * @return array category
     */
    function getCategory($activeCats = 0)
    {
        if ($activeCats == 1) {
            $all = $this->DB->getAll("SELECT * FROM `{$this->table}` WHERE active='1' ORDER BY `id` ASC");
        } else {
            $all = $this->DB->getAll("SELECT * FROM `{$this->table}` ORDER BY `id` ASC");
        }
        $path = array();
        $this->arrayCat = array();
        if (count($all) > 0) {
            foreach ($all as $item):
                if ($item['parent_id'] == 0) $sort[$item['id']] = $item;
                if ($item['parent_id'] > 0) {
                    if (isset($path[$item['parent_id']])) {
                        $str = '$sort';
                        foreach ($path[$item['parent_id']] as $pitem):
                            $rep = $item['parent_id'];
                            $str .= "[$pitem][sub]";
                        endforeach;
                        $str .= "[{$item['parent_id']}][sub]";

                        $str .= "[{$item['id']}]";
                        $str .= '=$item;';

                        @eval($str);

                        foreach ($path[$item['parent_id']] as $pitem):
                            $path[$item['id']][] = $pitem;
                        endforeach;

                        $path[$item['id']][] = $item['parent_id'];
                    } else {
                        $sort[$item['parent_id']]['sub'][$item['id']] = $item;
                        $path[$item['id']][] = $item['parent_id'];
                    }
                }
            endforeach;
            $this->arrayCat = $sort;
        }
        return $this->arrayCat;
    }


    /**
     *   Печатает категории, помещает готовый HTML в $this->html
     * @param array Массив с категориями и вложенными подкатегориями
     * @param string Тип генерируемого HTML кода для вывода, option или table
     */
    function outCategory(&$arrayCat, $type = 'option', $idSel = 0, $mainUrl = '', $delExceptions = array())
    {
        if (count($arrayCat) > 0) {
            foreach ($arrayCat as $sub) {
                $this->countPodcat++;
                $this->allCount++;
                $this->outItem($sub, $type, $idSel, $mainUrl, $delExceptions);
                if (!empty($sub['sub'])) {
                    $this->outCategory($sub['sub'], $type, $idSel, $mainUrl, $delExceptions);
                }
                $this->countPodcat--;
            }
        }
    }

    /**
     *   Вспомогательный метод подготовки HTML кода
     * @param array Массив с категорией
     * @param string Тип генерируемого HTML кода для вывода, option или table
     */
    function outItem($sub, $type = 'option', $idSel = 0, $mainUrl = '', $delExceptions = array())
    {
        global $sec;
        $out = '';
        if ($this->countPodcat > 1) {
            for ($i = 1; $i < $this->countPodcat; $i++) {
                $out .= '&rarr;&nbsp;';
            }
        }
        if($this->allCount%2) {
            $trclass = 'eventr';
        } else {
            $trclass = 'oddtr';
        }
        if ($sub['active'] == 1) {
            $no = $this->allCount;
            $title = $out . $sub['title'];
            $url = $mainUrl . '/' . $sub['url'] . '.html';
            $editLink = '<a href="/admin/' . $sec  . '/edit/' . $sub['id']
                . '/"><img src="/admin/templates/default/images/edit.png" alt="Редактировать категорию" '
                . 'title="Редактировать категорию" border="0"  width="19"></a>';
            if (count($delExceptions) != 0 && in_array($sub['id'], $delExceptions)) {
                $delLink = '';
                $actLink = '';
            } else {
                $actLink = '<a href="/admin/' . $sec  . '/deact/' . $sub['id']
                    . '/" onClick="return window.confirm(\'Вы действительно хотите отключить категорию? '
                    . 'Все страницы категории, подкатегории и страницы подкатегорий ОТКЛЮЧАТСЯ автоматически!\');">'
                    . '<img src="/admin/templates/default/images/off.png" title="Деактивировать" alt="Деактивировать" '
                    . 'border="0" width="19"></a>';
                $delLink = '<a href="/admin/' . $sec  . '/del/' . $sub['id']
                    . '/" onClick="return window.confirm(\'Вы действительно хотите удалить категорию? '
                    . 'Все страницы категории, подкатегории и страницы подкатегорий УДАЛЯТСЯ автоматически!\');">'
                    . '<img src="/admin/templates/default/images/del.png" alt="Удалить" border="0" title="Удалить" width="19"></a>';
            }
        } else {
            $no = '<s>' . $this->allCount . '</s>';
            $title = '<s>' . $out . $sub['title'] . '</s>';
            $url = '<s>' . $mainUrl . '/' . $sub['url'] . '.html</s>';
            $editLink = '<a href="/admin/' . $sec  . '/edit/' . $sub['id']
                . '/"><img src="/admin/templates/default/images/edit.png" alt="Редактировать категорию" '
                . 'title="Редактировать категорию" border="0"  width="19" style="opacity:0.4;filter:alpha(opacity=40)"></a>';
            if (count($delExceptions) != 0 && in_array($sub['id'], $delExceptions)) {
                $delLink = '';
                $actLink = '';
            } else {
                $actLink = '<a href="/admin/' . $sec  . '/act/' . $sub['id']
                    . '/"><img src="/admin/templates/default/images/on.png" title="Активировать" alt="Активировать" '
                    . 'border="0" width="19" style="opacity:0.4;filter:alpha(opacity=40)"></a>';
                $delLink = '<a href="/admin/' . $sec  . '/del/' . $sub['id']
                    . '/" onClick="return window.confirm(\'Вы действительно хотите удалить категорию? '
                    . 'Все страницы категории, подкатегории и страницы подкатегорий УДАЛЯТСЯ автоматически!\');">'
                    . '<img src="/admin/templates/default/images/del.png" alt="Удалить" border="0" title="Удалить" '
                    . 'width="19" style="opacity:0.4;filter:alpha(opacity=40)"></a>';
            }
        }
        if ($idSel == $sub['id']) $se = 'selected'; else $se = '';
        if ($type == 'option') $this->html .= "<option value=\"{$sub['id']}\" {$se}>{$out} {$sub['title']}</option>";
        if ($type == 'table') $this->html .= <<<HTML
			<tr class="{$trclass}"><td align="center">{$no}</td>
			<td align="left">{$title}</td>
			<td align="center">{$url}</td>
			<td align="center">{$actLink} {$editLink} {$delLink}</td>
HTML;

    }


}
