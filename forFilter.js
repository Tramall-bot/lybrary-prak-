const titletags = document.getElementsByClassName("title");
const imgsrctags = document.getElementsByClassName("imgsrc");
const gensForBookstags = document.getElementsByClassName("gennameFB");
const genIdtags = document.getElementsByClassName("genid");
const genNametags = document.getElementsByClassName("genname");

const body = document.getElementsByTagName("body")[0];

let reverse = false;
const titles = Array();
const imgsrcs = Array();
const gensForBooks = Array();
const gensName = Array();
const gensId = Array();
//Для для получения книг и фильтрации
for (i = 0; i < titletags.length; i++) {
  titles.push(titletags[i].value);
  imgsrcs.push(imgsrctags[i].value);
  gensForBooks.push(gensForBookstags[i].value);
}
while (titletags.length > 0) {
  titletags[0].remove();
  imgsrctags[0].remove();
  gensForBookstags[0].remove();
}

for (i = 0; i < genIdtags.length; i++) {
  gensId.push(genIdtags[i].value);
  gensName.push(genNametags[i].value);
}
while (genIdtags.length > 0) {
  genIdtags[0].remove();
  genNametags[0].remove();
}

displaybooks(reverse);
function displaybooks(reverse) {
  const temp = document.getElementsByClassName("bookimg");
  while (temp.length > 0) {
    body.removeChild(temp[0]);
  }
  if (!reverse) {
    for (let i = 0; i < titles.length; i++) {
      const img = document.createElement("img");
      img.src = imgsrcs[i];
      img.alt = "test";
      img.classList.add("bookimg");
      img.height = "300"; //Не забыть переместить это в стили
      img.width = "300";
      body.appendChild(img);
    }
  } else {
    for (let i = titles.length - 1; i >= 0; i--) {
      const img = document.createElement("img");
      img.src = imgsrcs[i];
      img.alt = "test";
      img.classList.add("bookimg");
      img.height = "300"; //Не забыть переместить это в стили
      img.width = "300";
      body.appendChild(img);
    }
  }
}

const btn = document.getElementById("idSort");
btn.addEventListener("click", () => {
  reverse = !reverse;
  displaybooks(reverse);
});
printGens();
function printGens() {
  for (let i = gensId.length - 1; i >= 0; i--) {
    const a = document.createElement("a");
    a.innerText = gensName[i];
    a.href = "?gen=" + gensId[i];
    body.insertBefore(a, btn.nextSibling);
  }
}
