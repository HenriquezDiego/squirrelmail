<?php

/**
  * SquirrelMail Test Plugin
  * @copyright 2006-2022 The SquirrelMail Project Team
  * @license http://opensource.org/licenses/gpl-license.php GNU Public License
  * @version $Id: functions.php 14937 2022-01-18 08:02:40Z pdontthink $
  * @package plugins
  * @subpackage test
  */

/**
  * Add link to menu at top of content pane
  *
  * @return void
  *
  */
function test_menuline_do() {

    displayInternalLink('plugins/test/test.php', 'Test', 'right');
    echo "&nbsp;&nbsp;\n";

}


