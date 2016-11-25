<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Usuario;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Put;
use FOS\RestBundle\Controller\Annotations\Delete;

class UsuarioController extends FOSRestController {

    /**
     * @Get("/rest/usuarios")
     */
    public function findAll() {
        $usuarios = $this->getDoctrine()
                ->getRepository('AppBundle:Usuario')
                ->findAll();
        return $usuarios;
    }

    /**
     * @Get("/rest/usuarios/{id}")
     */
    public function find($id) {
        $usuario = $this->getDoctrine()
                ->getRepository('AppBundle:Usuario')
                ->find($id);
        if (!$usuario) {
            throw new NotFoundHttpException("Usuario inexistente");
        }
        return $usuario;
    }

    /**
     * @Post("/rest/usuarios")
     * @ParamConverter("usuario", converter="fos_rest.request_body")
     */
    public function create(Usuario $usuario) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush(); // demarca transação
        return $usuario;
    }

    /**
     * @Put("/rest/usuarios/{id}")
     * @ParamConverter("usuario", converter="fos_rest.request_body")
     */
    public function update($id,Usuario $usuario) {
        $em = $this->getDoctrine()->getManager();
        $usuario_ = $em->getRepository('AppBundle:Usuario')->find($id);
        if (!$usuario_) {
            throw new NotFoundHttpException("Usuario inexistente");
        }
        $em->merge($usuario);
        $em->flush();
        return $usuario;
    }

    /**
     * @Delete("/rest/usuarios/{id}")
     */
    public function remove($id) {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('AppBundle:Usuario')->find($id);
        if (!$usuario) {
            throw new NotFoundHttpException("Usuario inexistente");
        }
        $em->remove($usuario);
        $em->flush();
        return new Response("Usuario excluído", Response::HTTP_NO_CONTENT);
    }

}
