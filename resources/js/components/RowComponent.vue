<template>
	<tr>
		<td>{{ item.id }}</td>
		<td>{{ item.fecha }}</td>
		<td>{{ item.movimiento }}</td>
		<td>{{ item.monto }}</td>
	</tr>
</template>

<script>
	export default {
		props:['item'],
		data(){
			return {
			};
		},
		mounted() {
	            console.log('Component mounted.')
	        },	
	}
	
</script>