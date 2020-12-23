const colorBtn = document.querySelector('.colorBtn');
const bodyBcg = document.querySelector('body');

const colors = ['rgb(247, 215, 215)','rgb(174,192,174)','rgb(255,255,255)'];

colorBtn.addEventListener('click',changeColor);

function changeColor (){
   // bodyBcg.style.backgroundColor = colors[2];  only one color change
   let random = Math.floor(Math.random()
   *colors.length)
   bodyBcg.style.backgroundColor = colors[random];
}