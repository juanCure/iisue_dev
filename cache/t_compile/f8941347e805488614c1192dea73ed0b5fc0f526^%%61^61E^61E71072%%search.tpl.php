<?php /* Smarty version 2.6.25-dev, created on 2018-01-09 14:05:19
         compiled from frontend/pages/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/pages/search.tpl', 28, false),array('function', 'page_info', 'frontend/pages/search.tpl', 32, false),array('function', 'page_links', 'frontend/pages/search.tpl', 33, false),array('block', 'iterate', 'frontend/pages/search.tpl', 39, false),array('modifier', 'escape', 'frontend/pages/search.tpl', 47, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "common.search")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="page page_search">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => "common.search")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<?php if (! $this->_tpl_vars['results']->wasEmpty()): ?>
		<div class="my_cmp_pagination">
			<?php if ($this->_tpl_vars['query']): ?>
				<label><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.your.search"), $this);?>
 "<?php echo $this->_tpl_vars['query']; ?>
" <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.returned"), $this);?>
 <?php echo $this->_tpl_vars['results']->count; ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.results"), $this);?>
</label>
			<?php elseif ($this->_tpl_vars['authors']): ?>
				<label><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.your.search"), $this);?>
 "<?php echo $this->_tpl_vars['authors']; ?>
" <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.returned"), $this);?>
 <?php echo $this->_tpl_vars['results']->count; ?>
 <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.results"), $this);?>
</label>
			<?php endif; ?>
			<!-- <?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['results']), $this);?>
 -->
			<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'results','iterator' => $this->_tpl_vars['results'],'name' => 'search','query' => $this->_tpl_vars['query'],'searchJournal' => $this->_tpl_vars['searchJournal'],'authors' => $this->_tpl_vars['authors'],'title' => $this->_tpl_vars['title'],'abstract' => $this->_tpl_vars['abstract'],'galleyFullText' => $this->_tpl_vars['galleyFullText'],'discipline' => $this->_tpl_vars['discipline'],'subject' => $this->_tpl_vars['subject'],'type' => $this->_tpl_vars['type'],'coverage' => $this->_tpl_vars['coverage'],'indexTerms' => $this->_tpl_vars['indexTerms'],'dateFromMonth' => $this->_tpl_vars['dateFromMonth'],'dateFromDay' => $this->_tpl_vars['dateFromDay'],'dateFromYear' => $this->_tpl_vars['dateFromYear'],'dateToMonth' => $this->_tpl_vars['dateToMonth'],'dateToDay' => $this->_tpl_vars['dateToDay'],'dateToYear' => $this->_tpl_vars['dateToYear'],'orderBy' => $this->_tpl_vars['orderBy'],'orderDir' => $this->_tpl_vars['orderDir']), $this);?>

		</div>
	<?php endif; ?>

		<div class="search_results">
		<?php $this->_tag_stack[] = array('iterate', array('from' => 'results','item' => 'result')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/article_summary.tpl", 'smarty_include_vars' => array('article' => $this->_tpl_vars['result']['publishedArticle'],'journal' => $this->_tpl_vars['result']['journal'],'showDatePublished' => true,'hideGalleys' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	</div>

		<?php if ($this->_tpl_vars['results']->wasEmpty()): ?>
		<?php if ($this->_tpl_vars['error']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/notification.tpl", 'smarty_include_vars' => array('type' => 'error','message' => ((is_array($_tmp=$this->_tpl_vars['error'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/notification.tpl", 'smarty_include_vars' => array('type' => 'notice','messageKey' => "search.noResults")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>

		<?php else: ?>
	<?php endif; ?>
</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>