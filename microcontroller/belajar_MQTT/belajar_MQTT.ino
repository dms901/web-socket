#include <ESP8266WiFi.h>
#include <PubSubClient.h>
#include <LiquidCrystal_I2C.h>
#include <Wire.h>

#define SDA_PIN D2
#define SCL_PIN D1
LiquidCrystal_I2C lcd(0x27, 16, 2);

const char *ssid = "Tselhome-BB3C";
const char *password = "70142711";
const char *mqtt_server = "broker.hivemq.com";
char *Topic = "";

WiFiClient espClient;
PubSubClient client(espClient);
unsigned long lastMsg = 0;
#define MSG_BUFFER_SIZE (50)
char msg[MSG_BUFFER_SIZE];
int value = 0;

void setup()
{ // Initialize the BUILTIN_LED pin as an output
  Serial.begin(115200);
  Wire.begin(SDA_PIN, SCL_PIN);
  lcd.backlight();
  lcd.init();
  setup_wifi();
  client.setServer(mqtt_server, 1883);
  client.setCallback(callback);
  pinMode(D0, OUTPUT);
  pinMode(D3, OUTPUT);
  pinMode(D4, OUTPUT);
  digitalWrite(D0, LOW);
  digitalWrite(D3, LOW);
  digitalWrite(D4, LOW);
}

void setup_wifi()
{

  delay(10);
  // We start by connecting to a WiFi network
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");

    randomSeed(micros());

    Serial.println("");
    Serial.println("WiFi connected");
    Serial.println("IP address: ");
    Serial.println(WiFi.localIP());
  }
}

void callback(char *topic, byte *payload, unsigned int length){
  Serial.print("Message arrived [");
 
  //Serial.print(topic);
  Serial.print("] ");
  for (int i = 0; i < length; i++) {
    
    Serial.print((char)payload[i]);
     lcd.setCursor(i, 0);
     lcd.write("MOHON UNTUK SEGERA DITANGANI"[i]); // Start Print text
    lcd.setCursor(i, 1);
    lcd.write((char)payload[i]);
    
  }
  Serial.println();
  if ((char)payload[0] == '1')
  {
    digitalWrite(D0, HIGH); // Turn the LED on (Note that LOW is the voltage level
    digitalWrite(D4, HIGH); //Turn the Buzzer on (Note that LOW is the voltage level
     
    
  }
  else if ((char)payload[0] == '0')
  {
    digitalWrite(D0, LOW); // Turn the LED off by making the voltage HIGH
    digitalWrite(D4, LOW); //Turn the Buzzer off (Note that LOW is the voltage level
    lcd.clear();
    
  }
  else if ((char)payload[0] == '3')
  {
    digitalWrite(D3, LOW); // Turn the LED off (Note that LOW is the voltage level
  }
  else if ((char)payload[0] == '4')
  {
    digitalWrite(D3, HIGH); // Turn the LED on by making the voltage HIGH
  }
  else if (digitalRead(D0) == HIGH)
  {
    Serial.println(Topic);
  }
}

void reconnect()
{
  // Loop until we're reconnected
  while (!client.connected())
  {
    Serial.print("Attempting MQTT connection...");
    // Create a random client ID
    String clientId = "dimas123#@";
    clientId += String(random(0xffff), HEX);
    // Attempt to connect
    if (client.connect(clientId.c_str()))
    {
      Serial.println("connected");
      // Once connected, publish an announcement...
      client.publish("dimas123%", "Hey Aku Mau Ngapain Ini?");
      // ... and resubscribe
      client.subscribe("topic_sProduksi 1.1");
    }
    else
    {
      Serial.print("failed, rc=");
      Serial.print(client.state());
      Serial.println(" try again in 5 seconds");
      // Wait 5 seconds before retrying
      delay(5000);
    }
  }
}

void loop()
{

  if (!client.connected())
  {
    reconnect();
  }
  client.loop();

  unsigned long now = millis();
  if (now - lastMsg > 2000)
  {
    lastMsg = now;
    ++value;
    snprintf(msg, MSG_BUFFER_SIZE, "Hey Aku Mau Ngapain Ini? #%ld", value);
    Serial.print("Publish message: ");
    Serial.println(msg);
    client.publish("Produksi 1.1", msg);
  }
    if (digitalRead(D0)== HIGH){
      
      lcd.scrollDisplayLeft();
      delay(600);
  
 }

}
