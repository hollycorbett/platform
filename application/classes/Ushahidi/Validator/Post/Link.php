<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Ushahidi Post Link Validator
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

class Ushahidi_Validator_Post_Link extends Ushahidi_Validator_Post_ValueValidator
{
	protected function validate($value)
	{
		if (!Valid::url($value)) {
			return 'url';
		}
	}
}
