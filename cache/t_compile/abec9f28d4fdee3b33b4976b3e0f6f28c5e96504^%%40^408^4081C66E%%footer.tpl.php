<?php /* Smarty version 2.6.25-dev, created on 2018-01-09 13:35:38
         compiled from frontend/components/footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'call_hook', 'frontend/components/footer.tpl', 19, false),array('function', 'translate', 'frontend/components/footer.tpl', 21, false),array('function', 'url', 'frontend/components/footer.tpl', 44, false),array('function', 'csrf', 'frontend/components/footer.tpl', 60, false),array('function', 'html_select_date', 'frontend/components/footer.tpl', 82, false),array('function', 'load_script', 'frontend/components/footer.tpl', 136, false),array('modifier', 'assign', 'frontend/components/footer.tpl', 19, false),array('modifier', 'escape', 'frontend/components/footer.tpl', 21, false),array('modifier', 'strip_unsafe_html', 'frontend/components/footer.tpl', 45, false),)), $this); ?>

	</div><!-- pkp_structure_main -->

		<?php if (empty ( $this->_tpl_vars['isFullWidth'] )): ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Sidebar"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'sidebarCode') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'sidebarCode'));?>

		<?php if ($this->_tpl_vars['sidebarCode']): ?>
			<div class="pkp_structure_sidebar left" role="complementary" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.navigation.sidebar"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
">
				<?php if ($this->_tpl_vars['requestedPage'] != 'article' && $this->_tpl_vars['requestedPage'] != 'search'): ?>
					<!-- Agregando un div con video -->
					<div class="pkp_block">
						<span class="title">Videos</span>
						<div class="content">
							<p><iframe width="320" height="315" src="https://www.youtube.com/embed/3rmjoOQpRwE" frameborder="0" allowfullscreen></iframe></p>
						</div>
					</div>
					<!-- Agregando un div para contener el iframe con la página de facebook de la revista -->
					<div class="pkp_block">
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frevista.perfiles.educativos%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1512284222119075" width="320" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
					</div>
								<?php elseif ($this->_tpl_vars['issue'] && $this->_tpl_vars['section'] && $this->_tpl_vars['myPublishedArticles']): ?>
					<div class="myPublishedArticles pkp_block">
						<h3><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.themes.default-child.related.articles.heading"), $this);?>
</h3>
						<?php $_from = $this->_tpl_vars['myPublishedArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['section']):
        $this->_foreach['sections']['iteration']++;
?>
							<?php if ($this->_tpl_vars['section']['articles']): ?>
								<div class="myArticles">
									<?php $_from = $this->_tpl_vars['section']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
										<?php $this->assign('articlePath', $this->_tpl_vars['article']->getBestArticleId()); ?>
										<div class="title">
											<a <?php if ($this->_tpl_vars['journal']): ?>href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
"<?php else: ?>href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['articlePath']), $this);?>
"<?php endif; ?>>
											<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>

											</a>
										</div>
										<div class="authors">
											<?php echo $this->_tpl_vars['article']->getAuthorString(); ?>

										</div>
									<?php endforeach; endif; unset($_from); ?>
								</div>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					</div>
								<?php elseif ($this->_tpl_vars['requestedPage'] == 'search'): ?>
					<div class="my_search_section">
						<form class="cmp_form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'search'), $this);?>
">
							<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>


														<!-- <div class="search_input">
								<label class="pkp_screen_reader" for="query">
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.searchFor"), $this);?>

								</label>
								<input type="text" id="query" name="query" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['query'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" class="query" placeholder="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp));?>
">
							</div> -->

							<fieldset class="search_advanced">
								<legend>
									<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.advancedFilters"), $this);?>

								</legend>
								<div class="my_block">
									<span>Filtar por fechas:</span>
									<div class="date_range">
										<div class="from">
											<label class="label">
												<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.dateFrom"), $this);?>

											</label>
											<?php echo smarty_function_html_select_date(array('prefix' => 'dateFrom','time' => $this->_tpl_vars['dateFrom'],'start_year' => $this->_tpl_vars['yearStart'],'end_year' => $this->_tpl_vars['yearEnd'],'year_empty' => "",'month_empty' => "",'day_empty' => "",'field_order' => 'YMD'), $this);?>

										</div>
										<div class="to">
											<label class="label">
												<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.dateTo"), $this);?>

											</label>
											<?php echo smarty_function_html_select_date(array('prefix' => 'dateTo','time' => $this->_tpl_vars['dateTo'],'start_year' => $this->_tpl_vars['yearStart'],'end_year' => $this->_tpl_vars['yearEnd'],'year_empty' => "",'month_empty' => "",'day_empty' => "",'field_order' => 'YMD'), $this);?>

										</div>
									</div>
								</div>
								<br>
								<div class="my_block">
									<span>Buscar por:</span>
									<div class="author">
										<label class="label" for="authors">
											<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "search.author"), $this);?>

										</label>
										<input type="text" for="authors" name="authors" value="<?php echo $this->_tpl_vars['authors']; ?>
">
									</div>
								</div>
							</fieldset>

							<div class="submit">
								<button class="submit" type="submit"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>
</button>
							</div>
						</form>
					</div>
				<?php endif; ?>
				<?php echo $this->_tpl_vars['sidebarCode']; ?>

			</div><!-- pkp_sidebar.left -->
		<?php endif; ?>
	<?php endif; ?>
</div><!-- pkp_structure_content -->

<div id="pkp_content_footer" class="pkp_structure_footer_wrapper" role="contentinfo">

	<div class="pkp_structure_footer">

		<?php if ($this->_tpl_vars['pageFooter']): ?>
			<div class="pkp_footer_content">
				<?php echo $this->_tpl_vars['pageFooter']; ?>

			</div>
		<?php endif; ?>

		<div class="pkp_brand_footer" role="complementary">
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'about','op' => 'aboutThisPublishingSystem'), $this);?>
">
				<img alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutThisPublishingSystem"), $this);?>
" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/<?php echo $this->_tpl_vars['brandImage']; ?>
">
			</a>
		</div>
	</div>
</div><!-- pkp_structure_footer_wrapper -->

</div><!-- pkp_structure_page -->

<?php echo $this->_plugins['function']['load_script'][0][0]->smartyLoadScript(array('context' => 'frontend'), $this);?>


<?php echo $this->_plugins['function']['call_hook'][0][0]->smartyCallHook(array('name' => "Templates::Common::Footer::PageFooter"), $this);?>

</body>
</html>