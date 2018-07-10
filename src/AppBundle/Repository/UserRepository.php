<?php
/**
 * UserRepository File Doc Comment
 *
 * PHP version 7.2
 *
 * @category UserRepository
 * @package  Repository
 * @author   WildCodeSchool <contact@wildcodeschool.fr>
 */
namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 *
 * @category UserRepository
 * @package  Repository
 * @author   WildCodeSchool <contact@wildcodeschool.fr>
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Query to find user by role
     *
     * @param string $role constant role
     *
     * @return array Return result of the query
     */
    public function findByRole($role)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
            ->from('AppBundle:User', 'u')
            ->where('u.roles LIKE :roles')
            ->setParameter('roles', '%"'.$role.'"%');
        return $qb->getQuery()->getResult();
    }
}