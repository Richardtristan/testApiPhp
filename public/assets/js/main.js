const arrayImg = document.querySelectorAll(".imgHover");

function useRegex(input) {
    let regex = /card-[0-9]+/i;
    return regex.test(input);
}

document.addEventListener("mouseover", (e) => {
//console.log(arrayImg);
    let target = e.target;
    if (useRegex(target.id)) {
        let pokemonId = target.id.split('card-');
        arrayImg.forEach(elem => {
            let imagePkmId = elem.id.split('img-');
            if (imagePkmId[1] === pokemonId[1]){
                elem.src = elem.dataset.shiny;
            }
        })
    }else if (target.id === 'pokedex'){
        arrayImg.forEach(elem => {
            elem.src = elem.dataset.default;
        })
    }
})

let modal = document.getElementsByClassName("myModal")[0]
if (modal !== null) {
    modal.onclick = function () {
        modal.style.display = "none";
    }
}

