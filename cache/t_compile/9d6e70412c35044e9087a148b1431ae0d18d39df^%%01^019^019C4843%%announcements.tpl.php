<?php /* Smarty version 2.6.25-dev, created on 2018-01-11 12:21:31
         compiled from frontend/pages/announcements.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "announcement.announcements")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_announcements">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => "announcement.announcements")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/editLink.tpl", 'smarty_include_vars' => array('page' => 'management','op' => 'settings','path' => 'website','anchor' => 'announcements','sectionTitleKey' => "announcement.announcements")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo $this->_tpl_vars['announcementsIntroduction']; ?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/announcements.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>