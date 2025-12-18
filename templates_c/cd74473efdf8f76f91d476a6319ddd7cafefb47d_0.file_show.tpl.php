<?php
/* Smarty version 5.4.3, created on 2025-12-18 22:44:53
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/reverse/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_694475d5753364_33564894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd74473efdf8f76f91d476a6319ddd7cafefb47d' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/reverse/show.tpl',
      1 => 1766094288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_694475d5753364_33564894 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/reverse';
?><section class="reverse-engineering">
    <div class="container">
        <div class="reverse-engineering__layout">
            <div class="reverse-engineering__content">
                <h1 class="reverse-engineering__title">
                    <?php echo $_smarty_tpl->getValue('reverse_title');?>

                </h1>

                <p class="reverse-engineering__lead">
                    <?php echo $_smarty_tpl->getValue('reverse_lead');?>

                </p>

                <div class="reverse-engineering__grid">
                    <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/scan.html" class="reverse-engineering__item">
                        <span class="reverse-engineering__item-title">
                            3D‑сканирование изделий и узлов
                        </span>
                    </a>

                    <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/model.html" class="reverse-engineering__item">
                        <span class="reverse-engineering__item-title">
                            3D‑моделирование по «облаку точек»
                        </span>
                    </a>

                    <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/dimension.html" class="reverse-engineering__item">
                        <span class="reverse-engineering__item-title">
                            Образмеривание и анализ отклонений
                        </span>
                    </a>

                    <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/reverseeng.html" class="reverse-engineering__item">
                        <span class="reverse-engineering__item-title">
                            Обратное проектирование (реверс‑инжиниринг)
                        </span>
                    </a>

                    <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/docs.html" class="reverse-engineering__item">
                        <span class="reverse-engineering__item-title">
                            Разработка конструкторской документации
                        </span>
                    </a>

                    <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/print.html" class="reverse-engineering__item">
                        <span class="reverse-engineering__item-title">
                            Подготовка моделей для 3D/5D‑печати и механообработки
                        </span>
                    </a>
                </div>

                <p class="reverse-engineering__text">
                    <?php echo $_smarty_tpl->getValue('reverse_text');?>

                </p>
            </div>
        </div>
    </div>
</section>
<?php }
}
