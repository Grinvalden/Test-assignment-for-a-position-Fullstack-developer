const paragraph = document.getElementById("paragraph");
const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");

let isButton1Clicked = false;

button1.addEventListener("click", () => {
  isButton1Clicked = true; 
});

button2.addEventListener("click", () => {
  if (isButton1Clicked) {
    paragraph.classList.toggle("hidden");
    isButton1Clicked = false;
  }
});
