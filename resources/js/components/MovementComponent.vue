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
                 movements: [],
            }
        },
        mounted() {
            axios.get('/movimientos').then((response) => {
              this.movements = response.data;
            });
        },
        methods : {
            addMovement(movement){
                this.movements.push(movement);
            }
        }
    }
</script>
