var express = require('express');
var router = express.Router();
var multer = require('multer');
var path = require('path')
var product = require("../models/product");
// www.xyz.com/students/1
router.get('/:id?', function(req, res, next) {
  if(req.params.id) {
      product.getProduct(req.params.id,function(err, rows){
        if(err) {
            res.json(err);
        } else {
            res.json(rows);
        }
      });
  } else {
      product.getAllProduct(function(err, rows){
        if(err) {
            res.json(err);
        } else {
            res.json(rows);
        }
      });
  }
});
var storage = multer.diskStorage({
    destination: (req, file, cb) => {
      cb(null, 'public/images/uploads')
    },
    filename: (req, file, cb) => {
      x=file.fieldname + '-' + Date.now()+path.extname(file.originalname);
      cb(null, file.fieldname + '-' + Date.now()+path.extname(file.originalname))
    }
});
var upload = multer({storage: storage});

router.post('/', upload.single('image'), (req, res, next) => {
  
    // console.log(req.body);
    // console.log(req.file.filename);

    product.addProduct(req.body,req.file.filename,function(err,count){

        if(err)
        {
            res.json(err);
        }
        else
        {
            res.json(req.body);//or return count for 1 or 0
        }
    });
});

/*router.post('/',function(req,res,next){

    product.addProduct(req.body,function(err,count){

        if(err)
        {
            res.json(err);
        }
        else
        {
            res.json(req.body);//or return count for 1 or 0
        }
    });
});*/

router.delete('/:id',function(req,res,next){

    product.deleteProduct(req.params.id,function(err,count){

        if(err)
        {
            res.json(err);
        }
        else{
            res.json(count);
        }
    });
});
module.exports=router;  