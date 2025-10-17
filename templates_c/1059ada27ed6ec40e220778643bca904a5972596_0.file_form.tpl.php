<?php
/* Smarty version 5.4.3, created on 2025-03-13 15:40:03
  from 'file:/var/www/s-nk.su/public_html//templates/default/form.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67d2d223c25a12_65431155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1059ada27ed6ec40e220778643bca904a5972596' => 
    array (
      0 => '/var/www/s-nk.su/public_html//templates/default/form.tpl',
      1 => 1673277576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67d2d223c25a12_65431155 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/s-nk.su/public_html/templates/default';
?><div class="grey center">
    <h1>Остались вопросы?</h1>
</div>
<div class="form_blck">
    <p>Мы будем рады ответить на вопросы и получить обратную связь о нашей работе. Вы можете задать вопрос по
        темам, связанным с деятельностью компании или ее подразделений. Благодаря вашим отзывам мы улучшаем
        качество нашей работы.</p>
    <form>
        <input name="uname2" id="uname2" type="text" class="styler" placeholder="Ваше Имя">
        <input name="email2" id="email2" type="email" class="styler" placeholder="Ваш e-mail">
        <textarea name="message2" id="message2" class="styler" placeholder="Введите текст" rows="6"></textarea>
        <button class="mbtn bbtn" id="submit2"><span>Отправить</span><i class="fal fa-long-arrow-right"></i></button>
    </form>
</div><?php }
}
