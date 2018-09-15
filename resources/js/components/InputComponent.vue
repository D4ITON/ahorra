<template>
	<div>
		<form action="" v-on:submit.prevent="newMovement()">
			<input name="movement" type="text" class="form-control" v-model="ingreso">
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
	</div>
</template>
<script>
	export default{
		data(){
			return {
				ingreso: ''
			}
		},
		mounted() {
            console.log('Component mounted.')
        },
        methods: {
        	newMovement(){
        		// alert(this.ingreso);
        		console.log(this.ingreso);
        	}
        }
	}
</script>