<?php
//Definition einer Funktion mit Keyword "function".
function myWelcomeMessage()
{ //FUNKTIONSKÖRPER
    echo 'Welcome To My Awesome Website';
}

function goodByeMessage(){
    echo 'Good Bye';
}
//Aufruf der Funktion (call)
myWelcomeMessage();
echo '<br>';

function myWelcomeMessageWithName($name) //Platzhalter $name
{
    print("Welcome $name. You Successfully Logged In!");
}

myWelcomeMessageWithName("Max"); //Aufruf mit konkretem Namen/WERT
echo '<br>';














































#Verabschiedung
goodByeMessage();