<?php
/* Smarty version 5.4.3, created on 2025-12-11 16:42:52
  from 'file:/opt/lampp/htdocs/public_html/templates/default/modules/projects/show.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_693ae67cb8dd31_51985452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42b741fbfdec116e0d1fee9b2596e18a7105af9b' => 
    array (
      0 => '/opt/lampp/htdocs/public_html/templates/default/modules/projects/show.tpl',
      1 => 1765467400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_693ae67cb8dd31_51985452 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/public_html/templates/default/modules/projects';
?><section class="projects-section">
    <div class="container">
        <h2 class="section-title"><?php echo $_smarty_tpl->getValue('header_key_projects_partners');?>
</h2>
        <div class="projects-columns">
            <div class="projects-column">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('projects'), 'project', false, NULL, 'projects', array (
  'iteration' => true,
));
$foreach7DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('project')->value) {
$foreach7DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_projects']->value['iteration']++;
?>
                    <?php if (($_smarty_tpl->getValue('__smarty_foreach_projects')['iteration'] ?? null) <= 6) {?>
                        <article class="project-item">
                            <h3 class="project-client"><?php echo $_smarty_tpl->getValue('project')['client'];?>
</h3>
                            <div class="project-description"><?php echo $_smarty_tpl->getValue('project')['description'];?>
</div>
                        </article>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
            <div class="projects-column">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('projects'), 'project', false, NULL, 'projects', array (
  'iteration' => true,
));
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('project')->value) {
$foreach8DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_projects']->value['iteration']++;
?>
                    <?php if (($_smarty_tpl->getValue('__smarty_foreach_projects')['iteration'] ?? null) > 6) {?>
                        <article class="project-item">
                            <h3 class="project-client"><?php echo $_smarty_tpl->getValue('project')['client'];?>
</h3>
                            <div class="project-description"><?php echo $_smarty_tpl->getValue('project')['description'];?>
</div>
                        </article>
                    <?php }?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</section><?php }
}
