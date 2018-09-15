<template>
    <div>
        <modal-component></modal-component>
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Fecha</th>
              <th scope="col">Movimiento</th>
              <th scope="col">Monto</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in movements">
              <th scope="item.id" v-text="item.id">1</th>
              <td v-text="item.fecha">asdf</td>
              <td v-text="item.movimiento">sdf</td>
              <td v-text="item.monto">sdf</td>
            </tr>
          </tbody>
    </table>
    </div>
    
</template>

<script>
    export default {
        data(){
            return {
                 movements: [
                    {'id': 1, 'fecha': 'vie 14 sep', 'movimiento': 'entrada', 'monto': 's/ 10.00'},
                    {'id': 2, 'fecha': 'sab 15 sep', 'movimiento': 'salida', 'monto': 's/ 12.00'},
                    {'id': 3, 'fecha': 'dom 16 sep', 'movimiento': 'entrada', 'monto': 's/ 8.00'}
                ],
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
