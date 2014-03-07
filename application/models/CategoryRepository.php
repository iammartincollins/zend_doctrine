<?php
use Doctrine\ORM\EntityRepository;

/**
* Repository for Categories
*/
class Application_Model_CategoryRepository extends EntityRepository
{
	
	function getCategory($id)
	{
		$query = Zend_Registry::get('em')->createQueryBuilder();

		$query 	->select('c')
				->from('Application_Model_Category', 'c')
				->where('c.id = ?1')
				->setParameter(1, $id);

		$query = $query->getQuery();
		return $query->getSingleResult();
	}
}