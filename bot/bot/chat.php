<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    
    //Precios
    "que precio tienen?" => "El lonche de jamón tiene un precio de $35 y el lonche de pierna cuesta $45.",
    "cuanto cuesta el lonche de jamon?" => "El lonche de jamón tiene un precio de $35." ,
    "cual es el precio del lonche de jamon?" => "El lonche de jamón tiene un precio de $35." ,
    "cuanto cuesta el lonche de pierna?" => "El lonche de pierna tiene un precio de $45.",
    "cual es el precio del lonche de pierna?" => "El lonche de pierna tiene un precio de $45.",
    "cuanto cuestan los lonches?" => "El lonche de jamón tiene un precio de $35 y el lonche de pierna cuesta $45.",
    "cuanto cuesta un lonche de jamon?" => "El lonche de jamón cuesta $35 pesos",
    "cuanto cuesta un lonche de pierna?"=>"El lonche de jamón cuesta $45 pesos",
    "a cuanto sale un lonche de jamon?" => "El lonche de jamón cuesta $35 pesos",
    "a cuanto sale un lonche de pierna?" => "El lonche de jamón cuesta $45 pesos",
    "a cuanto sale uno de jamon?" => "El lonche de jamón cuesta $35 pesos",
    "a cuanto sale uno de pierna?" => "El lonche de jamón cuesta $45 pesos",
    "cuanto cuesta uno de jamon?" => "El lonche de jamón cuesta $35 pesos", 
    "cuanto cuesta uno de pierna?" => "El lonche de jamón cuesta $45 pesos",

    //Pedido    
    "quisiera ordenar un lonche de pierna" => "De acuerdo, le gustaria algo más?",
    "quisiera ordenar un lonche de jamón" => "Muy bien, desea algo más?",
    "quiero un lonche" => "De qué lo quiere?",
    "quiero un lonche de jamon" => "Muy bien, desea algo más?",
    "quiero un lonche de pierna" => "De acuerdo, le gustaria algo más?",
    "quisiera un lonche" => "De qué lo quiere?",
    "si, tambien quisiera un lonche de pierna" => "Esta bien, seria todo?",
    "si, tambien quisiera un lonche de jamón" => "Esta bien, seria todo?",
    "de jamon" => "Muy bien, desea algo más?",
    "de pierna" => "De acuerdo, le gustaria algo más?",
    "no gracias" => "De acuerdo, tu pedido ha sido regristrado, gracias por comprar en Cero Tenedor.",
    "no" => "De acuerdo, tu pedido ha sido regristrado, gracias por comprar en Cero Tenedor.",
    "quiero uno de jamon" => "Bien, gusta algo más?",
    "quiero uno de pierna" => "Bien, gusta algo más?",
    "me da un lonche de jamon" => "Perfecto,  algo más en lo que lo podría ayudar?",
    "me da un lonche de pierna" => "Perfecto, ¿algo más en lo que lo podría ayudar?",
    "se me apetese un lonche de jamon" => "En seguida se lo reservo",
    "se me apetese un lonche de pierna" => "En seguida se lo reservo",
    "se me apetese uno de jamon" => "En seguida se lo reservo",
    "se me apetese uno de pierna"=>"En seguida se lo reservo",
    "me da uno de jamon?" => "En seguida se lo reservo",
    "me da uno de pierna?" => "En seguida se lo reservo",
    "me da un lonche de jamon?" => "En seguida se lo reservo",
    "me da un lonche de pierna?" => "En seguida se lo reservo",


    //Información
    "que venden?" => "En Cero Tenedor nosotros vendemos lonches de pierna y lonches de jamon.",
    "que vende?" => "En Cero Tenedor nosotros vendemos lonches de pierna y lonches de jamon.",
    "de que tienen lonches?" => "En Cero Tenedor nosotros vendemos lonches de pierna y lonches de jamon.",
    "de que tiene lonches?" => "En Cero Tenedor nosotros vendemos lonches de pierna y lonches de jamon.",
    "tienen lonches de jamon?" => "Por supuesto, tienen un costo de $35.",
    "tiene lonches de jamon?" => "Por supuesto, tienen un costo de $35.",
    "tienen lonches de pierna?" => "Claro, tienen un costo de $45.",
    "tiene lonches de pierna?"=> "Claro, tienen un costo de $45.",
    "que lonches tienes?" => "Vendemos lonches de jamon y pierna.",
    "que lonches tienen?" => "Vendemos lonches de jamon y pierna.",
    "que puedo comprar?" => "Nosotros ofrecemos lonches, tenemos de jamon y de pierna.",
    "que vende aquí?" => "En Cero Tenedero vendemos lonches de jamón y pierna",
    "que estas vendiendo?" => "En Cero Tenedero vendemos lonches de jamón y pierna",
    "que es lo que hay aquí?" => "Aquí usted podrá encontrar lonches de pierna o de jamón",
    "que puedo comprar aquí?" => "Usted puede comprar lonches de pierna o de jamón",

    
    //Ingredientes
    "que contienen?" => "Nuestros lonches estan hechos con crema, jitomate, cebolla y chile jalapeño.",
    "que contiene el lonche de pierna?" => "Nuestro lonche de pierna se compone de crema, jitomate, cebolla, chile jalapeño, pierna de cerdo y nuestra salsa unica.",
    "que contiene el lonche de jamon?" => "Nuestro lonche de pierna se compone de crema, jitomate, cebolla, chile jalapeño y jamón.",
    "de que es el jamon?" => "El jamon que servimos en nuestros losnches es jamon de cerdo.",   

    //Nombre
    "como te llamas?" => "Soy Lonchi y estoy para servirte",
    "cual es tu nombre?" => "Soy Lonchi y estoy para servirte",
    "tienes nombre?" => "Si soy Lonchi y estoy para servirte",

    //Saludo
    "hola" => "Hola que tal!",
    "que tal" => "Que tal, un gusto.",
    "que tal?" => "Que tal, un gusto.",
    "un saludo" => "Como te va",
    "hello" => "Un gusto de verte",
    "hola lonchi" => "Mucho gusto",
    "buenas" => "Buen día",
    "what is your name?" => " My name is Lonchi",
    "tengo hambre" => "Entonces estas en el lugar correcto, aqui puedes realizar tu pedido para comprar un delicioso lonche.",
 
    //Despedida
    "adios" => "Cuidate",
    "hasta la proxima" => "Nos vemos pronto",
    "nos vemos" => "Te estare esperando",
    "bye" => "Good bye",
    "see you" => "See you later",
    
    //
    "activa autodestruccion"=>"Autodestruyendo en 3 ... 2 ... 1 ... ja, era broma",
    "yo soy groot" => "Yo soy Lonchi, un gusto",
    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy un " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, las preguntas deben estar relacionadas con tu pedido.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
