<template>
	<div>
		<form action="" v-on:submit.prevent="newMovement()">
			<!-- Button trigger modal -->
			<button type="button" value="input" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
				Entrada
			</button>
			<!-- Button salida -->
			<button type="button" value="output" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
				Salida
			</button>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">titulo</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<input name="monto" type="text" class="form-control" v-model="monto">
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-primary">Guardar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</template>

<script>
	export default{
		data (){
			return {
				monto: ''
			};
		},
		mounted() {
            console.log('Component mounted.')
        },
        methods:{
        	newMovement(){
        		let movement = {
        			id: 5,
        			fecha: '15/09/2018', 
        			movimiento: 'entrada', 
        			monto: this.monto
        		};
        		this.$emit('new',movement);  //esta metodo envia una funcion new a su elemento padre
        	}
        }
	}
</script>