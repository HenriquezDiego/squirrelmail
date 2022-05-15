<?php

/**
 * SquirrelMail Test Plugin
 * @copyright 2006-2022 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: test.php 14937 2022-01-18 08:02:40Z pdontthink $
 * @package plugins
 * @subpackage test
 */


define('SM_PATH', '../../');
include_once(SM_PATH . 'include/validate.php');

global $color;
displayPageHeader($color, 'none');

?>

<strong>Tests:</strong>
<br />
<br />
<p><a href="decodeheader.php">decodeHeader() test</a></p>
<p><a href="ngettext.php">ngettext() test</a></p>

</body>
</html>

