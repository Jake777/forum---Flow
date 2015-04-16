<?php /* Smarty version 2.6.25, created on 2015-04-02 05:47:37
         compiled from /home/honeyflow/www/forum/themes/minalla-yellow/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', '/home/honeyflow/www/forum/themes/minalla-yellow/views/default.master.tpl', 4, false),array('function', 'link', '/home/honeyflow/www/forum/themes/minalla-yellow/views/default.master.tpl', 13, false),array('function', 'logo', '/home/honeyflow/www/forum/themes/minalla-yellow/views/default.master.tpl', 13, false),array('function', 'custom_menu', '/home/honeyflow/www/forum/themes/minalla-yellow/views/default.master.tpl', 33, false),array('function', 'searchbox', '/home/honeyflow/www/forum/themes/minalla-yellow/views/default.master.tpl', 53, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-ca">
<head>
  <?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

</head>
<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">
   <div id="Frame">
      <div id="Head">
         <div class="Menu">

				<!--Load custom logo from banner options-->
            
            	<h1 class="Title"><a href="<?php echo smarty_function_link(array('path' => "/"), $this);?>
"><?php echo smarty_function_logo(array(), $this);?>
</a></h1>
                
                  <!-- Start menu -->
                  
                  <ul id="Menu">
                    <?php if (CheckPermission ( 'Garden.Settings.Manage' )): ?>
                       <li><a href="<?php echo smarty_function_link(array('path' => "dashboard/settings"), $this);?>
">Dashboard</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo smarty_function_link(array('path' => 'discussions'), $this);?>
">Discussions</a></li>
                    <li><a href="<?php echo smarty_function_link(array('path' => 'activity'), $this);?>
">Activity</a></li>
                    <?php if ($this->_tpl_vars['User']['SignedIn']): ?>
                       <li>
                         <a href="<?php echo smarty_function_link(array('path' => "messages/inbox"), $this);?>
">Inbox
                         <?php if ($this->_tpl_vars['User']['CountUnreadConversations']): ?> <span><?php echo $this->_tpl_vars['User']['CountUnreadConversations']; ?>
</span><?php endif; ?></a>
                       </li>
                       <li>
                         <a href="<?php echo smarty_function_link(array('path' => 'profile'), $this);?>
"><?php echo $this->_tpl_vars['User']['Name']; ?>

                         <?php if ($this->_tpl_vars['User']['CountNotifications']): ?> <span><?php echo $this->_tpl_vars['User']['CountNotifications']; ?>
</span><?php endif; ?></a>
                       </li>
                    <?php endif; ?>
                    <?php echo smarty_function_custom_menu(array(), $this);?>

                    <li><?php echo smarty_function_link(array('path' => 'signinout'), $this);?>
</li>
                  </ul>
                  
                  <!-- End menu -->
            
         </div>
      </div>
      <div id="Body">
      
         <!-- Start body content: helper menu and discussion list -->
      
         <div id="Content"><?php echo smarty_function_asset(array('name' => 'Content'), $this);?>
</div>
         
         <!-- End body content -->
         
         <!-- Start panel modules: search, categories, and bookmarked discussions -->
         
         <div id="Panel">
		 
         <div id="Search"><?php echo smarty_function_searchbox(array(), $this);?>
</div>
		 
		 <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

         
         </div>
         
         <!-- End panel -->

         
      </div>
      
      <!-- Start foot -->
      
      <div id="Foot">
			<div><div class="vanilla-ico"></div> Powered by <a href="http://vanillaforums.org"><span>Vanilla</span></a></div>
    <?php echo smarty_function_asset(array('name' => 'Foot'), $this);?>

		</div>
        
      <!-- End foot -->  
        
   </div>
</body>
</html>