<?php /* Smarty version 2.6.25, created on 2015-04-02 09:03:50
         compiled from /home/honeyflow/www/forum/applications/dashboard/views/popup.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', '/home/honeyflow/www/forum/applications/dashboard/views/popup.master.tpl', 4, false),array('function', 'event', '/home/honeyflow/www/forum/applications/dashboard/views/popup.master.tpl', 9, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
	<?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

</head>
<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="PopupPage <?php echo $this->_tpl_vars['BodyClass']; ?>
">
<div id="Content"><?php echo smarty_function_asset(array('name' => 'Content'), $this);?>
</div>
<?php echo smarty_function_asset(array('name' => 'Foot'), $this);?>

<?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>

</body>
</html>