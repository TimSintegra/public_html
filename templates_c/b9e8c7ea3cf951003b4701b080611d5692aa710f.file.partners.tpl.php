<?php /* Smarty version Smarty-3.1.12, created on 2022-03-25 07:07:50
         compiled from "/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/modules/projects/partners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38513593623d4016cdac03-33594300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e8c7ea3cf951003b4701b080611d5692aa710f' => 
    array (
      0 => '/var/www/cl273480/data/www/sintegra-nk.ru/templates/default/modules/projects/partners.tpl',
      1 => 1648132448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38513593623d4016cdac03-33594300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleTitle' => 0,
    'pageSettings' => 0,
    'allObjects' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_623d4016f18013_58068997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_623d4016f18013_58068997')) {function content_623d4016f18013_58068997($_smarty_tpl) {?><div class="cntnr">
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
                        <div class="red_sp spincrement"><?php echo $_smarty_tpl->tpl_vars['pageSettings']->value['count'];?>
</div>
                    </div>
                </div>
                <div class="w10"><h2><?php echo $_smarty_tpl->tpl_vars['pageSettings']->value['title'];?>
</h2><span><?php echo $_smarty_tpl->tpl_vars['pageSettings']->value['main_text'];?>
</span>
                </div>
            </div>
        </div>

        <div class="f sb content-wrapper">
            <?php if (count($_smarty_tpl->tpl_vars['allObjects']->value)!=0){?>
            <ul class="project">
                <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allObjects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
$_smarty_tpl->tpl_vars['o']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->value = $_smarty_tpl->tpl_vars['o']->key;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['allObjects']->value[$_smarty_tpl->tpl_vars['p']->value]['url'];?>
">
                        <div class="imgcon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['allObjects']->value[$_smarty_tpl->tpl_vars['p']->value]['image'];?>
"/>
                        </div>
                        <div class="textbor">
                            <span class="mainspan"><?php echo $_smarty_tpl->tpl_vars['allObjects']->value[$_smarty_tpl->tpl_vars['p']->value]['title'];?>
</span>
                            <i class="slide_border"><span></span></i>
                            <span class="subspan"><?php echo $_smarty_tpl->tpl_vars['allObjects']->value[$_smarty_tpl->tpl_vars['p']->value]['short_text'];?>
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