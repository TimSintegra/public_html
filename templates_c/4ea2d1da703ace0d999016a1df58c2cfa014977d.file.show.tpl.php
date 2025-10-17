<?php /* Smarty version Smarty-3.1.12, created on 2023-01-10 10:15:24
         compiled from "/home/c/cu11541/public_html/templates/default/modules/index/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36901986163bd108c5c9bc3-30643132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ea2d1da703ace0d999016a1df58c2cfa014977d' => 
    array (
      0 => '/home/c/cu11541/public_html/templates/default/modules/index/show.tpl',
      1 => 1673277577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36901986163bd108c5c9bc3-30643132',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mainPage' => 0,
    'advantages' => 0,
    'a' => 0,
    'projects' => 0,
    'p' => 0,
    'MAIN_URL' => 0,
    'serviceBlock' => 0,
    's' => 0,
    'certificates' => 0,
    'c' => 0,
    'news' => 0,
    'n' => 0,
    'partnersBlock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_63bd108c5e6f88_68493983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63bd108c5e6f88_68493983')) {function content_63bd108c5e6f88_68493983($_smarty_tpl) {?><div class="cntnr">
    <div class="content">
        <div class="banner">
            <div class="ban_bg" id="ban_bg"></div>
            <div class="ban_el" id="ban_el"></div>
            <div class="content-banner">
                <div class="content-wrapper">
                    <div class="f sb">
                        <div class="w6 f cntban">
                            <h1><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['main_title'];?>
</h1>
                            <p><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['main_text'];?>
</p>
                            <div class="f">
                                <div class="obj">
                                    <div class="red_sp spincrement"><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['main_count'];?>
</div>
                                    <span>Объектов</span>
                                </div>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['mainPage']->value['button_link'];?>
" class="mbtn bbtn"><span><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['button_text'];?>
</span><i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (count($_smarty_tpl->tpl_vars['advantages']->value)!=0){?>
        <div class="f sb content-wrapper">
            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['advantages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['a']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                <div class="pre">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['advantages']->value[$_smarty_tpl->tpl_vars['a']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['advantages']->value[$_smarty_tpl->tpl_vars['a']->value]['title'];?>
"/>
                    <span><?php echo $_smarty_tpl->tpl_vars['advantages']->value[$_smarty_tpl->tpl_vars['a']->value]['title'];?>
</span>
                </div>
            <?php } ?>
        </div>
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['projects']->value)!=0){?>
        <div class="grey center">
            <h1>Выполненные проекты</h1>
        </div>
        <div class="slider fullscreen animated fadeIn">
            <ul class="slides">
                <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->value = $_smarty_tpl->tpl_vars['r']->key;
?>
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->tpl_vars['p']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->tpl_vars['p']->value]['title'];?>
"/>
                    <!-- random image -->
                    <div class="box content-wrapper">
                        <div class="bor">
                            <div class="textbor">
                                <span class="mainspan animated fadeInDown"><?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->tpl_vars['p']->value]['title'];?>
</span>
                                <i class="slide_border animated efw"><span class="animated efw2"></span></i>
                                <span class="subspan animated fadeInDown"><?php echo $_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->tpl_vars['p']->value]['short_text'];?>
</span>
                            </div>
                        </div>
                    </div>
                    <div class="overlow" style="display: block; background-color:rgba(30,38,69,0.38);"></div>
                    <div class="grad"></div>
                </li>
                <?php } ?>
            </ul>
            <div class="navarrow content-wrapper">
                <div class="navslider">
                    <div class="arrowws">
                        <a class="nav_pred"><i class="fal fa-chevron-left"></i></a>
                        <a class="nav_next"><i class="fal fa-chevron-right"></i></a>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/projects.html" class="mbtn bbtn"><span>Все проекты</span><i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['serviceBlock']->value)!=0){?>
        <div class="center">
            <h1>Услуги</h1>
        </div>
        <div class="f sb content-wrapper">
            <ul class="uslugi">
                <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['serviceBlock']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['s']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['serviceBlock']->value[$_smarty_tpl->tpl_vars['s']->value]['url'];?>
">
                        <div class="imgcon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['serviceBlock']->value[$_smarty_tpl->tpl_vars['s']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['serviceBlock']->value[$_smarty_tpl->tpl_vars['s']->value]['title'];?>
"/>
                        </div>
                        <div class="texcon">
                            <i class="fal fa-long-arrow-right"></i>
                            <span><?php echo $_smarty_tpl->tpl_vars['serviceBlock']->value[$_smarty_tpl->tpl_vars['s']->value]['title'];?>
</span>
                        </div>
                    </a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="centerblock center">
            <a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/services.html" class="mbtn bbtn"><span>Все услуги</span><i class="fal fa-long-arrow-right"></i></a>
        </div>
        <?php }?>

        <div class="center">
            <h1><?php echo $_smarty_tpl->tpl_vars['mainPage']->value['about_title'];?>
</h1>
        </div>
        <div class="f sb content-wrapper">
            <div class="grid">
                <div class="grid-6 bg1">
                    <div class="cntspan">
                        <?php echo $_smarty_tpl->tpl_vars['mainPage']->value['about_text'];?>

                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['mainPage']->value['about_link'];?>
" class="link">Подробнее</a>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['certificates']->value)!=0){?>
                <div class="grid-2">
                    <h2>Лицензии и сертификаты</h2>
                    <div class="owl-carousel owl-theme" data-paroller-factor="-0.1"
                         data-paroller-type="foreground"
                         data-paroller-direction="horizontal">
                        <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['certificates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
 $_smarty_tpl->tpl_vars['c']->value = $_smarty_tpl->tpl_vars['e']->key;
?>
                        <div class="itm">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['c']->value]['image'];?>
" data-fancybox="images">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['c']->value]['smallImage'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['certificates']->value[$_smarty_tpl->tpl_vars['c']->value]['title'];?>
"/>
                                <div class="ovv"><i class="fal fa-search"></i></div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/certificates.html" class="link">Подробнее</a>
                </div>
                <?php }?>
                <?php if (count($_smarty_tpl->tpl_vars['news']->value)!=0){?>
                <div class="grid-2 bg2">
                    <h2>Новости</h2>
                    <div class="news_blck">
                        <?php  $_smarty_tpl->tpl_vars['w'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['w']->_loop = false;
 $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['w']->key => $_smarty_tpl->tpl_vars['w']->value){
$_smarty_tpl->tpl_vars['w']->_loop = true;
 $_smarty_tpl->tpl_vars['n']->value = $_smarty_tpl->tpl_vars['w']->key;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['n']->value]['url'];?>
">
                            <span><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['n']->value]['regdate'];?>
</span>
                            <p><?php echo $_smarty_tpl->tpl_vars['news']->value[$_smarty_tpl->tpl_vars['n']->value]['title'];?>
</p>
                        </a>
                        <?php } ?>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/news.html" class="link">Подробнее</a>
                </div>
                <?php }?>
            </div>
        </div>
        <?php if (count($_smarty_tpl->tpl_vars['partnersBlock']->value)!=0){?>
        <div class="center">
            <h1>Наши заказчики</h1>
        </div>
        <div class="content-wrapper">
            <div class="slider-wrapper">
                <div class="owl-carousel4 owl-theme" data-paroller-factor="-0.1" data-paroller-type="foreground"
                     data-paroller-direction="horizontal">
                    <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['partnersBlock']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                    <div class="itm"><img src="<?php echo $_smarty_tpl->tpl_vars['partnersBlock']->value[$_smarty_tpl->tpl_vars['p']->value]['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['partnersBlock']->value[$_smarty_tpl->tpl_vars['p']->value]['title'];?>
"/></div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div><?php }} ?>