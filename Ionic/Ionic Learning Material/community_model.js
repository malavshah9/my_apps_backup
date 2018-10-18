var db=require('../dbconnection'); 

var fs=require('fs');
 
var Community={
 getCount:function(callback){
    return db.query("select count(*) from community_tbl",callback);
  
},
getAllCommunityCollection:function(callback){
 
return db.query("Select c.*,co.coll_id,co.coll_name,u.email_id,u.name from community_tbl as c,collection_tbl as co,user_tbl as u where c.fk_coll_id=co.coll_id and c.fk_user_id=u.email_id",callback);

 
},
getAllCommunity:function(callback){
 
return db.query("Select * from community_tbl ",callback);

 
},
getCommunityById:function(id,callback){
    return db.query("Select c.*,co.coll_id,co.coll_name,u.email_id,u.name from community_tbl as c,collection_tbl as co,user_tbl as u where c.fk_coll_id=co.coll_id and c.fk_user_id=u.email_id and c.comm_id=?",[id],callback);
},
getCommunityOfUsers:function(id,callback){
    return db.query("Select * from community_tbl where fk_user_id=?",[id],callback);
},
addCommunity:function(Community,callback){
    console.log(Community);
    var flag=0
    var flag_cov=0;
    var dt=new Date();
            var x=dt.getDate()+"/";
            x+=(dt.getMonth()+1)+"/";
            x+=dt.getFullYear();
    var path1;
    var path;
    var path2;
    var path3;
if(Community.profile_photo=='')
{
    flag=1;
}
if(Community.cover_photo=='')
{
    flag_cov=1;
}
   
   if(flag_cov==1 && flag==0)
   {
            path3="/images/community/cover_photo/default.jpg";
            var dt=new Date();
            var x=dt.getDate()+"/";
            x+=(dt.getMonth()+1)+"/";
            x+=dt.getFullYear();
            console.log(Community);
            var text = "";
            var text1 = "";//random text
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for( var i=0; i < 5; i++ )
                text += possible.charAt(Math.floor(Math.random() * possible.length));
            var pos=Community.profile_photo.indexOf(",");
            var base64d=Community.profile_photo.substring(pos+1);
            // var base64d=Student.student_img.replace(/^data:image\/png;base64,/, "");
             path="./public/images/community/profile_photos/"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
             path1="/images/community/profile_photos/"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
            fs.writeFile(path,base64d,'base64',function(err){
            if(err) {
                return console.log(err);
            }
            console.log("The file was saved!");
            });
   }
   if(flag==1 && flag_cov==0)
   {
       path1="/images/community/profile_photos/default.jpg";
            var dt=new Date();
            var x=dt.getDate()+"/";
            x+=(dt.getMonth()+1)+"/";
            x+=dt.getFullYear();
            console.log(Community);
            var text = "";
            var text1 = "";//random text
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

       for( var i=0; i < 5; i++ )
                text1 += possible.charAt(Math.floor(Math.random() * possible.length));
        var pos1=Community.cover_photo.indexOf(",");
        var base64d1=Community.cover_photo.substring(pos1+1);
        // var base64d=Student.student_img.replace(/^data:image\/png;base64,/, "");
         path2="./public/images/community/cover_photo/"+text1+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
         path3="/images/community/cover_photo/"+text1+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";

        fs.writeFile(path2,base64d1,'base64',function(err){
        if(err) {
                return console.log(err);
            }
        console.log("The file was saved!");
        });
            
            
   }
   if(flag==1 && flag_cov==1)
   {
       path3="/images/community/cover_photo/default.jpg";
       path1="/images/community/profile_photos/default.jpg";
   }
   if(flag==0 && flag_cov==0)
   {
            var dt=new Date();
            var x=dt.getDate()+"/";
            x+=(dt.getMonth()+1)+"/";
            x+=dt.getFullYear();
            console.log(Community);
            var text = "";
            var text1 = "";//random text
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for( var i=0; i < 5; i++ )
                text += possible.charAt(Math.floor(Math.random() * possible.length));
        var pos=Community.profile_photo.indexOf(",");
            var base64d=Community.profile_photo.substring(pos+1);
        // var base64d=Student.student_img.replace(/^data:image\/png;base64,/, "");
             path="./public/images/community/profile_photos/"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
             path1="/images/community/profile_photos/"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
            fs.writeFile(path,base64d,'base64',function(err){
        if(err) {
                return console.log(err);
            }
        console.log("The file was saved!");
        });

            for( var i=0; i < 5; i++ )
                text1 += possible.charAt(Math.floor(Math.random() * possible.length));
        var pos1=Community.cover_photo.indexOf(",");
            var base64d1=Community.cover_photo.substring(pos1+1);
        // var base64d=Student.student_img.replace(/^data:image\/png;base64,/, "");
            path2="./public/images/community/cover_photo/"+text1+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
           path3="/images/community/cover_photo/"+text1+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";

        fs.writeFile(path2,base64d1,'base64',function(err){
        if(err) {
                return console.log(err);
            }
        console.log("The file was saved!");
        });
            
            
           
   }
    return db.query("Insert into community_tbl(comm_id,comm_name,profile_photo,cover_photo,fk_user_id,fk_coll_id,date,description,status) values(?,?,?,?,?,?,?,?,?)",
            [Community.comm_id,Community.comm_name,path1,path3,
            Community.fk_user_id,Community.fk_coll_id,
            x,Community.description,"inactive"],callback);
    
},

deleteCommunity:function(id,callback){
    return db.query("Delete from community_tbl where comm_id=?",[id],callback);
},
deleteAll:function(item,callback){

var delarr=[];
    for(i=0;i<item.length;i++){

        delarr[i]=item[i].comm_id;
    }
    return db.query("delete from community_tbl where comm_id in (?)",[delarr],callback);
 },
updateCommunity:function(id,Community,callback){
    var flag=0
    var flag_cov=0;
    console.log(Community.cover_photo);
if(Community.profile_photo=='')
{
    flag=1;
}
if(Community.cover_photo=='')
{
    flag_cov=1;
}
   
    
 if(flag==1 && flag_cov==0)
 {
     
                var dt=new Date();
                var x=dt.getDate()+"/";
                x+=(dt.getMonth()+1)+"/";
                x+=dt.getFullYear();
                console.log(Community);
                var text = "";
                var text1 = "";//random text
                var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

                for( var i=0; i < 5; i++ )
                    text1 += possible.charAt(Math.floor(Math.random() * possible.length));
            var pos1=Community.cover_photo.indexOf(",");
                var base64d1=Community.cover_photo.substring(pos1+1);
            // var base64d=Student.student_img.replace(/^data:image\/png;base64,/, "");
                var path2="./public/images/community/cover_photo/"+text1+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
                var path3="/images/community/cover_photo/"+text1+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";

            fs.writeFile(path2,base64d1,'base64',function(err){
            if(err) {
                    return console.log(err);
                }
            console.log("The file was saved!");
            });

            return db.query("Update community_tbl set comm_name=?,cover_photo=?,fk_coll_id=?,description=? where comm_id=?",
            [Community.comm_name,path3,
            Community.fk_coll_id,Community.description,id],callback);
 }
 if(flag_cov==1 && flag==0)
 {
                var dt=new Date();
                var x=dt.getDate()+"/";
                x+=(dt.getMonth()+1)+"/";
                x+=dt.getFullYear();
                console.log(Community);
                var text = "";
                var text1 = "";//random text
                var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

                    for( var i=0; i < 5; i++ )
                        text += possible.charAt(Math.floor(Math.random() * possible.length));
                var pos=Community.profile_photo.indexOf(",");
                    var base64d=Community.profile_photo.substring(pos+1);
                // var base64d=Student.student_img.replace(/^data:image\/png;base64,/, "");
                    var path="./public/images/community/profile_photos/"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
                    var path1="/images/community/profile_photos/"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
                    fs.writeFile(path,base64d,'base64',function(err){
                if(err) {
                        return console.log(err);
                    }
                console.log("The file was saved!");
                });
                return db.query("Update community_tbl set comm_name=?,profile_photo=?,fk_coll_id=?,description=? where comm_id=?",
                [Community.comm_name,path1,
                Community.fk_coll_id,Community.description,id],callback);
 }
 if(flag==1 && flag_cov==1)
 {
     return db.query("Update community_tbl set comm_name=?,fk_coll_id=?,description=? where comm_id=?",
    [Community.comm_name,
    Community.fk_coll_id,Community.description,id],callback);
 }
 if(flag==0 && flag_cov==0)
 {
        var dt=new Date();
            var x=dt.getDate()+"/";
            x+=(dt.getMonth()+1)+"/";
            x+=dt.getFullYear();
            console.log(Community);
            var text = "";
            var text1 = "";//random text
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for( var i=0; i < 5; i++ )
                text += possible.charAt(Math.floor(Math.random() * possible.length));
        var pos=Community.profile_photo.indexOf(",");
            var base64d=Community.profile_photo.substring(pos+1);
        // var base64d=Student.student_img.replace(/^data:image\/png;base64,/, "");
            var path="./public/images/community/profile_photos/"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
            var path1="/images/community/profile_photos/"+text+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
            fs.writeFile(path,base64d,'base64',function(err){
        if(err) {
                return console.log(err);
            }
        console.log("The file was saved!");
        });

            for( var i=0; i < 5; i++ )
                text1 += possible.charAt(Math.floor(Math.random() * possible.length));
        var pos1=Community.cover_photo.indexOf(",");
            var base64d1=Community.cover_photo.substring(pos1+1);
        // var base64d=Student.student_img.replace(/^data:image\/png;base64,/, "");
            var path2="./public/images/community/cover_photo/"+text1+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";
            var path3="/images/community/cover_photo/"+text1+dt.getDate()+dt.getMonth()+dt.getMilliseconds()+".png";

        fs.writeFile(path2,base64d1,'base64',function(err){
        if(err) {
                return console.log(err);
            }
        console.log("The file was saved!");
        });
            return db.query("Update community_tbl set comm_name=?,profile_photo=?,cover_photo=?,fk_coll_id=?,description=? where comm_id=?",
            [Community.comm_name,path1,path3,
            Community.fk_coll_id,Community.description,id],callback);
 }
    
},
getAllCommunitiesByCollection:function(id,callback)
{
    return db.query("Select c.*,co.coll_id,co.coll_name,u.email_id,u.name from community_tbl as c,collection_tbl as co,user_tbl as u where c.fk_coll_id=co.coll_id and c.fk_user_id=u.email_id and c.fk_coll_id=?",[id],callback);
},
getCommunitisOfCollection:function(id,callback){
    return db.query("Select comm_id,count(*) from community_tbl where fk_coll_id=?",[id],callback);
},
updateFlag:function(id,flag,callback){
    return db.query("update community_tbl set status=? where comm_id=?",[flag,id],callback);
},
selectInactiveCommunities:function(callback){
    return db.query("select * from community_tbl where status='inactive'",callback);
},
postsOfCommunity:function(id,callback){
    return db.query("select count(*) from post_tbl where fk_comm_id=?",[id],callback);
},
pollsOfCommunity:function(id,callback){
    return db.query("select count(*) from poll_tbl where fk_comm_id=?",[id],callback);
}
};

 module.exports=Community;