int led1 = 4;
int led2 = 5;
int led3 = 6;
int led4 = 7;
int led5 = 8;
int led6 = 9;
int led7 = 10;
int led8 = 11;
int led9 = 12;
int led10 = 13;
int botao = 2;
boolean estado_botao;

void setup()
{
  pinMode(led1, OUTPUT);
  pinMode(led2, OUTPUT);
  pinMode(led3, OUTPUT);
  pinMode(led4, OUTPUT);
  pinMode(led5, OUTPUT);
  pinMode(led6, OUTPUT);
  pinMode(led7, OUTPUT);
  pinMode(led8, OUTPUT);
  pinMode(led9, OUTPUT);
  pinMode(led10, OUTPUT);
  pinMode(botao, INPUT_PULLUP);
  digitalWrite(botao, HIGH);
}

void loop()
{
  estado_botao = digitalRead(botao);
  
  if(estado_botao == LOW){
    
    Indo();
 	Voltando();
    Indo();
 	Voltando();
    Indo();
 	Voltando();
 	Pisca();
    delay(250);
    Pisca();
    delay(250);
    Pisca();
    delay(250);
    Pisca();
    delay(250);
    Pisca();
    Indo();
 	Voltando();
    Indo();
 	Voltando();
    Indo();
 	Voltando();
    
  }
  
  else{
    
  	digitalWrite(led1, LOW);
    digitalWrite(led2, LOW);
    digitalWrite(led3, LOW);
    digitalWrite(led4, LOW);
    digitalWrite(led5, LOW);
    digitalWrite(led6, LOW);
    digitalWrite(led7, LOW);
    digitalWrite(led8, LOW);
    digitalWrite(led9, LOW);
    digitalWrite(led10, LOW);
    
  }
}

void Indo(){
  
	digitalWrite(led1, HIGH);
    delay(150);
  	digitalWrite(led1, LOW);
  	digitalWrite(led2, HIGH);
    delay(150);
  	digitalWrite(led2, LOW);
  	digitalWrite(led3, HIGH);
    delay(150);
  	digitalWrite(led3, LOW);
    digitalWrite(led4, HIGH);
    delay(150);
    digitalWrite(led4, LOW);
    digitalWrite(led5, HIGH);
    delay(150);
    digitalWrite(led5, LOW);
    digitalWrite(led6, HIGH);
    delay(150);
    digitalWrite(led6, LOW);
    digitalWrite(led7, HIGH);
    delay(150);
    digitalWrite(led7, LOW);
    digitalWrite(led8, HIGH);
    delay(150);
    digitalWrite(led8, LOW);
    digitalWrite(led9, HIGH);
    delay(150);
    digitalWrite(led9, LOW);
    digitalWrite(led10, HIGH);
    delay(150);
    digitalWrite(led10, LOW);
  
}

void Voltando(){

    digitalWrite(led10, HIGH);
    delay(150);
  	digitalWrite(led10, LOW);
  	digitalWrite(led9, HIGH);
    delay(150);
  	digitalWrite(led9, LOW);
  	digitalWrite(led8, HIGH);
    delay(150);
  	digitalWrite(led8, LOW);
    digitalWrite(led7, HIGH);
    delay(150);
    digitalWrite(led7, LOW);
    digitalWrite(led6, HIGH);
    delay(150);
    digitalWrite(led6, LOW);
    digitalWrite(led5, HIGH);
    delay(150);
    digitalWrite(led5, LOW);
    digitalWrite(led4, HIGH);
    delay(150);
    digitalWrite(led4, LOW);
    digitalWrite(led3, HIGH);
    delay(150);
    digitalWrite(led3, LOW);
    digitalWrite(led2, HIGH);
    delay(150);
    digitalWrite(led2, LOW);
    digitalWrite(led1, HIGH);
    delay(150);
    digitalWrite(led1, LOW);
}

void Pisca(){

    digitalWrite(led10, LOW);
    digitalWrite(led1, HIGH);
  	digitalWrite(led2, HIGH);
  	digitalWrite(led3, HIGH);
    digitalWrite(led4, HIGH);
    digitalWrite(led5, HIGH);
    digitalWrite(led6, HIGH);
    digitalWrite(led7, HIGH);
    digitalWrite(led8, HIGH);
    digitalWrite(led9, HIGH);
    digitalWrite(led10, HIGH);
    delay(500);
    digitalWrite(led1, LOW);
    digitalWrite(led2, LOW);
  	digitalWrite(led3, LOW);
    digitalWrite(led4, LOW);
    digitalWrite(led5, LOW);
    digitalWrite(led6, LOW);
    digitalWrite(led7, LOW);
    digitalWrite(led8, LOW);
    digitalWrite(led9, LOW);
    digitalWrite(led10, LOW);

}