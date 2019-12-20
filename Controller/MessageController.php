<?php
namespace FS\MessageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MessageController extends AbstractController
{

  public function __construct(ContainerInterface $container)
  {
      $this->setContainer($container);
  }

  public function sendAction(){
    return $this->json(['help'=>'yes']);
  }
}
