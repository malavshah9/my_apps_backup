var db=require('../dbconnection');
 
var Task={
getAllTasks:function(callback){
return db.query("Select * from task_tbl",callback);
},
 getTaskById:function(id,callback){
return db.query("select * from task_tbl where task_id=?",[id],callback);
 },
 addTask:function(Task,callback){
 return db.query("Insert into task_tbl values(?,?,?,?)",[Task.Id,Task.Title,Task.Status],callback);
 },
 deleteTask:function(id,callback){
  return db.query("delete from task_tbl where task_id=?",[id],callback);
 },
 updateTask:function(id,Task,callback){
  return db.query("update task_tbl set task_date=?,task_name=?,task_desc where task_id=?",[Task.Date,Task.Name,Task.Desc,Task.Id],callback);
 }
};
 module.exports=Task;