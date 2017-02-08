<?php

/**
 * @author Marcus Nyeholt <marcus@silverstripe.com.au>
 * @license BSD http://silverstripe.org/BSD-license
 */
class InteractiveClient extends DataObject {
	public static $db = array(
		'Title'				=> 'Varchar(128)',
		'ContactEmail'		=> 'Text',
	);
}