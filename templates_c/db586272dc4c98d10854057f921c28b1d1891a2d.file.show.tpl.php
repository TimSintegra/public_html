<?php /* Smarty version Smarty-3.1.12, created on 2024-01-28 14:29:42
         compiled from "/var/www/s-nk.su/public_html/templates/default/modules/servicescats/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92269936365b63aa6097653-12403008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db586272dc4c98d10854057f921c28b1d1891a2d' => 
    array (
      0 => '/var/www/s-nk.su/public_html/templates/default/modules/servicescats/show.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92269936365b63aa6097653-12403008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleTitle' => 0,
    'mainPage' => 0,
    'moduleContent' => 0,
    'allPages' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_65b63aa609db00_48754228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65b63aa609db00_48754228')) {function content_65b63aa609db00_48754228($_smarty_tpl) {?><div class="cntnr">
    <div class="content">
        <div class="banner">
            <div class="ban_bg" id="ban_bg"></div>
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
            <div class="f sb prj">
                <div class="w2">
                    <div class="mapbg">
                        <div class="red_sp spincrement"><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['main_count'];?>
</div>
                    </div>
                </div>
                <div class="w10"><?php echo $_smarty_tpl->tpl_vars['moduleContent']->value;?>
</div>
            </div>
        </div>

        <div class="f sb content-wrapper">
            <?php if (count($_smarty_tpl->tpl_vars['allPages']->value)!=0){?>
            <ul class="uslugi">
                <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allPages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['a']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['url'];?>
">
                        <div class="imgcon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['title'];?>
"/>
                        </div>
                        <div class="texcon">
                            <i class="fal fa-long-arrow-right"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['title'];?>
</span>
                        </div>
                    </a>
                </li>
                <?php } ?>
            </ul>
            <?php }?>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>