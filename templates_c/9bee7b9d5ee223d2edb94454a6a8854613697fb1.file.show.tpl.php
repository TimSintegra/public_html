<?php /* Smarty version Smarty-3.1.12, created on 2024-01-28 14:29:42
         compiled from "/var/www/s-nk.su/public_html/templates/default/modules/certificates/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190432502465b63aa6086981-86628989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bee7b9d5ee223d2edb94454a6a8854613697fb1' => 
    array (
      0 => '/var/www/s-nk.su/public_html/templates/default/modules/certificates/show.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190432502465b63aa6086981-86628989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleTitle' => 0,
    'allPages' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_65b63aa608beb9_78547542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_65b63aa608beb9_78547542')) {function content_65b63aa608beb9_78547542($_smarty_tpl) {?><div class="cntnr">
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['image'];?>
" data-fancybox="images">
                        <div class="imgcon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['allPages']->value[$_smarty_tpl->tpl_vars['a']->value]['smallImage'];?>
" alt=""/>
                            <div class="ovv"><i class="fal fa-search"></i>
                            </div>
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