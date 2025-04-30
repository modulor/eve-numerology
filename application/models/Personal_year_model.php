<?php

class Personal_year_model extends CI_Model
{
  public function get_by_year($year_field)
  {
    return $this->db->select($year_field)
      ->get('personal_year')
      ->row()
      ->$year_field;
  }
}
