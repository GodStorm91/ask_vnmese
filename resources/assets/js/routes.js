import VueRouter from 'vue-router';

let routes = [

	{
		path: '/',
		component : require('./views/Home.vue')
	},
	{
		path : "/about",
		component: require('./views/About')
	},
	{
		path : "/editor",
		component: require('./views/Editor')
	}

];

export default new VueRouter({
	routes,
	linkActiveClass: 'is-active'
});

