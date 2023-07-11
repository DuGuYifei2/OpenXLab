function startChat(id) {
    var iframe = document.getElementById("chat-iframe-" + id);
    var officerCards = document.getElementById("officer-cards");
    var closeButton = document.createElement("button");
    closeButton.innerHTML = "返回";
    closeButton.classList.add("btn");
    closeButton.classList.add("r-04");
    closeButton.classList.add("btn--theme");
    closeButton.classList.add("hover--theme");
    closeButton.style.position = "absolute";
    closeButton.style.bottom = "-100px";
    closeButton.style.left = "50%";
    closeButton.style.transform = "translateX(-50%)";
    closeButton.style.transition = "opacity 1s";
    closeButton.onclick = function () {
        iframe.style.transition = "opacity 1s";
        iframe.style.opacity = "0";
        setTimeout(function () {
            iframe.style.display = "none";
        }, 500);
        closeButton.style.opacity = "0";
        setTimeout(function () {
            closeButton.remove();
            officerCards.style.display = "flex";
            officerCards.style.opacity = "1";
            officerCards.style.transition = "opacity 0.5s";
        }, 500);
    };
    iframe.style.opacity = "0";
    iframe.style.width = officerCards.offsetWidth + "px";
    iframe.style.height = officerCards.offsetHeight + "px";
    officerCards.style.opacity = "0";
    setTimeout(function () {
        officerCards.style.display = "none";
        iframe.style.display = "block";
        setTimeout(function () {
            iframe.style.transition = "opacity 0.2s";
            iframe.style.opacity = "1";
            closeButton.style.opacity = "1";
            iframe.parentNode.insertBefore(closeButton, iframe.nextSibling);
        }, 200);
    }, 200);
}