<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_alibaba = new TrustindexPlugin_alibaba("alibaba", __FILE__, "12.4.1", "Widgets for Alibaba Reviews", "Alibaba");
$trustindex_pm_alibaba->uninstall();
?>