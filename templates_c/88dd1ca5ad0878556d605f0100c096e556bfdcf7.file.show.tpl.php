<?php /* Smarty version Smarty-3.1.12, created on 2022-03-25 05:04:05
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/modules/partners/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1386237985623d231524a136-55855778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88dd1ca5ad0878556d605f0100c096e556bfdcf7' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/modules/partners/show.tpl',
      1 => 1648132447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1386237985623d231524a136-55855778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleTitle' => 0,
    'allPages' => 0,
    'a' => 0,
    'MAIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_623d2315294b30_41175039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623d2315294b30_41175039')) {function content_623d2315294b30_41175039($_smarty_tpl) {?><div class="cntnr">
    <div class="content">
        <div class="banner">
            <div class="ban_bg" id="ban_bg" style="background-position: calc(40% - -10.171875px);"></div>
            <div class="content-banner">
                <div class="content-wrapper">
                    <div class="f sb">
                        <div class="w6 f cntban">
                            <h1><?php echo $_smarty_tpl->tpl_vars['moduleTitle']->value;?>
</h1>
                            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/crumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <?php if (count($_smarty_tpl->tpl_vars['allPages']->value)!=0){?>
            <ul class="uni">
                <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allPages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['a']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                <li>
                    <div class="imgcon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['title'];?>
"/>
                    </div>
                    <div class="textbor">
                        <span class="mainspan"><?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['title'];?>
</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/projects/partners/<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['id'];?>
.html" class="mbtn bbtn"><span>Проекты</span><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </li>
                <?php } ?>
            </ul>
            <?php }?>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>