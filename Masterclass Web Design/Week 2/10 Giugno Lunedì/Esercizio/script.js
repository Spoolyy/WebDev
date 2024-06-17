function pageSearch() {
    var pageName = document.getElementById('pageSearchInput').value;
    if (pageName) {
        window.location.href = pageName + ".html"
    } else {
        alert("Please insert page name");
    }
};