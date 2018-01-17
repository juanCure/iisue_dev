<?php /* Smarty version 2.6.25-dev, created on 2018-01-09 13:49:35
         compiled from controllers/tab/settings/form/newFileUploadForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/tab/settings/form/newFileUploadForm.tpl', 26, false),array('function', 'csrf', 'controllers/tab/settings/form/newFileUploadForm.tpl', 35, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/form/newFileUploadForm.tpl', 43, false),array('modifier', 'json_encode', 'controllers/tab/settings/form/newFileUploadForm.tpl', 26, false),array('block', 'fbvFormArea', 'controllers/tab/settings/form/newFileUploadForm.tpl', 37, false),array('block', 'fbvFormSection', 'controllers/tab/settings/form/newFileUploadForm.tpl', 38, false),)), $this); ?>

<script type="text/javascript">
	// Attach the file upload form handler.
	$(function() {
		$('#uploadForm').pkpHandler(
			'$.pkp.controllers.form.FileUploadFormHandler',
			{
				$uploader: $('#plupload'),
				uploaderOptions: {
					<?php if ($this->_tpl_vars['fileType'] == 'css'): ?>
						filters: {
							mime_types : [
								{ title : "CSS files", extensions : "css" }
							]
						},
					<?php endif; ?>
					uploadUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'uploadFile','fileSettingName' => $this->_tpl_vars['fileSettingName'],'fileType' => $this->_tpl_vars['fileType'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>
,
					baseUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

				}
			}
		);
	});
</script>

<form id="uploadForm" class="pkp_form" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveFile','fileSettingName' => $this->_tpl_vars['fileSettingName'],'fileType' => $this->_tpl_vars['fileType']), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'file')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.file")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/fileUploadContainer.tpl", 'smarty_include_vars' => array('id' => 'plupload')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

</form>