<?php
/* Smarty version 5.4.3, created on 2026-03-01 04:25:27
  from 'file:/opt/lampp/htdocs/public_html/templates/default/layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_69a3b1a7cc1742_80950437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bdd64f3de665a8c4bb7e6e7385d270323892682' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/layout.tpl',
      1 => 1772335056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69a3b1a7cc1742_80950437 (\Smarty\Template $_smarty_tpl) {
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
                <form id="callbackForm" method="post">
                    <div class="form-group">
                        <input name="uname" id="uname" type="text"
                            placeholder="Ваше Имя"
                            required minlength="2" maxlength="50">
                    </div>

                    <div class="form-group">
                        <input name="tel" id="tel" type="tel"
                            placeholder="Телефон"
                            required>
                    </div>

                    <div class="form-group">
                        <input name="email" id="email" type="email"
                            placeholder="E-mail">
                    </div>

                    <div class="form-group">
                        <textarea name="message" id="message"
                                placeholder="Текст сообщения"
                                rows="5"
                                minlength="5"
                                maxlength="1000"></textarea>
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

    <?php if ($_smarty_tpl->getValue('MODULE_PATH') == 'index' && $_smarty_tpl->getValue('recruitmentBannerShow')) {?>
    <div class="recruitment-banner" id="recruitmentBanner">
        <div class="recruitment-banner__inner">
            <p class="recruitment-banner__text"><?php echo $_smarty_tpl->getValue('recruitmentBannerText');?>
</p>
            <a href="<?php echo $_smarty_tpl->getValue('recruitmentBannerDocUrl');?>
" target="_blank" rel="noopener" class="recruitment-banner__link">Требования к кандидату</a>
            <button type="button" class="recruitment-banner__close" id="recruitmentBannerClose" aria-label="Закрыть">×</button>
        </div>
    </div>
    <?php echo '<script'; ?>
>
    (function() {
        var banner = document.getElementById('recruitmentBanner');
        var btn = document.getElementById('recruitmentBannerClose');
        if (banner && btn) {
            var key = 'recruitmentBannerClosed';
            if (sessionStorage.getItem(key)) banner.classList.add('recruitment-banner--hidden');
            btn.addEventListener('click', function() {
                banner.classList.add('recruitment-banner--hidden');
                sessionStorage.setItem(key, '1');
            });
        }
    })();
    <?php echo '</script'; ?>
>
    <?php }?>

</div>

</body>
</html>
<?php }
}
