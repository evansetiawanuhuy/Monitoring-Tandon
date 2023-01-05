#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>
#include <WiFiClient.h>

//BOT TELEGRAM
#include "CTBot.h"


CTBot myBot;
String token = "5596016144:AAFzODBzhjkJf8GggnxBhzyTRoncE-fbvfk";
const int id = 1261592261;

const char* ssid = "BEBAS HOTSPOT V";
const char* password = "vvvvvvvv";
const char* host = "2.0.0.23";

//deklarasi pin yang digunakan
#define trigPin D2
#define echoPin D3

//==== Deklarasi Variabel=========

long durasi;
int jarak;
int jarakAir;

void setup() {
Serial.begin(9600);

 //terhubung ke wifi
WiFi.hostname("NodeMCU");
WiFi.begin(ssid, password);
//cek koneksi wifi
while(WiFi.status() != WL_CONNECTED)
{
//  progres sedang mencari wifi
delay(500);
Serial.print(".");
}
Serial.println("wifi connected");
Serial.println("IP Address :");
Serial.println(WiFi.localIP());

 //mode pin
 pinMode(trigPin, OUTPUT);
 pinMode(echoPin, INPUT);

}

void loop() {
   ultrasonic();
   logika();
   Serial.print("Jarak:");
   Serial.println(jarakAir);

   WiFiClient client;
   const int httpPort =80;
   if(!client.connect(host, httpPort))
   {
    Serial.println("Connection Failed");
    return;
   }

  //kirim data air
  String Link;
  HTTPClient http;
  String jarakAir2 = String(jarakAir);
  Link = "http://monitoring.csc-pnj.or.id/api/log?id_tandon=1&nama_sensor=Ultrasonik&distance="+jarakAir2+"";
  http.begin(client,Link);

  int httpCode =http.GET();
  String payload = http.getString();
  Serial.println(payload);
  http.end();

  if(jarakAir <= 5){
    telegram();
  }
}

void telegram(){
  //TELEGRAM
  Serial.begin(9600);
  Serial.println("Starting TelegramBot...");
  myBot.wifiConnect(ssid, password);
  myBot.setTelegramToken(token);

  if (myBot.testConnection()) {
    Serial.println("Koneksi Bagus");
  } else {
    Serial.println("Koneksi Jelek");
  }
  myBot.sendMessage(id, "Air Hampir Habis");
  Serial.println("Pesan Terkirim");
  //TUTUP TELEGRAM
}

void ultrasonic(){
  digitalWrite(trigPin, LOW);
//  delayMicroseconds(2);
  delay(1000);

  //atur trigerpin menyala selama 10 detik
  digitalWrite(trigPin,HIGH);
//  delayMicroseconds(10);
  delay(1000);
  digitalWrite(trigPin,LOW);

  durasi= pulseIn(echoPin,HIGH);

  //menghitung jarak
  jarak = durasi * 0.034/2;
  jarakAir = 10-jarak;
  
}

void logika(){
  //logika led
  if((jarakAir > 7) && (jarakAir<= 9)){
    Serial.print("Air Penuh");
    delay(1000);
  }
  else if ((jarakAir > 1) && (jarakAir < 2)){
    Serial.print("Air Habis");
    delay(1000);
  }

}
