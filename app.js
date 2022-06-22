// fetch('https://smashbros-unofficial-api.vercel.app/api/v1/ultimate/characters/mario').then(res => res.json()).then(data=>console.log(data))
// console.log(fetch('https://smashbros-unofficial-api.vercel.app/api/'));

// console.log(fetch('https://randomuser.me/api'));

// console.log(fetch('https://rickandmortyapi.com/api'));

// console.log(fetch('https://smashbros-unofficial-api.vercel.app/api/v1/ultimate/characters/mario'));

function getNewSWAPI() {
  const baseSwapiURL = 'https://swapi.dev/api/people/'
  let num = Math.ceil(Math.random() * 79);
  if(num==17){
    num=50;
  }
  // console.log(num);
  let newURL= baseSwapiURL + String(num);
  return newURL;
}

function changeWinner() {
  document.getElementById('setWinner').value = 0;
}
function changeWinnerTwo() {
  document.getElementById('setWinner').value = 1;
}


// let swapiURL = 'https://swapi.dev/api/people/3';
async function getSwapi() {
  document.getElementById('name').textContent = 'Loading Character...';
  let newURL = getNewSWAPI();
  const result = await fetch(newURL);
  const info = await result.json();
  // console.log(info);
  const {name} = info;

  document.getElementById('name').textContent = name;

  // console.log(charName.value);
    document.getElementById('winnerOne').value = name;
}

// const swapiTwoURL= 'https://swapi.dev/api/people/4'
async function getSwapiTwo() {
  document.getElementById('nameTwo').textContent = 'Loading Character...';
  let newerURL = getNewSWAPI();
  const res = await fetch(newerURL);
  const data = await res.json();
  // console.log(data);
  const {name} = data;

  document.getElementById('nameTwo').textContent = name;
  // console.log(charNameTwo.value);
  document.getElementById('nameTwo').value = name;
}

getSwapi();
getSwapiTwo();
document.getElementById("characterOne").addEventListener("click", getSwapi);
document.getElementById("characterOne").addEventListener("click", getSwapiTwo);

document.getElementById("charOneWin").addEventListener("click", changeWinner);
document.getElementById("charTwoWin").addEventListener("click", changeWinnerTwo);



