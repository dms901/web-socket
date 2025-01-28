

function startConnect(){

    var value = document.getElementById("connect").value;
    console.log(value)

    if(value === 'Connected'){

    document.getElementById("connect").style.background="blue";
    clientID = "clientID - "+parseInt(Math.random() * 100);
   // host = document.getElementById("host").value;   
   // port = document.getElementById("port").value;  
    //userId  = document.getElementById("username").value;  
    //passwordId = document.getElementById("password").value; 

    host = "broker.hivemq.com";
    port = "8000";

    document.getElementById("messages").innerHTML += "<span> Connecting to " + host + "on port " +port+"</span><br>";
    document.getElementById("messages").innerHTML += "<span> Using the client Id " + clientID +" </span><br>";
    client = new Paho.MQTT.Client(host,Number(port),clientID);

    client.onConnectionLost = onConnectionLost;
    client.onMessageArrived = onMessageArrived;
    client.connect({
        onSuccess: onConnect,
        
        
    });
    } if(value === 'Disconnect'){
        document.getElementById("connect").style.background="red";
        client.disconnect();
        document.getElementById("messages").innerHTML += "<span> Disconnected </span><br>";

    }
}
function onConnect(){
    topic =  document.getElementById("topic_s").value;
    document.getElementById("messages").innerHTML += "<span> Subscribing to topic "+topic + "</span><br>";
    
    client.subscribe(topic);
    document.getElementById("connect").style.background="green";
    document.getElementById("connect").value="Disconnect"; 
}
function onConnectionLost(responseObject){
    document.getElementById("messages").innerHTML += "<span> ERROR: Connection is lost.</span><br>";
    if(responseObject !=0){
        document.getElementById("messages").innerHTML += "<span> ERROR:"+ responseObject.errorMessage +"</span><br>";
        
    }
setTimeout(()=> console.log( document.getElementById("connect").style.background="gray"),500);
document.getElementById("connect").value="Connected";
   

}
function onMessageArrived(message){
    console.log("OnMessageArrived: "+message.payloadString);
    document.getElementById("messages").innerHTML += "<span> Topic:"+message.destinationName+"| Message : "+message.payloadString + "</span><br>";
}

function publishMessage1On(){
    document.getElementById("Hay").style.background="blue";
    msg = document.getElementById("topic_p").name;
    topic = document.getElementById("topic_s").name + document.getElementById("topic_s").value;
    Message = new Paho.MQTT.Message(msg);
    Message.destinationName = topic;
    client.send(Message);

    document.getElementById("messages").innerHTML += "<span> Message to topic "+topic+" is sent </span><br>";
    pesan2();
    }
    function publishMessage1Off(){
        document.getElementById("Hallo").style.background="red";
        msg = document.getElementById("Hallo").name;
        topic = document.getElementById("topic_s").name + document.getElementById("topic_s").value;
        Message = new Paho.MQTT.Message(msg);
        Message.destinationName = topic;
        client.send(Message);
        document.getElementById("Hay").style.background="grey";
        setTimeout(()=> console.log( document.getElementById("Hallo").style.background="gray"),500);
        document.getElementById("messages").innerHTML += "<span> Message to topic "+topic+" is sent </span><br>";
    }
    //function publishMessage2On(){
        //msg = document.getElementById("ahh").name;
        //topic = document.getElementById("topic_p").value;
        //Message = new Paho.MQTT.Message(msg);
        //Message.destinationName = topic;
        //client.send(Message);
        //document.getElementById("messages").innerHTML += "<span> Message to topic "+topic+" is sent </span><br>";
        //}
        //function publishMessage2Off(){
            //msg = document.getElementById("ahhe").name;
            //topic = document.getElementById("topic_s").name + document.getElementById("topic_s").value;;
            //Message = new Paho.MQTT.Message(msg);
            //Message.destinationName = topic;
            //client.send(Message);
            //document.getElementById("messages").innerHTML += "<span> Message to topic "+topic+" is sent </span><br>";
        //}
        function pesan2(){
            msg = document.getElementById("topic_p").value + ": "+document.getElementById("topic_x").value +" ("+ document.getElementById("number").value +" "+ document.getElementById("qty").value+")";
            topic = document.getElementById("topic_s").name + document.getElementById("topic_s").value;
            Message = new Paho.MQTT.Message(msg);
            Message.destinationName = topic;
            client.send(Message); 
            setTimeout(()=> console.log( document.getElementById("Hay").style.background="green"),500);
        }