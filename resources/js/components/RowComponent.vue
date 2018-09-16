<template>
	<tr>
		<td>{{ item.id }}</td>
		<td>{{ item.created_at | moment }}</td>
		<div>
			<td v-if="item.tipo == 1">entrada</td>
			<td v-else>salida</td>
		</div>
		<td>S/ {{ item.monto }}</td>
	</tr>
</template>

<script>
	var moment = require('moment');
	export default {
		props:['item'],
		data(){
			return {
			};
		},
		filters: {
		  moment: function (date) {
		    return moment(date).format('DD MMMM');
		  }
		},
		mounted() {
	            console.log('Component mounted.')
	        },	
	}
	
</script>