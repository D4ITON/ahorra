<template>
    <div class="card row">
        <div class="card-header text-center">GESTION DE DINERO</div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">SEPTIEMBRE 2018</div>
                <div class="col-md-6 text-primary">
                    <div v-if="saldo > 0" class="text-primary">
                        s/ {{ saldo }}
                    </div>
                    <div v-else class="text-danger">
                        s/ {{ saldo }}
                </div>
                </div>
            </div>

        </div>
        <div class="card-footer">

            <movement-component></movement-component>

        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                saldo: ''
            };
        },
        mounted() {
            axios.get('/saldo').then((response) => {
              this.saldo = response.data;
            });
        },
    }
</script>