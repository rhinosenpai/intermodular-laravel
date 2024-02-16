<?php

namespace Database\Seeders;

use App\Models\Poblacion;
use App\Models\Provincia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoblacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alicante = Provincia::where('nombre', 'Alicante')->first();
        $castellon = Provincia::where('nombre', 'Castellon')->first();
        $valencia = Provincia::where('nombre', 'Valencia')->first();

        $alicante_pueblos = [
            'Adsubia', 'Agost', 'Agres', 'Aguas de Busot', 'Albatera', 'Alcalalí', 'Alcocer de Planes', 'Alcolecha', 'Alcoy', 'Alfafara',
            'Alfaz del Pi', 'Algorfa', 'Algueña', 'Alicante', 'Almoradí', 'Almudaina', 'Alquería de Aznar', 'Altea', 'Aspe', 'Balones',
            'Bañeres', 'Benasau', 'Benejama', 'Benejúzar', 'Benferri', 'Beniarbeig', 'Beniardá', 'Beniarrés', 'Benidoleig', 'Benidorm',
            'Benifallim', 'Benifato', 'Benichembla', 'Benijófar', 'Benilloba', 'Benillup', 'Benimantell', 'Benimarfull', 'Benimasot',
            'Benimeli', 'Benisa', 'Benitachell', 'Biar', 'Bigastro', 'Bolulla', 'Busot', 'Callosa de Ensarriá', 'Callosa de Segura',
            'Calpe', 'Campello', 'Campo de Mirra', 'Cañada', 'Castalla', 'Castell de Castells', 'Catral', 'Cocentaina', 'Confrides',
            'Cox', 'Crevillente', 'Cuatretondeta', 'Daya Nueva', 'Daya Vieja', 'Denia', 'Dolores', 'Elche', 'Elda', 'Facheca', 'Famorca',
            'Finestrat', 'Formentera del Segura', 'Gata de Gorgos', 'Gayanes', 'Gorga', 'Granja de Rocamora', 'Guadalest', 'Guardamar del Segura',
            'Hondón de las Nieves', 'Hondón de los Frailes', 'Ibi', 'Jacarilla', 'Jalón', 'Jávea', 'Jijona', 'Llíber', 'Lorcha', 'Millena',
            'Monforte del Cid', 'Monóvar', 'Montesinos, Los', 'Murla', 'Muro de Alcoy', 'Muchamiel', 'Novelda', 'La Nucía', 'Ondara', 'Onil',
            'Orba', 'Orcheta', 'Orihuela', 'Parcent', 'Pedreguer', 'Pego', 'Penáguila', 'Petrer', 'Pilar de la Horadada', 'Pinoso', 'Planes',
            'Poblets, els', 'Polop', 'Rafal', 'Ráfol de Almunia', 'Redován', 'Relleu', 'Rojales', 'Romana, la', 'Sagra', 'Salinas',
            'San Fulgencio', 'San Isidro', 'San Juan de Alicante', 'San Miguel de Salinas', 'San Vicente del Raspeig', 'Sanet y Negrals',
            'Santa Pola', 'Sax', 'Sella', 'Senija', 'Tárbena', 'Teulada', 'Tibi', 'Tollos', 'Tormos', 'Torremanzanas', 'Torrevieja',
            'Valle de Alcalá', 'Vall de Ebo', 'Vall de Gallinera', 'Vall de Laguart', 'Vergel', 'Villajoyosa', 'Villena'
        ];

        $castellon_pueblos = [
            'Adzaneta', 'Ahín', 'Albocácer', 'Alcalá de Chivert', 'Alcora', 'Alcudia de Veo', 'Alfondeguilla', 'Algimia de Almonacid', 'Almazora', 'Almedíjar',
            'Almenara', 'Alquerías del Niño Perdido', 'Altura', 'Arañuel', 'Ares del Maestre', 'Argelita', 'Artana', 'Ayódar', 'Azuébar', 'Barracas',
            'Bejís', 'Benafer', 'Benafigos', 'Benasal', 'Benicarló', 'Benicasim', 'Benlloch', 'Bechí', 'Borriol', 'Burriana', 'Cabanes', 'Cálig',
            'Canet lo Roig', 'Castell de Cabres', 'Castellfort', 'Castellnovo', 'Castellón de la Plana', 'Castillo de Villamalefa', 'Catí', 'Caudiel', 'Cervera del Maestre',
            'Chilches', 'Chert', 'Chodos', 'Chóvar', 'Cinctorres', 'Cirat', 'Cortes de Arenoso', 'Costur', 'Cuevas de Vinromá', 'Culla', 'Eslida', 'Espadilla',
            'Fanzara', 'Figueroles', 'Forcall', 'Fuente la Reina', 'Fuentes de Ayódar', 'Gaibiel', 'Geldo', 'Herbés', 'Higueras', 'Jana, La', 'Jérica',
            'Lucena del Cid', 'Llosa, La', 'Ludiente', 'Mata, La', 'Matet', 'Moncófar', 'Montán', 'Montanejos', 'Morella', 'Navajas', 'Nules',
            'Olocau del Rey', 'Onda', 'Oropesa del Mar', 'Palanques', 'Pavías', 'Peñíscola', 'Pina de Montalgrao', 'Portell de Morella', 'Puebla de Arenoso',
            'Puebla de Benifasar', 'Puebla-Tornesa', 'Ribesalbes', 'Rosell', 'Sacañet', 'Salsadella', 'San Rafael del Río', 'San Juan de Moró', 'San Jorge',
            'San Mateo', 'Santa Magdalena de Pulpis', 'Segorbe', 'Sarratella', 'Sierra Engarcerán', 'Soneja', 'Sot de Ferrer', 'Sueras', 'Tales', 'Teresa',
            'Tírig', 'Todolella', 'Toga', 'Torás', 'El Toro', 'Torralba del Pinar', 'Torre de Embesora', 'Torre Endoménech', 'Torreblanca', 'Torrechiva', 'Traiguera',
            'Useras', 'Vall d\'Alba', 'Vall de Almonacid', 'Vall de Uxó', 'Vallat', 'Vallibona', 'Villafamés', 'Villafranca del Cid', 'Villahermosa del Río', 'Villamalur',
            'Villanueva de Alcolea', 'Villanueva de Viver', 'Villar de Canes', 'Villarreal', 'Villavieja', 'Villores', 'Vinaroz', 'Vistabella del Maestrazgo', 'Viver', 'Zorita del Maestrazgo',
            'Zucaina'
        ];

        $valencia_pueblos = [
            'Ademuz', 'Ador', 'Adzaneta de Albaida', 'Agullent', 'Alacuás', 'Albaida', 'Albal', 'Albalat de la Ribera',
            'Albalat de Taronchers', 'Albalat dels Sorells', 'Alberique', 'Alborache', 'Alboraya', 'Albuixech', 'Alcácer',
            'Alcántara de Júcar', 'Alcira', 'Alcublas', 'Alcudia, La', 'Alcudia de Crespins', 'Aldaya', 'Alfafar', 'Alfahuir',
            'Alfara de la Baronía', 'Alfara del Patriarca', 'Alfarp', 'Alfarrasí', 'Algar de Palancia', 'Algemesí',
            'Algimia de Alfara', 'Alginet', 'Almácera', 'Almiserat', 'Almoines', 'Almusafes', 'Alpuente', 'Alquería de la Condesa',
            'Andilla', 'Anna', 'Antella', 'Aras de los Olmos', 'Ayelo de Malferit', 'Ayelo de Rugat', 'Ayora', 'Barcheta',
            'Bárig', 'Bélgida', 'Bellreguart', 'Bellús', 'Benagéber', 'Benaguacil', 'Benavites', 'Benegida', 'Benetúser',
            'Beniarjó', 'Beniatjar', 'Benicolet', 'Benicull', 'Benifairó de la Valldigna', 'Benifairó de los Valles', 'Benifayó',
            'Beniflá', 'Benigánim', 'Benimodo', 'Benimuslem', 'Beniparrell', 'Benirredrá', 'Benisanó', 'Benisoda', 'Benisuera',
            'Bétera', 'Bicorp', 'Bocairente', 'Bolbaite', 'Bonrepós y Mirambell', 'Bufali', 'Bugarra', 'Buñol', 'Burjasot',
            'Calles', 'Camporrobles', 'Canals', 'Canet de Berenguer', 'Carcagente', 'Cárcer', 'Carlet', 'Carrícola', 'Casas Altas',
            'Casas Bajas', 'Casinos', 'Castellón de Rugat', 'Castellonet', 'Castielfabib', 'Catadau', 'Catarroja', 'Caudete de las Fuentes',
            'Cerdá', 'Chella', 'Chelva', 'Chera', 'Cheste', 'Chirivella', 'Chiva', 'Chulilla', 'Cofrentes', 'Corbera', 'Cortes de Pallás',
            'Cotes', 'Cuart de les Valls', 'Cuart de Poblet', 'Cuartell', 'Cuatretonda', 'Cullera', 'Daimuz', 'Domeño', 'Dos Aguas',
            'Eliana, La', 'Emperador', 'Enguera', 'Énova', 'Estivella', 'Estubeny', 'Faura', 'Favareta', 'Fontanares', 'Fortaleny',
            'Foyos', 'Fuente Encarroz', 'Fuente la Higuera', 'Fuenterrobles', 'Gabarda', 'Gandía', 'Gátova', 'Genovés', 'Gestalgar',
            'Gilet', 'Godella', 'Godelleta', 'Granja de la Costera, La', 'Guadasequies', 'Guadasuar', 'Guardamar de la Safor', 'Higueruelas',
            'Jalance', 'Jaraco', 'Jarafuel', 'Játiva', 'Jeresa', 'Liria', 'Llanera de Ranes', 'Llaurí', 'Llombay', 'Llosa de Ranes',
            'Loriguilla', 'Losa del Obispo', 'Luchente', 'Lugar Nuevo de Fenollet', 'Lugar Nuevo de la Corona', 'Lugar Nuevo de San Jerónimo',
            'Macastre', 'Manises', 'Manuel', 'Marines', 'Masalavés', 'Masalfasar', 'Masamagrell', 'Masanasa', 'Meliana', 'Millares',
            'Miramar', 'Mislata', 'Mogente', 'Moncada', 'Monserrat', 'Montaberner', 'Montesa', 'Montichelvo', 'Montroy', 'Museros',
            'Náquera', 'Navarrés', 'Novelé', 'Oliva', 'Ollería', 'Olocau', 'Onteniente', 'Otos', 'Paiporta', 'Palma de Gandía',
            'Palmera', 'Palomar', 'Paterna', 'Pedralba', 'Petrés', 'Picaña', 'Picasent', 'Piles', 'Pinet', 'Poliñá de Júcar',
            'Potríes', 'Puebla de Farnals', 'Puebla de San Miguel', 'Puebla de Vallbona', 'Puebla del Duc', 'Puebla Larga', 'Puig, El',
            'Puzol', 'Quesa', 'Rafelbuñol', 'Rafelcofer', 'Rafelguaraf', 'Ráfol de Salem', 'Real', 'Real de Gandía', 'Requena',
            'Ribarroja del Turia', 'Riola', 'Rocafort', 'Rotglá y Corbera', 'Rótova', 'Rugat', 'Sagunto', 'Salem', 'San Antonio de Benagéber',
            'San Juan de Énova', 'Sedaví', 'Segart', 'Sellent', 'Sempere', 'Señera', 'Serra', 'Siete Aguas', 'Silla', 'Simat de Valldigna',
            'Sinarcas', 'Sollana', 'Sot de Chera', 'Sueca', 'Sumacárcel', 'Tabernes Blanques', 'Tabernes de Valldigna', 'Teresa de Cofrentes',
            'Terrateig', 'Titaguas', 'Torrebaja', 'Torrella', 'Torrente', 'Torres Torres', 'Tous', 'Tuéjar', 'Turís', 'Utiel',
            'Valencia', 'Vallada', 'Vallanca', 'Vallés', 'Venta del Moro', 'Villamarchante', 'Villalonga', 'Villanueva de Castellón',
            'Villar del Arzobispo', 'Villargordo del Cabriel', 'Vinalesa', 'Yátova', 'Yesa, La', 'Zarra'
        ];

        foreach($alicante_pueblos as $pueblo) {
            $poblacion = new Poblacion();
            $poblacion->nombre = $pueblo;
            $poblacion->provincia()->associate($alicante);
            $poblacion->save();
        }

        foreach($castellon_pueblos as $pueblo) {
            $poblacion = new Poblacion();
            $poblacion->nombre = $pueblo;
            $poblacion->provincia()->associate($castellon);
            $poblacion->save();
        }

        foreach($valencia_pueblos as $pueblo) {
            $poblacion = new Poblacion();
            $poblacion->nombre = $pueblo;
            $poblacion->provincia()->associate($valencia);
            $poblacion->save();
        }
    }
}
