<?php
  $stage = 0; //This tells the program which part of the CSV it's in. 0=Data, 1=Questions, 2=Medications.
  $patient_data = [];
  $patient_questions = [];
  $req_questions = [];
  $patient_medications = [];
  $h = fopen("patients/P1.csv", "r"); //Be sure to change POST a file name from the selection page!
  while (($data = fgetcsv($h, 1000, ',')) !== FALSE){
    if($stage == 0){
    $patient_data[$data[0]] = $data[1];
    }
    if($data[0] == "---"){
      $stage += 1;
    }
    if($stage == 1){
      if($data[0] !== "Question" && $data[0] !== "---"){
        if($data[3] === "YES"){
          $req_questions[$data[0]] = $data[1];
        }else{
            $patient_questions[$data[0]] = $data[1];
        }
      }
    }
    if($stage == 2){

    }
  }

  fclose($h);
  echo "<pre>";
  var_dump($patient_data);
  echo "</pre>";
  echo "<pre>";
  var_dump($patient_questions);
  echo "</pre>";
 ?>
