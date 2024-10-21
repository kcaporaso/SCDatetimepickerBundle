<?php

namespace SC\DatetimepickerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use SC\DatetimepickerBundle\DependencyInjection\Compiler\FormPass;

class SCDatetimepickerBundle extends Bundle
{
    
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
        $container->addCompilerPass(new FormPass());
    }
}

