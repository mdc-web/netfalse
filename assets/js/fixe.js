
if (typeof variableRecuperee.moyenne !== 'undefined'){

    
    console.log(variableRecuperee.moyenne);
    var moy = (Math.round(variableRecuperee.moyenne));

    let div = document.getElementById('fixe');

    for (let index =0; index < moy; index++) {

        div.innerHTML += '<i class="lar la-star fixe" style ="color: red"></i>';
        console.log(index);
    }


    for (let index = 5; index > moy; index--) {
        div.innerHTML += '<i class="lar la-star"  style ="color: black"></i>';
    }
    
   

} else {
    console.log('error')
}