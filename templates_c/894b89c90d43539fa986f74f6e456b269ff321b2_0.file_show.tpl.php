<?php
/* Smarty version 5.4.3, created on 2026-02-28 12:26:49
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/main-directions/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a2d0f9f247c5_27372746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '894b89c90d43539fa986f74f6e456b269ff321b2' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/main-directions/show.tpl',
      1 => 1772277739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a2d0f9f247c5_27372746 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/main-directions';
?><section class="directions-section">
    <div class="container">
        <div class="directions-header">
            <h2><?php echo $_smarty_tpl->getValue('directionsData')['title'];?>
</h2>
        </div>

        <div class="directions-list">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('directionsData')['items'], 'item');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach5DoElse = false;
?>
                <article class="directions-item">
                    <?php if ($_smarty_tpl->getValue('item')['icon']) {?>
                        <div class="directions-icon">
                            <?php echo $_smarty_tpl->getValue('item')['icon'];?>

                        </div>
                    <?php }?>
                    <p class="directions-text">
                        <?php echo $_smarty_tpl->getValue('item')['text'];?>

                    </p>
                </article>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>
<?php }
}
