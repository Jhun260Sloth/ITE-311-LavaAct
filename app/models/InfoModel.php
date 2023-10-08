<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class InfoModel extends Model {
    public function getInfo()
    {
        return $this->db->table('lavaact')->get_all();
    }
    public function searchInfo($id)
    {
        return $this->db->table('lavaact')->where('id',$id)->get();
    }
}
?>
