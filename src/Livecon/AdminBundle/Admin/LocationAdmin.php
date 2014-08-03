<?php
/**
 * Created by IntelliJ IDEA.
 * User: vinz
 * Date: 02/08/14
 * Time: 19:52
 */

namespace Livecon\AdminBundle\Admin;

use Livecon\AdminBundle\AdminUtils\AdminLiveconInherit;
use Livecon\AdminBundle\AdminUtils\EntityUtils;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class LocationAdmin extends AdminLiveconInherit
{
  /**
   * Return the name of the entity
   *
   * @return mixed
   */
  function getEntityName()
  {
    return EntityUtils::ENTITY_LOCATION;
  }

  /**
   * Set the fields to exclude (on create and update)
   *
   * @param mixed $excluded
   */
  function setExcluded($excluded)
  {
    $this->excluded = array('id', 'mainEvent');
  }
}