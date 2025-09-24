<?php
$selectedDay = $_POST['day'];

$activities = [
    "Monday" => ["Archaeology Research", "Afternoon Tea at Liyue Harbor"],
    "Tuesday" => ["Mining Ores in Dihua Marsh", "Dinner at Wangshu Inn"],
    "Wednesday" => ["Work at the Wangsheng Funeral Parlor", "Enjoy some Osmanthus Wine"],
    "Thursday" => ["Check in with the Millileth", "Enjoy Dinner made by Xiangling and Guoba"],
    "Friday" => ["Visit Qingce Village", "Search for Cor Lapis"],
    "Saturday" => ["Teach Childe about Liyue Mannerisms", "Visit the Chasm"],
    "Sunday" => ["Visit Chenyu Vale", "Enjoy tea in Cloud Retainer's abode"]
];

if (isset($activities[$selectedDay])) {
    foreach ($activities[$selectedDay] as $activity) {
        echo "<p>$activity</p>";
    }
} else {
    echo "No activities planned for $selectedDay.";
}
?>
