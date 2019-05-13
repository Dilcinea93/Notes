

		//CREACION DE COMPONENTES

		/*1*/

		Vue.component('game-header',	{
			template:	'<h1>Video	Games</h1>'
		});


		/*2*/
		 Vue.component('game-add',	{
						template:	`
							<div>
								<input	type="text"	v-model="titleGame"	/>
								<button	@click="emitNewGame">Añadir</button>
							</div>	
						`,
						data:	function()	{
							return	{
								titleGame:	null
							}
						},
						methods:{
									emitNewGame:function	()	{
										if	(this.titleGame)	{
											this.$emit('new',	{	title:	this.titleGame	});
											this.titleGame	=	null;
										}
									}
						},
		});
		/*3*/
		Vue.component('game-list',	{
						props:	['games'],			// Lo que va aqui es el nombre de un modelo. Donde esta este modelo?
						template:	`
							<ol>
								<game-item	v-for="item	in	games"	:game="item"	:key="item.id"></game-item>
							</ol>
						`
						//la linea 58 itera en el modelo games para imprimir por cada uno, componentes game-item (defnidos en la 58)
		});
		/*4*/
		Vue.component('game-item',	{
			props:	['game'],		//aqui igual, el nombre del modelo.
			template:	'<li>{{	game.title	}}</li>'
		});


//instancia de mi aplicacion
		const app	=	new	Vue({   
			el:	'#app',
			template:	`<div	class="view">	
							<game-header></game-header>																		
							<game-add	@new="addNewGame"></game-add>					
							<game-list	v-bind:games="games"></game-list>
						</div>`,
			data:	{		//aqui se tiene que meter el modelo.
				games:	[
								{	title:	'ME:	Andromeda'	},
								{	title:	'Fifa	2017'	},
								{	title:	'League	of	Legend'	}
				]
			},
			methods:	{   //aqui se meten las funciones...o metodos.
					addNewGame:	function	(game)	{
						this.games.push(game);
					}
			}
		});