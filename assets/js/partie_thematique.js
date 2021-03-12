
let eltTabsLink = document.querySelectorAll('.tab_link')

eltTabsLink.forEach(function (eltTabLink) {

    eltTabLink.addEventListener('click', function(e){

        e.preventDefault()

        let numero = this.getAttribute('href')

        if (! this.classList.contains('active_tab_link')) {

            document.querySelector('.tab_link.active_tab_link').classList.remove('active_tab_link')
            this.classList.add('active_tab_link')

            document.querySelector('.tab_item.active_tab_item').classList.remove('active_tab_item')
            document.getElementById(numero).classList.add('active_tab_item')

        }

        
    })

})