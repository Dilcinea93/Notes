//Utilizando CALLBACKS con la sintaxis de ES5.

function requestHandler(req, res){
	User.findById(req.userId, function(err,user){  //function callback
		if(err){								   //a ser ejecutada al termminar la consulta por ID
			return res.send(err);
		}else{
			Tasks.findById(user.taskId, function(err,tasks){
				if(err){
				return res.send(err);
				}else{
					tasks.completed=true;  //instruccion diferente... para variar... Asignar TRUE a una propiedad de un obketo
					tasks.save(function(err){
						if(err){
							return res.send(err);
						}else{
							res.send("TASKS COMPLETED");
						}
					});
				}
			})
		}
	});
}

//USANDO PROMESAs de ES6

function requestHandler(req, res){
	User.findById(req.UserId).then(function(user){
		return Tasks.findById(user.tasksId)
	}).then(function(tasks){
		tasks.completed= true;
		return tasks.save();
	}).then(function(){
		res.send("TASKS COMPLETED");
	}).catch(function(errors){
		res.send(errors);
	});
}

//usando ASYNC AWAITS
async function requestHandler(req,res){

	try	{
		let user= await User.findById(req.UserId);
		let tasks= await Tasks.findById(user.taskId);
		tasks.completed=true;
		await tasks.save();
		res.send("TASKS COMPLETED");
	}
	catch(e){
		res.send(e);
	}
}