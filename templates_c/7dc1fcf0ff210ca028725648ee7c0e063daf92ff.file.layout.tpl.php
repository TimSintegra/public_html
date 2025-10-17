<?php /* Smarty version Smarty-3.1.12, created on 2022-03-24 18:14:37
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1073848979623c8add3fc156-27014762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dc1fcf0ff210ca028725648ee7c0e063daf92ff' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/layout.tpl',
      1 => 1648131761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1073848979623c8add3fc156-27014762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_PATH' => 0,
    'mainPage' => 0,
    'MAIN_URL' => 0,
    'TPL_URL' => 0,
    'MODULE_ACT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_623c8add42fa86_42683470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623c8add42fa86_42683470')) {function content_623c8add42fa86_42683470($_smarty_tpl) {?><!DOCTYPE html>
<html>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body <?php if ($_smarty_tpl->tpl_vars['MODULE_PATH']->value!='index'){?>class="inpage"<?php }?>>

<div class="cao">
    <ul class="us">
        <li><a href="tel:<?php echo $_smarty_tpl->tpl_vars['mainPage']->value['tel'];?>
"><i class="far fa-phone-alt"></i></a></li>
        <li><a data-fancybox="bell2" data-src="#bell2" href="javascript:;"><i class="far fa-envelope"></i></a></li>
        <li><a target="_blank"
               href="https://api.whatsapp.com/send?phone=<?php echo $_smarty_tpl->tpl_vars['mainPage']->value['tel'];?>
&text=Здравствуйте, у меня возник вопрос. Могу получить консультацию?"
               class="whts"><i class="fab fa-whatsapp"></i></a></li>
    </ul>
</div>

<div class="headerm"><a href="#menu"><span></span></a></div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/mobile_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="header">
    <div class="f sb ac content-wrapper">
        <a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/images/sintegra_logo.png"/></a>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <a href="tel:<?php echo $_smarty_tpl->tpl_vars['mainPage']->value['tel'];?>
" class="tela"><i class="fas fa-phone-alt"></i><span><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['tel'];?>
</span></a>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/modules/".((string)$_smarty_tpl->tpl_vars['MODULE_PATH']->value)."/".((string)$_smarty_tpl->tpl_vars['MODULE_ACT']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>