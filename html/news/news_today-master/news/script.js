let head = document.querySelector(".corona");
head.addEventListener("click", toogle);
function toogle() {
  // let plus = document.querySelector(".plus");
  // let hide = document.querySelector(".hide");
  head.classList.toggle("hover");
  // if (head.style.height === "50px") {
  //   head.style.height = "180px;";
  // } else {
  //   head.style.height = "50px";
  // }
}

//covid-19 API
function getData() {
  fetch("https://covid19.mathdro.id/api")
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      case1 = data.confirmed.value.toLocaleString("en-US");
      death = data.deaths.value.toLocaleString("en-US");
      recover = data.confirmed.value.toLocaleString("en-US");
      document.querySelector(".case1").innerHTML = case1;
      document.querySelector(".death1").innerHTML = death;
      document.querySelector(".recover1").innerHTML = recover;
    });
}
getData();
