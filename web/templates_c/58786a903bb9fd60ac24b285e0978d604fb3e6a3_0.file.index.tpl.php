<?php
/* Smarty version 3.1.30, created on 2023-03-09 10:00:38
  from "/var/www/html/web/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6409ae468b1d88_99701929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58786a903bb9fd60ac24b285e0978d604fb3e6a3' => 
    array (
      0 => '/var/www/html/web/templates/index.tpl',
      1 => 1678356037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6409ae468b1d88_99701929 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--TODO: Footer, menu-->
<?php $_smarty_tpl->_assignInScope('cssdir', "../web/css/");
$_smarty_tpl->_assignInScope('jsdir', "../web/js/");
$_smarty_tpl->_assignInScope('jquerycdn', "https://code.jquery.com/jquery-3.6.4.js");
$_smarty_tpl->_assignInScope('materialcss', "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css");
$_smarty_tpl->_assignInScope('materialicons', "https://fonts.googleapis.com/icon?family=Material+Icons");
$_smarty_tpl->_assignInScope('materialjs', "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js");
?>
<html>
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title>
  <!-- Jquery JavaScript -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jquerycdn']->value;?>
" crossorigin="anonymous"><?php echo '</script'; ?>
>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cssdir']->value;?>
base.css">
  <!-- js -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['jsdir']->value;?>
main.js"><?php echo '</script'; ?>
>

  <!-- Materialize CSS -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['materialcss']->value;?>
">
  <!-- Material Icons -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['materialicons']->value;?>
" rel="stylesheet">
  <!-- Materialize JavaScript -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['materialjs']->value;?>
"><?php echo '</script'; ?>
>

</head>

<body>
  <nav>
    <div class="nav-wrapper">
      <a href="?page=home" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="?page=home">Home</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="?page=home">Home</a></li>

  </ul>
  <div class="mainBody">
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

  </div>
  
</body>

</html><?php }
}
