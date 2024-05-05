<?php
function mnozenie($tab1, $tab2, $tab3, $tab4, $tab5, $tab6) {
    $cell1 = ($tab1[0]*$tab4[0])+($tab1[1]*$tab5[0])+($tab1[2]*$tab6[0]);
    $cell2 = ($tab1[0]*$tab4[1])+($tab1[1]*$tab5[1])+($tab1[2]*$tab6[1]);
    $cell3 = ($tab1[0]*$tab4[2])+($tab1[1]*$tab5[2])+($tab1[2]*$tab6[2]);
    $cell4 = ($tab2[0]*$tab4[0])+($tab2[1]*$tab5[0])+($tab2[2]*$tab6[0]);
    $cell5 = ($tab2[0]*$tab4[1])+($tab2[1]*$tab5[1])+($tab2[2]*$tab6[1]);
    $cell6 = ($tab2[0]*$tab4[2])+($tab2[1]*$tab5[2])+($tab2[2]*$tab6[2]);
    $cell7 = ($tab3[0]*$tab4[0])+($tab3[1]*$tab5[0])+($tab3[2]*$tab6[0]);
    $cell8 = ($tab3[0]*$tab4[1])+($tab3[1]*$tab5[1])+($tab3[2]*$tab6[1]);
    $cell9 = ($tab3[0]*$tab4[2])+($tab3[1]*$tab5[2])+($tab3[2]*$tab6[2]);

    echo "Wynik mnozenia macierzy:\n" . $cell1 . " " . $cell2 . " " . $cell3 . "\n" . $cell4 . " " . $cell5 . " " . $cell6 . "\n" . $cell7 . " " . $cell8 . " " . $cell9;
}

$tab1 = array (3,9,6);
$tab2 = array (5,8,4);
$tab3 = array (1,7,2);

$tab4 = array (5,9,3);
$tab5 = array (8,4,2);
$tab6 = array (1,7,6);

mnozenie($tab1, $tab2, $tab3, $tab4, $tab5, $tab6);
?>