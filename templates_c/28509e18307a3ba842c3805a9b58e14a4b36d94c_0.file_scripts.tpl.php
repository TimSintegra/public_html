<?php
/* Smarty version 5.4.3, created on 2026-03-01 03:32:00
  from 'file:/opt/lampp/htdocs/public_html/templates/default/scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a3a5203ce838_60177493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28509e18307a3ba842c3805a9b58e14a4b36d94c' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/scripts.tpl',
      1 => 1772332270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a3a5203ce838_60177493 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
?><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/my.js"><?php echo '</script'; ?>
> 

<?php if ($_smarty_tpl->getValue('MODULE_PATH') == 'contacts') {
echo '<script'; ?>
 src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    var main_url= '';
    $(document).ready(function() {
        ymaps.ready(init);
        function init () {
            var myMap = new ymaps.Map("map", {
                    center: [<?php echo $_smarty_tpl->getValue('moduleShema');?>
],
                    zoom: 16,
                }),

                // Создаем геообъект с типом геометрии "Точка".
                myGeoObject = new ymaps.GeoObject({
                    // Описание геометрии.

                }, {

                });

            myMap.geoObjects
                .add(myGeoObject)
                .add(new ymaps.Placemark([<?php echo $_smarty_tpl->getValue('moduleShema');?>
], {
                    balloonContent: 'СИНТЕГРА'
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: main_url + '<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/map_logo.png',
                    iconImageSize: [120, 140],
                    iconImageOffset: [-60, -110]


                }));

            myMap.behaviors.disable('scrollZoom');

        }});
<?php echo '</script'; ?>
> 


<?php }?>

<?php if ($_smarty_tpl->getValue('MODULE_PATH') == 'index') {?>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('INDEX_SECTION_MODULES'), 'sect');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sect')->value) {
$foreach1DoElse = false;
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/<?php echo $_smarty_tpl->getValue('sect');?>
/script.js"><?php echo '</script'; ?>
>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/<?php echo $_smarty_tpl->getValue('MODULE_PATH');?>
/script.js"><?php echo '</script'; ?>
><?php }
}
