#!/usr/local/bin/php -f
<?php
require_once("functions.inc");
require_once("config.inc");
require_once("notices.inc");
require_once("openvpn.inc");
require_once("interfaces.inc");
$config['interfaces']['wan']['disabled'] = 1;
unset($config['interfaces']['wan']['enable']);
write_config();
interface_bring_Down('wan','true');
$message = sprintf("Interface %s pinning down",$if);
log_error($message);
?>
