function somenteNumeros(e) {
    var charCode = e.charCode ? e.charCode : e.keyCode;
    if (charCode != 8 && charCode != 9) {
        if (charCode < 48 || charCode > 57) {
            return false;
        }
    }

    return true;
}