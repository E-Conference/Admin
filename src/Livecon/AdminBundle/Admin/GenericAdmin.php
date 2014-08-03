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

class GenericAdmin extends AdminLiveconInherit
{
  /**
   * Return the name of the entity
   *
   * @return mixed
   */
  function getEntityName()
  {
    return $this->getClass();
  }

  /**
   * Set the fields to exclude (on create and update)
   */
  function setExcluded()
  {
    $this->excluded = array('id', 'mainEvent', 'person');
  }
}