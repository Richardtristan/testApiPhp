const arrayImg = document.querySelectorAll(".jsHover");

document.addEventListener("mouseover", (e) => {
//console.log(arrayImg);
    let target = e.target;
    let className = target.className;
    let arraySplitClassName = className.split(' ');
    //console.log(arraySplitClassName);

    if (arraySplitClassName[2] === "jsHover" ) {
        target.src = target.dataset.shiny;
    } else {
        arrayImg.forEach(elem => {
            elem.src = elem.dataset.default;
        })
    }


})

// let modal = document.getElementById("myModal")
// modal.onclick = function () {
//     modal.style.display = "none";
// }


