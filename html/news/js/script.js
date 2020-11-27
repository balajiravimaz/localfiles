var div = document.createElement("div");
div.textContent = "its dynamic webste";
div.setAttribute("class", "note", "note1");
document.body.appendChild(div);

setTimeout(function () {
  div.textContent = "Top 1 Flash News";
}, 5000);
