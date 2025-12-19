<?php
/* Smarty version 5.4.3, created on 2025-12-19 13:10:30
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/equipment/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_694540b6ab26d5_52861918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6915051ace8cc01363448b104bf9e6df1c850b3b' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/equipment/show.tpl',
      1 => 1766146089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_694540b6ab26d5_52861918 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/equipment';
?><section class="equip-block">
    <div class="container equip-block__inner">
        <div class="equip-block__text">
            <h1 class="equip-title"><?php echo $_smarty_tpl->getValue('equip1_title');?>
</h1>
            <p class="equip-lead"><?php echo $_smarty_tpl->getValue('equip1_lead');?>
</p>
            <p class="equip-text"><?php echo $_smarty_tpl->getValue('equip1_text');?>
</p>
        </div>

        <div class="equip-block__image">
            <div class="equip-photo">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/<?php echo $_smarty_tpl->getValue('equip1_image');?>
" alt="<?php echo $_smarty_tpl->getValue('equip1_title');?>
" loading="lazy">
                <span class="equip-photo__label"><?php echo $_smarty_tpl->getValue('equip1_title');?>
</span>
            </div>
        </div>
    </div>
</section>

<section class="equip-table">
    <div class="container">
        <h2 class="equip-table__title">Характеристики <?php echo $_smarty_tpl->getValue('equip1_title');?>
</h2>
        <div class="equip-table__wrapper">
            <table class="equip-spec">
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('equip1_spec'), 'value', false, 'label');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('label')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach0DoElse = false;
?>
                        <tr>
                            <th><?php echo $_smarty_tpl->getValue('label');?>
</th>
                            <td><?php echo $_smarty_tpl->getValue('value');?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="equip-block">
    <div class="container equip-block__inner equip-block__inner--reverse">
        <div class="equip-block__text">
            <h2 class="equip-title"><?php echo $_smarty_tpl->getValue('equip2_title');?>
</h2>
            <p class="equip-lead"><?php echo $_smarty_tpl->getValue('equip2_lead');?>
</p>
            <p class="equip-text"><?php echo $_smarty_tpl->getValue('equip2_text');?>
</p>
        </div>

        <div class="equip-block__image">
            <div class="equip-photo">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/<?php echo $_smarty_tpl->getValue('equip2_image');?>
" alt="<?php echo $_smarty_tpl->getValue('equip2_title');?>
" loading="lazy">
                <span class="equip-photo__label"><?php echo $_smarty_tpl->getValue('equip2_title');?>
</span>
            </div>
        </div>
    </div>
</section>

<section class="equip-table">
    <div class="container">
        <h2 class="equip-table__title">Характеристики <?php echo $_smarty_tpl->getValue('equip2_title');?>
</h2>
        <div class="equip-table__wrapper">
            <table class="equip-spec">
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('equip2_spec'), 'value', false, 'label');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('label')->value => $_smarty_tpl->getVariable('value')->value) {
$foreach1DoElse = false;
?>
                        <tr>
                            <th><?php echo $_smarty_tpl->getValue('label');?>
</th>
                            <td><?php echo $_smarty_tpl->getValue('value');?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php }
}
