<?php /* Smarty version 2.6.25-dev, created on 2018-01-11 15:35:49
         compiled from file:/var/www/html/iisue_dev/plugins/generic/recommendByAuthor/templates/articleFooter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/iisue_dev/plugins/generic/recommendByAuthor/templates/articleFooter.tpl', 12, false),array('function', 'url', 'file:/var/www/html/iisue_dev/plugins/generic/recommendByAuthor/templates/articleFooter.tpl', 24, false),array('function', 'page_links', 'file:/var/www/html/iisue_dev/plugins/generic/recommendByAuthor/templates/articleFooter.tpl', 36, false),array('block', 'iterate', 'file:/var/www/html/iisue_dev/plugins/generic/recommendByAuthor/templates/articleFooter.tpl', 18, false),array('modifier', 'strip_unsafe_html', 'file:/var/www/html/iisue_dev/plugins/generic/recommendByAuthor/templates/articleFooter.tpl', 25, false),array('modifier', 'escape', 'file:/var/www/html/iisue_dev/plugins/generic/recommendByAuthor/templates/articleFooter.tpl', 30, false),)), $this); ?>
<div id="articlesBySameAuthorList" class="pkp_block">
	<?php if ($this->_tpl_vars['noMetricSelected']): ?>
		<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.recommendByAuthor.heading"), $this);?>
</h3>
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.recommendByAuthor.noMetric"), $this);?>

	<?php else: ?>
		<?php if (! $this->_tpl_vars['articlesBySameAuthor']->wasEmpty()): ?>
			<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.recommendByAuthor.heading"), $this);?>
</h3>
			<div class="myArticles">
				<?php $this->_tag_stack[] = array('iterate', array('from' => 'articlesBySameAuthor','item' => 'articleBySameAuthor')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php $this->assign('publishedArticle', $this->_tpl_vars['articleBySameAuthor']['publishedArticle']); ?>
					<?php $this->assign('article', $this->_tpl_vars['articleBySameAuthor']['article']); ?>
					<?php $this->assign('issue', $this->_tpl_vars['articleBySameAuthor']['issue']); ?>
					<?php $this->assign('journal', $this->_tpl_vars['articleBySameAuthor']['journal']); ?>
					<div class="title">
						<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => $this->_tpl_vars['publishedArticle']->getBestArticleId()), $this);?>
">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

						</a>
					</div>
					<div class="authors">
						<?php $_from = $this->_tpl_vars['article']->getAuthors(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
							<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>

						<?php endforeach; endif; unset($_from); ?>
					</div>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</div>
			<div id="articlesBySameAuthorPages">
				<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'articlesBySameAuthor','iterator' => $this->_tpl_vars['articlesBySameAuthor'],'name' => 'articlesBySameAuthor'), $this);?>

			</div>
		<?php endif; ?>
	<?php endif; ?>
</div>