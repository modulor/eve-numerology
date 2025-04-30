<?php

class Birthdate_numbers_model extends CI_Model
{
  public function get_essence_by_number($number)
  {
    return $this->db->select('essence')
      ->where('number', $number)
      ->get('birthdate_numbers')
      ->row()
      ->essence;
  }

  public function get_karma_by_number($number)
  {
    return $this->db->select('karma')
      ->where('number', $number)
      ->get('birthdate_numbers')
      ->row()
      ->karma;
  }

  public function get_past_lives_by_number($number)
  {
    return $this->db->select('past_lives')
      ->where('number', $number)
      ->get('birthdate_numbers')
      ->row()
      ->past_lives;
  }

  public function get_gift_by_number($number)
  {
    return $this->db->select('gift')
      ->where('number', $number)
      ->get('birthdate_numbers')
      ->row()
      ->gift;
  }

  public function get_life_mission_by_number($number)
  {
    return $this->db->select('life_mission')
      ->where('number', $number)
      ->get('birthdate_numbers')
      ->row()
      ->life_mission;
  }
}
