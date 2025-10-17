<?php /* Smarty version Smarty-3.1.12, created on 2024-01-28 14:29:40
         compiled from "/var/www/s-nk.su/public_html/templates/default/modules/services/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180325925965b63aa47d41c3-19911641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad27258e083a70159173a22de4df3ce4cb65034' => 
    array (
      0 => '/var/www/s-nk.su/public_html/templates/default/modules/services/show.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180325925965b63aa47d41c3-19911641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleTitle' => 0,
    'moduleContent' => 0,
    'allPages' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_65b63aa47ec5f5_19015019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65b63aa47ec5f5_19015019')) {function content_65b63aa47ec5f5_19015019($_smarty_tpl) {?><div class="cntnr">
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

        <div class="content-wrapper cnt">
            <?php echo $_smarty_tpl->tpl_vars['moduleContent']->value;?>

        </div>

        <?php if (count($_smarty_tpl->tpl_vars['allPages']->value)!=0){?>
            <div class="center">
                <h1>Другие услуги</h1>
            </div>
            <div class="owl-carousel5 owl-theme" data-paroller-factor="-0.1" data-paroller-type="foreground"
             data-paroller-direction="horizontal">
                <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allPages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['a']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['url'];?>
" class="itm" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['image'];?>
);">
                        <div class="sph"><span><?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['title'];?>
</span></div>
                        <div class="overlow" style="display: block; background-color:rgba(30,38,69,0.38);"></div>
                        <div class="grad"></div>
                    </a>
                <?php } ?>
            </div>
        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>