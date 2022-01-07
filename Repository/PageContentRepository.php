<?php
/*
 * Copyright (c) Gwilherm-Alan Turpin 2022.
 *
 * This file is part of the Kazetenn Pages Bundle
 *
 * For more informations about the license, you can refer yourself  to the LICENSE file at the root of the project.
 */

namespace Kazetenn\Pages\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Kazetenn\Pages\Entity\PageContent;

/**
 * @method PageContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageContent[]    findAll()
 * @method PageContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageContentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PageContent::class);
    }
}
