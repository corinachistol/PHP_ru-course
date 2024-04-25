import { map, coordinates } from "./map.js";


    
function addVcoords(coords) {
    let vcoords = document.getElementById('vcoords');
    let span = "";
    
    coords.forEach(coord => {
        return span +=`<span>${coord}</span>`
    });
    
    vcoords.innerHTML= span;
}
addVcoords(coordinates);



function addHcoords() {
    let hcoords = document.getElementById('hcoords');
    let span = "";

    for(let ch = 1; ch <=10; ch++) {
        span += `<span>${ch}</span>`
    }

    hcoords.innerHTML = span;

}
addHcoords();



function shoot(coordinates){
    
    fetch(`http://127.0.0.1:5500/?shoot=${coordinates}`)
        .then(res => {
            if(res.ok){
                console.log(coordinates)
                let coords = coordinates.split('x')
                console.log(coords[0])
                console.log(coords[1])
                // location. assign("/")
            }else{
                console.log("Not successfull")
            }

        } )
        .catch(error => console.log(error))
}
shoot('4x3');


function addSquares() {
    let div_map = document.getElementById('map');
    let squares="";

    div_map.innerHTML = ``;

    for(let ri = 0; ri < 10; ri++) {
        for(let ci = 0; ci < 10; ci++) {
            let coordinates = `${ri}x${ci}`;
            

            if(map[ri][ci] == 1){
                squares += `
                    <a 
                        class="ship sq" 
                        href="/?shoot=${coordinates}"
                        onclick="shoot('${coordinates}')"
                    >
                    </a>
                `
            }else{
                squares += `
                     <a 
                        class="sq" 
                        href="/?shoot=${coordinates}"
                        onclick="shoot('${coordinates}')"
                    >
                    </a>
                `

            }

        }
    }
    div_map.innerHTML = squares;

}

addSquares();












