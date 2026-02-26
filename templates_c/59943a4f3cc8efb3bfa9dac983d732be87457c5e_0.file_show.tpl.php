<?php
/* Smarty version 5.4.3, created on 2026-02-26 22:50:15
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/certificates/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a0c017e8f639_49501626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59943a4f3cc8efb3bfa9dac983d732be87457c5e' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/certificates/show.tpl',
      1 => 1772142590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a0c017e8f639_49501626 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/certificates';
?><section class="certificates-section">
    <div class="container">
        <h2 class="section-title"><?php echo $_smarty_tpl->getValue('header_result');?>
</h2>
        <h3 class="subsection-title"><?php echo $_smarty_tpl->getValue('header_certificates');?>
</h3>

        <div class="certificates-grid">
            <!-- 1 landscape фото (624x402) - широкое -->
            <div class="certificate-item certificate-item--wide">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/N4.png" alt="Certificate" loading="lazy">
            </div>
            
            <!-- 5 больших portrait фото (402x622) -->
            <div class="certificate-item certificate-item--large">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/N1.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--large">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/N2.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--large">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/N3.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--large">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/N5.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--large">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/N6.png" alt="Certificate" loading="lazy">
            </div>
            
            <!-- 8 маленьких portrait фото (328x506) -->
            <div class="certificate-item certificate-item--small">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/M1.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--small">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/M2.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--small">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/M3.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--small">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/M4.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--small">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/M5.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--small">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/M6.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--small">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/M7.png" alt="Certificate" loading="lazy">
            </div>
            <div class="certificate-item certificate-item--small">
                <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/certificates/M8.png" alt="Certificate" loading="lazy">
            </div>
        </div>
    </div>
</section><?php }
}
