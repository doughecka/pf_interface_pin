#!/usr/local/bin/php -f
<?php
require_once("functions.inc");
require_once("config.inc");
require_once("notices.inc");
require_once("openvpn.inc");
require_once("interfaces.inc");
exec("route del 0.0.0.0/0 192.168.0.3");
unset($config['interfaces']['wan']['disabled']);
$config['interfaces']['wan']['enable'] = 1;
write_config();
interface_bring_down('wan','false');
interface_configure('wan');
$message = sprintf("Interface %s pinning up",$if);
log_error($message);
?>
