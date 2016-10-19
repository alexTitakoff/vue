

var Todos = Vue.extend({

	name: 'todos'	

});



var vm = new Todos({

	el : '#todos',
	data : {
		title : 'Vue Todo',
		tasks : [
		{
			task_title : 'Task1',
			done : 'true'
		},

		{
			task_title : 'Task2',
			done : 'true'
		},

		{
			task_title : 'Task3',
			done : 'true'
		}		

		] // todos

	}, // data

	ready : function() {
		console.log('Vue Good and Stared');
	}	// ready	

}); // new Todos



// позднее связывание
//vm.$mount('#todos');




$('.new_title').click(function() {
	vm.$data.title = "New Title";
})

