<?php
/* Smarty version 3.1.29, created on 2017-12-21 14:58:48
  from "/opt/lampp/htdocs/pyrene/_templates/layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a3bbe1822d8a0_89386532',
  'file_dependency' => 
  array (
    'a3eb534ea1e8ab7e15e1a42117705782b15d7ce1' => 
    array (
      0 => '/opt/lampp/htdocs/pyrene/_templates/layout.tpl',
      1 => 1513864725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3bbe1822d8a0_89386532 ($_smarty_tpl) {
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
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<?php if ($_smarty_tpl->tpl_vars['app']->value->framework()->assets()->css() != null) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['app']->value->framework()->assets()->css();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_css_0_saved_item = isset($_smarty_tpl->tpl_vars['css']) ? $_smarty_tpl->tpl_vars['css'] : false;
$_smarty_tpl->tpl_vars['css'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['css']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
$__foreach_css_0_saved_local_item = $_smarty_tpl->tpl_vars['css'];
?>
				<link href="<?php echo $_smarty_tpl->tpl_vars['css']->value->get();?>
" rel="stylesheet" />
			<?php
$_smarty_tpl->tpl_vars['css'] = $__foreach_css_0_saved_local_item;
}
if ($__foreach_css_0_saved_item) {
$_smarty_tpl->tpl_vars['css'] = $__foreach_css_0_saved_item;
}
?>
		<?php }?>
	</head>

	<body>

		<div >

			
			<div id="main-menu-wrapper" class="row">
				<?php
$_from = $_smarty_tpl->tpl_vars['response']->value->regionMapper();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_templates_1_saved_item = isset($_smarty_tpl->tpl_vars['templates']) ? $_smarty_tpl->tpl_vars['templates'] : false;
$__foreach_templates_1_saved_key = isset($_smarty_tpl->tpl_vars['region']) ? $_smarty_tpl->tpl_vars['region'] : false;
$_smarty_tpl->tpl_vars['templates'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['region'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['templates']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['region']->value => $_smarty_tpl->tpl_vars['templates']->value) {
$_smarty_tpl->tpl_vars['templates']->_loop = true;
$__foreach_templates_1_saved_local_item = $_smarty_tpl->tpl_vars['templates'];
?>
					<?php if ($_smarty_tpl->tpl_vars['region']->value == "_main_menu") {?>
						<?php
$_from = $_smarty_tpl->tpl_vars['templates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_template_2_saved_item = isset($_smarty_tpl->tpl_vars['template']) ? $_smarty_tpl->tpl_vars['template'] : false;
$_smarty_tpl->tpl_vars['template'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['template']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
$__foreach_template_2_saved_local_item = $_smarty_tpl->tpl_vars['template'];
?>
							<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

						<?php
$_smarty_tpl->tpl_vars['template'] = $__foreach_template_2_saved_local_item;
}
if ($__foreach_template_2_saved_item) {
$_smarty_tpl->tpl_vars['template'] = $__foreach_template_2_saved_item;
}
?>
					<?php }?>
				<?php
$_smarty_tpl->tpl_vars['templates'] = $__foreach_templates_1_saved_local_item;
}
if ($__foreach_templates_1_saved_item) {
$_smarty_tpl->tpl_vars['templates'] = $__foreach_templates_1_saved_item;
}
if ($__foreach_templates_1_saved_key) {
$_smarty_tpl->tpl_vars['region'] = $__foreach_templates_1_saved_key;
}
?>
			</div>


			<main id="main-content" class="row main">
				<?php
$_from = $_smarty_tpl->tpl_vars['response']->value->regionMapper();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_templates_3_saved_item = isset($_smarty_tpl->tpl_vars['templates']) ? $_smarty_tpl->tpl_vars['templates'] : false;
$__foreach_templates_3_saved_key = isset($_smarty_tpl->tpl_vars['region']) ? $_smarty_tpl->tpl_vars['region'] : false;
$_smarty_tpl->tpl_vars['templates'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['region'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['templates']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['region']->value => $_smarty_tpl->tpl_vars['templates']->value) {
$_smarty_tpl->tpl_vars['templates']->_loop = true;
$__foreach_templates_3_saved_local_item = $_smarty_tpl->tpl_vars['templates'];
?>
					<?php if ($_smarty_tpl->tpl_vars['region']->value == "_main") {?>
						<?php
$_from = $_smarty_tpl->tpl_vars['templates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_template_4_saved_item = isset($_smarty_tpl->tpl_vars['template']) ? $_smarty_tpl->tpl_vars['template'] : false;
$_smarty_tpl->tpl_vars['template'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['template']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
$__foreach_template_4_saved_local_item = $_smarty_tpl->tpl_vars['template'];
?>
							<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

						<?php
$_smarty_tpl->tpl_vars['template'] = $__foreach_template_4_saved_local_item;
}
if ($__foreach_template_4_saved_item) {
$_smarty_tpl->tpl_vars['template'] = $__foreach_template_4_saved_item;
}
?>
					<?php }?>
				<?php
$_smarty_tpl->tpl_vars['templates'] = $__foreach_templates_3_saved_local_item;
}
if ($__foreach_templates_3_saved_item) {
$_smarty_tpl->tpl_vars['templates'] = $__foreach_templates_3_saved_item;
}
if ($__foreach_templates_3_saved_key) {
$_smarty_tpl->tpl_vars['region'] = $__foreach_templates_3_saved_key;
}
}
if ($_smarty_tpl->tpl_vars['app']->value->framework()->request()->getRoute()->renderMode() == "page") {?>
			</main>

			
			<?php
$_from = $_smarty_tpl->tpl_vars['response']->value->regionMapper();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_templates_5_saved_item = isset($_smarty_tpl->tpl_vars['templates']) ? $_smarty_tpl->tpl_vars['templates'] : false;
$__foreach_templates_5_saved_key = isset($_smarty_tpl->tpl_vars['region']) ? $_smarty_tpl->tpl_vars['region'] : false;
$_smarty_tpl->tpl_vars['templates'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['region'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['templates']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['region']->value => $_smarty_tpl->tpl_vars['templates']->value) {
$_smarty_tpl->tpl_vars['templates']->_loop = true;
$__foreach_templates_5_saved_local_item = $_smarty_tpl->tpl_vars['templates'];
?>
				<?php if ($_smarty_tpl->tpl_vars['region']->value == "_main_footer") {?>
					<?php
$_from = $_smarty_tpl->tpl_vars['templates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_template_6_saved_item = isset($_smarty_tpl->tpl_vars['template']) ? $_smarty_tpl->tpl_vars['template'] : false;
$_smarty_tpl->tpl_vars['template'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['template']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->_loop = true;
$__foreach_template_6_saved_local_item = $_smarty_tpl->tpl_vars['template'];
?>
						<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					<?php
$_smarty_tpl->tpl_vars['template'] = $__foreach_template_6_saved_local_item;
}
if ($__foreach_template_6_saved_item) {
$_smarty_tpl->tpl_vars['template'] = $__foreach_template_6_saved_item;
}
?>
				<?php }?>
			<?php
$_smarty_tpl->tpl_vars['templates'] = $__foreach_templates_5_saved_local_item;
}
if ($__foreach_templates_5_saved_item) {
$_smarty_tpl->tpl_vars['templates'] = $__foreach_templates_5_saved_item;
}
if ($__foreach_templates_5_saved_key) {
$_smarty_tpl->tpl_vars['region'] = $__foreach_templates_5_saved_key;
}
?>

		</div>

		<!-- Insertion des ressources javascript //-->
		<?php if ($_smarty_tpl->tpl_vars['app']->value->framework()->request()->getRoute()->renderMode() == "page") {?>
			<?php if ($_smarty_tpl->tpl_vars['app']->value->framework()->assets()->javascript() != null) {?>
				<?php
$_from = $_smarty_tpl->tpl_vars['app']->value->framework()->assets()->javascript();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_javascript_7_saved_item = isset($_smarty_tpl->tpl_vars['javascript']) ? $_smarty_tpl->tpl_vars['javascript'] : false;
$_smarty_tpl->tpl_vars['javascript'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['javascript']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['javascript']->value) {
$_smarty_tpl->tpl_vars['javascript']->_loop = true;
$__foreach_javascript_7_saved_local_item = $_smarty_tpl->tpl_vars['javascript'];
?>
					<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['javascript']->value->get();?>
" charset="<?php echo $_smarty_tpl->tpl_vars['javascript']->value->charset();?>
"><?php echo '</script'; ?>
>
				<?php
$_smarty_tpl->tpl_vars['javascript'] = $__foreach_javascript_7_saved_local_item;
}
if ($__foreach_javascript_7_saved_item) {
$_smarty_tpl->tpl_vars['javascript'] = $__foreach_javascript_7_saved_item;
}
?>
			<?php }?>
		<?php }?>
	</body>
</html>
<?php }
}
}
