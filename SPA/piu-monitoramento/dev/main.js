let vm = new Vue({
	el: '#app',
	data:{
		projectId: undefined,
		isFocused: false,
		display:{
			mapa: true,
			sumario: true,
			ficha: false,
		},
		monitoramento: undefined,
		hiperlinks: false

	}, 
	components: {
		mapa,
		sumario,
		ficha
	},
	created(){
		let app = this;
		axios.get('http://spurbsp163:7080/piu-monitoramento-backend/')
		.then(function (response) {
			// handle success
			// console.log(response.data.monitoramento);
			app.monitoramento = response.data.monitoramento;
			app.hiperlinks = response.data.hiperlinks
		})
		.catch(function (error) {
			// handle error
			console.log(error);
		})
		// .then(function () {
		// 	// always executed
		// });
	}, 
	watch:{
		projectId(newprop, oldprop){
			if(this.projectId != undefined) {
				this.display.sumario = false
				this.display.ficha = true
				this.isFocused = true
			}
			else{
				this.display.mapa = true
				this.display.sumario = true
				this.display.ficha = false
				this.isFocused = false
			}
		}
	},
	methods:{
		receiveId(id){
			this.projectId = id
			if (id == undefined){
				this.display.sumario = true
				this.display.ficha = false
				this.isFocused = false
			} 
		}
	}
})