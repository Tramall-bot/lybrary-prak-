const titletags = document.getElementsByClassName("title");
const imgsrctags = document.getElementsByClassName("imgsrc");
const bkIdTags = document.getElementsByClassName("bkid");
const body = document.getElementsByTagName("body")[0];
const noBooks = document.getElementById("nobooks")
if(noBooks)
{
  const div1 = document.createElement("div");
  const div2 = document.createElement("div");
  const div3 = document.createElement("div");
  div1.classList.add("container-joj");
  div2.style.cssText = "background-color: #413c37; border: 2px solid  #b49a5d; width: 32%; margin: 0 auto; text-align: center; border-top: none; heigh: 30px;";
  div3.classList.add("blockquote");
  div3.style.cssText = " color:#b49a5d; font-size:35px; margin:0px; left: 50%; text-align: center;";
  div3.innerText = "Книг с выбранным жанром нету в каталоге";
  div2.appendChild(div3);
  div1.appendChild(div2);
  body.insertBefore(div1, document.getElementById("booksStart"));
}else{

  
  let reverse = false;
  let crntBook;
  const bkNumber = document.getElementById("booknumber").value;
  
  const titles = Array();
  const imgsrcs = Array();
  const bkIds = Array();
  
  //Для для получения книг и фильтрации
  for (i = 0; i < titletags.length; i++) {
    titles.push(titletags[i].value);
    imgsrcs.push(imgsrctags[i].value);
    bkIds.push(bkIdTags[i].value);
  }
  while (titletags.length > 0) {
    titletags[0].remove();
    imgsrctags[0].remove();
    bkIdTags[0].remove();
  }
  document.getElementById("booknumber").remove();
  
  displaybooks(reverse);
  function displaybooks(reverse) {
    let rows = document.getElementsByClassName("shelfRow");
    while (rows.length > 0) {
      rows[0].remove();
    }
    let shelfs = document.getElementsByClassName("shelf");
    while (shelfs.length > 0) {
      shelfs[0].remove();
    }
    let brs = document.getElementsByClassName("shelfBr");
  
    while (brs.length > 0) {
      brs[0].remove();
    }
    let anchor = document.getElementById("booksStart");
    if (reverse) crntBook = bkNumber - 1;
    else crntBook = 0;
    do {
      const row = document.createElement("div");
      row.classList.add("row", "shelfRow");
      for (i = 0; i < 4; i++) {
        if (((crntBook < bkNumber) & !reverse) | (reverse & (crntBook >= 0))) {
          const col = document.createElement("div");
          col.classList.add("col-sm-3");
          const card = document.createElement("div");
          card.classList.add("card");
          const img = document.createElement("img");
          img.classList.add("card-img-top");
          img.alt = crntBook;
          img.src = imgsrcs[crntBook];
          const cardBody = document.createElement("div");
          cardBody.classList.add("card-body");
          const h5 = document.createElement("h5");
          h5.classList.add("card-title");
          h5.innerText = titles[crntBook];
          const a = document.createElement("a");
          a.href = "book.php?bk=" + bkIds[crntBook];
          a.classList.add("btn", "btn-info");
          a.innerText = "Читать";
          if (!reverse) {
            crntBook++;
          } else {
            crntBook--;
          }
          row.appendChild(col);
          col.appendChild(card);
          card.appendChild(img);
          card.appendChild(cardBody);
          cardBody.appendChild(h5);
          cardBody.appendChild(a);
        }
      }
  
      body.insertBefore(row, anchor);
  
      let br = document.createElement("br");
      br.classList.add("shelfBr");
      body.insertBefore(br, anchor);
  
      const shelf = document.createElement("img");
      shelf.src = "img/shelf.png";
      shelf.style.height = "200px";
      shelf.style.width = "100%";
      shelf.classList.add("d-inline-block", "align-top");
      shelf.alt = "shelf";
      shelf.loading = "lazy";
      shelf.classList.add("shelf");
      body.insertBefore(shelf, anchor);
  
      br = document.createElement("br");
      br.classList.add("shelfBr");
      body.insertBefore(br, anchor);
  
      br = document.createElement("br");
      br.classList.add("shelfBr");
      body.insertBefore(br, anchor);
    } while (((crntBook < bkNumber) & !reverse) | (reverse & (crntBook >= 0)));
  }
  document.getElementById("flipShelfs").addEventListener("click", () => {
    reverse = !reverse;
    displaybooks(reverse);
  });
}
