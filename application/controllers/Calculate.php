<?php

class Calculate extends CI_Controller
{
  public function index()
  {
    $life_mission = $this->calculate_life_mission($_POST['day'], $_POST['month'], $_POST['year']);

    $souls_desire = $this->calculate_souls_desire($_POST['full_name']);

    $this->print($_POST['day']);
    $this->print($_POST['month']);
    $this->print($_POST['year']);

    $this->print_pre($life_mission);

    $this->print($_POST['full_name']);
    $this->print_pre($souls_desire);
  }

  private function calculate_life_mission($day, $month, $year)
  {
    $sum_1 = $this->digit_sum($day . $month . $year);

    if($sum_1 == 11 || $sum_1 == 22 || $sum_1 < 10) {
      return array($sum_1);
    }

    $result = str_split($sum_1);

    $sum_2 = $this->digit_sum($sum_1);

    if($sum_2 == 11 || $sum_2 == 22 || $sum_2 < 10) {
      array_push($result, $sum_2);

      return $result;
    }

    $sum_3 = $this->digit_sum($sum_2);

    if($sum_3 == 11 || $sum_3 == 22 || $sum_3 < 10) {
      array_push($result, $sum_3);

      return $result;
    }

    $sum_4 = $this->digit_sum($sum_3);

    array_push($result, $sum_4);

    return $result;
    
    // $summation_array = str_split($sum_1);
    // $summation_array_sum = array_sum(array_map('intval', $summation_array));


    // array_push($summation_array, $summation_array_sum);

    // return $summation_array;

    // x / y / z / w
    // devolver x / w
  }

  private function digit_sum($number) {
    $numberAsString = (string) $number;
    $digits = str_split($numberAsString);
    $sum = array_sum(array_map('intval', $digits));

    return $sum;
  }

  private function calculate_souls_desire($full_name)
  {
    $vowelValues = [
      'a' => 1,
      'e' => 5,
      'i' => 9,
      'o' => 6,
      'u' => 3,
    ];

    $lowerCaseName = strtolower($full_name);
    $sum = 0;
    
    for ($i = 0; $i < strlen($lowerCaseName); $i++) {
      $letter = $lowerCaseName[$i];
      if (array_key_exists($letter, $vowelValues)) {
        $sum += $vowelValues[$letter];
      }
    }

    if($sum == 11 || $sum == 22 || $sum < 10) {
      return $sum;
    }

    return 999;
  }

  private function print($content)
  {
    echo $content."<br>";
  }

  private function print_pre($content)
  {
    echo '<pre>';
    print_r($content);
    echo '</pre>';
  }
}