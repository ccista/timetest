<?php
if (!$id = $modx->resource->get('id')) return '';
$templateId = $modx->resource->get('template');
if (!$template = $modx->getObject('modTemplate', $templateId)) return '';
return $template->get('templatename');
