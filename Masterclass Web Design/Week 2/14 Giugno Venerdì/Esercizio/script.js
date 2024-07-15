function changeColor() {
    const hexcode = document.getElementById('yourhexcode').value;
    if(/^#([0-9A-F]{3}){1,2}$/i.test(hexcode)) {
        document.body.style.backgroundColor = hexcode;
    } else if (/^([0-9A-F]{3}){1,2}$/i.test(hexcode)) {
        document.body.style.backgroundColor = "#" + hexcode
    } else {
        window.alert('Please enter a valid HEX code.');
    }
}