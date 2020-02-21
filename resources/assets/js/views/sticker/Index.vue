<template>
    <!--<span v-if="this.$route.query.emergency === true"></span>-->
    <patient-sticker v-if="visittype == 'stat'" :source="source" :thead="thead" :title="title">
    <template slot-scope="props">
    <!--<tr @click="$router.push('//' + 1)">-->
    <tr>
    <td>{{props.item.case_number}}</td>
    <td>{{props.item.first_name}}</td>
    <td>{{props.item.last_name}}</td>
    <td>
    <button type="button" class="btn btn-primary" v-on:click="printsticker(2,props.item.case_number,props.item.first_name,props.item.last_name)">+2 lipdukai</button>
    <button type="button" class="btn btn-success" v-on:click="printsticker(4,props.item.case_number,props.item.first_name,props.item.last_name)">+4 lipdukai</button>
    <button type="button" class="btn btn-danger" v-on:click="printsticker(8,props.item.case_number,props.item.first_name,props.item.last_name)">+8 lipdukai</button>

    </td>
    </tr>
    </template>
    </patient-sticker>
    <patient-sticker-emergency  v-else-if="visittype == 'emer'" :source="sourceemer" :thead="thead" :title="title">
        <template slot-scope="props">
            <tr>
                <td>{{props.item.case_number}}</td>
                <td>{{props.item.first_name}}</td>
                <td>{{props.item.last_name}}</td>
                <td>
                    <button type="button" class="btn btn-primary" v-on:click="printsticker(2,props.item.case_number,props.item.first_name,props.item.last_name)">+2 lipdukai</button>
                    <button type="button" class="btn btn-success" v-on:click="printsticker(4,props.item.case_number,props.item.first_name,props.item.last_name)">+4 lipdukai</button>
                    <button type="button" class="btn btn-danger" v-on:click="printsticker(8,props.item.case_number,props.item.first_name,props.item.last_name)">+8 lipdukai</button>

                </td>
            </tr>
        </template>
    </patient-sticker-emergency>
</template>
<script>
    import PatientSticker from '../../components/PatientSticker.vue'
    import PatientStickerEmergency from '../../components/PatientStickerEmergency.vue'

    export default {
        name: 'PatientStickerIndex',
        data() {
            return {
                title: 'PatientSticker',
                source: '/api/patientsticker',
                sourceemer: '/api/patientstickeremer',
                source1: '/api/printsticker',
                //create: '/customer/create',
                thead: [
                    {title: 'Ligos atvejis', key: 'case_number', sort: false},
                    {title: 'Paciento vardas', key: 'first_name', sort: false},
                    {title: 'Paciento pavardė', key: 'last_name', sort: false},
                    {title: 'Lipdukai', key: '', sort: false},
                ],
            }
        },
        methods:{
            printsticker(copy,case_number,first_name,last_name){
               //dataprint=[copy,case_number,first_name,last_name]
                //alert (this.buildPrintURL(copy,case_number,first_name,last_name))
                axios.get(this.buildPrintURL(copy,case_number,first_name,last_name))
                        //console.log(params.emergency)
                    //.then(response => (this.patientdata = response.data.model))
                    .catch(function(error) {
                        console.log(error)
                    })
                //alert(copy+case_number+first_name+last_name)

    },
            buildPrintURL(copy,case_number,first_name,last_name) {
                return `${this.source1}?sickness_case=${case_number}&patient_first_name=${first_name}&patient_surname=${last_name}&copy_number=${copy}`
            }
        },
        components: {
            PatientSticker,
            PatientStickerEmergency
        },
        props: {
            visittype: { type: String, default: 'start' },
        },
    }
</script>