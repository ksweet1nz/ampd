<?php
class PerchTemplateFilter_space extends PerchTemplateFilter {
public function filterAfterProcessing($value, $valueIsMarkup = false) {
if ($this->Tag->type == 'text') {
  $string = str_replace(' ', '-', $value); // Replaces all spaces with hyphens.
  return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
}
}

PerchSystem::register_template_filter('space', 'PerchTemplateFilter_space');
?>
