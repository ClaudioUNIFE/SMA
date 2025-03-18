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
use App\Models\Metadatazione;
use App\Models\Metadata;
use App\Models\Paradata;
use App\Models\Processamento;
use App\Models\Modellizzazione;
use App\Models\Archiviazione;
use App\Models\Attached;
use Faker\Factory as Faker;





class DatabaseSeeder extends Seeder
{
    protected $faker;

    public function __construct()
    {
        $this->faker = Faker::create();
    }

    public function seedPermissions () {
        Permission::create(['name' => 'manages-roles']);
        Permission::create(['name' => 'manages-deposits']);
        Permission::create(['name' => 'manages-collections']);
        Permission::create(['name' => 'add-finds']);
        Permission::create(['name' => 'add-theses']);
        Permission::create(['name' => 'delete-finds']);
        Permission::create(['name' => 'delete-theses']);
        Permission::create(['name' => 'update-finds']);
        Permission::create(['name' => 'update-theses']);
        Permission::create(['name' => 'manages-attachments']);
        Permission::create(['name' => 'validate-finds']);

    }

    public function seedRoles () {
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('manages-roles', 'manages-deposits', 'manages-collections', 'add-finds', 'add-theses', 'delete-finds', 'delete-theses', 'update-finds', 'update-theses', 'manages-attachments', 'validate-finds');

        $role = Role::create(['name' => 'intern']);
        $role->givePermissionTo('manages-deposits', 'manages-collections', 'add-finds', 'add-theses', 'delete-finds', 'delete-theses', 'update-finds', 'update-theses', 'manages-attachments', 'validate-finds');

        $role = Role::create(['name' => 'researcher']);
        $role->givePermissionTo( 'add-finds', 'add-theses', 'update-finds', 'update-theses');

        $role = Role::create(['name' => 'visitor']);
        $role->givePermissionTo();
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
            'id_collezione'=>1,
            'restaurato'=>false,
            'id_deposito'=>1,
            'id_collezione'=>1,
            'validato'=>true,
            'categoria'=>'uomo',
            'cartellino_storico'=>"S/N",
            'cartellino_attuale'=>"S/N",
            'foto_principale'=>"S/N",
            'didascalia'=>"Homo sapiens, 4000ac",
            ]);
    }

    public function seedUsers() {
        User::factory()->create([
            'id_museo' =>1,
            'nome' => 'Ursula',
            'cognome'=>'Thun Hohenstein',
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
            'nome_collezione' => 'Reperti archeologici del foro',]);
        }


        public function seedCatalogs() {
            Catalog::factory()->create([
                'id_reperto' => 1,
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
                'molteplicita' => 1,
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

        public function seedAttachments(){
            Attached::factory()->create([
                'id_reperto' => 1,
                'link' => 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png',
                'tipo_acquisizione' => 'gigapixel',
            ]);
        }

        public function seedMetadatas(){
            Metadata::factory()->create([
            'id_allegato' => 1,
            'codice_reperto' => 1,
            'titolo' => 'Repertorio di Ercole',
            'autore' => '<NAME>',
            'sogetto' => 'Ercole',
            'descrizione' => 'Repertorio di Ercole',
            'editore' => 'Museo SMA',
            'autore_di_contributo' =>   '<NAME>',
            'data' => '2020-01-01',
            'tipo' => 'Repertorio',
            'formato' => 'PDF',
            'identificatore' => '123456789',
            'fonte' => 'Museo SMA',
            'lingua' => 'Italiano',
            'relazione' => 'Repertorio di Ercole',
            'copertura' => 'Italiana',
            'gestione_dei_diritti' => 'CC BY-NC-SA',
            ]);
        }

        public function seedParadatas(){
            Paradata::factory()->create([
            'id_allegato' => 1,
            'stato_corrente' => 'Attivo',
            'responsabile_scelta_reperto' => 'Museo SMA',
            'scheda_validata' => true,
            'validatore_scheda' => '<NAME>',
            'note' => 'Tutto ok',
            'responsabile_acquisizione' => 'Museo SMA',
            'operatore' => '<NAME>',
            'tipo_superfice' => 'Museo',
            'descrizione_complessita' => 'Repertorio di Ercole',
            'fotocamera' => 'Canon EOS 5D Mark III',
            'impostazioni' => '1200',
            'obiettivo' => '1200',
            'illuminazione' => '1200',
            'light_box' => false,
            'tipo_supporto' => 'VHS',
            'numero_scatti' => 1200,
            'software' => 'Photoshop',
            'output' => '1200',
            'strumentazione' => '1200',
            'risoluzione' => '1200',
            'modalita_scansione' => '1200',
            'ingrandimento' => '1200',
            'luminosita' => '1200',
            'fibra_ottica' => false,
            'tiling' => false,
            'scala' => '1200',
            'formato' => '1200',
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->date(),
            'tempo_totale' => '1200 giorni',
            'luogo_acquisizione' => $this->faker->city(),
            'temperatura' => $this->faker->randomFloat(2, 10, 40),
            'condizioni_iniziali_conservazione' =>'sicuro',
            'condizioni_finali_conservazione' => 'sicuro',
            ]);
        }


        public function seedMetadatazioni(){
            Metadatazione::factory()->create([
            'id_paradati' => 1,
            'responsabile' =>'<NAME>' ,
            'operatore' => '<NAME>',
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->date(),]);
        }

        public function seedProcessamenti(){
            Processamento::factory()->create([
            'id_paradati' => 1,
            'responsabile' => '<NAME>',
            'operatore' => '<NAME>',
            'strumentazione' => '1200',
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->date(),
            ]);
        }

        public function seedModellizzazioni(){
            Modellizzazione::factory()->create([
            'id_paradati' => 1,
           'responsabile' => '<NAME>',
            'operatore' => '<NAME>',
           'strumentazione' => '1200',
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->date(),
            ]);
        }


        public function seedArchiviazioni(){
            Archiviazione::factory()->create([
            'id_paradati' => 1,
           'responsabile' => '<NAME>',
            'operatore' => '<NAME>',
            'data_ultimo_becup' => $this->faker->date(),
            'data_inizio' => $this->faker->date(),
            'data_fine' => $this->faker->date(),
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
        $this->seedTheses();
        $this->seedXits();
        $this->seedBiologicalEntities();
        $this->seedAttachments();
        $this->seedMetadatas();
        $this->seedParadatas();
        $this->seedMetadatazioni();
        $this->seedProcessamenti();
        $this->seedModellizzazioni();
        $this->seedArchiviazioni();




    }
}
