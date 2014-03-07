<?php
use Doctrine\ORM\EntityRepository;

/**
* Repository for Products
*/
class Application_Model_ProductRepository extends EntityRepository
{
	
	function getProduct($id)
	{
		$query = Zend_Registry::get('em')->createQueryBuilder();

		$query 	->select('p')
				->from('Application_Model_Product', 'p')
				->where('p.id = ?1')
				->setParameter(1, $id);

		$query = $query->getQuery();
		return $query->getSingleResult();
	}
	
	function getRandomProducts($id1, $id2, $id3)
	{
		$query = Zend_Registry::get('em')->createQueryBuilder();

		$query 	->select('p')
				->from('Application_Model_Product', 'p')
				->where('p.id = ?1')
				->orWhere('p.id = ?2')
				->orWhere('p.id = ?3')
				->setParameter(1, $id1)
				->setParameter(2, $id2)
				->setParameter(3, $id3);

		$query = $query->getQuery();
		return $query->getResult();
	}
}