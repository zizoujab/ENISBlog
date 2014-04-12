<?php

namespace ENIS\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/Blog")
     * @Template()
     */
    public function indexAction()
    {
    	$posts = $this->get('doctrine')->getRepository('ENISBlogBundle:Post')->findAll();
        return array('posts' => $posts);
    }

    /**
     * @Route("/show{id}", name="show_post")
     * @Template()
     */
    public function showAction($id)
    {
    	$post = $this->get('doctrine')->getRepository('ENISBlogBundle:Post')->find($id);
        return array('post' => $post);
    }
}
