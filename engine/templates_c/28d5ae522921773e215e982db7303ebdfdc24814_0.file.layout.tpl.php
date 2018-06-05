<?php
/* Smarty version 3.1.30, created on 2018-01-12 14:15:02
  from "/mnt/c/webroot/tresor-pyrene.dev/_templates/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a58b4d6815f72_92619748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d5ae522921773e215e982db7303ebdfdc24814' => 
    array (
      0 => '/mnt/c/webroot/tresor-pyrene.dev/_templates/layout.tpl',
      1 => 1515406026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a58b4d6815f72_92619748 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['app']->value->framework()->request()->getRoute()->renderMode() == "page") {?>
<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta charset="utf-8" />
		<link href="/favicon.ico" rel="icon" type="image/x-icon" />
		<title><?php echo $_smarty_tpl->tpl_vars['site']->value->title;?>
</title>

		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['site']->value->description;?>
" />
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['site']->value->keywords;?>
" />

		<!-- Insertion des CSS //-->
		<?php if ($_smarty_tpl->tpl_vars['app']->value->framework()->assets()->css() != null) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['app']->value->framework()->assets()->css(), 'css');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
?>
				<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value->get();?>
" rel="stylesheet" />
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<?php }?>
	</head>

	<body>

		<div >

			
			<div id="main-menu-wrapper" class="row">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value->regionMapper(), 'templates', false, 'region');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['region']->value => $_smarty_tpl->tpl_vars['templates']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['region']->value == "_main_menu") {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
							<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>


			<main id="main-content" class="row main">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value->regionMapper(), 'templates', false, 'region');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['region']->value => $_smarty_tpl->tpl_vars['templates']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['region']->value == "_main") {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
							<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
if ($_smarty_tpl->tpl_vars['app']->value->framework()->request()->getRoute()->renderMode() == "page") {?>
			</main>

			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['response']->value->regionMapper(), 'templates', false, 'region');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['region']->value => $_smarty_tpl->tpl_vars['templates']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['region']->value == "_main_footer") {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
						<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


		</div>

		<!-- Insertion des ressources javascript //-->
		<?php if ($_smarty_tpl->tpl_vars['app']->value->framework()->request()->getRoute()->renderMode() == "page") {?>
			<?php if ($_smarty_tpl->tpl_vars['app']->value->framework()->assets()->javascript() != null) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['app']->value->framework()->assets()->javascript(), 'javascript');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['javascript']->value) {
?>
					<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value->get();?>
" charset="<?php echo $_smarty_tpl->tpl_vars['javascript']->value->charset();?>
"><?php echo '</script'; ?>
>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			<?php }?>
		<?php }?>
	</body>
</html>
<?php }
}
}
