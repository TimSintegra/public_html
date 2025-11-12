<?php
/* Smarty version 5.4.3, created on 2025-10-29 14:41:59
  from 'file:/opt/lampp/htdocs/public_html/templates/default/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_690219a7dcc6b7_26154729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bdd64f3de665a8c4bb7e6e7385d270323892682' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/layout.tpl',
      1 => 1760685620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_690219a7dcc6b7_26154729 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
?><!DOCTYPE html>
<html>
<?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<body <?php if ($_smarty_tpl->getValue('MODULE_PATH') != 'index') {?>class="inpage"<?php }?>>

<div class="headerm"><a href="#menu"><span></span></a></div>

<div class="header">
    <div class="f sb ac content-wrapper">
        <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/" class="logo"><img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/images/new_sintegra_logo.png"/></a>
        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        <a href="tel:<?php echo $_smarty_tpl->getValue('mainPage')['tel'];?>
" class="tela"><i class="fas fa-phone-alt"></i><span><?php echo $_smarty_tpl->getValue('mainPage')['tel'];?>
</span></a>
    </div>
</div>

<!-- 
<div class="cao">
    <ul class="us">
        <li><a href="tel:<?php echo $_smarty_tpl->getValue('mainPage')['tel'];?>
"><i class="far fa-phone-alt"></i></a></li>
        <li><a data-fancybox="bell2" data-src="#bell2" href="javascript:;"><i class="far fa-envelope"></i></a></li>
        <li><a target="_blank"
               href="https://api.whatsapp.com/send?phone=<?php echo $_smarty_tpl->getValue('mainPage')['tel'];?>
&text=Здравствуйте, у меня возник вопрос. Могу получить консультацию?"
               class="whts"><i class="fab fa-whatsapp"></i></a></li>
    </ul>
</div> 
-->

<?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/modules/".((string)$_smarty_tpl->getValue('MODULE_PATH'))."/".((string)$_smarty_tpl->getValue('MODULE_ACT')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

</body>
</html><?php }
}
