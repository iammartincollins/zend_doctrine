<?php
use Doctrine\ORM\EntityRepository;

/**
* Repository for Products
*/
class Application_Model_ProductRepository extends EntityRepository
{
	/**
	 * Retrieves a product from the db
	 * @param  integer $id product ID
	 * @return product object
	 */
	function getProduct($id)
	{
		$query = Zend_Registry::get('em')->createQueryBuilder();

		$query 	->select('p')
				->from('Application_Model_Product', 'p')
				->where('p.id = ?1')
				->setParameter(1, $id);

		$query = $query->getQuery();
		return $query->getOneOrNullResult();
	}
	
	/**
	 * Gets 3 products from the db
	 * @param  integer $id1 ID of first product
	 * @param  integer $id2 ID of second product
	 * @param  integer $id3 ID of third product
	 * @return array of product objects
	 */
	function getSomeProducts($id1, $id2, $id3)
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