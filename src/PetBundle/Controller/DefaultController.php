<?php

namespace PetBundle\Controller;

use PetBundle\Entity\Pet;
use PetBundle\PetBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("" , name="pet")
     * @Method({"POST","PUT"})
     */
    public function indexAction(Request $request)
    {

        $em = $this->get('doctrine.orm.entity_manager');
        $categories = $em->getRepository("PetBundle:Category")->findAll();

        if ($request->isMethod("POST")) {

            $petReceived = json_decode($request->getContent(), TRUE);

            $pet = new Pet();
            $pet->setCategory($petReceived['category']['id']);
            $pet->setPetName($petReceived['name']);
            $pet->setPhotoUrls(json_encode($petReceived['photoUrls']));
            $pet->setTags(json_encode($petReceived['tags']));
            $pet->setStatus($petReceived['status']);

            $em->persist($pet);
            $em->flush();

            if (property_exists($pet, 'id',) && $pet->getId() !== null) {
                return new Response(json_encode($pet), RESPONSE::HTTP_OK, array('content-type' => 'text/json'));
            } else {
                return new Response("Could not Create new Pet", RESPONSE::HTTP_BAD_REQUEST, array('content-type' => 'text/json'));
            }
        } else if ($request->isMethod("PUT")) {
            return new Response("Pet", RESPONSE::HTTP_OK, array('content-type' => 'text/json'));
        }
        return new Response("Invalid endpoint", RESPONSE::HTTP_METHOD_NOT_ALLOWED, array());
    }

    /**
     * @Route("/test" , name="petTest")
     * @Method({"GET"})
     */
    public function testAction(Request $request)
    {
        return new Response("Pet Test", 200, array());
    }

    /**
     * @Route("/findByStatus" , name="petFindByStatus")
     * @Method({"GET"})
     */
    public function findByStatusAction(Request $request) {

        return new Response("Pet findByStatus", 200, array());

    }

    /**
     * @Route("/{petId}" , name="petId")
     * @Method({"POST","PUT", "DELETE"})
     */
    public function petIdAction(Request $request, $petId=0) {

        return new Response("Pet Id: ".$petId, 200, array());

    }

    /**
     * @Route("/{petId}/uploadImage" , name="petUploadImage")
     * @Method({"POST"})
     */
    public function petUploadImageAction(Request $request, $petId=0) {

        return new Response("Image for Pet Id: ".$petId, 200, array());

    }
}
