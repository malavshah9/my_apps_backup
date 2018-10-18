var db=require('../dbconnection');
var blog={

    getAllTask:function(callback){

        return db.query("select * from task_tbl",callback);
    },
    AddTask:function(task,callback){

        return db.query("Insert into task_tbl values(?,?)",[null,task.task_name],callback);
    },
    UpdateTask:function(task,callback){
        return db.query("update task_tbl set task_name=? where task_id=?",[task.task_name,task.task_id],callback)
    },
    DeleteOneTask:function (id,callback) {
        return db.query("delete from task_tbl where task_id=?",[id],callback);
      }
};

module.exports=blog;