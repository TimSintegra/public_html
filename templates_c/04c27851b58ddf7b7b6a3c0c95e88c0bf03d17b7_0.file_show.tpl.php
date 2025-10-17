<?php
/* Smarty version 5.4.3, created on 2025-08-15 23:47:51
  from 'file:/var/www/s-nk.su/public_html//templates/default/modules/contacts/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_689f9cf7c9cb48_82153828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04c27851b58ddf7b7b6a3c0c95e88c0bf03d17b7' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/modules/contacts/show.tpl',
      1 => 1755271324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_689f9cf7c9cb48_82153828 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default/modules/contacts';
?><div class="cntnr">
    <div class="content">
        <div class="banner">
            <div class="ban_bg" id="ban_bg" style="background-position: calc(40% - -10.171875px);"></div>
            <div class="content-banner">
                <div class="content-wrapper">
                    <div class="f sb">
                        <div class="w6 f cntban">
                            <h1><?php echo $_smarty_tpl->getValue('moduleTitle');?>
</h1>
                            <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/crumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper f sb cnt">
            <div class="w6">
		<div class="image-container" style="display: flex;gap: 250px;">
		    <div class="contacts-main-qr-code">
		        <img src="/templates/default/images/contacts-main-qr-code.png">
		    </div>
		    <div class="contacts-image">
		        <img src="/templates/default/images/contacts-image.png">
			<h2>Офис в Москве:</h2>
                        <p>Российская Федерация</p>
                        <p>г. Москва, ул.Мотросская Тишина, 23с1,</p>
                        <p>помещение XXVI, ком.1</p>
                        <p>Email: <a href="mailto:office@s-nk.su">office@s-nk.su</a></p>
                        <h2>Офис и производственная база в Нижнекамске:</h2>
                        <p>Российская Федерация</p>
                        <p>Республика Татарстан</p>
                        <p>г. Нижнекамск, БСИ, ул. Заводская 3 В</p>
                        <p>Email: <a href="mailto:info@s-nk.su">info@s-nk.su</a></p>
		    </div>
		</div>
                <a href="https://goo.gl/maps/vqWVCgFxGjC6wiAYA" class="mbtn bbtn"><span>Схема проезда</span><i
                            class="fal fa-long-arrow-right"></i></a>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div>
<?php }
}
