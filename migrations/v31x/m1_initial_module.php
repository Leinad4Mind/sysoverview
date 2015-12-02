<?php
/**
*
* @package System Overview
* @copyright (c) 2015 John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\sysoverview\migrations\v31x;

/**
* Migration stage 4: Initial module
*/
class m1_initial_module extends \phpbb\db\migration\migration
{
	/**
	 * Assign migration file dependencies for this migration
	 *
	 * @return array Array of migration files
	 * @static
	 * @access public
	 */
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\gold');
	}

	/**
	 * Add or update data in the database
	 *
	 * @return array Array of table data
	 * @access public
	 */
	public function update_data()
	{
		return array(
			array('module.add', array(
				'acp', 'ACP_GENERAL_TASKS', array(
					'module_basename'	=> '\forumhulp\sysoverview\acp\sysoverview_module',
					'modes'				=> array('system'),
				),
			)),
		);
	}
}
