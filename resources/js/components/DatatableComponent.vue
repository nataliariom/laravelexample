<template>
    <div>
        <bootstrap-4-datatable :columns="columns" :data="rows" :filter="filter" :per-page="perPage"></bootstrap-4-datatable>
        <bootstrap-4-datatable-pager v-model="page" type="abbreviated"></bootstrap-4-datatable-pager>
    </div>
</template>

<script>
import * as am4core from "@amcharts/amcharts4/core";
import * as am4charts from "@amcharts/amcharts4/charts";
import am4themes_animated from "@amcharts/amcharts4/themes/animated";

am4core.useTheme(am4themes_animated);
   
    export default {
        data(){
            return {
                columns:[{
                        label: 'ID',
                        field: 'ID'
                    }, 
                    {
                        label: 'NOMBRE',
                        field: 'NOMBRE'
                    },
                    {
                        label: 'POBLACION',
                        field: 'POBLACION'
                    },
                    {
                        label: 'codigos',
                        field: 'codigos'
                    },
                ],
                rows:[],
                page:1,
                filter:'',
                perPage:10
            }
        },
        methods:{
            showEstados: function()
            {
                axios.get('/estados/getEstados').then(function(res)
                {
                    this.rows = res.data;
                }.bind(this));
            }
        },
        created: function(){
            this.showEstados();
        }

        
    }

   
    
</script>

