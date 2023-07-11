function startChat(id) {
    var iframe = document.getElementById("chat-iframe-" + id);
    var officerCards = document.getElementById("officer-cards");
    var closeButton = document.createElement("button");
    closeButton.innerHTML = "Close";
    closeButton.style.position = "absolute";
    closeButton.style.bottom = "-100px";
    closeButton.style.left = "50%";
    closeButton.style.transform = "translateX(-50%)";
    closeButton.style.transition = "opacity 1s";
    closeButton.style.backgroundColor = "#007bff";
    closeButton.style.color = "#333";
    closeButton.style.border = "1px solid #333";
    closeButton.style.borderRadius = "5px";
    closeButton.style.fontSize = "16px";
    closeButton.style.color = "#fff";
    closeButton.style.padding = "10px 20px";
    closeButton.onclick = function () {
        iframe.style.transition = "opacity 1s";
        iframe.style.opacity = "0";
        setTimeout(function () {
            iframe.style.display = "none";
        }, 1000);
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
    officerCards.style.opacity = "1";
    officerCards.style.transition = "opacity 1s";
    officerCards.style.opacity = "0";
    setTimeout(function () {
        officerCards.style.display = "none";
        iframe.style.display = "block";
        iframe.style.transition = "opacity 1s";
        setTimeout(function () {
            iframe.style.opacity = "1";
            closeButton.style.opacity = "1";
        }, 1000);
    }, 100);
    iframe.parentNode.insertBefore(closeButton, iframe.nextSibling);
}