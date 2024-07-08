<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models;
use App\Models\SMA;
use App\Models\User;
use App\Models\Museum;
use App\Models\Find;
use App\Models\Collection;
use App\Models\Find_Catalog;
use App\Models\Catalog;
use App\Models\Deposit;
use App\Models\Gigapixel;
use App\Models\Render;
use App\Models\Restoration;
use App\Models\BiologicalEntity;
use App\Models\Xit;
use App\Models\Acquisition;
use App\Models\Composition;
use App\Models\Thesis;
use Illuminate\Support\Facades\DB;




class DatabaseSeeder extends Seeder
{

    public function seedPermissions () {
        Permission::create(['name' => 'view-subscription-type-cards']);
        Permission::create(['name' => 'add-new-expert']);
        Permission::create(['name' => 'see-appointments']);
        Permission::create(['name' => 'see-diary']);
        Permission::create(['name' => 'add-new-post']);
        Permission::create(['name' => 'add-new-appointment']);
        Permission::create(['name' => 'see-emergency-contacts']);
        Permission::create(['name' => 'subscription-to-therapist']);
    }

    public function seedRoles () {
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('add-new-expert');

        $role = Role::create(['name' => 'intern']);
        $role->givePermissionTo('see-appointments', 'add-new-post', 'add-new-appointment');

        $role = Role::create(['name' => 'researcher']);
        $role->givePermissionTo('view-subscription-type-cards', 'see-diary', 'see-appointments', 'see-emergency-contacts');

        $role = Role::create(['name' => 'visitor']);
        $role->givePermissionTo('view-subscription-type-cards', 'see-diary', 'see-appointments', 'see-emergency-contacts');
    }





    public function seedMuseums() {
        Museum::factory()->create(
            [
                'nome_museo' => 'Museo Piero Leonardi'
            ]
        );
    }
    public function seedFinds() {
        Find::factory()->create([
            'id_museo' => 1,
            'id_vecchio' => 100568,
            'descrizione' => 'Ercole',
            'note'=>'Ritrovata nel 2005 durante gli scavi nell\'area del foro',
            'esposto'=>true,
            'digitalizzato'=>true,
            'catalogato'=>true,
            'restaurato'=>false,
            'id_deposito'=>1,
            'id_collezione'=>1,
            'validato'=>true,
            'categoria'=>'uomo',
            'gigapixel_flag'=>true,
            'render_flag'=>false,
            'cartellino_storico'=>"S/N",
            'cartellino_attuale'=>"S/N",
            'foto_principale'=>"S/N",
            ]);
    }

    public function seedUsers() {
        User::factory()->create([
            'id_museo' =>1,
            'nome' => 'Giorgio',
            'cognome'=>'Ciano',
            'email' => 'admin@museum.com',
            'password' => Hash::make('password'),
            'telefono' => '3333333333',
            'numero_ufficio'=> '604',
        ]);
    }

    public function seedBiologicalEntities() {
        BiologicalEntity::factory()->create([
            'id_reperto'=>1,
            'olotipo'=>true,
            'riferimento_tassonomico'=>'Homo sapiens',
            'nome_comune' => 'Uomo',
            'taxon_group'=>'M',
            'riferimento_cronologico' => 'Età del Bronzo',
        ]);
    }

    public function seedDeposits() {
        Deposit::factory()->create([
            'collocazione'=>'Magazzino 1',
            'deposito'=>'Deposito A',

            'codice_stanza'=>"A01",
        ]);
    }

    public function seedCollections() {
        Collection::factory()->create([
            'data_acquisizione_collezione' => '2000-01-01',
            'descrizione' => 'Raccolta di reperti archeologici provenienti dagli sc',
            'nome_collezione' => 'Reperi archeologici del foro',]);
        }
        public function seedFinds_Catalog(){


            DB::table('finds_catalogs')->insert([
                'id_reperto' => 1,
                'id_catalogo' => 1,
            ]);
        }

        public function seedCatalogs() {
            Catalog::factory()->create([

                'catalogo' => 'catalogo generale',
                'iccd' => 'IT012345',
                'pater' => 'LA-VR 123456',
                'vecchio_db'=>'MUS01234',
            ]);
        }

        public function seedAcquisitions() {
            Acquisition::factory()->create([
                'id_reperto' => 1,
                'modalita_acquisizione' => 'Donazione',
                'data_acquisizione'=>'2000-01-01',
                'data_acquisizione' => '2000-01-01',
                'proprieta'=>'Museo SMA',
                'codice_patrimonio'=>'SMA-0001',
                'provenienza'=>'Scavo archeologico del foro di Siena',
                'fornitore'=>'Signor Alfonso Di Siena',
            ]);
        }

        public function seedCompositions() {
            Composition::factory()->create([
                'id_reperto' => 1,
                'multiplo' => false,
                'originale'=>true,
                'fossile'=>false,
                'materiale'=>'umano',
            ]);
        }

        public function seedRestorations() {
            Restoration::factory()->create([
                'id_reperto' => 1,
                'data_valutazione'=>'2010-01-01',
                'necessita_di_restauro'=>false,
            ]);
        }

        public function seedGigapixels() {
            Gigapixel::factory()->create([
                'id_reperto' => 1,
                'gigapixel_file'=>'Ercole.jpg',
            ]);
        }

        public function seedRenders() {
            Render::factory()->create([
                'id_reperto' => 1,
                'render_file'=>'Ercole.obj',
            ]);
        }

        public function seedTheses(){
            Thesis::factory()->create([
                'id_museo' => 1,
                'id_deposito' => 1,
                'autore' => 'Mario Rossi',
                'titolo' => 'Lo scavo del Foro di Siena',
                'anno_accademico' => '2000/2001',
                'disciplina' => 'Archeologia',
                'relatore' => 'Prof. Bianchi',
                'correlatore' => 'Prof. Verdi',
                'contro_relatore' => 'Prof. Gialli',
                'percorso_file' => 'tesi/mario_rossi.pdf',
                'note' => 'Tesi svolta sugli scavi del foro tra il 1998 e il 2000',
                ]);
        }

        public function seedXits(){
            Xit::factory()->create([
                'id_reperto' => 1,
                'uscita_reperto'=>false,
                'motivazione'=>'In deposito per studio',
                'data_uscita'=>'2023-01-01',
                'data_entrata'=>'2024-01-01',
            ]);
        }










    public function run(): void
    {
        $this->seedPermissions();
        $this->seedRoles();
        $this->seedMuseums();
        $this->seedDeposits();
        $this->seedCollections();
        $this->seedUsers();
        $this->seedFinds();
        $this->seedCatalogs();
        $this->seedAcquisitions();
        $this->seedCompositions();
        $this->seedRestorations();
        $this->seedGigapixels();
        $this->seedRenders();
        $this->seedTheses();
        $this->seedXits();
        $this->seedBiologicalEntities();
        $this->seedFinds_Catalog();

    }
}
