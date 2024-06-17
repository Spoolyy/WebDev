document.addEventListener('DOMContentLoaded', () => {
    const greetButton = document.getElementById("greetButton");
    const nameInput = document.getElementById("nameInput");
    const greeting = document.getElementById("greeting");
    const nameList = document.getElementById("nameList");

    greetButton.addEventListener('click', () => {
        const name = nameInput.value;
        if (name) {
            greeting.textContent = "Hello " + name + "!";
        } else {
            window.alert("please state your name");
            greeting.textContent = null;
        }
        var listItem = document.createElement("li"); //viene creata un elemento 'li' (list item): <li></li>
        listItem.textContent = name; //viene assegnato un valore all'elemento: <li> ${name} </li>
        if (listItem.textContent != "") {
            nameList.appendChild(listItem); //viene assegnato l'elemento 'listItem' alla lista 'nameList'
        }
    })
})