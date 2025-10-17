<?php /* Smarty version Smarty-3.1.12, created on 2023-01-12 07:55:20
         compiled from "/home/c/cu11541/public_html/templates/default/modules/projects/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201667797663bf92b8136522-61403377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebbdb6846c0a6b3311eabf2007b1cff714a97a63' => 
    array (
      0 => '/home/c/cu11541/public_html/templates/default/modules/projects/show.tpl',
      1 => 1673277578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201667797663bf92b8136522-61403377',
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
  'unifunc' => 'content_63bf92b8171b15_99338585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63bf92b8171b15_99338585')) {function content_63bf92b8171b15_99338585($_smarty_tpl) {?><div class="cntnr">
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