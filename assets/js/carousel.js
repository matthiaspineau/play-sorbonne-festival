var myElement = document.getElementById('carousel');
var item = document.querySelectorAll('.elt_item');
var btnPrev = document.querySelector('.btn_prev');
var btnNext = document.querySelector('.btn_next');
var tabLink = document.querySelectorAll('.tab_link');
var detectPosition = document.querySelector('.detection_position')
var dectectNumero = document.querySelector('.detection_numero')
var mc = new Hammer(myElement);
var position = '0';
var eltItem = '0';

if (detectPosition.textContent != '') {
    position = Number(detectPosition.textContent);
}
if (dectectNumero.textContent != '') {
    eltItem = Number(dectectNumero.textContent);
}
// ------------
// affectation position carousel en fonction de $_GET
if (detectPosition.textContent != '') {
    item[eltItem].classList.add('item_visible');
    item[eltItem - 1].classList.remove('item_visible');
    tabLink[eltItem].classList.add('active_tab_link');
    tabLink[eltItem - 1].classList.remove('active_tab_link');
    myElement.style.transform = 'translateX( ' + position + '%)';
    if(eltItem == 0) {
        btnPrev.classList.add('desactiver')
    } else if (eltItem == 4 ) {
        btnNext.classList.add('desactiver')
    }
    else {
        btnPrev.classList.remove('desactiver')
        btnNext.classList.remove('desactiver')
    }
}
// ---------------------
// console.log(eltItem)
// console.log(position)
 
// Evenement swipeleft et swiperight
mc.on("swipeleft swiperight", function(ev) {

    if ( ev.type == 'swipeleft') {
 
        if (position == -400) {
            return
        }
        eltItem ++;
        position = position - 100;
        if(eltItem == 0) {
            btnPrev.classList.add('desactiver')
        } else if (eltItem == 4 ) {
            btnNext.classList.add('desactiver')
        }
        else {
            btnPrev.classList.remove('desactiver')
            btnNext.classList.remove('desactiver')
        }
        activeCarouselNext(myElement, item, tabLink, eltItem, position)
    }

    if ( ev.type == 'swiperight') {
        
        if (position == 0) {
            return
        }
        eltItem --;
        position = position + 100;
        if(eltItem == 0) {
            btnPrev.classList.add('desactiver')
        } else if (eltItem == 4 ) {
            btnNext.classList.add('desactiver')
        }
        else {
            btnPrev.classList.remove('desactiver')
            btnNext.classList.remove('desactiver')
        }
        activeCarouselPrev(myElement, item, tabLink, eltItem, position)
    }

});

btnPrev.addEventListener('click', function() {
   

    if (position == 0) {
        return
    }
    eltItem --;
    position = position + 100;
    if(eltItem == 0) {
        btnPrev.classList.add('desactiver')
    } else if (eltItem == 4 ) {
        btnNext.classList.add('desactiver')
    }
    else {
        btnPrev.classList.remove('desactiver')
        btnNext.classList.remove('desactiver')
    }
    activeCarouselPrev(myElement, item, tabLink, eltItem, position)
})


btnNext.addEventListener('click', function() {
   
    if (position == -400) {
        return
    }
    eltItem ++; 
    position = position - 100;
    if(eltItem == 0) {
        btnPrev.classList.add('desactiver')
    } else if (eltItem == 4 ) {
        btnNext.classList.add('desactiver')
    }
    else {
        btnPrev.classList.remove('desactiver')
        btnNext.classList.remove('desactiver')
    }
    activeCarouselNext(myElement, item, tabLink, eltItem, position)
    
})

// -------------------------------
// function activation du carousel
function activeCarouselNext(eltCarousel, eltItemCarousel, eltTab, numero, positionCarousel) {
    // console.log(positionCarousel)
    eltItemCarousel[numero].classList.add('item_visible');
    eltItemCarousel[numero - 1].classList.remove('item_visible');
    eltTab[numero].classList.add('active_tab_link');
    eltTab[numero - 1].classList.remove('active_tab_link');
    eltCarousel.style.transform = 'translateX( ' + positionCarousel + '%)';
}

function activeCarouselPrev(eltCarousel, eltItemCarousel, eltTab, numero, positionCarousel) {
    // console.log(positionCarousel)
    eltItemCarousel[numero].classList.add('item_visible');
    eltItemCarousel[numero + 1].classList.remove('item_visible');
    eltTab[numero].classList.add('active_tab_link');
    eltTab[numero + 1].classList.remove('active_tab_link');
    eltCarousel.style.transform = 'translateX( ' + positionCarousel + '%)';
}




