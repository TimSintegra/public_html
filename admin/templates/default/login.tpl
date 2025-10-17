{include file="$TPL_PATH/header.tpl"}
<body>
<div id="login_page">
<div id="login_logo">
    <a href="{$ADMIN_URL}/">
        <img src="{$TPL_URL}/images/sintegra_logo.png" alt="" />
    </a>
</div>
<div id="login_center">
    {include file="$TPL_PATH/modules/login/form.tpl"}
    {include file="$TPL_PATH/footer.tpl"}
</div>
</div>
</body>
</html>