

$(document).ready(function () {
    /* gestion des button reseau sociaux */
    $(".social_play").click(()=>{
        $(".reseau").css("height", "240px");
    })

    /* slider partenaires */
    sliderPartnaireImg();
});


function sliderPartnaireImg(){
    let l = 0; // tours de boucle jusqua n-1
    let count = 0; // declage d'image de n à m-1
    setInterval(function(){
        let imgs = document.querySelectorAll("#slid_partenaire");
        if(l == imgs.length) {
            l = 0;
            count = 250; //revenir a la position init
        }
        l=l+2;
        count= count - 250;

        for(let img of imgs) {
            img.style.left = `${count}px`;
        }
    },3000);
}



