<template>
	<tr>
		<td>{{ item.id }}</td>
		<td>{{ item.created_at }}</td>
		<td>{{ item.tipo }}</td>
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