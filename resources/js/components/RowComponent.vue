<template>
	<tr>
		<td>{{ item.id }}</td>
		<td>{{ item.created_at | moment }}</td>
		<div>
			<td v-if="item.tipo == 1" class="label label-rouded label-success">entrada</td>
			<td v-else class="label label-rouded label-danger">salida</td>
		</div>
		<td>S/ {{ item.monto }}</td>
	</tr>
</template>

</style>
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
		    return moment(date).format('DD MMM, hh:mm a');
		  }
		},
		mounted() {
	            console.log('Component mounted.')
	        },	
	}
	
</script>