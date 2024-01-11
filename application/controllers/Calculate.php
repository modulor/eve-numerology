<?php

class Calculate extends CI_Controller
{
  public function index()
  {
    $life_mission = $this->calculate_life_mission($_POST['day'], $_POST['month'], $_POST['year']);

    $souls_desire = $this->calculate_souls_desire($_POST['full_name']);

    $latent_potential = $this->calculate_latent_potencial($_POST['full_name']);

    $personal_expression = $this->compress_number_to_one_digit($souls_desire + $latent_potential);

    $day_compressed = $this->compress_number_to_one_digit($_POST['day']);
    $month_compressed = $this->compress_number_to_one_digit($_POST['month']);
    $year_compressed = $this->compress_number_to_one_digit($_POST['year']);


    $this->print("Fecha de nacimiento: ".$_POST['day']." - ".$_POST['month']." - ".$_POST['year']);

    $this->print('');

    $this->print('Life Mission:');
    $this->print_pre($life_mission);

    $this->print('Día: '.$day_compressed);
    $this->print('Mes: '.$month_compressed);
    $this->print('Año: '.$year_compressed);

    $this->print('');
    $this->print('-----------------------------------------------------------');
    $this->print('');

    $this->print("Nombre completo: ".$_POST['full_name']);
    $this->print('');
    
    $this->print('Deseo del alma:');
    $this->print_pre($souls_desire);
    
    $this->print('Potencial Latente:');
    $this->print_pre($latent_potential);

    $this->print('Expresión personal:');
    $this->print_pre($personal_expression);
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

    return $this->compress_number_to_one_digit($sum);
  }

  private function calculate_latent_potencial($full_name)
  {
    $consonant_values = [
      'J' => 1, 'S' => 1, 'B' => 2, 'K' => 2, 'T' => 2, 'C' => 3, 'L' => 3, 'D' => 4,
      'M' => 4, 'V' => 4, 'N' => 5, 'Ñ' => 5, 'W' => 5, 'F' => 6, 'X' => 6, 'G' => 7,
      'P' => 7, 'Y' => 7, 'H' => 8, 'Q' => 8, 'Z' => 8, 'R' => 9
    ];

    $name_upper_case = strtoupper($full_name);
    
    $sum = 0;

    for ($i = 0; $i < strlen($name_upper_case); $i++) {
      $letter = $name_upper_case[$i];
      if (array_key_exists($letter, $consonant_values)) {
        $sum += $consonant_values[$letter];
      }
    }

    return $this->compress_number_to_one_digit($sum);
  }
  
  private function compress_number_to_one_digit($number)
  {
    $sum_1 = $this->digit_sum($number);

    if($sum_1 == 11 || $sum_1 == 22 || $sum_1 < 10) {
      return $sum_1;
    }

    $sum_2 = $this->digit_sum($sum_1);

    if($sum_2 == 11 || $sum_2 == 22 || $sum_2 < 10) {
      return $sum_2;
    }

    $sum_3 = $this->digit_sum($sum_2);

    if($sum_3 == 11 || $sum_3 == 22 || $sum_3 < 10) {
      return $sum_3;
    }

    return $this->digit_sum($sum_3);
  }

  // ---------------------------------------------------------------------------

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