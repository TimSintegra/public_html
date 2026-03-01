<?php
/* Smarty version 5.4.3, created on 2026-03-01 04:02:01
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/contacts/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a3ac29ae6205_23024673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02170ae5305e4940344840c8a0f797436538f53' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/contacts/show.tpl',
      1 => 1772334059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a3ac29ae6205_23024673 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/contacts';
?><section class="contacts-section">
    <div class="container">
        <div class="contacts-header">
            <h1><?php echo $_smarty_tpl->getValue('contactsData')['title'];?>
</h1>
        </div>
        
        <div class="contacts-content">
            <!-- Левая колонка: Офисы -->
            <div class="offices-block">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('contactsData')['offices'], 'office');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('office')->value) {
$foreach0DoElse = false;
?>
                    <!-- 🔗 Карточка теперь ссылка -->
                    <a href="<?php echo $_smarty_tpl->getValue('office')['map_url'];?>
" target="_blank" rel="noopener noreferrer" class="office-card-link">
                        <div class="office-card">
                            <?php if ($_smarty_tpl->getValue('office')['icon']) {?>
                                <div class="office-icon"><?php echo $_smarty_tpl->getValue('office')['icon'];?>
</div>
                            <?php }?>
                            <h2><?php echo $_smarty_tpl->getValue('office')['title'];?>
</h2>
                            <p class="country"><?php echo $_smarty_tpl->getValue('office')['country'];?>
</p>
                            <?php if ($_smarty_tpl->getValue('office')['region']) {?>
                                <p class="region"><?php echo $_smarty_tpl->getValue('office')['region'];?>
</p>
                            <?php }?>
                            <p class="address"><?php echo $_smarty_tpl->getValue('office')['address'];?>
</p>
                            <p class="email">Email: <a href="mailto:<?php echo $_smarty_tpl->getValue('office')['email'];?>
" onclick="event.stopPropagation()"><?php echo $_smarty_tpl->getValue('office')['email'];?>
</a></p>
                        </div>
                    </a>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            
            <!-- Правая колонка: QR-код -->
            <div class="qr-block">
                <div class="qr-card">
                    <h3><?php echo $_smarty_tpl->getValue('contactsData')['qr']['title'];?>
</h3>
                    <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/<?php echo $_smarty_tpl->getValue('contactsData')['qr']['image'];?>
" alt="QR-код" class="qr-code">
                    <p class="qr-description"><?php echo $_smarty_tpl->getValue('contactsData')['qr']['description'];?>
</p>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}
