const arrayImg = document.querySelectorAll(".imgHover");
const arrayName = document.querySelectorAll(".nameHover");
let pokemonId;


function CardId(input) {
    let regex = /card-[0-9]+/i;
    let isTrue = false;
    input.forEach(elem => {
        if (regex.test(elem)) {
            isTrue = true;
            pokemonId = elem;
        }
    })
    if (isTrue) {
        return true;
    }
}

function ClassId(input) {
    let regex = /pokemonName-[0-9]+/i;
        return regex.test(input);
}

document.addEventListener("mouseover", (e) => {

    let target = e.target;
    let arrayClassName = target.className.split(' ');
    if (target.id !== pokemonId) {
        arrayImg.forEach(elem => {
            elem.src = elem.dataset.default;
        })
        arrayName.forEach(elem => {
            elem.innerText = elem.dataset.name;

        })
    }
    if (CardId(arrayClassName)) {
        let Id = pokemonId.split('card-');

        arrayImg.forEach(elem => {
            let imagePkmId = elem.id.split('img-');

            if (imagePkmId[1] === Id[1]) {
                elem.src = elem.dataset.shiny;
            }
        })
        let pokemonName = document.getElementById('pokemonName-' + Id[1]);
        arrayName.forEach(elem => {
            let namePkmId = elem.id.split('pokemonName-');

            if (namePkmId[1] === Id[1]) {
                pokemonName.innerText = elem.dataset.story;
            }
        })

    }


    // if (ClassId(target.className)){
    //     let pokemonName = document.getElementById('pokemonName-' + Id[1]);
    //     console.log(pokemonName);
    // }

})

let modal = document.getElementsByClassName("myModal")[0];
if (modal !== null && modal !== undefined) {
    modal.onclick = function () {
        modal.style.display = "none";
    }
}