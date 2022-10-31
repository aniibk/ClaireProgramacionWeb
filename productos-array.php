<?php

include_once("productos.json");



if (isset($_REQUEST['id_marca']))
    $id_marca = $_REQUEST['id_marca'];
else
    $id_marca = array();

$array_productos = array ( 

    '1' => array ('id_marca' => '1', // La marca 1 es la marca BOBBI BROWN 
     'nombre_marca' => 'Bobbi Brown',
     'id_categoria' => '1', // La categoria 1 es BASE
     'nombre_categoria' => 'Base',
     'id_producto' => '1', // Basicamente es un ID unico para cada producto
     'nombre_producto' => 'SKIN LONG-WEAR WEIGHTLESS FOUNDATION SPF 15',
     'precio' => '49.00',
     'destacado'=> false,
     'descripcion' => 'Experimente un mate que hace mas.'),

    '2' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '1', // La categoria 1 es BASE
    'nombre_categoria' => 'Base',
    'id_producto' => '2',
    'nombre_producto' => 'SKIN FOUNDATION SPF 15',
    'precio' => '50.00',
    'destacado'=> false,
    'descripcion' => 'Esta formula a base de agua y sin aceite 
    brinda una cobertura indetectable y un brillo fresco e 
    hidratado para un acabado similar a la piel mas natural.'),

    '3' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '1', // La categoria 1 es BASE
    'nombre_categoria' => 'Base',
    'id_producto' => '3',
    'nombre_producto' => 'NUDE FINISH TINTED MOISTURIZER SPF 15',
    'precio' => '48.00',
    'destacado' => false,
    'descripcion' => 'El look nude definitivo: este humectante cremoso y 
    ligero cubre de forma invisible el enrojecimiento 
    y las irregularidades mientras infunde a la piel una hidratacion refrescante y sostenida. '),

    //¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ACA TERMINA LA CATEGORIA DE BASE!!!!!!!!!!!!!!!!!!!
    //¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡COMIENZA LA CATEGORIA DE OJOS!!!!!!!!!!!!!!!!!!!

    '4' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '3', // La categoria 2 es OJOS,
    'nombre_categoria' => 'Ojos',
    'id_producto' => '4',
    'nombre_producto' => 'LONG-WEAR EYE PENCIL',
    'precio' => '28.00',
    'destacado' => true,
    'descripcion' => 'El secreto para hacer que los ojos se destaquen tiene que
     ver con la definicion. Este exclusivo lapiz a base de gel
     ofrece un color ricamente pigmentado y un forro de precision con hasta 12 horas de uso impermeable.'),

    '5' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '3', // La categoria 2 es OJOS, //LaPIZ DE OJOS DE LARGA DURACIoN
    'nombre_categoria' => 'Ojos',
    'id_producto' => '5',
    'nombre_producto' => 'PERFECTLY DEFINED GEL EYELINER',
    'precio' => '28.00',
    'destacado' => false,
    'descripcion' => 'Especialmente formulado para permanecer en su
     sitio durante 12 horas, es impermeable y resistente a las manchas'),

    '6' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '3', // La categoria 2 es OJOS, //RiMEL PARA ABRIR OJOS
    'nombre_categoria' => 'Ojos',
    'id_producto' => '6',
    'nombre_producto' => 'INK LINER',
    'precio' => '33.00',
    'destacado' => false,
    'descripcion' => 'Un delineador liquido estilo boligrafo que no se desvanece, 
    se descascara ni se mancha.'),

    '7' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '4', 
    'nombre_categoria' => 'Mascara',
    'id_producto' => '7',
    'nombre_producto' => 'SMOKEY EYE MASCARA',
    'precio' => '32.00',
    'destacado' => false,
    'descripcion' => 'El complemento perfecto para un look de ojos ahumados'),

    '8' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '4', 
    'nombre_categoria' => 'Mascara',
    'id_producto' => '8',
    'nombre_producto' => 'NO SMUDGE MASCARA',
    'precio' => '32.00',
    'destacado' => false,
    'descripcion' => 'Un impermeable para pestanas: esta mascara de pestanas 
    resistente al agua de larga duracion define, riza y alarga las pestanas sin manchar'  ),

    '9' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '4',
    'nombre_categoria' => 'Mascara',
    'id_producto' => '9',
    'nombre_producto' => 'EYE OPENING MASCARA',
    'precio' => '32.00',
    'destacado' => true,
    'descripcion' => 'Volumen de gran dramatismo y rizos de alto impacto en un abrir y cerrar de ojos. 
    El cepillo gigante ventila y empuja las pestanas hacia arriba y hacia afuera'),

    '10' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '5', 
    'nombre_categoria' => 'Sombra',
    'id_producto' => '10',
    'nombre_producto' => 'LUXE EYE SHADOW',
    'precio' => '38.00',
    'destacado' => false,
    'descripcion' => 'Una formula de sombra de ojos metalica multidimensional 
    completamente nueva disenada para dar a los ojos una incandescencia instantanea. '   ),

    '11' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '5', 
    'nombre_categoria' => 'Sombra',
    'id_producto' => '11',
    'nombre_producto' => 'SHIMMER WASH EYE SHADOW',
    'precio' => '28.00',
    'destacado' => true,
    'descripcion' => 'Una sombra de ojos suave y brillante que ilumina suavemente los parpados. 
    Los tonos claros pueden funcionar como iluminadores debajo del hueso de la ceja.'),

    '12' => array ('id_marca' => '1',
    'nombre_marca' => 'Bobbi Brown',
    'id_categoria' => '5', 
    'nombre_categoria' => 'Sombra',
    'id_producto' => '12',
    'nombre_producto' => 'LONG-WEAR CREAM SHADOW STICK',
    'precio' => '30.00',
    'destacado' => true,
    'descripcion' => 'Una sombra de ojos de larga duracion que lo 
    hace todo y que es un golpe de genialidad, simplemente deslice el dedo y listo. 
    Esta formula a prueba de golpes se mantiene durante 8 horas.'),

    '13' => array(
        'id_marca' => '1',
        'nombre_marca' => 'Bobbi Brown',
        'id_categoria' => '2', //CATEGORIA 3 = RUBOR
        'nombre_categoria'=> 'Rubor',
        'id_producto' => '13',
        'nombre_producto' => 'Blush',
        'precio' => '34.00',
        'destacado' => false,
        'descripcion' => 'Un rubor en polvo sedoso que se desliza suavemente y ofrece un acabado mate.'
    ),
    '14' => array(
        'id_marca' => '1',
        'nombre_marca' => 'Bobbi Brown',
        'id_categoria' => '2',
        'nombre_categoria'=> 'Rubor',
        'id_producto' => '14',
        'nombre_producto' => 'Shimmer Blush',
        'precio' => '34.00',
        'destacado' => false,
        'descripcion' => 'Un rubor en polvo brillante que se desliza suave y uniformemente, 
        dando a las mejillas un toque de color brillante.'
    ),
    '15' => array(
        'id_marca' => '1',
        'nombre_marca' => 'Bobbi Brown',
        'id_categoria' => '2',
        'nombre_categoria'=> 'Rubor',
        'id_producto' => "15",
        'nombre_producto' => 'Pot Rouge for Lips & CHEEKS',
        'precio' => '34.00',
        'destacado' => false,
        'descripcion' => 'Nuestro color en crema multitarea más vendido para labios y 
        mejillas viene en un compacto con tapa abatible con espejo para su aplicación en el lugar.'
    ), 
        
        // MARCA BOBBI BROW COMPLETA. ACA TERMINA EL ARRAY DE BOBBI BROWN
        // MARCA BOBBI BROW COMPLETA. ACA TERMINA EL ARRAY DE BOBBI BROWN
        // MARCA BOBBI BROW COMPLETA. ACA TERMINA EL ARRAY DE BOBBI BROWN
        // MARCA BOBBI BROW COMPLETA. ACA TERMINA EL ARRAY DE BOBBI BROWN
        // MARCA BOBBI BROW COMPLETA. ACA TERMINA EL ARRAY DE BOBBI BROWN

    '16' => array(
    'id_marca' => '2',
    'nombre_marca' => 'Chanel',
    'id_categoria' => '1',
    'nombre_categoria' => 'Base',
    'id_producto' => '16',
    'nombre_producto' => 'Vitalumière',
    'precio' => '60.00',
    'destacado' => false,
    'descripcion' => 'Maquillaje fluido protector solar radiante rico en humedad de amplio espectro SPF 15'
    ),
    '17' => array(
    'id_marca' => '2',
    'nombre_marca' => 'Chanel',
    'id_categoria' => '1',
    'nombre_categoria' => 'Base',
    'id_producto' => '17',
    'nombre_producto' => 'Les Beiges',
    'precio' => '60.00',
    'destacado' => false,
    'descripcion' => 'Base de maquillaje Healthy Glow, hidratación y larga duración'
    ),
    '18' => array (
    'id_marca' => '2',
    'nombre_marca' => 'Chanel',
    'id_categoria' => '1',
    'nombre_categoria' => 'Base',
    'id_producto' => '18',
    'nombre_producto' => 'Ultra Le Teint',
    'precio' => '60.00',
    'destacado' => false,
    'descripcion' => 'Base de maquillaje Ultrawear All-Day Comfort Flawless Finish'
    ),
    '19' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '3',
        'nombre_categoria' => 'Ojos',
        'id_producto' => '19',
        'nombre_producto' => 'Stylo yeux waterproof',
        'precio' => '60.00',
        'destacado' => false,
        'descripcion' => 'Delineador de ojos de larga duración'
    ),
    '20' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '3',
        'nombre_categoria' => 'Ojos',
        'id_producto' => '20',
        'nombre_producto' => 'Le liner de chanel',
        'precio' => '35.00',
        'destacado' => false,
        'descripcion' => 'Delineador de ojos líquido de alta precisión de larga duración'
    ),
    '21' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '3',
        'nombre_categoria' => 'Ojos',
        'id_producto' => '21',
        'nombre_producto' => 'calligraphie de chanel',
        'precio' => '35.00',
        'destacado' => false,
        'descripcion' => 'Delineador de ojos en crema intenso de larga duración'
    ),
    '22' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '4',
        'nombre_categoria' => 'Mascara',
        'id_producto' => '22',
        'nombre_producto' => 'la base mascara',
        'precio' => '32.00',
        'destacado' => false,
        'descripcion' => 'Prebase de pestañas Volume And Care'
    ),
    '23' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '4',
        'nombre_categoria' => 'Mascara',
        'id_producto' => '23',
        'nombre_producto' => 'Le volume de chanel',
        'precio' => '32.00',
        'destacado' => false,
        'descripcion' => 'Mascara'    
    ),
    '24' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '4',
        'nombre_categoria' => 'Mascara',
        'id_producto' => '24',     
        'nombre_producto' => 'Dimensions ultimes de chanel',
        'precio' => '32.00',
        'destacado' => false,
        'descripcion' => 'Mascara – Extreme Wear – Rinsable'
    ),
    '25' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '5',
        'nombre_categoria' => 'Sombra',
        'id_producto' => '25',     
        'nombre_producto' => 'Ombre Premiére',
        'precio' => '36.00',
        'destacado' => false,
        'descripcion' => 'Sombra de ojos en crema de larga duración'
    ),
    '26' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '5',
        'nombre_categoria' => 'Sombra', 
        'id_producto' => '26',     
        'nombre_producto' => 'Les 4 Ombres',
        'precio' => '62.00',
        'destacado' => false,
        'descripcion' => 'Creación exclusiva en ligereza y experiencia'
    ),
    '27' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '5',
        'nombre_categoria' => 'Sombra',  
        'id_producto' => '27',     
        'nombre_producto' => 'Illusion D ombre',
        'precio' => '36.00',
        'destacado' => false,
        'descripcion' => 'Sombra de ojos luminosa de larga duración'
    ),
    '28' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '2',
        'nombre_categoria' => 'Rubor',
        'id_producto' => '28',     
        'nombre_producto' => 'Joues Contraste',
        'precio' => '45.00',
        'destacado' => false,
        'descripcion' => 'Rubor en polvo'        
    ),
    '29' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '2',  
        'nombre_categoria' => 'Rubor',
        'id_producto' => '29',     
        'nombre_producto' => 'Les Beiges',
        'precio' => '45.00',
        'destacado' => false,
        'descripcion' => 'Barra de color transparente healthy glow'   
    ),
    '30' => array(
        'id_marca' => '2',
        'nombre_marca' => 'Chanel',
        'id_categoria' => '2', 
        'nombre_categoria' => 'Rubor', 
        'id_producto' => '30',     
        'nombre_producto' => 'Les Tissages de Chanel',
        'precio' => '45.00',
        'destacado' => false,
        'descripcion' => 'Efecto Blush Duo Tweed'   
    ),
    '31' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '1',  
        'nombre_categoria' => 'Base',
        'id_producto' => '31',     
        'nombre_producto' => 'Redness-solutions',
        'precio' => '31.00',
        'destacado' => false,
        'descripcion' => 'La base calmante sin aceite trata y cubre el 
        enrojecimiento con un toque naturalmente bonito'   
    ),
    '32' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '1', 
        'nombre_categoria' => 'Base', 
        'id_producto' => '32',     
        'nombre_producto' => 'Acne Solutions Liquid Makeup',
        'precio' => '31.00',
        'destacado' => false,
        'descripcion' => 'El maquilaje para aclarar la piel con ácido salicílico ayuda a cubrir, aclarar
        y prevenir las imperfecciones. Libre de aceite.'  
    ),
    '33' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '1', 
        'nombre_categoria' => 'Base', 
        'id_producto' => '33',     
        'nombre_producto' => 'Stay-Matte Oil-Free Makeup',
        'precio' => '31.00',
        'destacado' => false,
        'descripcion' => 'El maquillaje a prueba de humedad absorbe el brillo, controla la grasa y resiste el sudor'  
    ),
    '34' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '3',  
        'nombre_categoria' => 'Ojos',
        'id_producto' => '34',     
        'nombre_producto' => 'Quickliner For Eyes',
        'precio' => '20.00',
        'destacado' => false,
        'descripcion' => 'Gira hacia arriba. Se desliza. Manchas hasta un suave desenfoque de color
         resistente a la transferencia. No necesita afilado'  
    ),
    '35' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '3', 
        'nombre_categoria' => 'Ojos',
        'id_producto' => '35',     
        'nombre_producto' => 'Pretty Easy Liquid Eyelining Pen',
        'precio' => '23.00',
        'destacado' => false,
        'descripcion' => 'El bolígrafo a prueba de errores de Clinique crea 
        una línea limpia en un barrido constante. Pinta con brocha cónica y 
        de precisión en colores puros y profundos de fino a grueso. 
        Desgaste resistente a las manchas y los movimientos las 24 horas. 
        Probado por oftalmología. Probado para alergias. 100% libre de fragancias.' 
    ), 
    '36' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '3',
        'nombre_categoria' => 'Ojos',
        'id_producto' => '36',     
        'nombre_producto' => 'Cream Shaper For Eyes',
        'precio' => '20.00',
        'destacado' => false,
        'descripcion' => 'Delineador de ojos cremoso y suave con un toque de brillo. 
        Moldea y define con un color intenso y permanente. No mancha, 
        resistente al agua y a la transferencia. También es fácil de afilar. Probado por oftalmología.' 
    ),
    '37' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '4',
        'nombre_categoria' => 'Mascara',
        'id_producto' => '37',     
        'nombre_producto' => 'High Impact Waterproof Mascara',
        'precio' => '20.00',
        'destacado' => false,
        'descripcion' => 'Volumen y longitud instantáneos que resisten la formación de grumos y manchas. 
        Nuestra versión impermeable de High Impact Mascara puede resistir el calor, la humedad y un día activo. 
        Seguro para ojos sensibles y usuarios de lentes de contacto. También probado por oftalmólogos.'   
    ),
    '38' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '4',
        'nombre_categoria' => 'Mascara',
        'id_producto' => '38',     
        'nombre_producto' => 'High Impact Extreme Volume Mascara',
        'precio' => '23.00',
        'destacado' => true,
        'descripcion' => 'Con cada pasada, el cepillo extraíble envuelve las pestañas en un dramatismo instantáneo y 
        asombroso. Esta fórmula increíble también es segura para ojos sensibles y usuarios de lentes de contacto. 
        También probado por oftalmólogos.'     
    ),
    '39' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '4',
        'nombre_categoria' => 'Mascara',
        'id_producto' => '39',     
        'nombre_producto' => 'Chubby Lash Fattening Mascara',
        'precio' => '20.00',
        'destacado' => true,
        'descripcion' => 'El cepillo voluminizador de gran tamaño rellena deliciosamente las pestañas sin apelmazarlas.'    
    ),
    '40' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '5',
        'nombre_categoria' => 'Sombra',
        'id_producto' => '40',     
        'nombre_producto' => 'Lid Pop',
        'precio' => '19.50',
        'destacado' => false,
        'descripcion' => 'Un toque moderno de sombra de ojos pura pero vibrante.'     
    ),
    '41' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '5',
        'nombre_categoria' => 'Sombra',
        'id_producto' => '41',     
        'nombre_producto' => 'All About Shadow Quad',
        'precio' => '33.50',
        'destacado' => false,
        'descripcion' => 'Crea una variedad de estilos, desde naturales hasta dramáticos.
         Delicioso, de larga duración. Dos aplicadores de esponja.'    
    ),
    '42' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '5',
        'nombre_categoria' => 'Sombra',
        'id_producto' => '42',     
        'nombre_producto' => 'All About Shadow Duo',
        'precio' => '24.00',
        'destacado' => false,
        'descripcion' => 'Tonos perfectamente combinados para una mirada sin esfuerzo. 
        Delicioso, de larga duración.'     
    ),
    '43' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '2', 
        'nombre_categoria' => 'Rubor',
        'id_producto' => '43',     
        'nombre_producto' => 'Sculptionary Cheek Contouring Palette',
        'precio' => '36.50',
        'destacado' => false,
        'descripcion' => 'Compacto para esculpir mejillas versátil con tonos que se mezclan, 
        se construyen maravillosamente.' 
    ),
    '44' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '2', 
        'nombre_categoria' => 'Rubor',
        'id_producto' => '44',     
        'nombre_producto' => 'Blushing Blush Powder Blush',
        'precio' => '26.00',
        'destacado' => false,
        'descripcion' => 'El color fresco y natural alcanza la intensidad deseada con el pincel para esculpir. 
        Desgaste duradero, sin aceite.'     
    ),
    '45' => array(
        'id_marca' => '3',
        'nombre_marca' => 'Clinique',
        'id_categoria' => '2', 
        'nombre_categoria' => 'Rubor',
        'id_producto' => '45',     
        'nombre_producto' => 'Chubby Stick Cheek Colour Blam',
        'precio' => '26.00',
        'destacado' => false,
        'descripcion' => 'Un color de mejillas cremoso y a prueba de errores que crea un brillo de apariencia 
        saludable en un instante'    
    ),
    '46' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '1', 
        'nombre_categoria' => 'Base',
        'id_producto' => '46',     
        'nombre_producto' => 'Dior Forever',
        'precio' => '40.00',
        'destacado' => true,
        'descripcion' => 'Con Dior Forever y su fórmula emblemática de fondo de maquillaje de larga duración, 
        la tez parece perfecta, homogénea, y los poros parecen minimizarse, de la mañana a la noche.
         Este fondo de maquillaje fluido y envolvente no se conforma con embellecer la piel al instante, 
         también mejora su belleza día tras días gracias a una fórmula enriquecida con ingredientes de tratamiento 
         minuciosamente seleccionados,
         para revelar toda la sensualidad de la piel.'    
    ),
    '47' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '1', 
        'nombre_categoria' => 'Base',
        'id_producto' => '47',     
        'nombre_producto' => 'Diorskin forever perfect mousse',
        'precio' => '60.00',
        'destacado' => false,
        'descripcion' => 'Reconciliar lo irreconciliable, la perfección y lo imperceptible:
         ese es el desafío de Diorskin Forever Perfect Mousse. 
         Gracias a la maestría única de los Laboratorios Dior, 
         esta mousse aérea garantiza al instante un acabado ultramate de larga duración mientras 
         ofrece una cobertura ligera y no empolvada. La piel se empapa además de un tratamiento 
         perfeccionador específico, para un efecto cero poros. La piel parece más bella día tras día. 
         Esta mousse no grasa se transforma bajo los dedos y se funde sin dejar casi materia, tan solo 
         una película efecto segunda piel ultramate y difuminadora. Si bien ligera, su cobertura corrige 
         las imperfecciones de forma ideal. 
        Los poros se atenúan, como si se borraran, la tez se vuelve más homogénea.'     
    ),
    '48' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '1', 
        'nombre_categoria' => 'Base',
        'id_producto' => '48',     
        'nombre_producto' => 'Dior Backstage',
        'precio' => '50.00',
        'destacado' => false,
        'descripcion' => 'Face & Body Primer es el arma secreta de Dior para crear una tez impecable al instante.
        Con solo unas cuantas bombas, 
        las imperfecciones se desenfocan y tu tez general parece más brillante, más plumper y más uniforme.
        Drena la piel con 24 horas de hidratación mientras mantiene tu base facial y 
        corporal favorita en su lugar durante todo el día.'    
    ),
    '49' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '3',
        'nombre_categoria' => 'Ojos',
        'id_producto' => '49',     
        'nombre_producto' => 'DIORSHOW ON STAGE LINER',
        'precio' => '35.00',
        'destacado' => false,
        'descripcion' => 'Dior se inspira en el Backstage* para presentar su primer eyeliner 
        con una mina híbrida que combina la sencillez de un rotulador y la flexibilidad de un pincel. 
        Su punta fina libera el gesto y acompaña el trazado a la perfección para conseguir
         en un solo movimiento todos los looks de los desfiles Dior.' 
    ),
    '50' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '3',
        'nombre_categoria' => 'Ojos',
        'id_producto' => '50',     
        'nombre_producto' => 'Diorshow 24H° Stylo',
        'precio' => '36.00',
        'destacado' => false,
        'descripcion' => 'El nuevo Diorshow 24H* Stylo es un eyeliner waterproof en colores intensos que realza 
        la mirada con un trazo preciso. La textura cremosa del eyeliner se desliza sobre la piel para ofrecer 
        un maquillaje de ojos resistente al agua con una duración de 24 h*. 
        Su punta delineadora permite realizar todo tipo de looks: de los más naturales a los más atrevidos.'   
    ),
    '51' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '3',
        'nombre_categoria' => 'Ojos',
        'id_producto' => '51',     
        'nombre_producto' => 'Diorshow Khol',
        'precio' => '36.00',
        'destacado' => true,
        'descripcion' => 'El lápiz Diorshow Khôl, con su fórmula altamente pigmentada, posee una textura cremosa 
        que ofrece una aplicación precisa y facilita el difuminado a ras de las pestañas y en la línea de agua del ojo.'         
    ),
    '52' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '4',
        'nombre_categoria' => 'Mascara',
        'id_producto' => '52',     
        'nombre_producto' => 'Diorshow',
        'precio' => '49.00',
        'destacado' => false,
        'descripcion' => 'En 2015, Diorshow, la máscara profesional del Backstage Dior, 
        se reinventa. Su fórmula de nueva generación, enriquecida en microfibras, 
        reproduce el efecto óptico de las extensiones de pestañas empleadas por los maquilladores de los desfiles.
        '     
    ),
    '53' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '4',
        'nombre_categoria' => 'Mascara',
        'id_producto' => '53',     
        'nombre_producto' => 'Diorshow Iconic',
        'precio' => '40.00',
        'destacado' => false,
        'descripcion' => 'La primera máscara efecto lifting de pestañas firmada por Dior. 
        Enriquecida con una fórmula efecto lifting inédita a la vez que irreprochable, 
        Diorshow Iconic ofrece a las pestañas, perfectamente esculpidas, 
        alargadas y curvadas, una definición excepcional.'     
    ),
    '54' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '4',
        'nombre_categoria' => 'Mascara',
        'id_producto' => '54',     
        'nombre_producto' => 'Diorshow Pump N Volume Waterproof',
        'precio' => '49.00',
        'destacado' => false,
        'descripcion' => 'En 2017, Dior revolucionaba las máscaras con Diorshow Pump’N’Volume, 
        una fórmula espectacular para un volumen de pestañas desmesurado. 
        Este año, Dior va aún más lejos y presenta el efecto "pumping*"
         en versión resistente al agua, para las más audaces. (*que se presiona)'     
    ),
    '55' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '5',
        'nombre_categoria' => 'Sombra',
        'id_producto' => '55',     
        'nombre_producto' => 'Diorshow Mono',
        'precio' => '49.00',
        'destacado' => false,
        'descripcion' => 'Diorshow Mono, la sombra de ojos de los Makeup 
        Artists Dior, se inspira en los efectos Couture de la Maison - mate, 
        satinado, brillante o lamé - y los declinan en tonos ultrapigmentados para 
        vestir la mirada de colores y acabados resplandecientes de larga duración.'    
    ),
    '56' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '5',
        'nombre_categoria' => 'Sombra',
        'id_producto' => '56',     
        'nombre_producto' => '5 Couleurs Designer',
        'precio' => '49.00',
        'destacado' => false,
        'descripcion' => '5 COULEURS DESIGNER nace la experiencia del Backstage y se inspira en las técnicas 
        y texturas profesionales para revelar una mirada impecablemente esculpida y con un degradado de colores perfecto. 
        Ofrece una lección de maquillaje muy sencilla en 5 pasos: una base, dos sombras, un iluminador y un delineador.' 
    ),
    '57' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '5',
        'nombre_categoria' => 'Sombra',
        'id_producto' => '57',     
        'nombre_producto' => 'Dior backstage - Custom eye palette',
        'precio' => '60.00',
        'destacado' => false,
        'descripcion' => 'Su gel único* transforma las texturas de sombra de ojos en un delineador con un trazo intenso.'     
    ),
    '58' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '2',
        'nombre_categoria' => 'Rubor',
        'id_producto' => '58',     
        'nombre_producto' => 'Rouge Blush',
        'precio' => '45.00',
        'destacado' => false,
        'descripcion' => 'Rouge Blush es el único colorete de la Maison Dior que aporta a las 
        mejillas un color intenso y ultrapigmentado, garantizando una larga duración. 
        Los tonos icónicos de Rouge Blush se inspiran en la barra de labios emblemática Rouge Dior. 
        La intensidad del color se modula a su gusto para conseguir un acabado suave o extremo. 
        Rouge Blush está disponible en varios acabados: mate, irisado o satinado.'    
    ),
    '59' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '2',
        'nombre_categoria' => 'Rubor',
        'id_producto' => '59',     
        'nombre_producto' => 'Dior Backstage Rosy Glow',
        'precio' => '60.00',
        'destacado' => true,
        'descripcion' => 'El colorete universal Rosy Glow es el secreto de los 
        maquilladores Dior para recrear unas mejillas que parecen sonrosadas naturalmente, 
        frescas y como reavivadas desde el interior.'    
    ),
    '60' => array(
        'id_marca' => '4',
        'nombre_marca' => 'Dior',
        'id_categoria' => '2',
        'nombre_categoria' => 'Rubor',
        'id_producto' => '60',     
        'nombre_producto' => 'Rouge Blush - Edition Limitee Collection Color Games',
        'precio' => '50.00',
        'destacado' => false,
        'descripcion' => 'El único rubor  que le da a las mejillas un color intenso y 
        ultrapigmentado, el rubor en polvo Rouge Blush también asegura un maquillaje duradero.
        La edición limitada de Rouge Blush Color Games con el nuevo 
         patrón de compactación viene en dos nuevos tonos exclusivos .'    
    )
);  

//  ¡RECORDAR= (3 ES RUBOR, 2 ES OJOS, 1 ES BASE)
   //  ¡RECORDAR = (ID1 ES DELINEADOR, ID2 ES MASCARA, ID3 ES SOMBRA)

$fp = fopen( 'productos.json', 'w');
fwrite($fp, json_encode($array_productos));
fclose($fp);

$fp = fopen ('productos.json', 'r');
$json_productos = fread($fp, filesize('productos.json'));
fclose($fp);

$array_productos = json_decode($json_productos, true);

echo '<pre>';
print_r($array_productos);
echo '</pre>';
