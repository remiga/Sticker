<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <!--<span class="panel-title">{{title}}</span>-->
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th v-for="item in thead">
                        <div class="patienthospitalization-th" @click="sort(item.key)" v-if="item.sort">
                            <span>{{item.title}}</span>
                            <span v-if="params.column === item.key">
                                    <span v-if="params.direction === 'asc'">&#x25B2;</span>
                                    <span v-else>&#x25BC;</span>
                                </span>
                        </div>
                        <div v-else>
                            <span>{{item.title}}</span>
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <slot v-for="item in patientdata" :item="item"></slot>
                </tbody>
            </table>
        </div>
        <div class="panel-footer">
        </div>
    </div>
</template>
<script>
    import axios from 'axios'

    export default {
        props: ['source', 'thead', 'title'],
        data() {
            return {
                    patientdata:null,
            }
        },
        // mounted(){
        //     alert(this.$route.query['sickness-case-number'])
        // },
        beforeMount() {
            // alert(this.$route.query.username)
             this.fetchData()
        },
        methods: {
            fetchData() {
                // var vm = this
                axios.get(this.buildURL())
                    .then(response => (this.patientdata = response.data.model))
                    // .then(function(response) {
                    //     Vue.set(vm.$patientdata, 'model', response.data)
                    //console.log(response.data)
                    //     // alert(vm.$data)
                    // })
                    .catch(function(error) {
                        console.log(error)
                    })
            },
            buildURL() {
                 var p = this.$route.query

                 return `${this.source}?sickness_case=${p['sickness-case-number']}&patient_first_name=${p['patient-first-name']}&patient_surname=${p['patient-surname']}&username=${p['username']}`
            }
        }
    }
</script>