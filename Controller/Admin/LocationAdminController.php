<?php

/*
 * This file is part of the BrickstormSms4FoodBundle package.
 *
 * (c) Brickstorm <http://brickstorm.org/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Brickstorm\WorldBundle\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LocationAdminController extends Controller
{

    public function deleteAction(Request $request)
    {
      $em = $this->getDoctrine()->getEntityManager();
      $l  = $em->getRepository('BrickstormWorldBundle:Location')
               ->findOneById($request->get('id'));
      if (is_object($l)) {
        $em->remove($l);
        $em->flush();
        $this->container->get('session')->setFlash('success', 'location.deleted');
      } else {
        $this->container->get('session')->setFlash('error', 'location.not.exists');
      }

      return $this->redirect($this->get('router')->generate('user_locations'));
    }
}