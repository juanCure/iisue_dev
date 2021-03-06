{**
 * plugins/blocks/languageToggle/block.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- language toggle.
 *}
{if $enableLanguageToggle}
<div class="pkp_block block_language">
	<span class="title">
		{translate key="common.language"}
	</span>

	<div class="content">
		<ul>
			{foreach from=$languageToggleLocales item=localeName key=localeKey}
				<li class="locale_{$localeKey|escape}{if $localeKey == $currentLocale} current{/if}">
					<span class="flag-icon flag-icon-{if $localeKey == 'en_US'}us{elseif $localeKey == 'es_ES'}es{/if}"></span>
					<a href='{url router=$smarty.const.ROUTE_PAGE page="user" op="setLocale" path=$localeKey source=$smarty.server.REQUEST_URI}'>{$localeName|upper|truncate:2:"":true}
					</a>
				</li>
			{/foreach}
		</ul>
	</div>
</div><!-- .block_language -->
{/if}
