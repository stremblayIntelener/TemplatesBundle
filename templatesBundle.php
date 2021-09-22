<?php

namespace Intelener\templates;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Twig\Extra\TwigExtraBundle\DependencyInjection\Compiler\MissingExtensionSuggestorPass;

class TemplatesBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}
