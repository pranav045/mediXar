<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AnatomyModel;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Test User
        $user = User::create([
            'name' => 'Admin User',
            'email' => '.',
            'password' => Hash::make('password'),
            'specialization' => 'General Medicine',
            'learning_streak' => 0,
            'plan_type' => 'Free'
        ]);

        // 10 Anatomy Models
        $models = [
            [
                'title' => 'Nervous System',
                'description' => 'A comprehensive view of the human nervous system, including the brain and spinal cord.',
                'file_path' => 'models/nerves.glb', 
                'category' => 'Nervous System',
                'is_premium' => false,
                'scientific_name' => 'Systema nervosum',
                'functions' => ['Coordination of movement', 'Processing sensory input', 'Control of autonomic functions', 'Higher cognitive processing'],
                'clinical_note' => 'Neurological disorders can affect signaling speed, leading to motor or sensory deficits.',
                'thumbnail' => 'thumbnails/nerves.png'
            ],
            [
                'title' => 'Human Skull',
                'description' => 'The skull is a bony structure that forms the head in vertebrates.',
                'file_path' => 'models/Skull.glb', 
                'category' => 'Skeletal System',
                'is_premium' => false,
                'scientific_name' => 'Cranium',
                'functions' => ['Protection of the brain', 'Structural support for the face', 'House for sensory organs (eyes, ears)', 'Anchor for facial muscles'],
                'clinical_note' => 'Cranial fractures are critical as they may compromise brain safety or lead to internal hemorrhaging.',
                'thumbnail' => 'thumbnails/skull.png'
            ],
            [
                'title' => 'Human Heart',
                'description' => 'The heart is a muscular organ that pumps blood through the blood vessels of the circulatory system.',
                'file_path' => 'models/heart.glb', 
                'category' => 'Cardiovascular',
                'is_premium' => true,
                'scientific_name' => 'Cor',
                'functions' => ['Circulation of oxygenated blood', 'Removal of carbon dioxide', 'Maintenance of blood pressure', 'Hormone transportation'],
                'clinical_note' => 'Coronary artery disease is the leading cause of heart-related complications globally.',
                'thumbnail' => 'thumbnails/heart.png'
            ],
            [
                'title' => 'Full Skeleton',
                'description' => 'The complete human skeletal framework supporting the body structure.',
                'file_path' => 'models/skeleton.glb', 
                'category' => 'Skeletal System',
                'is_premium' => false,
                'scientific_name' => 'Systema sceletale',
                'functions' => ['Framework for the entire body', 'Facilitation of locomotion', 'Storage of essential minerals', 'Hematopoiesis (blood cell production)'],
                'clinical_note' => 'Osteoporosis leads to decreased bone density, significantly increasing fracture risk in older adults.',
                'thumbnail' => 'thumbnails/skeleton.png'
            ],
            [
                'title' => 'Blood Vessels',
                'description' => 'The network of arteries, veins, and capillaries that transport blood.',
                'file_path' => 'models/blood.glb', 
                'category' => 'Cardiovascular',
                'is_premium' => false,
                'scientific_name' => 'Vasa sanguinea',
                'functions' => ['Nutrient and oxygen delivery', 'Waste product removal', 'Thermoregulation of the body', 'Immune response facilitation'],
                'clinical_note' => 'Atherosclerosis involves plaque buildup, which can restrict flow and cause stroke or heart attack.',
                'thumbnail' => 'thumbnails/blood.png'
            ],
            [
                'title' => 'Muscular System',
                'description' => 'The system of muscles that enables movement of the body.',
                'file_path' => 'models/muscle.glb', 
                'category' => 'Muscular System',
                'is_premium' => true,
                'scientific_name' => 'Systema musculare',
                'functions' => ['Generation of physical force', 'Maintenance of body posture', 'Production of body heat', 'Support for internal organs'],
                'clinical_note' => 'Muscular dystrophy is a group of genetic diseases that cause progressive weakness and loss of muscle mass.',
                'thumbnail' => 'thumbnails/muscle.png'
            ],
            [
                'title' => 'Left Kidney',
                'description' => 'The kidneys are two reddish-brown bean-shaped organs found in vertebrates.',
                'file_path' => 'models/kidney.glb', 
                'category' => 'Urinary System',
                'is_premium' => false,
                'scientific_name' => 'Ren',
                'functions' => ['Filtration of blood', 'Balance of body fluids', 'Regulation of electrolytes', 'Excretion of metabolic waste'],
                'clinical_note' => 'Chronic kidney disease can progress to end-stage renal failure, requiring dialysis or transplant.',
                'thumbnail' => 'thumbnails/kidney.png'
            ],
            [
                'title' => 'Human Lungs',
                'description' => 'The lungs are the primary organs of the respiratory system in humans.',
                'file_path' => 'models/lung.glb', 
                'category' => 'Respiratory System',
                'is_premium' => true,
                'scientific_name' => 'Pulmo',
                'functions' => ['Gas exchange (O2/CO2)', 'Regulation of blood pH levels', 'Filter for small blood clots', 'Protection against infection'],
                'clinical_note' => 'Pneumonia and COPD are common conditions that significantly impair respiratory efficiency.',
                'thumbnail' => 'thumbnails/lung.png'
            ],
            [
                'title' => 'Stomach',
                'description' => 'The stomach is a muscular, hollow organ in the gastrointestinal tract of humans.',
                'file_path' => 'models/stomach.glb', 
                'category' => 'Digestive System',
                'is_premium' => false,
                'scientific_name' => 'Gaster',
                'functions' => ['Chemical breakdown of food', 'Storage of ingested meals', 'Mechanical mixing of contents', 'Secretion of gastric acid'],
                'clinical_note' => 'Gastric ulcers are often caused by H. pylori infection or long-term NSAID use.',
                'thumbnail' => 'thumbnails/stomach.png'
            ],
            [
                'title' => 'Liver',
                'description' => 'The liver is a large, meaty organ that sits on the right side of the belly.',
                'file_path' => 'models/liver.glb', 
                'category' => 'Digestive System',
                'is_premium' => false,
                'scientific_name' => 'Hepar',
                'functions' => ['Detoxification of chemicals', 'Production of bile for digestion', 'Metabolism of fats and proteins', 'Storage of glucose (glycogen)'],
                'clinical_note' => 'Cirrhosis is late-stage scarring of the liver, which can lead to liver failure and jaundice.',
                'thumbnail' => 'thumbnails/liver.png'
            ],
            [
                'title' => 'Internal Organs',
                'description' => 'A collective view of the primary internal organs of the human body.',
                'file_path' => 'models/organs.glb', 
                'category' => 'General Anatomy',
                'is_premium' => false,
                'scientific_name' => 'Viscera',
                'functions' => ['Nutrient absorption', 'Metabolic regulation', 'Hormonal coordination', 'Immune defense system'],
                'clinical_note' => 'Multisystem organ failure occurs when multiple organ systems fail simultaneously, often due to sepsis.',
                'thumbnail' => 'thumbnails/organs.png'
            ]
        ];

        foreach ($models as $m) {
            AnatomyModel::create($m);
        }

        // --- Quizzes ---
        $this->call([
            QuizSeeder::class,
            StudyMaterialSeeder::class,
        ]);
    }
}
