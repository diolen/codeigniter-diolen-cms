<?php

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page_m extends MY_Model
{

    protected $_table_name = 'pages';
    protected $_order_by = 'order';
    public $rules = array(
        'parent_id' => array(
            'field' => 'parent_id',
            'label' => 'Parent',
            'rules' => 'trim|intval'
        ),
        'title' => array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'trim|required|max_length[100]|xss_clean'
        ),
        'slug' => array(
            'field' => 'slug',
            'label' => 'Slug',
            'rules' => 'trim|required|max_length[100]|url_title|callback__unique_slug|xss_clean'
        ),
        'body' => array(
            'field' => 'body',
            'label' => 'Body',
            'rules' => 'trim|required'
        )
    );

    public function get_new()
    {
        $page = new stdClass();
        $page->title = '';
        $page->slug = '';
        $page->order = '';
        $page->body = '';
        $page->parent_id = 0;

        return $page;
    }

    public function delete($id)
    {
        // Delete a page
        parent::delete($id);

        // Reset parent ID for it's children
        $this->db->set('parent_id', 0);
        $this->db->where('parent_id', $id);
        $this->db->update($this->_table_name);
    }

    public function get_with_parent($id = NULL, $single = FALSE)
    {
        $this->db->select('pages.*, p.slug as parent_slug, p.title as parent_title');
        $this->db->join('pages as p', 'pages.parent_id = p.id', 'left');
        return parent::get($id, $single);
    }

    public function get_no_parents()
    {
        // Fetch pages without parents
        $this->db->select('id, title');
        $this->db->where('parent_id', 0);
        $pages = parent::get();

        // Return key => value pair array
        $array = array(0 => 'No parent');
        if(count($pages)) {
            foreach($pages as $page) {
                $array[$page->id] = $page->title;
            }
        }
        return $array;
    }

}
