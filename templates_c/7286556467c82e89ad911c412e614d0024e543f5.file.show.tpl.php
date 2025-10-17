<?php /* Smarty version Smarty-3.1.12, created on 2024-01-28 14:29:40
         compiled from "/var/www/s-nk.su/public_html/templates/default/modules/news/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100538673665b63aa4aedf80-01059456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7286556467c82e89ad911c412e614d0024e543f5' => 
    array (
      0 => '/var/www/s-nk.su/public_html/templates/default/modules/news/show.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100538673665b63aa4aedf80-01059456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleTitle' => 0,
    'showCats' => 0,
    'news' => 0,
    'n' => 0,
    'moduleInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_65b63aa4af40f2_64130475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65b63aa4af40f2_64130475')) {function content_65b63aa4af40f2_64130475($_smarty_tpl) {?><div class="cntnr">
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
        <?php if ($_smarty_tpl->tpl_vars['showCats']->value==1){?>
        <div class="content-wrapper">
            <?php if (count($_smarty_tpl->tpl_vars['news']->value)!=0){?>
            <div class="news_cnt">
                <?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
$_smarty_tpl->tpl_vars['w']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['w']->key;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['n']->value]['url'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['n']->value]['regdate'];?>
</span>
                    <p><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['n']->value]['title'];?>
</p>
                </a>
                <?php } ?>
            </div>
            <?php }?>
        </div>
        <?php }else{ ?>
            <div class="content-wrapper cnt">
                <?php echo $_smarty_tpl->tpl_vars['moduleInfo']->value['main_text'];?>

            </div>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>