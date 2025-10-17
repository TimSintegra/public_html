<?php
/* Smarty version 5.4.3, created on 2025-10-17 09:52:28
  from 'file:/opt/lampp/htdocs/public_html//templates/default/scripts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_68f1f5bc8a3af3_03654213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fdd072640d99ef601d555123080b21fb654d368' => 
    array (
      0 => '/opt/lampp/htdocs/public_html//templates/default/scripts.tpl',
      1 => 1760687544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68f1f5bc8a3af3_03654213 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/eff.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery-3.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.spincrement.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.sticky.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/flexmenu.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/materialize.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/owl.carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.fancybox.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/jquery.liTextLength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/mmenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/js/my.js"><?php echo '</script'; ?>
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
