window.onload = function () {
    f.onsubmit = function () {
        var r = true;
        if (numero.value.length == 0) {
            erronome.innerHTML = "Infome o numero. ";
            r = false;
        } else {
            erronome.innerHTML = " ";
        }
        return r;
    }
}