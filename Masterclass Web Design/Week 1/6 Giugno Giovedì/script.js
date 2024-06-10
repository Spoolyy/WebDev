document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        document.querySelector("p").textContent = "5 Seconds went by, now your paragraph also changed";
    }, 5000);
});