const wechatIcon = document.getElementById("wechat-icon");
const qrcodePopup = document.getElementById("qrcode-popup");
const closeButton = document.querySelector("#qrcode-popup .close-button");

wechatIcon.addEventListener("click", () => {
    qrcodePopup.style.display = "block";
});

closeButton.addEventListener("click", () => {
    qrcodePopup.style.display = "none";
});