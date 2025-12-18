<?php
/* Smarty version 5.4.3, created on 2025-12-18 18:38:11
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/scan/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69443c034e56d9_99370517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '941db48a8b1bcd8a08bc0c5c700fa21cbde96ca1' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/scan/show.tpl',
      1 => 1766079481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69443c034e56d9_99370517 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/scan';
?><section class="scan3d-hero">
    <div class="container scan3d-hero__inner">
        <div class="scan3d-hero__text">
            <h1 class="scan3d-title"><?php echo $_smarty_tpl->getValue('scan_title');?>
</h1>
            <p class="scan3d-lead"><?php echo $_smarty_tpl->getValue('scan_lead');?>
</p>
            <p class="scan3d-text"><?php echo $_smarty_tpl->getValue('scan_intro');?>
</p>
        </div>

        <div class="scan3d-hero__image">
            <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/<?php echo $_smarty_tpl->getValue('scan_image');?>
" alt="3D‑сканирование деталей" loading="lazy">
        </div>
    </div>
</section>

<section class="scan3d-spec">
    <div class="container">
        <h2 class="scan3d-subtitle"><?php echo $_smarty_tpl->getValue('scan_table')['header'][0];?>
</h2>

        <div class="scan3d-table-wrapper">
            <table class="scan3d-table">
                <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->getValue('scan_table')['header'][0];?>
</th>
                        <th><?php echo $_smarty_tpl->getValue('scan_table')['header'][1];?>
</th>
                        <th><?php echo $_smarty_tpl->getValue('scan_table')['header'][2];?>
</th>
                        <th><?php echo $_smarty_tpl->getValue('scan_table')['header'][3];?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('scan_table')['rows'], 'row');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('row')->value) {
$foreach0DoElse = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->getValue('row')['label'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('row')['L'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('row')['M'];?>
</td>
                            <td><?php echo $_smarty_tpl->getValue('row')['S'];?>
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

<section class="scan3d-blocks">
    <div class="container scan3d-blocks__inner">

        <div class="scan3d-card">
            <h2 class="scan3d-card__title"><?php echo $_smarty_tpl->getValue('scan_handheld')['title'];?>
</h2>
            <ul class="scan3d-list">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('scan_handheld')['items'], 'li');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('li')->value) {
$foreach1DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('li');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>

        <div class="scan3d-card">
            <h2 class="scan3d-card__title"><?php echo $_smarty_tpl->getValue('scan_l5')['title'];?>
</h2>
            <ul class="scan3d-list">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('scan_l5')['items'], 'li');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('li')->value) {
$foreach2DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('li');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>

    </div>
</section>
<?php }
}
