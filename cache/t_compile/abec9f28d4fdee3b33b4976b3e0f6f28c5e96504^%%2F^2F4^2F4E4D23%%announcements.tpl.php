<?php /* Smarty version 2.6.25-dev, created on 2018-01-11 12:21:32
         compiled from frontend/components/announcements.tpl */ ?>

<ul class="cmp_announcements">
	<?php $_from = $this->_tpl_vars['announcements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['announcement']):
?>
		<li>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/announcement_summary.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</li>
	<?php endforeach; endif; unset($_from); ?>
</ul>