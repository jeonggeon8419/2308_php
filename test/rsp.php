<?php
function generate_cases($num)
{
    $rpss = array(array('가위'), array('바위'), array('보'));
    if ($num < 2) return $rpss;
    $cases = generate_cases($num - 1);
    $new_cases = array();
    foreach ($cases as $case) {
        foreach ($rpss as $rps) {
            $temp = $case;
            $temp[] = $rps[0];
            $new_cases[] = $temp;
        }
    }
    return $new_cases;
}

function show_cases($cases)
{
    echo "<table>";
    foreach ($cases as $k => $case) {
        echo "<tr><td>" . ($k + 1) . "</td>";
        foreach ($case as $rps) echo "<td>$rps</td>";
        echo "</tr>";
    }
    echo "</table>";
}

$cases = generate_cases(4);
show_cases($cases);