<?php

namespace uploadBundle\Tests\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use uploadBundle\Entity\Uploadinfo;


class LoadUserFixture extends AbstractFixture implements FixtureInterface, ContainerAwareInterface {

	private $container;

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

	public function load(ObjectManager $manager) {
        
        $data = new Uploadinfo();
        $data->setFirstName("Test First Name");
        $data->setLastName("Test last Name");
        $data->setAddress("Test Address");
        $data->setAddressTwo("Address Two");
        $data->setEmail("test@gmail.com");
        $data->setCreatedDate(new \DateTime("now"));
        $data->setModifiedDate(new \DateTime("now"));
        $data->setPhone("98899898989");
        $manager->persist($data);
        $manager->flush();
 
    }

    public function getOrder() {
        
    }
}