<?php
$myfile = file_get_contents("/usr/src/myapp/working-guidlines.json", "true");
$array = json_decode($myfile, true);
$age = 67;
echo $array['specificRecommendations'][0]['ageRange'][0] . ' - ' . $array['specificRecommendations'][0]['ageRange'][1];
foreach($array['specificRecommendations'] as $v) {
    if ($v['ageRange'][0]< $age >=$v['ageRange'][1]) {
    // echo $v['ageRange'][0] . "\n";
    echo $v['title'] . "\n";    
}
?>