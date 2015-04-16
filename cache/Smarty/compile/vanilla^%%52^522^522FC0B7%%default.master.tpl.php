<?php /* Smarty version 2.6.25, created on 2015-04-06 22:39:40
         compiled from /home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 5, false),array('function', 'link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 13, false),array('function', 'logo', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 13, false),array('function', 't', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 15, false),array('function', 'profile_link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 25, false),array('function', 'inbox_link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 26, false),array('function', 'bookmarks_link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 27, false),array('function', 'drafts_link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 28, false),array('function', 'dashboard_link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 29, false),array('function', 'signinout_link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 30, false),array('function', 'categories_link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 41, false),array('function', 'discussions_link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 42, false),array('function', 'activity_link', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 43, false),array('function', 'custom_menu', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 44, false),array('function', 'event', '/home/honeyflow/www/forum/themes/HoneyFlow/views/default.master.tpl', 60, false),)), $this); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

  </head>
  <body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">

    <div class="contain-to-grid">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            <h1><a href="<?php echo smarty_function_link(array('path' => 'home'), $this);?>
"><?php echo smarty_function_logo(array(), $this);?>
</a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><?php echo smarty_function_t(array('c' => 'Menu'), $this);?>
</a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            <?php if ($this->_tpl_vars['User']['SignedIn']): ?>
              <li class="has-dropdown">
                <a href="#"><?php echo $this->_tpl_vars['User']['Name']; ?>
</a>
                <ul class="dropdown">
                  <?php echo smarty_function_profile_link(array('text' => 'Profile'), $this);?>

                  <?php echo smarty_function_inbox_link(array('text' => 'Inbox'), $this);?>

                  <?php echo smarty_function_bookmarks_link(array('text' => 'Bookmarks'), $this);?>

                  <?php echo smarty_function_drafts_link(array('text' => 'Drafts'), $this);?>

                  <?php echo smarty_function_dashboard_link(array(), $this);?>

                  <?php echo smarty_function_signinout_link(array(), $this);?>

                </ul>
              </li>
            <?php else: ?>
              <li><?php echo smarty_function_link(array('path' => 'register','text' => 'Register'), $this);?>
</li>
              <li><?php echo smarty_function_link(array('path' => 'signin','text' => 'Sign In','target' => 'current'), $this);?>
</li>
            <?php endif; ?>
          </ul>

          <!-- Left Nav Section -->
          <ul class="left">
            <?php echo smarty_function_categories_link(array(), $this);?>

            <?php echo smarty_function_discussions_link(array(), $this);?>

            <?php echo smarty_function_activity_link(array(), $this);?>

            <?php echo smarty_function_custom_menu(array(), $this);?>

          </ul>
        </section>
      </nav>
    </div>

    <main class="row">
      <div class="page-content">
        <?php echo smarty_function_asset(array('name' => 'Content'), $this);?>

      </div>

      <div class="page-sidebar">
        <?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

      </div>
    </main>

    <?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>


    <!-- Initialize Foundation -->
    <script>jQuery(document).foundation();</script>
    <!-- Enables Some JS Features -->
    <?php echo smarty_function_asset(array('name' => 'Foot'), $this);?>

  </body>
</html>