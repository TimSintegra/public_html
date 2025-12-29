<?php
/* Smarty version 5.4.3, created on 2025-12-29 23:13:52
  from 'file:/opt/lampp/htdocs/public_html/templates/default/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6952fd20dc0dd7_14043468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bdd64f3de665a8c4bb7e6e7385d270323892682' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/layout.tpl',
      1 => 1767046428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6952fd20dc0dd7_14043468 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default';
?><!DOCTYPE html>
<html>
<?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<body <?php if ($_smarty_tpl->getValue('MODULE_PATH') != 'index') {?>class="inpage"<?php }?>>

<div class="page">

    <div class="page__header">
        <div class="header">
            <div class="f sb ac content-wrapper">
                <a href="<?php echo $_smarty_tpl->getValue('MAIN_URL');?>
/" class="logo">
                    <img src="<?php echo $_smarty_tpl->getValue('TPL_URL');?>
/assets/images/new_sintegra_logo.png"/>
                </a>

                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

                <div class="headerm">
                    <a href="#menu"><span></span></a>
                </div>

                <a href="tel:<?php echo $_smarty_tpl->getValue('mainPage')['tel'];?>
" class="tela">
                    <i class="fas fa-phone-alt"></i><span><?php echo $_smarty_tpl->getValue('mainPage')['tel'];?>
</span>
                </a>
            </div>
        </div>
    </div>



    <main class="page__content">

        <div class="floating-contacts">
            <ul class="floating-contacts__list">
                <li class="floating-contacts__item">
                    <a href="tel:<?php echo $_smarty_tpl->getValue('mainPage')['tel'];?>
" class="floating-contacts__link" title="Позвонить">
                        <span class="emoji-icon">📞</span>
                    </a>
                </li>
                <li class="floating-contacts__item">
                    <a data-fancybox="bell2"
                    data-src="#bell2"
                    href="javascript:;"
                    class="floating-contacts__link floating-contacts__link--mail"
                    title="Написать">
                        <span class="emoji-icon">📬</span>
                    </a>
                </li>


                <li class="floating-contacts__item">
                    <a target="_blank"
                       href="https://api.whatsapp.com/send?phone=<?php echo $_smarty_tpl->getValue('mainPage')['tel'];?>
&text=Здравствуйте, у меня возник вопрос. Могу получить консультацию?"
                       class="floating-contacts__link floating-contacts__link--whatsapp"
                       title="WhatsApp">
                        <span class="emoji-icon">💬</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Модальное окно обратной связи -->
        <div style="display: none;" id="bell2">
            <div class="callback-modal">
                <h2>Перезвонить Вам?</h2>
                <p>Оставьте Ваши данные и мы Вам перезвоним!</p>
                <form id="callbackForm">
                    <div class="form-group">
                        <input name="uname" id="uname" type="text" placeholder="Ваше Имя" required>
                    </div>
                    <div class="form-group">
                        <input name="tel" id="tel" type="tel" placeholder="Телефон" required>
                    </div>
                    <div class="form-group">
                        <input name="email" id="email" type="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" placeholder="Текст сообщения" rows="5"></textarea>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="submit-btn">Отправить заявку</button>
                    </div>
                    <div id="formMessage" class="form-message"></div>
                </form>
            </div>
        </div>

        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/modules/".((string)$_smarty_tpl->getValue('MODULE_PATH'))."/".((string)$_smarty_tpl->getValue('MODULE_ACT')).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    </main>

    <footer class="page__footer">
        <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('TPL_PATH'))."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </footer>

</div>

</body>
</html>
<?php }
}
