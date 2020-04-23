
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Profile_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function profile($Id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('id_user', $Id);

        $data = $this->db->get();
        return $data->row_array();
    }

}

?>