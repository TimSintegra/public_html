<?php /* Smarty version Smarty-3.1.12, created on 2023-01-10 10:19:36
         compiled from "/home/c/cu11541/public_html/templates/default/modules/contacts/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15995578363bd1188db5d53-88286861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab7c7907d146213be16ee890cd3a7ccea1ee6c16' => 
    array (
      0 => '/home/c/cu11541/public_html/templates/default/modules/contacts/show.tpl',
      1 => 1673277577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15995578363bd1188db5d53-88286861',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleTitle' => 0,
    'moduleTel' => 0,
    'moduleMail' => 0,
    'moduleAddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_63bd1188de8073_95263027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63bd1188de8073_95263027')) {function content_63bd1188de8073_95263027($_smarty_tpl) {?><div class="cntnr">
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

        <div class="content-wrapper f sb cnt">
            <div class="w6">
                <h2>Адрес и контакты</h2>
                <p><b>Номер телефона:</b></p>
                <a href="tel:<?php echo $_smarty_tpl->tpl_vars['moduleTel']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['moduleTel']->value;?>
</a>
                <p><b>Адрес электронной почты:</b></p>
                <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['moduleMail']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['moduleMail']->value;?>
</a>
                <p><b>Адрес офиса:</b></p>
                <p><?php echo $_smarty_tpl->tpl_vars['moduleAddress']->value;?>
</p>
                <a href="https://goo.gl/maps/vqWVCgFxGjC6wiAYA" class="mbtn bbtn"><span>Схема проезда</span><i
                            class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="w6">
                <div class="ymap2">
                    <div id="map"></div>
                </div>
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TPL_PATH']->value)."/form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>