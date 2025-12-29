<!DOCTYPE html>
<html>
{include file="$TPL_PATH/header.tpl"}
<body {if $MODULE_PATH != 'index'}class="inpage"{/if}>

<div class="page">

    <div class="page__header">
        <div class="header">
            <div class="f sb ac content-wrapper">
                <a href="{$MAIN_URL}/" class="logo">
                    <img src="{$TPL_URL}/assets/images/new_sintegra_logo.png"/>
                </a>

                {include file="$TPL_PATH/menu.tpl"}

                <div class="headerm">
                    <a href="#menu"><span></span></a>
                </div>

                <a href="tel:{$mainPage.tel}" class="tela">
                    <i class="fas fa-phone-alt"></i><span>{$mainPage.tel}</span>
                </a>
            </div>
        </div>
    </div>



    <main class="page__content">

        <div class="floating-contacts">
            <ul class="floating-contacts__list">
                <li class="floating-contacts__item">
                    <a href="tel:{$mainPage.tel}" class="floating-contacts__link" title="Позвонить">
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
                       href="https://api.whatsapp.com/send?phone={$mainPage.tel}&text=Здравствуйте, у меня возник вопрос. Могу получить консультацию?"
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

        {include file="$TPL_PATH/scripts.tpl"}

        {include file="$TPL_PATH/modules/{$MODULE_PATH}/{$MODULE_ACT}.tpl"}

    </main>

    <footer class="page__footer">
        {include file="$TPL_PATH/footer.tpl"}
    </footer>

</div>

</body>
</html>
