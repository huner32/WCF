<?php
namespace wcf\data\application;
use wcf\data\DatabaseObject;
use wcf\system\request\RouteHandler;

/**
 * Represents an application.
 * 
 * @author	Alexander Ebert
 * @copyright	2001-2012 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	data.application
 * @category	Community Framework
 */
class Application extends DatabaseObject {
	/**
	 * @see	wcf\data\DatabaseObject::$databaseTableName
	 */
	protected static $databaseTableName = 'application';
	
	/**
	 * @see	wcf\data\DatabaseObject::$databaseTableIndexName
	 */
	protected static $databaseTableIndexName = 'packageID';
	
	/**
	 * @see	wcf\data\DatabaseObject::$databaseTableIndexIsIdentity
	 */
	protected static $databaseTableIndexIsIdentity = false;
	
	/**
	 * absolute page URL
	 * @var	string
	 */
	protected $pageURL = '';
	
	/**
	 * Returns absolute page URL.
	 * 
	 * @return	string
	 */
	public function getPageURL() {
		if (empty($this->pageURL)) {
			$this->pageURL = RouteHandler::getProtocol() . $this->domainName . $this->domainPath;
		}
		
		return $this->pageURL;
	}
}
