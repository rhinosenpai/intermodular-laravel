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
        $pregunta->titulo = "L'alumne/a ha mostrar bona disposició per al treball (atenció, interès, puntualitat).";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 1;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "El comportament amb la resta de treballadors ha sigut correcte.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 2;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "L'alumne/a va arribar amb habilitats tècniques per a aprendre a fer el treball.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 3;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "L'alumne/a va arribar amb habilitats bàsiques(concentració, treball en grup).";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 4;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Desprès de l'FCT, l'empresa te interès en contractar l'alumne/a.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 5;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "El període d'FCT sol ser suficient per a conèixer si l'alumne encaixa a l'empresa.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 6;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Estaria disposat a col·laborar novament amb el centre educatiu.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 7;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "A l'empresa estem satisfets amb la relació amb el tutor del centre educatiu.";
        $pregunta->tipo = "estrellas";
        $pregunta->orden = 8;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Quines mancances o carències formatives has trobat en l'alumne/a?";
        $pregunta->tipo = "textarea";
        $pregunta->orden = 1;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Quines son les majors dificultats a l'hora de realitzar la fase de formació?";
        $pregunta->tipo = "textarea";
        $pregunta->orden = 2;
        $pregunta->save();

        $pregunta = new Pregunta();
        $pregunta->titulo = "Tindries altres propostes de millora relatives al funcionament de les pràctiques?";
        $pregunta->tipo = "textarea";
        $pregunta->orden = 3;
        $pregunta->save();
    }
}
