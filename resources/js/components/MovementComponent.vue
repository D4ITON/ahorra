<template>
    <div>
        <modal-component @new="addMovement"></modal-component>
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
            <row-component 
                v-for="item in movements"
                :key="item.id"
                :item="item">
            </row-component>
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
                    {'id': 3, 'fecha': 'dom 16 sep', 'movimiento': 'entrada', 'monto': 's/ 8.00'},
                    {'id': 4, 'fecha': 'dom 16 sep', 'movimiento': 'entrada', 'monto': 's/ 16.00'}
                ],
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods : {
            addMovement(movement){
                this.movements.push(movement);
            }
        }
    }
</script>
