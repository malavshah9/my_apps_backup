var express=require('express');
var router=express.Router();
var task=require('../models/task_model');

router.get('/',function(req,res,next){

    
        task.getAllTask(function(err,rows){
            if(err){
                res.json(err);
            }
            else{
                res.json(rows);
            }
        });
    });
    router.delete('/:id',function(req,res,next){
        task.DeleteOneTask(req.params.id,function(err,count){
    
            if(err)
            {
                res.json(err);
            }
            else{
                res.json(count);
            }
        });
    });
    
    router.post('/', (req, res, next) => {
        task.AddTask(req.body,function(err,count){
            if(err)
            {
                res.json(err);
            }
            else
            {
                res.json(req.body);
            }
        });
    });
    router.put('/', (req, res, next) => {
        task.UpdateTask(req.body,function(err,count){
            if(err)
            {
                res.json(err);
            }
            else
            {
                res.json(req.body);
            }
        });
    });
    
module.exports=router;