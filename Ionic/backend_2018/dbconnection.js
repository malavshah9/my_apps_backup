var mysql=require('mysql');
var connection=mysql.createPool({
    
    host:'localhost',
    user:'root',
    password:'',
    database:'deno_db'
});
module.exports=connection;