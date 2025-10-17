<!DOCTYPE html>
<html>
{include file="$TPL_PATH/header.tpl"}
<body {if $MODULE_PATH != 'index'}class="inpage"{/if}>

<div class="headerm"><a href="#menu"><span></span></a></div>

<div class="header">
    <div class="f sb ac content-wrapper">
        <a href="{$MAIN_URL}/" class="logo"><img src="{$TPL_URL}/images/new_sintegra_logo.png"/></a>
        {include file="$TPL_PATH/menu.tpl"}
        <a href="tel:{$mainPage.tel}" class="tela"><i class="fas fa-phone-alt"></i><span>{$mainPage.tel}</span></a>
    </div>
</div>

<!-- 
<div class="cao">
    <ul class="us">
        <li><a href="tel:{$mainPage.tel}"><i class="far fa-phone-alt"></i></a></li>
        <li><a data-fancybox="bell2" data-src="#bell2" href="javascript:;"><i class="far fa-envelope"></i></a></li>
        <li><a target="_blank"
               href="https://api.whatsapp.com/send?phone={$mainPage.tel}&text=Здравствуйте, у меня возник вопрос. Могу получить консультацию?"
               class="whts"><i class="fab fa-whatsapp"></i></a></li>
    </ul>
</div> 
-->

{include file="$TPL_PATH/modules/{$MODULE_PATH}/{$MODULE_ACT}.tpl"}

{include file="$TPL_PATH/footer.tpl"}

</body>
</html>