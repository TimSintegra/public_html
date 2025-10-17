<?php /* Smarty version Smarty-3.1.12, created on 2023-01-10 10:15:24
         compiled from "/home/c/cu11541/public_html/templates/default/scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40404587963bd108c5f7290-68249369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4ca017e0a2c4683a607bf591f44cf20698b8a66' => 
    array (
      0 => '/home/c/cu11541/public_html/templates/default/scripts.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40404587963bd108c5f7290-68249369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TPL_URL' => 0,
    'MODULE_PATH' => 0,
    'moduleShema' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_63bd108c5ff7f1_50993777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63bd108c5ff7f1_50993777')) {function content_63bd108c5ff7f1_50993777($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/eff.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery-3.1.1.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.spincrement.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.sticky.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/flexmenu.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/materialize.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/owl.carousel.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.fancybox.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.nicescroll.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/jquery.liTextLength.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/mmenu.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/js/my.js"></script>
<?php if ($_smarty_tpl->tpl_vars['MODULE_PATH']->value=='contacts'){?>
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<script>
    var main_url= '';
    $(document).ready(function() {
        ymaps.ready(init);
        function init () {
            var myMap = new ymaps.Map("map", {
                    center: [<?php echo $_smarty_tpl->tpl_vars['moduleShema']->value;?>
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
                .add(new ymaps.Placemark([<?php echo $_smarty_tpl->tpl_vars['moduleShema']->value;?>
], {
                    balloonContent: 'СИНТЕГРА'
                }, {
                    iconLayout: 'default#image',
                    iconImageHref: main_url + '<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/images/map_logo.png',
                    iconImageSize: [120, 140],
                    iconImageOffset: [-60, -110]


                }));

            myMap.behaviors.disable('scrollZoom');

        }});
</script>

<?php }?><?php }} ?>