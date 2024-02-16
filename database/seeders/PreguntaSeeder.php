<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pregunta;

class PreguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pregunta = new Pregunta();
        $pregunta->titulo = "La FCT ha incrementado los conocimientos adquiridos en el cilo formativo.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 1;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Los contenidos estudiados durante el curso te han ayudado a realizar las tareas en el centro de trabajo.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 2;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Has recibido la ayuda necesaria de los compañeros o del instructor durante las FCT.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 3;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "El seguimiento realizado por el tutor del instituto ha sido suficiente y satisfactorio.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 4;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "La empresa da posibilidades laborales una vez finalices las practicas.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 5;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Recomiendas esta empresa para realizar las practicas.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 6;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Se corresponde la FCT con lo que se te informo en el centro educativo.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 7;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Se corresponde la FCT con lo que esperabas.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 8;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "¿Que dificultades has tenido durante el transcurso de las practicas?";
        $pregunta->tipo = "textarea";
        $pregunta->orden = 9;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "¿Alguna propuesta para mejorar el funcionamiento de las prácticas?";
        $pregunta->tipo = "textarea";
        $pregunta->orden = 10;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "¿Que harás después de las prácticas?";
        $pregunta->tipo = "textarea";
        $pregunta->orden = 11;
        $pregunta->formularios()->attach(1);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "El/la alumno/a ha mostrado buena disposición para el trabajo (interés, puntualidad...)";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 1;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "El comportamiento con el resto de trabajadores ha sido correcto.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 2;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "El/la alumno/a llegó con habilidades técnicas para aprender a hacer el trabajo.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 3;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "El/la alumno/a llegó con habilidades técnicas (concentración, trabajo en equipo...)";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 4;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Después de la FCT, la empresa tiene interés en contratar al almuno/a.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 5;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "La FCT suele ser suficiente para conocer si el/la alumno/a encaja en la empresa.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 6;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Estaria dispuesta/a a colaborar de nuevo con el centro educativo.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 7;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "En la empresa estamos satisfechos con la relación con tutor/a del centro educativo.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 8;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "¿Qué carencias formativas has encontrado en el/la alumno/a?";
        $pregunta->tipo = "textarea";
        $pregunta->orden = 9;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "¿Cuáles son las mayores dificultades a la hora de realizar la fase de formación?";
        $pregunta->tipo = "textarea";
        $pregunta->orden = 10;
        $pregunta->formularios()->attach(2);
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "¿Nos podrías dar otras propuestas de mejora relativas al funcionamiento de las prácticas?";
        $pregunta->tipo = "textarea";
        $pregunta->orden = 11;
        $pregunta->formularios()->attach(2);
        $pregunta->save();
    }
}
