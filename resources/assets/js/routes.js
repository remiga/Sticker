import VueRouter from 'vue-router';


let routes = [
    {
        path: '/',
        component: require('./views/sticker/Index'),
        name: 'PatientSticker',
        props(route) {
            return {  visittype: route.query.typeofvisit }
        }
    },
    {
        path: '/EmergencyPatients',
        component: require('./views/sticker/Index'),
        name: 'PatientStickerEmergency',
        props(route) {
            return {  visittype: route.query.typeofvisit }
        }
    },
];
export default new VueRouter({
    mode: 'history',
    routes
})