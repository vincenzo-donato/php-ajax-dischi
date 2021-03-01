// START AZIONE:  VUE JS 
let app = new Vue({
    // AZIONE: Assegno id 
    el: '#container',

    // START AZIONE: Assegno Var 
    data: {
        dischi: [''],
        generi: ['All'],
        iconsSocial: ['fab fa-facebook-square', 'fab fa-twitter', 'fab fa-instagram', 'fab fa-linkedin'],
        visualizza: 'All'
    },
    // END AZIONE: Assegno Var 

    // START AZIONE: Azione eseguita al caricamento della pagina (Non necessiata di comandi da parte del utente)
    mounted() {
        
        // START AZIONE: Axios per lavorare sul server 
        axios
            
            // ricerca del server 
            .get('partials/server.php')
            .then( result => {
                
                // Assegno lo stesso valore del risultato alle array dischi
                this.dischi = result.data;

                this.dischi.forEach(element => {
                    if(!this.generi.includes(element.genre)){
                        this.generi.push(element.genre);
                    }
                });
                
            });
        // END AZIONE: Axios per lavorare sul server 
        
    }
    // END AZIONE: Azione eseguita al caricamento della pagina (Non necessiata di comandi da parte del utente)

});
// END AZIONE:  VUE JS 
