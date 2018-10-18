process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";

process.stdin.on("data", function (input) {
    stdin_input += input;                               
});

process.stdin.on("end", function () {
   main(stdin_input);
});

function main(input) {
    var rows = input.split('\n');
    var N = rows[0];
    var A = rows[1].split(' ');
    var Q = rows[2];
    var L = [] , R = [] , K = [];
    for(var i = 0; i < Q; i++){
        L.push(0);
        R.push(0);
        K.push(0);
    }
    for(var i = 0; i < Q; i++){
        rows[3 + i] = rows[3 + i].split(' ');
        L[i] = rows[3 + i][0];
        R[i] = rows[3 + i][1];
        K[i] = rows[3 + i][2];
    }
        for(var k=0;k<Q;k++)
        {
            var arr=[];
            var f=0;
            var flag=0;
    for(var i=0;i<A.length;i++)
    {
        var f=0;
        for(var j=0;j<arr.length;j++)
        {
            if(arr[j]==A[i]){
                f=1;
                break;
            }
        }
        if(A[i]>=L[k] && A[i]<=R[k] && f==0)
        {
            arr.push(A[i]);
        }
        if(arr.length==K[k]){
            flag=1;
            break;
        }
    }
    if(flag==1){
        console.log("Yes");
    }
    else{
        console.log("No");
    }
        }
        
    
    }
    
    /*
        You can start coding from here.
        All the input has been taken in the respective array
        All the arrays are indexed from zero
    */
