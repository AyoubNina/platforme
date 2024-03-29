<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="admin_main_page")
     */
    public function ind(): Response
    {
        return $this->render('admin/my_profile.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/categories", name="categories")
     */
    public function categories(): Response
    {
        return $this->render('admin/categories.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/videos", name="videos")
     */
    public function videos(): Response
    {
        return $this->render('admin/videos.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/upload-video", name="upload_video")
     */
    public function uploadVideo(): Response
    {
        return $this->render('admin/upload_video.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/users", name="users")
     */
    public function users(): Response
    {
        return $this->render('admin/users.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/edit-category", name="edit_category")
     */
    public function editCategory(): Response
    {
        return $this->render('admin/edit_category.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
