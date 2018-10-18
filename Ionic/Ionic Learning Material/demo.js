var email   = require("emailjs/email");
var demo={

sendMail:function(demo,callback){

var server  = email.server.connect({
   user:    "reunirc@gmail.com", 
   password:"", 
   host:    "smtp.gmail.com", 
   ssl:     true,
   port:465
});

server.send({
   text:    demo.message,
   from:    "reunirc@gmail.com", 
   to:      demo.name,
   subject: demo.subject
}, callback);
}


}
module.exports = demo;
