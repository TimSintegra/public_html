<?php
/* Smarty version 5.4.3, created on 2025-11-19 10:58:24
  from 'file:/opt/lampp/htdocs/public_html/templates/default/scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_691d94c0906771_60537396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28509e18307a3ba842c3805a9b58e14a4b36d94c' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/scripts.tpl',
      1 => 1763546252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691d94c0906771_60537396 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/eff.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/jquery-3.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/jquery.spincrement.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/jquery.sticky.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/flexmenu.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/materialize.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/owl.carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/jquery.fancybox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/jquery.liTextLength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/js/mmenu.js"><?php echo '</script'; ?>
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


<?php }
}
}
