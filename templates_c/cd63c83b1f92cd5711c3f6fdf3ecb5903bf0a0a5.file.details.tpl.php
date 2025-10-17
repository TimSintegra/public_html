<?php /* Smarty version Smarty-3.1.12, created on 2024-01-29 23:56:00
         compiled from "/var/www/s-nk.su/public_html/templates/default/modules/projects/details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161720421865b810e010d631-63450079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd63c83b1f92cd5711c3f6fdf3ecb5903bf0a0a5' => 
    array (
      0 => '/var/www/s-nk.su/public_html/templates/default/modules/projects/details.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161720421865b810e010d631-63450079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleImage' => 0,
    'moduleTitle' => 0,
    'moduleShortContent' => 0,
    'moduleContent' => 0,
    'moduleAllImages' => 0,
    'm' => 0,
    'allObjects' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_65b810e0123b29_70267440',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65b810e0123b29_70267440')) {function content_65b810e0123b29_70267440($_smarty_tpl) {?><div class="cntnr">
    <div class="content">
        <div class="banner prjct" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['moduleImage']->value;?>
);">
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
            <div class="overlow" style="display: block; background-color:rgba(30,38,69,0.38);"></div>
            <div class="grad"></div>
        </div>


        <div class="content-wrapper cnt">
            <?php echo $_smarty_tpl->tpl_vars['moduleShortContent']->value;?>


            <?php echo $_smarty_tpl->tpl_vars['moduleContent']->value;?>


            <?php if (count($_smarty_tpl->tpl_vars['moduleAllImages']->value)!=0){?>
            <div class="grid2 gfoto">
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['moduleAllImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                <div class="ftm span-col-<?php echo $_smarty_tpl->tpl_vars['moduleAllImages']->value[$_smarty_tpl->tpl_vars['m']->value]['col'];?>
 mb-<?php echo $_smarty_tpl->tpl_vars['moduleAllImages']->value[$_smarty_tpl->tpl_vars['m']->value]['mb'];?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['moduleAllImages']->value[$_smarty_tpl->tpl_vars['m']->value]['image'];?>
" data-fancybox="images">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['moduleAllImages']->value[$_smarty_tpl->tpl_vars['m']->value]['image'];?>
" alt="Image Project"/>
                    </a>
                </div>
                <?php } ?>
            </div>
            <?php }?>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['allObjects']->value)!=0){?>
        <div class="center">
            <h1>Другие проекты</h1>
        </div>
        <div class="owl-carousel5 owl-theme" data-paroller-factor="-0.1" data-paroller-type="foreground"
             data-paroller-direction="horizontal">
            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allObjects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['a']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['allObjects']->value[$_smarty_tpl->tpl_vars['a']->value]['url'];?>
" class="itm" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['allObjects']->value[$_smarty_tpl->tpl_vars['a']->value]['image'];?>
);">
                <div class="sph"><span><?php echo $_smarty_tpl->tpl_vars['allObjects']->value[$_smarty_tpl->tpl_vars['a']->value]['title'];?>
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