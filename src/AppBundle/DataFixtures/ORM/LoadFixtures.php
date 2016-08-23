<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Distributor;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines the sample data to load in the database when running the unit and
 * functional tests. Execute this command to load the data:
 *
 *   $ php bin/console doctrine:fixtures:load
 *
 * See http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class LoadFixtures implements FixtureInterface, ContainerAwareInterface
{
    /** @var ContainerInterface */
    private $container;

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
        // $this->loadPosts($manager);
    }

    private function loadUsers(ObjectManager $manager)
    {
        $passwordEncoder = $this->container->get('security.password_encoder');

        $wangDist= new Distributor();
        $wangDist->setUsername('wang');
        $wangDist->setFirstName('Wang');
        $wangDist->setPhoneNumber('696854736');
        $wangDist->setEmail('wang@chasles.com');
        $wangDist->setCountry('cameroon');
        $wangDist->setCity('Dla');
        $wangDist->setAddress('Akwa');
        $wangDist->setRoles(['ROLE_ADMIN']);
        $encodedPassword = $passwordEncoder->encodePassword($wangDist, '123456');
        $wangDist->setPassword($encodedPassword);
        $manager->persist($wangDist);

        $yangDist= new Distributor();
        $yangDist->setUsername('yang');
        $yangDist->setFirstName('Yang');
        $yangDist->setPhoneNumber('678609470');
        $yangDist->setEmail('yang@chasles.com');
        $yangDist->setCountry('cameroon');
        $yangDist->setCity('Dla');
        $yangDist->setAddress('Akwa');
        $yangDist->setRoles(['ROLE_SALES']);
        $encodedPassword = $passwordEncoder->encodePassword($yangDist, '123456');
        $yangDist->setPassword($encodedPassword);
        $manager->persist($yangDist);


        $manager->flush();
    }


    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

}
