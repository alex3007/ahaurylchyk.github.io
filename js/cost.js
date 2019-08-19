function btnClick2() {

    var s1 = document.costPrint.Filament.selectedIndex;
    var s2 = document.costPrint.mWeight.value;
    var rez = 1;
    var plast = 1;
    var p = document.getElementById('Out');


    if (s2 <= 10) {
        plast = 0.8;
    } else if ((s2 > 10) && (s2 <= 30)) {
        plast = 0.7;
    } else if ((s2 > 30) && (s2 <= 50)) {
        plast = 0.6;
    } else if ((s2 > 50) && (s2 <= 200)) {
        plast = 0.5;
    } else if ((s2 > 200) && (s2 <= 500)) {
        plast = 0.4;
    } else {
        plast = 0.3;
    };


    if (s1 == 0) {
        rez = (45 * 1.2 * s2 / 1000) + plast * s2;
    } else if (s1 == 1) {
        rez = (49 * 1.2 * s2 / 1000) + plast * s2;
    } else if (s1 == 2) {
        rez = (52 * 1.2 * s2 / 1000) + plast * s2;
    } else if (s1 == 3) {
        rez = (60 * 1.2 * s2 / 1000) + plast * s2;
    } else {
        rez = (90 * 1.2 * s2 / 1000) + plast * s2;
    };


    p.innerHTML = rez.toFixed(2);
};
