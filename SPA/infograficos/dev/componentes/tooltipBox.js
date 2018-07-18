let tooltipbox_event_methods = {
	methods:{
		tip(number, event){
			this.tipReset()
			this.tootltipsData[number].clicked = true

			let appBounding = this.$el.getBoundingClientRect() // object with bounding offsets

			let posX = event.clientY - appBounding.top - 40
			let posY = event.clientX - appBounding.left - 200 

			posX < 0 ? posX = 0 : posX = posX 
			posY < 0 ? posY = 0 : posY = posY

			this.tootltipsData[number].style.top = 	posX + 'px' 
			this.tootltipsData[number].style.left = posY + 'px'
		},
		tipReset(){
			this.tootltipsData.map(function(index) {
				index.clicked = false
			})
		}
	},
}

let tooltipbox = {
	name:'tooltipbox',
	data: function(){
		return {
			display: this.attr.clicked
		}
	},
	template:`
		<div class="tooltipbox" 
			v-if="this.attr.clicked"
			:style="attr.style">
			<h5>{{attr.title}}</h5>
			<p>{{attr.text}}</p>
			<span class="btnClose" @click="$emit('reset')">X</span>
		</div>
	`,
	props: ['attr']
}