<?php

namespace Kazetenn\Pages\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('kazetenn');
        $treeBuilder->getRootNode()
                    ->children()
                        ->scalarNode('blog_url')
                            ->defaultValue('')
                        ->end()
                    ->end();

        return $treeBuilder;
    }
}
