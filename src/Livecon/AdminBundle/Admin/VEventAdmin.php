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
use Sonata\AdminBundle\Route\RouteCollection;

class VEventAdmin extends GenericAdmin
{
  /**
   * For VEvent, we cannot instanciate a new VEvent
   * (But we can see and edit his fields)
   *
   * @param RouteCollection $collection
   */
  protected function configureRoutes(RouteCollection $collection)
  {
    $collection->clearExcept(array('list', 'edit'));
  }
}