<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmark extends CI_Model
{
    public function get_all_bookmarks()
    {
        return $this->db->query("SELECT folders.name AS folder_name, bookmarks.name AS bookmark_name, bookmarks.url, bookmarks.id FROM bookmarks
        LEFT JOIN folders ON folders.id = bookmarks.folder_id")->result_array();
    }

    public function get_bookmark_by_id($id)
    {
        return $this->db->query("SELECT folders.name AS folder_name, bookmarks.name AS bookmark_name, bookmarks.url, bookmarks.id FROM bookmarks
        LEFT JOIN folders ON folders.id = bookmarks.folder_id
        WHERE bookmarks.id = ?;", array($id))->row_array();
    }

    public function add_bookmark($bookmark)
    {
        $query = "INSERT INTO bookmarks(folder_id, name, url, created_at) VALUES(?,?,?,?)";
        $values = array($bookmark['folder'], $bookmark['name'], $bookmark['url'], date("Y-m-d H:i:s"));
        return $this->db->query($query, $values);
    }

    public function delete_bookmark($id)
    {
        $query = "DELETE FROM bookmarks WHERE id = ?";
        return $this->db->query($query, $id);
    }

    public function get_all_folders()
    {
        return $this->db->query("SELECT * FROM folders")->result_array();
    }
}
?>