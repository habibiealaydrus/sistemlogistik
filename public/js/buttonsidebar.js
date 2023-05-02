function myFunction() {
    const element = document.getElementById("pushmenu");
    const tulisan = document.getElementById("pushmenu");
    if (element.className == "fas fa-angle-double-left") {
        element.className = "fas fa-angle-double-right";

    } else {
        element.className = "fas fa-angle-double-left";

    }
}