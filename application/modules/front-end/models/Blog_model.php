
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Blog_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function blog_detail($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->where('id', $id);

        $data = $this->db->get();
        return $data->row_array();
    }

    function blog_comment($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_comment');
        $this->db->where('id', $id);

        $data = $this->db->get();
        return $data->result_array();
    }

    function blog_related()
    {
        $this->db->select('*');
        $this->db->from('tbl_post');
        $this->db->limit(4);
        $this->db->order_by('created_at');


        $data = $this->db->get();
        return $data->result_array();
    }
}

?>