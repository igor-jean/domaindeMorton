const fancy = document.querySelectorAll(".fancy");
const fancyBox = document.querySelector(".fancyBox");
const fermer = document.querySelector(".fermer");
const prevButton = document.querySelector(".prev-button");
const nextButton = document.querySelector(".next-button");
const fancyBoxImage = fancyBox.querySelector("img");
let currentIndex = 0;

fancy.forEach((fancy) => {
    fancy.addEventListener("click",()=>{
        fancyBox.style.display="block";
        fancyBoxImage.src = fancy.querySelector("img").src;
    })
});

fermer.addEventListener("click", ()=>{
    fancyBox.style.display = "none";
})  

prevButton.addEventListener("click", () => {
    if (currentIndex > 0) {
      currentIndex--;
      fancyBoxImage.src = fancy[currentIndex].querySelector("img").src;
    }
  });

  nextButton.addEventListener("click", () => {
    if (currentIndex < fancy.length - 1) {
      currentIndex++;
      fancyBoxImage.src = fancy[currentIndex].querySelector("img").src;
    }
  });
