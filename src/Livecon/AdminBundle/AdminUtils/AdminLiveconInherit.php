<?php
/**
 * Created by IntelliJ IDEA.
 * User: vinz
 * Date: 03/08/14
 * Time: 11:40
 */

namespace Livecon\AdminBundle\AdminUtils;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class AdminLiveconInherit
 *
 * Class with common functions between Admin entities in Livecon
 *
 * @package Livecon\AdminBundle\AdminUtils
 */
abstract class AdminLiveconInherit extends Admin {

  protected $excluded;

  /**
   * @return mixed
   */
  protected function getExcluded()
  {
    return $this->excluded;
  }

  /**
   * Set the fields to exclude (on create and update)
   *
   * @param mixed $excluded
   */
  abstract function setExcluded($excluded);

  // Fields to be shown on create/edit forms
  protected function configureFormFields(FormMapper $formMapper)
  {
    $eventVars = $this->getAllFields();
    foreach ($eventVars as $eventVar)
    {
      $formMapper->add($eventVar);
    }
  }

  // Fields to be shown on filter forms
  protected function configureDatagridFilters(DatagridMapper $datagridMapper)
  {
    $datagridMapper
      ->add('id')
      ->add('label')
    ;
  }

  // Fields to be shown on lists
  protected function configureListFields(ListMapper $listMapper)
  {
    $listMapper
      ->addIdentifier('id')
    ;
    $eventVars = $this->getAllFields();
    foreach ($eventVars as $eventVar)
    {
      $listMapper->add($eventVar);
    }
  }

  /**
   * @param array $other
   *
   * @return array
   */
  protected function getExcludedFields(array $other = array())
  {
    return array_merge(array('mainEvent', 'id'), $other);
  }

  /**
   * Return all fields (with excluded)
   *
   * @param bool $withExcluded with or without excluded fields
   *
   * @return array
   */
  protected function getAllFields($withExcluded = true)
  {
    return EntityUtils::getAllVarsFromEntity($this->getEntityName(), ($withExcluded) ? $this->getExcludedFields() : array());
  }

  /**
   * Return the name of the entity
   *
   * @return mixed
   */
  abstract function getEntityName();

} 