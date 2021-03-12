// --------------------------------------
// animation menu
// --------------------------------------
let btnMenu = document.querySelector('.btn_menu')
let nav = document.querySelector('.nav')
let eltBody = document.querySelector('.body')

btnMenu.addEventListener('click', function(e) {

    e.stopPropagation()

    if (nav.classList.contains('open')) {

        nav.classList.remove('open')
        return
    }

    nav.classList.add('open')
})

nav.addEventListener('click', function(e) {
    e.stopPropagation()
})

eltBody.addEventListener('click', function() {
    if (nav.classList.contains('open')) {

        nav.classList.remove('open')
        
    }
}) 
// --------------------------------------
// Fin animation menu
// --------------------------------------

// --------------------------------------
//      Date Evenement : Edition 2019
// --------------------------------------
let dateEvenement = document.getElementById('compte_rebour')

function compte_a_rebours(){
    let date_actuelle = new Date();
    let date_evenement = new Date("Sep 28 10:00:00 2019")
    let total_secondes = (date_evenement - date_actuelle) / 1000
    let prefixe = "Compte a rebours terminé dans ";

    if (total_secondes > 0) {

    let jours = Math.floor(total_secondes / (60 *60 *24))
    let heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 *60));
    minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);

    secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));

    // dateEvenement.innerHTML = 'Evènement dans ' + jours + 'J ' + ' ' + heures + 'H  ' + minutes + 'M '  +  secondes + 'S '
    dateEvenement.innerHTML =  jours + 'J ' + ' ' + heures + 'h:' + minutes + 'm:'  +  secondes + 's'
    } else {
        dateEvenement.innerHTML = '0:00:00'
    }

    let actualisation = setTimeout('compte_a_rebours()', 1000)
}
compte_a_rebours()
// --------------------------------------
//   Fin Date Evenement : Edition 2019
// --------------------------------------