{**
 * plugins/generic/recommendByAuthor/templates/articleFooter.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * A template to be included via Templates::Article::Footer::PageFooter hook.
 *}
<div id="articlesBySameAuthorList" class="pkp_block">
	{if $noMetricSelected}
		<h3>{translate key="plugins.generic.recommendByAuthor.heading"}</h3>
		{translate key="plugins.generic.recommendByAuthor.noMetric"}
	{else}
		{if !$articlesBySameAuthor->wasEmpty()}
			<h3>{translate key="plugins.generic.recommendByAuthor.heading"}</h3>
			<div class="myArticles">
				{iterate from=articlesBySameAuthor item=articleBySameAuthor}
					{assign var=publishedArticle value=$articleBySameAuthor.publishedArticle}
					{assign var=article value=$articleBySameAuthor.article}
					{assign var=issue value=$articleBySameAuthor.issue}
					{assign var=journal value=$articleBySameAuthor.journal}
					<div class="title">
						<a href="{url journal=$journal->getPath() page="article" op="view" path=$publishedArticle->getBestArticleId()}">
							{$article->getLocalizedTitle()|strip_unsafe_html}
						</a>
					</div>
					<div class="authors">
						{foreach from=$article->getAuthors() item=author}
							{$author->getFullName()|escape}
						{/foreach}
					</div>
				{/iterate}
			</div>
			<div id="articlesBySameAuthorPages">
				{page_links anchor="articlesBySameAuthor" iterator=$articlesBySameAuthor name="articlesBySameAuthor"}
			</div>
		{/if}
	{/if}
</div>
