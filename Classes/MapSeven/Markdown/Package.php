<?php
namespace MapSeven\Markdown;

/*                                                                           *
 * This script belongs to the TYPO3 Flow package "MapSeven.Markdown".        *
 *                                                                           *
 *                                                                           */

use TYPO3\Flow\Package\Package as BasePackage;
use TYPO3\Flow\Annotations as Flow;

/**
 * Package base class of the MapSeven.Markdown package.
 *
 * @Flow\Scope("singleton")
 */
class Package extends BasePackage {

	/**
	 * Invokes custom PHP code directly after the package manager has been initialized.
	 *
	 * @param \TYPO3\Flow\Core\Bootstrap $bootstrap The current bootstrap
	 * @return void
	 */
	public function boot(\TYPO3\Flow\Core\Bootstrap $bootstrap) {
		require(__DIR__ . '/../../../Resources/Private/PHP/Parsedown.php');
	}

}
?>