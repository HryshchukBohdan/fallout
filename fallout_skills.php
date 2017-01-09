<?php
$s = rand(1, 10);
$p = rand(1, 10);
$e = rand(1, 10);
$c = rand(1, 10);
$i = rand(1, 10);
$a = rand(1, 10);
$l = rand(1, 10);

$special = array("Strength" => $s, "Perception" => $p, "Endurance" => $e, "Charisma" => $c, "Intelligence" => $i, "Agility" => $a, "Luck" => $l);

$AllSkills = ceil($special["Luck"] / 2);

$CarryWeight = 150 + (10 * $special["Strength"]);
$DamageFromColdSteel = 0.5 * $special["Strength"];
$MeleeWeapons=(2 * $special["Strength"] + $AllSkills);
$Strength['CarryWeight'] = $CarryWeight;
$Strength['DamageFromColdSteel'] = $DamageFromColdSteel;
$Strength['MeleeWeapons'] = $MeleeWeapons;

$EnergyWeapons = $special["Perception"] * 2 + $AllSkills;
$Explosives = $special["Perception"] * 2 + $AllSkills;
$Lockpick = $special["Perception"] * 2 + $AllSkills;
$Perception['EnergyWeapons'] = $EnergyWeapons;
$Perception['Explosives'] = $Explosives;
$Perception['Lockpick'] = $Lockpick;

$Health = $special["Endurance"] * 20 + 100;
$BigGuns = $special["Endurance"] * 2 + $AllSkills;
$Unarmed = $special["Endurance"] * 2 + $AllSkills;
$RadiationResistance = 0.02 * ($special["Endurance"] - 1) ;
$PoisonResistance = 0.05 * ($special["Endurance"] - 1);
$Endurance['Health'] = $Health;
$Endurance['BigGuns'] = $BigGuns;
$Endurance['Unarmed'] = $Unarmed;
$Endurance['RadiationResistance'] = $RadiationResistance;
$Endurance['PoisonResistance'] = $PoisonResistance;

$Barter = $special["Charisma"] * 2 + $AllSkills;
$Speech = $special["Charisma"] * 2 + $AllSkills;
$Charisma['Barter'] = $Barter;
$Charisma['Speech'] = $Speech;

$SkillPoints = $special["Intelligence"] + 10;
$Medicine = $special["Intelligence"] * 2 + $AllSkills;
$Repair = $special["Intelligence"] * 2 + $AllSkills;
$Science = $special["Intelligence"] * 2 + $AllSkills;
$Intelligence['SkillPoints'] = $SkillPoints;
$Intelligence['Medicine'] = $Medicine;
$Intelligence['Repair'] = $Repair;
$Intelligence['Science'] = $Science;

$ActionPoints = $special["Agility"] * 2 + 65;
$SmallGuns = $special["Agility"] * 2 + $AllSkills;
$Sneak = $special["Agility"] * 2 + $AllSkills;
$Agility['ActionPoints'] = $ActionPoints;
$Agility['SmallGuns'] = $SmallGuns;
$Agility['Sneak'] = $Sneak;

$CriticalChance = $special["Luck"] * 0.01;
$Luck['CriticalChance'] = $CriticalChance;
$Luck['AllSkills'] = $AllSkills;

$skills = array('Strength' => $Strength, 'Perception' => $Perception,'Endurance'=> $Endurance,'Charisma'=> $Charisma,
	'Intelligence'=> $Intelligence,'Agility'=>  $Agility,'Luck'=>  $Luck);

foreach ($skills as $key => $value) {
	foreach ($value as $k => $v) {
       	echo "$k - $v <br>";
	}
}
?>