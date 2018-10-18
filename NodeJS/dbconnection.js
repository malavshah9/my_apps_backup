var mysql=require('mysql');
 var connection=mysql.createPool({
 
host:'localhost',
 user:'root',
 password:'',
 database:'task_db'
 
});
module.exports=connection;