<?php
namespace MapSeven\Markdown\ViewHelpers;

/*                                                                           *
 * This script belongs to the TYPO3 Flow package "MapSeven.Markdown".        *
 *                                                                           *
 *                                                                           */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Configuration\ConfigurationManager;
use TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * View Helper which returns the configuration from a given path
 *
 * = Example =
 *
 * <code title="Gettings Flow Core Settings">
 * <markdown:configuration settingPath="TYPO3.Flow.core" />
 * </code>
 * <output>
 * array('context' => '...', 'phpBinaryPathAndFilename' => '...', ...)
 * </output>
 *
 * <code title="Gettings Markdown Settings">
 * <markdown:configuration settingPath="MapSeven.Markdown" />
 * </code>
 * <output>
 * array('buttons' => '...')
 * </output>
 *
 * @Flow\Scope("prototype")
 */
class ConfigurationViewHelper extends AbstractViewHelper {

	/**
	 * @Flow\Inject
	 * @var ConfigurationManager
	 */
	protected $configurationManager;

	/**
	 * @param string $settingPath
	 * @return mixed
	 */
	public function render($settingPath) {
		return $this->configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, $settingPath);
	}

}
