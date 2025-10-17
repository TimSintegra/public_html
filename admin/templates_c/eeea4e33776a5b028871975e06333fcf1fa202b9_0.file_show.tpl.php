<?php
/* Smarty version 5.4.3, created on 2025-03-16 00:38:56
  from 'file:/var/www/s-nk.su/public_html//admin/templates/default/blocks/pages/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d5f37028f6c7_02321186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeea4e33776a5b028871975e06333fcf1fa202b9' => 
    array (
      0 => '/var/www/s-nk.su/public_html//admin/templates/default/blocks/pages/show.tpl',
      1 => 1673277428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d5f37028f6c7_02321186 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/admin/templates/default/blocks/pages';
?><div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pages/add/" class="linktheme dobserv">Добавить страницу</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pages/" class="linktheme listserv">Список страниц</a>
</div>
<div class="leftbuttons">
    <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pagescat/" class="linktheme dobrazdel">Список категорий</a>
</div>
<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('blockexpSpecs')) != 0) {?>
    <div class="menu">
        <ul id="my-menu" class="sample-menu">
            <li><a href="#">Категории</a>
                <ul>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('blockexpSpecs'), 't', false, 's');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('s')->value => $_smarty_tpl->getVariable('t')->value) {
$foreach0DoElse = false;
?>
                        <li>
                            <a href="<?php echo $_smarty_tpl->getValue('ADMIN_URL');?>
/pages/show/<?php echo $_smarty_tpl->getValue('blockexpSpecs')[$_smarty_tpl->getValue('s')]['id'];?>
/">
                                <?php echo $_smarty_tpl->getValue('blockexpSpecs')[$_smarty_tpl->getValue('s')]['title'];?>

                            </a>
                        </li>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </ul>
            </li>
        </ul>
    </div>
<?php }
}
}
