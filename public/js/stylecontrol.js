function showStats() {
    document.getElementById("nivel1").style.display = "none";
    document.getElementById("btn_lv1").classList.remove("active");

    document.getElementById("estadisticas").style.display = "";
    document.getElementById("btn_stats").classList.add("active")
}

function showLv1() {
    document.getElementById("estadisticas").style.display = "none";
    document.getElementById("btn_stats").classList.remove("active");

    document.getElementById("nivel1").style.display = "";
    document.getElementById("btn_lv1").classList.add("active");
}