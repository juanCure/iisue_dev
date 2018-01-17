<?php return array (
  'plugins.pubIds.urn.displayName' => 'URN',
  'plugins.pubIds.urn.description' => 'This plugin enables the assignment of the Uniform Resource Names to the issues, articles and galleys in OJS.',
  'plugins.pubIds.urn.manager.settings.description' => 'Please configure the URN plugin to be able to manage and use URNs in OJS:',
  'plugins.pubIds.urn.manager.settings.urnObjects' => 'Journal Content',
  'plugins.pubIds.urn.manager.settings.urnObjectsRequired' => 'Please choose the objects URNs should be assigned to.',
  'plugins.pubIds.urn.manager.settings.explainURNs' => 'Please select the publishing objects that will have Uniform Resource Names (URN) assigned:',
  'plugins.pubIds.urn.manager.settings.enableIssueURN' => 'Issues',
  'plugins.pubIds.urn.manager.settings.enableSubmissionURN' => 'Articles',
  'plugins.pubIds.urn.manager.settings.enableRepresentationURN' => 'Galleys',
  'plugins.pubIds.urn.manager.settings.urnPrefix' => 'URN Prefix',
  'plugins.pubIds.urn.manager.settings.urnPrefix.description' => 'The URN prefix is the fix, never changing part of the URN (e.g. "urn:nbn:de:0000-").',
  'plugins.pubIds.urn.manager.settings.form.urnPrefixPattern' => 'The URN prefix pattern must be in the form "urn:"&lt;NID&gt;":"&lt;NSS&gt;.',
  'plugins.pubIds.urn.manager.settings.urnSuffix' => 'URN Suffix',
  'plugins.pubIds.urn.manager.settings.urnSuffix.description' => 'A URN suffix can take any form, but must be unique among all publishing objects with the same URN prefix assigned:',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern' => 'Use the pattern entered below to generate URN suffixes. Use %j for journal initials, %v for the volume number, %i for the issue number, %Y for the year, %a for the OJS article ID, %g for the OJS galley ID, %f for the OJS file ID, %p for the page number and %x for "Custom Identifier".',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.example' => 'For example, vol%viss%ipp%p could create the URN suffix "vol3iss2pp230".',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.issues' => 'for issues',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.submissions' => 'for articles',
  'plugins.pubIds.urn.manager.settings.urnSuffixPattern.representations' => 'for galleys',
  'plugins.pubIds.urn.manager.settings.urnIssueSuffixPatternRequired' => 'Please enter the URN suffix pattern for issues.',
  'plugins.pubIds.urn.manager.settings.urnSubmissionSuffixPatternRequired' => 'Please enter the URN suffix pattern for articles.',
  'plugins.pubIds.urn.manager.settings.urnRepresentationSuffixPatternRequired' => 'Please enter the URN suffix pattern for galleys.',
  'plugins.pubIds.urn.manager.settings.urnSuffixDefault' => 'Use default patterns.',
  'plugins.pubIds.urn.manager.settings.urnSuffixDefault.description' => '%j.v%vi%i for issues<br />%j.v%vi%i.%a for articles<br />%j.v%vi%i.%a.g%g for galleys.',
  'plugins.pubIds.urn.manager.settings.urnSuffixCustomIdentifier' => 'Enter an individual URN suffix for each published item. You\'ll find an additional URN input field on each item\'s metadata page.',
  'plugins.pubIds.urn.manager.settings.checkNo' => 'Check Number',
  'plugins.pubIds.urn.manager.settings.checkNo.label' => 'The check number will be automatically calculated and added at the end, as the last digit of an URN.',
  'plugins.pubIds.urn.manager.settings.namespace' => 'Namespace',
  'plugins.pubIds.urn.manager.settings.namespace.choose' => 'Choose',
  'plugins.pubIds.urn.manager.settings.namespace.description' => 'The persistent identifier namespace usually needed for the registration (e.g. at the Deutsche Nationalbibliothek).',
  'plugins.pubIds.urn.manager.settings.urnResolver' => 'Resolver URL',
  'plugins.pubIds.urn.manager.settings.urnResolver.description' => '(e.g. http://nbn-resolving.de/)',
  'plugins.pubIds.urn.manager.settings.form.urnResolverRequired' => 'Please enter the resolver URL.',
  'plugins.pubIds.urn.manager.settings.urnReassign' => 'Reassign URNs',
  'plugins.pubIds.urn.manager.settings.urnReassign.description' => 'If you change your URN configuration, URNs that have already been assigned will not be affected. Once the URN configuration is saved, use this button to clear all existing URNs so that the new settings will take effect with existing objects.',
  'plugins.pubIds.urn.manager.settings.urnReassign.confirm' => 'Are you sure you wish to delete all existing URNs?',
  'plugins.pubIds.urn.editor.urn' => 'URN',
  'plugins.pubIds.urn.editor.urnObjectTypeIssue' => 'issue',
  'plugins.pubIds.urn.editor.urnObjectTypeSubmission' => 'article',
  'plugins.pubIds.urn.editor.urnObjectTypeRepresentation' => 'galley',
  'plugins.pubIds.urn.editor.customSuffixMissing' => 'The URN cannot be assigned because the custom suffix is missing.',
  'plugins.pubIds.urn.editor.patternNotResolved' => 'The URN cannot be assigned because it contains an unresolved pattern.',
  'plugins.pubIds.urn.editor.canBeAssigned' => 'What you see is a preview of the URN. Select the checkbox and save the form to assign the URN.',
  'plugins.pubIds.urn.editor.assigned' => 'The URN is assigned to this {$pubObjectType}.',
  'plugins.pubIds.urn.editor.urnSuffixCustomIdentifierNotUnique' => 'The given URN suffix is already in use for another published item. Please enter a unique URN suffix for each item.',
  'plugins.pubIds.urn.editor.clearObjectsURN' => 'Clear URN',
  'plugins.pubIds.urn.editor.clearObjectsURN.confirm' => 'Are you sure you wish to delete the existing URN?',
  'plugins.pubIds.urn.editor.clearIssueObjectsURN' => 'Clear Issue Objects URNs',
  'plugins.pubIds.urn.editor.clearIssueObjectsURN.confirm' => 'Are you sure you wish to delete the existing issue objects URNs?',
  'plugins.pubIds.urn.editor.clearIssueObjectsURN.description' => 'Use the following option to clear URNs of all objects (articles and galleys) currently scheduled for this issue.',
  'plugins.pubIds.urn.editor.addCheckNo' => 'Add Check Number',
  'plugins.pubIds.urn.editor.assignURN' => 'Assign the URN {$pubId} to this {$pubObjectType}',
  'plugins.pubIds.urn.editor.assignURN.emptySuffix' => 'The URN cannot be assigned because the custom suffix is missing.',
  'plugins.pubIds.urn.editor.assignURN.pattern' => 'The URN {$pubId} cannot be assigned because it contains an unresolved pattern.',
  'plugins.pubIds.urn.editor.assignURN.assigned' => 'The URN {$pubId} has been assigned.',
  'plugins.pubIds.urn.form.checkNoRequired' => 'The check number is missing.',
); ?>