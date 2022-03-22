const img_cards = document.querySelectorAll(".img-card");
const model_container = document.querySelector(".model-container");
let img = document.querySelector(".model-container img");
const left_arrow = document.querySelector(".model-container .left-arrow i");
const right_arrow = document.querySelector(".model-container .right-arrow i");

//
let imgNumber = 0;
img_cards.forEach((img_card) => {
  console.log(img_card);

  img_card.addEventListener("click", (e) => {
    model_container.style.display = "block";
    console.log(img);

    img.src = e.target.src;
  });
});

left_arrow.addEventListener("click", () => {
  imgNumber++;
  show_img();
});

right_arrow.addEventListener("click", () => {
  imgNumber--;
  show_img();
});

const show_img = () => {
  if (imgNumber > img_cards.length - 1) {
    imgNumber = 0;
  } else if (imgNumber < 0) {
    imgNumber = img_cards.length - 1;
  }
  img_cards[imgNumber];
  img.src = img_cards[imgNumber].querySelector("img").src;
};
