new Vue({
    el  : '#wall',
    data: {
        publicaciones: [],
        numero       : 2,
        descripcion  : '',
        imagen       : '',
        archivo      : '',
        errors       : [],
    },
    created: function() {
        this.getpublics();
    },
    computed: {

    },
    methods: {

        getpublics: function() {
            var url = 'panel/publicaciones/' + this.numero;
            axios.get(url).then(response => {
                this.publicaciones = response.data.data;
            });
        },
        getmore: function() {
                                this.numero = this.numero + 2;
                            var url         = 'panel/publicaciones/' + this.numero;
            axios.get(url).then(response => {
                this.publicaciones = response.data.data;
            });
        },
        like: function(publicacion){
        	var url = 'panel/publicaciones/like/'+publicacion.id;
        	axios.get(url).then(response =>{
        		this.getpublics();
        	});
        },
    },
    filters: {
        capitalize: function(value) {
            if (!value) return ''
            return value = value.toLowerCase().replace(/\b[a-z]/g, function(letra) {
                return letra.toUpperCase();
            });
        },
        fecha: function(value) {
                                v          = new Date(value);
                            var meses      = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                            var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
            return diasSemana[v.getDay()] + ", " + v.getDate() + " de " + meses[v.getMonth()] + " de " + v.getFullYear();
        }
    }
});