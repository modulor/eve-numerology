<?php

class Name_numbers_model extends CI_Model
{
  public function get_souls_desire_by_number($number)
  {
    return $this->db->select('souls_desire')
      ->where('number', $number)
      ->get('name_numbers')
      ->row()
      ->souls_desire;
  }

  public function get_latent_potential_by_number($number)
  {
    return $this->db->select('latent_potential')
      ->where('number', $number)
      ->get('name_numbers')
      ->row()
      ->latent_potential;
  }

  public function get_personal_expression_by_number($number)
  {
    return $this->db->select('personal_expression')
      ->where('number', $number)
      ->get('name_numbers')
      ->row()
      ->personal_expression;
  }
}
