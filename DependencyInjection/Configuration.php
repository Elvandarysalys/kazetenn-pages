<?php
/*
 * Copyright (c) Gwilherm-Alan Turpin 2022.
 *
 * This file is part of the Kazetenn Pages Bundle
 *
 * For more informations about the license, you can refer yourself  to the LICENSE file at the root of the project.
 */

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
