<?php
class Blog extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'title' => 'Prak. Rekayasa Web - Bootstrap & JQuery', 
        );
        $this->load->view('blog_view', $data);
    }
}
