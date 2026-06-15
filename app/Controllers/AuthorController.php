<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\PostModel;

class AuthorController extends BaseController
{
    protected $authModel;
    protected $postModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
        $this->postModel = new PostModel();
    }

    /**
     * Author profile + articles
     */
    public function index($slug)
    {
        // 1️⃣ Get author by slug
        $author = $this->authModel->getUserBySlug($slug);

        if (empty($author)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // 2️⃣ Get author's posts
        $posts = $this->postModel->getPostsByUserId($author->id);

        // 3️⃣ Send data to view
        $data = [
            'title'       => $author->username . ' | Author',
            'author'      => $author,
            'posts'       => $posts,
            'description' => 'Articles by ' . $author->username,
        ];

        echo loadView('partials/_header', $data);
        echo loadView('author/index', $data);
        echo loadView('partials/_footer');
    }
}
