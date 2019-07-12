html, body{
    height:100%; 
    overflow:hidden; 
    padding:0px; 
    margin:0px;
    
    }
.header {
    overflow: hidden;
    background-color: #f1f1f1;
    padding: 20px 10px;
    font-family: sans-serif;
    position: fixed;
    width: 100%;
    z-index: 1;
  }
  
  .header a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px; 
    line-height: 25px;
    font-family: sans-serif;
    color:black;
  }
  
  .header a.logo {
    font-size: 25px;
    font-weight: bold;
  }
  
  .header a:hover {
    background-color: #ddd;
    color: black;
  }
  
  .header a.active {
    background-color: dodgerblue;
    color: white;
  }

a{
  text-decoration: none;
}

a ::after{
  color: rebeccapurple;
}
  
.header-right {
    float: right;
    width: 100%;
  }
  
  .header-right img{
    float: left;
    border-radius: 100%;
  }
  
  .navBar{
    float: right;
  }

 








textarea {
   resize: none;
}

#chatWith{
    width:100%;
    height:8%;
    background:#233070;
}

.whiteBack p{
    font-weight:bold;
}


a,p{
    font-size:16px; 
    font-family:helvetica;
    }

#container{
position:relative;
    box-shadow:2px 2px 10px #000000; 
    width:600px; 
    height:90%; 
    margin-left:100px;
    margin:2% auto; 
    border-radius:1%;
    overflow:hidden;
}

#menu{
    background:dodgerblue; 
    color:white; 
    padding:1%; 
    font-size:30px;
}

#leftCol, #rightCol{
    position:relative; 
    float:left; 
    height:90%
    
}

#leftCol{
    width:30%;
    background:#efefef;
    border-right: 2px solid dodgerblue;
}

#leftColContainer img{
    border-radius:100%;
}

#rightCol{
    width:69%; 
    border:1px solid #efefef;
}

#leftColContainer, #rightColContainer{
    width:100%; 
    height:100%; 
    margin: 0px auto; 
    overflow:auto;
}

.greyBack{
    border:1px solid black; 
    padding:5px; 
    background:#efefef; 
    margin: 0px auto; 
    margin-top:2px; 
    overflow:auto;
    }
        
.image{
    float:left; 
    margin-right:5px; 
    width:30px; 
    height:30px;
}

#messageContainer{
    height:85%; 
    overflow:auto;
}

.textarea{
    width:99%; 
    height:10%; 
    position:absolute; 
    bottom:1%;
    margin:0px auto;
    border:2px solid dodgerblue;
}
.greyMessage, .whiteMessage{
    border:1px solid black; 
    width:60%; 
    padding:5px; 
    margin:0px auto;
    margin-top:2px; 
    overflow:auto;

}

.greyMessage{
    background:dodgerblue;
    border-radius:10px;
    color:white;
    float:right;
}

.greyMessage p{
    float:right;

}
       
.whiteMessage{
    background:#efefef;
    border-radius:10px;
    float:left;
}

.whiteMessage p{
    float:left;
}
   

#newMessage{
    display:none; 
    box-shadow: 2px 10px 30px #000000;
    width:500px;
    position:fixed;
    top:20%;
    background:white;
    z-index:2;
    left:50%;
    transform:translate(-50%, 0);
    border-radius:5px;
    overflow:auto;
}

.mHeader, .mFooter{
    background:#233070; 
    color:white; 
    margin:0px; 
    padding:5px;
}

.mHeader{
    text-align:center; 
    font-size;20px;
}

.messageInput{
    width:96%;
}
