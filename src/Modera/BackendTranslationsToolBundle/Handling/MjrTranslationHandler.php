<?php

namespace Modera\BackendTranslationsToolBundle\Handling;

use Modera\MjrIntegrationBundle\DependencyInjection\ModeraMjrIntegrationExtension;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;

class MjrTranslationHandler extends ExtjsTranslationHandler
{
    const SOURCE_NAME = 'mjr';

    /**
     * @param BundleInterface $bundle
     * @return string
     */
    protected function resolveResourcesDirectory(BundleInterface $bundle)
    {
        $mjrIntegrationConfig = $this->kernel->getContainer()->getParameter(ModeraMjrIntegrationExtension::CONFIG_KEY);
        $mjrPath = implode(DIRECTORY_SEPARATOR, array(
            getcwd(), 'web', substr($mjrIntegrationConfig['runtime_path'], 1),
        ));

        return $mjrPath;
    }
}
