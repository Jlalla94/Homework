<?php
$person = [
	'name' => 'Vasil',
	'salary' => 500,
	'currency' => 'USD',
	'salary_uah' => function($subject) {
		if ($subject['currency'] == 'USD') {
			return $subject['salary'] * 28;
		} else if ($subject['currency'] == 'EUR') {
			return $subject['salary'] * 30;
		}
	},
    'promote' => function(&$subject){
        $subject['salary']+=50;
        return  $subject['salary'];
    }
];
$person['promote']($person);
echo $person['salary_uah']($person);
?>