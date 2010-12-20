<?php

namespace Application\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('HelloBundle:Hello:index.php', array('id' => $id));
    }

    public function zone1Action($id)
    {
        $response = $this->container->get('response');
        $response->setSharedMaxAge(60);

        $viewParams = array(
            'id'          => $id,
            'generatedAt' => new \DateTime(),
        );

        return $this->render('HelloBundle:Hello:zone1.php', $viewParams, $response);
    }

    public function zone2Action($id)
    {
        $response = $this->container->get('response');
        $response->setSharedMaxAge(30);

        $viewParams = array(
            'id'          => $id,
            'generatedAt' => new \DateTime(),
        );

        return $this->render('HelloBundle:Hello:zone2.php', $viewParams, $response);
    }

    public function zone3Action($id)
    {
        $viewParams = array(
            'id'          => $id,
            'generatedAt' => new \DateTime(),
        );

        return $this->render('HelloBundle:Hello:zone3.php', $viewParams);
    }

}
