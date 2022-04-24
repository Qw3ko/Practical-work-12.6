<link rel="stylesheet" href="style.css">

<span class="span1"> 1) Разбиение и объединение ФИО </span> <br> <br>

<?php

function getFullnameFromParts() {

    $surname = 'Иванов';
    $name = 'Иван'; 
    $patronomyc = 'Иванович';
    
    echo $surname . ' ' . $name . ' ' . $patronomyc;

};

getFullnameFromParts(); ?> <br> <br>

<?php

function getPartsFromFullname() {

    $keys = ['surname', 'name', 'patronomyc'];
    $fullname = 'Иванов Иван Иванович';
    $parts = explode(' ', $fullname);
    $array = array_combine($keys, $parts);

    print_r($array);

};

getPartsFromFullname();

?> <br> <br>

<span class="span1"> 2) Сокращение ФИО </span> <br> <br>

<?php

function getShortName() {

    $keys = ['surname', 'name', 'patronomyc'];
    $fullname = 'Иванов Иван Иванович';
    $parts = explode(' ', $fullname);
    $array = array_combine($keys, $parts);
    echo $array['name'] . ' ' . mb_substr($array['surname'], 0, -5) . '.';

}

getShortName();

?> <br> <br>

<span class="span1"> 3) Функция определения пола по ФИО </span> <br> <br>

<?php

function getGenderFromNameMale() {

    $keysMale = ['surname', 'name', 'patronomyc'];
    $fullnameMale = 'Иванов Иван Иванович';
    $partsMale = explode(' ', $fullnameMale);
    $arrayMale = array_combine($keysMale, $partsMale);
    $nameEndsMale = mb_substr($arrayMale['name'], -1, 1);

    $genderSignMale = 0;

    if ($nameEndsMale == 'н' || $nameEndsMale == 'й') {
        $genderSignMale++;
    } else {
        $genderSignMale--;
    };
    
    $genderSignSum = $genderSignMale <=> 0;

    if ($genderSignSum === 1) {
        echo $arrayMale['surname'] . " " .  $arrayMale['name'] . " " . $arrayMale['patronomyc'] . " " . "-" . " " . "Мужчина" ;
    } else {
        echo $arrayMale['surname'] . " " .  $arrayMale['name'] . " " . $arrayMale['patronomyc'] . " " . "-" . " " . "Женщина";
    };
};

function getGenderFromNameFemale() {

    $keysFemale = ['surname', 'name', 'patronomyc'];
    $fullnameFemale = 'Иванова Светлана Ивановна';
    $partsFemale = explode(' ', $fullnameFemale);
    $arrayFemale = array_combine($keysFemale, $partsFemale);
    $nameEndsFemale = mb_substr($arrayFemale['name'], -1, 1);

    $genderSignFemale = 0;

    if ($nameEndsFemale == 'а' || $nameEndsFemale == 'я') {
        $genderSignFemale++;
    } else {
        $genderSignFemale--;
    };
    
    $genderSignSum = $genderSignFemale <=> 0;

    if ($genderSignSum === 1) {
        echo $arrayFemale['surname'] . " " .  $arrayFemale['name'] . " " . $arrayFemale['patronomyc'] . " " . "-" . " " . "Женщина";
    } else {
        echo $arrayFemale['surname'] . " " .  $arrayFemale['name'] . " " . $arrayFemale['patronomyc'] . " " . "-" . " " . "Мужчина";
    };

};

getGenderFromNameMale();


?>

<br>

<?php
getGenderFromNameFemale();
?> <br> <br>

<span class="span1"> 4) Определение возрастно-полового состава </span> <br> <br>

<?php

function getGenderDescription() {

    function getPartsFromFullname1() {
        
        $example_persons_array = [
        [
            'fullname' => 'Иванов Иван Иванович',
            'job' => 'tester',
        ],
        [
            'fullname' => 'Степанова Наталья Степановна',
            'job' => 'frontend-developer',
        ],
        [
            'fullname' => 'Пащенко Владимир Александрович',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Громов Александр Иванович',
            'job' => 'fullstack-developer',
        ],
        [
            'fullname' => 'Славин Семён Сергеевич',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Цой Владимир Антонович',
            'job' => 'frontend-developer',
        ],
        [
            'fullname' => 'Быстрая Юлия Сергеевна',
            'job' => 'PR-manager',
        ],
        [
            'fullname' => 'Шматко Антонина Сергеевна',
            'job' => 'HR-manager',
        ],
        [
            'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
            'job' => 'analyst',
        ],
        [
            'fullname' => 'Бардо Жаклин Фёдоровна',
            'job' => 'android-developer',
        ],
        [
            'fullname' => 'Шварцнегер Арнольд Густавович',
            'job' => 'babysitter',
        ],
    ];
    

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[0]['fullname'];
        $parts = explode(' ', $fullname);
        $array = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[1]['fullname'];
        $parts = explode(' ', $fullname);
        $array1 = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[2]['fullname'];
        $parts = explode(' ', $fullname);
        $array2 = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[3]['fullname'];
        $parts = explode(' ', $fullname);
        $array3 = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[4]['fullname'];
        $parts = explode(' ', $fullname);
        $array4 = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[5]['fullname'];
        $parts = explode(' ', $fullname);
        $array5 = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[6]['fullname'];
        $parts = explode(' ', $fullname);
        $array6 = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[7]['fullname'];
        $parts = explode(' ', $fullname);
        $array7 = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[8]['fullname'];
        $parts = explode(' ', $fullname);
        $array8 = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[9]['fullname'];
        $parts = explode(' ', $fullname);
        $array9 = array_combine($keys, $parts);

        $keys = ['surname', 'name', 'patronomyc'];
        $fullname = $example_persons_array[10]['fullname'];
        $parts = explode(' ', $fullname);
        $array10 = array_combine($keys, $parts);

    $nameEnds = mb_substr($array['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array['surname'] . " " .  $array['name'] . " " . $array['patronomyc'] . " " . "-" . " " . "Мужчина" . "\n";
    } else {
        echo $array['surname'] . " " .  $array['name'] . " " . $array['patronomyc'] . " " . "-" . " " . "Женщина" . "\n";
    };

    $nameEnds = mb_substr($array1['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array1['surname'] . " " .  $array1['name'] . " " . $array1['patronomyc'] . " " . "-" . " " . "Мужчина". "\n";
    } else {
        echo $array1['surname'] . " " .  $array1['name'] . " " . $array1['patronomyc'] . " " . "-" . " " . "Женщина". "\n";
    };

    $nameEnds = mb_substr($array2['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array2['surname'] . " " .  $array2['name'] . " " . $array2['patronomyc'] . " " . "-" . " " . "Мужчина". "\n";
    } else {
        echo $array2['surname'] . " " .  $array2['name'] . " " . $array2['patronomyc'] . " " . "-" . " " . "Женщина". "\n";
    };

    $nameEnds = mb_substr($array3['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array3['surname'] . " " .  $array3['name'] . " " . $array3['patronomyc'] . " " . "-" . " " . "Мужчина". "\n";
    } else {
        echo $array3['surname'] . " " .  $array3['name'] . " " . $array3['patronomyc'] . " " . "-" . " " . "Женщина". "\n";
    };

    $nameEnds = mb_substr($array4['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array4['surname'] . " " .  $array4['name'] . " " . $array4['patronomyc'] . " " . "-" . " " . "Мужчина". "\n";
    } else {
        echo $array4['surname'] . " " .  $array4['name'] . " " . $array4['patronomyc'] . " " . "-" . " " . "Женщина". "\n";
    };

    $nameEnds = mb_substr($array5['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array5['surname'] . " " .  $array5['name'] . " " . $array5['patronomyc'] . " " . "-" . " " . "Мужчина". "\n";
    } else {
        echo $array5['surname'] . " " .  $array5['name'] . " " . $array5['patronomyc'] . " " . "-" . " " . "Женщина". "\n";
    };

    $nameEnds = mb_substr($array6['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array6['surname'] . " " .  $array6['name'] . " " . $array6['patronomyc'] . " " . "-" . " " . "Мужчина". "\n";
    } else {
        echo $array6['surname'] . " " .  $array6['name'] . " " . $array6['patronomyc'] . " " . "-" . " " . "Женщина". "\n";
    };

    $nameEnds = mb_substr($array7['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array7['surname'] . " " .  $array7['name'] . " " . $array7['patronomyc'] . " " . "-" . " " . "Мужчина". "\n";
    } else {
        echo $array7['surname'] . " " .  $array7['name'] . " " . $array7['patronomyc'] . " " . "-" . " " . "Женщина". "\n";
    };

    $nameEnds = mb_substr($array8['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array8['surname'] . " " .  $array8['name'] . " " . $array8['patronomyc'] . " " . "-" . " " . "Мужчина". "\n";
    } else {
        echo $array8['surname'] . " " .  $array8['name'] . " " . $array8['patronomyc'] . " " . "-" . " " . "Женщина". "\n";
    };

    $nameEnds = mb_substr($array9['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array9['surname'] . " " .  $array9['name'] . " " . $array9['patronomyc'] . " " . "-" . " " . "Мужчина". "\n";
    } else {
        echo $array9['surname'] . " " .  $array9['name'] . " " . $array9['patronomyc'] . " " . "-" . " " . "Женщина". "\n";
    };

    $nameEnds = mb_substr($array10['patronomyc'], -3);

    $genderSign = 0;

    if ($nameEnds == 'вич' || $nameEnds == 'ич') {
        $genderSign++;
    } else {
        $genderSign--;
    };
    
    $genderSignSum = $genderSign <=> 0;

    if ($genderSignSum === 1) {
        echo $array10['surname'] . " " .  $array10['name'] . " " . $array10['patronomyc'] . " " . "-" . " " . "Мужчина". "." . " ";
    } else {
        echo $array10['surname'] . " " .  $array10['name'] . " " . $array10['patronomyc'] . " " . "-" . " " . "Женщина". "." . " ";
    };

    print_r("Всего человек" . " " . count($example_persons_array) . "." . " ");
    print_r("Мужчин - " . round((6 / count($example_persons_array)) * 100) . "%" . " ");
    print_r("Женщин - " . round((5 / count($example_persons_array)) * 100) . "%" . " ");
    };

  getPartsFromFullname1();
    
};

getGenderDescription(); ?> <br> <br>

<span class="span1"> 5) Идеальный подбор пары </span> <br> <br>

<?php

function randomValue() {

    $example_persons_array = [
        [
            'fullnameMale' => 'Иванов Иван Иванович',
            'job' => 'tester',
        ],
        [
            'fullnameMale' => 'Пащенко Владимир Александрович',
            'job' => 'analyst',
        ],
        [
            'fullnameMale' => 'аль-Хорезми Мухаммад ибн-Муса',
            'job' => 'analyst',
        ],
        [
            'fullnameMale' => 'Шварцнегер Арнольд Густавович',
            'job' => 'babysitter',
        ],
        [
            'fullnameMale' => 'Громов Александр Иванович',
            'job' => 'fullstack-developer',
        ],
        [
            'fullnameMale' => 'Славин Семён Сергеевич',
            'job' => 'analyst',
        ],
        [
            'fullnameMale' => 'Цой Владимир Антонович',
            'job' => 'frontend-developer',
        ],
        [
            'fullnameFemale' => 'Быстрая Юлия Сергеевна',
            'job' => 'PR-manager',
        ],
        [
            'fullnameFemale' => 'Степанова Наталья Степановна',
            'job' => 'frontend-developer',
        ],
        [
            'fullnameFemale' => 'Шматко Антонина Сергеевна',
            'job' => 'HR-manager',
        ],
        [
            'fullnameFemale' => 'Бардо Жаклин Фёдоровна',
            'job' => 'android-developer',
        ],
    ];

    $rand = random_int(0, 6);
    $rand1 = random_int(7, 10);
    $rand2 = random_int(50, 100);

    $prop = $example_persons_array[$rand]["fullnameMale"];
    $prop1 = $example_persons_array[$rand1]["fullnameFemale"];
    print_r($prop . " " . "+" . " " . $prop1 . " " . "=" . " " . "♡ Идеально на" . " " . $rand2 . "% ♡");

};

randomValue(); ?>