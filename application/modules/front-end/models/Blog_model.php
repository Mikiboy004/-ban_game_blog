
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
        $this->db->select('*,tbl_user.file_name AS fileUser,tbl_comment.created_at AS timecom  ');
        $this->db->from('tbl_comment');
        $this->db->join('tbl_user', 'tbl_comment.user_id = tbl_user.id_user', 'left');
        $this->db->where('post_id', $id);

        $data = $this->db->get();
        return $data->result_array();
    }

    function blog_comment_count($id)
    {
        $this->db->select('count(*) AS countAll');
        $this->db->from('tbl_comment');
        $this->db->join('tbl_user', 'tbl_comment.user_id = tbl_user.id_user', 'left');
        $this->db->where('post_id', $id);

        $data = $this->db->get();
        return $data->row_array();
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