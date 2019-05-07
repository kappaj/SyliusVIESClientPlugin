<?php

declare(strict_types=1);

namespace Prometee\SyliusVIESClientPlugin\Fixture;

use Sylius\Bundle\CoreBundle\Fixture\AbstractResourceFixture;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class EuropeanChannelFixture extends AbstractResourceFixture
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'vies_plugin_european_channel';
    }

    /**
     * {@inheritdoc}
     */
    protected function configureResourceNode(ArrayNodeDefinition $resourceNode): void
    {
        $resourceNode
            ->children()
            ->scalarNode('code')->cannotBeEmpty()->end()
            ->scalarNode('base_country')->cannotBeEmpty()->end()
            ->scalarNode('european_zone')->cannotBeEmpty()->end()
        ;
    }
}
