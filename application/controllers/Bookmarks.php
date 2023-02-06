<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmarks extends CI_Controller
{
    public function index()
    {
        $bookmarks= $this->show_bookmarks();
        $folders = $this->show_folders();
        $view_data = array(
            "bookmarks" => $bookmarks,
            "folders" => $folders
        );
        $this->load->view('bookmarks/index', $view_data);
    }

    public function show_bookmarks()
    {
        $this->load->model('Bookmark');
        return $this->Bookmark->get_all_bookmarks();
    }

    public function add()
    {
        $bookmark = $this->input->post(NULL, TRUE);
        $bookmar['date'] = date("Y-m-d, H:i:s");
        $this->load->model('Bookmark');
        $this->Bookmark->add_bookmark($bookmark);
        redirect('/');
    }

    public function show_delete($id)
    {
        $this->load->model('Bookmark');
        $view_data = $this->Bookmark->get_bookmark_by_id($id);
        $this->load->view('bookmarks/delete', $view_data);
    }

    public function delete_bookmark($id)
    {   
        $this->load->model('Bookmark');
        $this->Bookmark->delete_bookmark($id);
        redirect('/');
    }

    public function show_folders()
    {
        $this->load->model('Bookmark');
        $folders = $this->Bookmark->get_all_folders();
        return $folders;
    }
}
?>