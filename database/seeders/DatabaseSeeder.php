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
                'is_premium' => false
            ],
            [
                'title' => 'Human Skull',
                'description' => 'The skull is a bony structure that forms the head in vertebrates.',
                'file_path' => 'models/Skull.glb', 
                'category' => 'Skeletal System',
                'is_premium' => false
            ],
            [
                'title' => 'Human Heart',
                'description' => 'The heart is a muscular organ that pumps blood through the blood vessels of the circulatory system.',
                'file_path' => 'models/heart.glb', 
                'category' => 'Cardiovascular',
                'is_premium' => true
            ],
            [
                'title' => 'Full Skeleton',
                'description' => 'The complete human skeletal framework supporting the body structure.',
                'file_path' => 'models/skeleton.glb', 
                'category' => 'Skeletal System',
                'is_premium' => false
            ],
            [
                'title' => 'Blood Vessels',
                'description' => 'The network of arteries, veins, and capillaries that transport blood.',
                'file_path' => 'models/blood.glb', 
                'category' => 'Cardiovascular',
                'is_premium' => false
            ],
            [
                'title' => 'Muscular System',
                'description' => 'The system of muscles that enables movement of the body.',
                'file_path' => 'models/muscle.glb', 
                'category' => 'Muscular System',
                'is_premium' => true
            ],
            [
                'title' => 'Left Kidney',
                'description' => 'The kidneys are two reddish-brown bean-shaped organs found in vertebrates.',
                'file_path' => 'models/kidney.glb', 
                'category' => 'Urinary System',
                'is_premium' => false
            ],
            [
                'title' => 'Human Lungs',
                'description' => 'The lungs are the primary organs of the respiratory system in humans.',
                'file_path' => 'models/lung.glb', 
                'category' => 'Respiratory System',
                'is_premium' => true
            ],
            [
                'title' => 'Stomach',
                'description' => 'The stomach is a muscular, hollow organ in the gastrointestinal tract of humans.',
                'file_path' => 'models/stomach.glb', 
                'category' => 'Digestive System',
                'is_premium' => false
            ],
            [
                'title' => 'Liver',
                'description' => 'The liver is a large, meaty organ that sits on the right side of the belly.',
                'file_path' => 'models/liver.glb', 
                'category' => 'Digestive System',
                'is_premium' => false
            ],
            [
                'title' => 'Internal Organs',
                'description' => 'A collective view of the primary internal organs of the human body.',
                'file_path' => 'models/organs.glb', 
                'category' => 'General Anatomy',
                'is_premium' => false
            ]
        ];

        foreach ($models as $m) {
            AnatomyModel::create($m);
        }

        // --- Quizzes ---
        
        // Quiz 1: Cranial Nerves
        $quiz1 = Quiz::create([
            'title' => 'Cranial Nerves Basics',
            'category' => 'Nervous System',
            'difficulty' => 'Medium',
            'description' => 'Test your knowledge on the fundamental cranial nerves.'
        ]);

        Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Which cranial nerve is responsible for transmitting visual information from the retina to the brain?',
            'options' => ['Olfactory Nerve (CN I)', 'Optic Nerve (CN II)', 'Oculomotor Nerve (CN III)', 'Trigeminal Nerve (CN V)'],
            'correct_answer' => 'Optic Nerve (CN II)'
        ]);
        Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'Which nerve innervates the muscles of facial expression?',
            'options' => ['Trigeminal Nerve (CN V)', 'Facial Nerve (CN VII)', 'Vagus Nerve (CN X)', 'Hypoglossal Nerve (CN XII)'],
            'correct_answer' => 'Facial Nerve (CN VII)'
        ]);
        Question::create([
            'quiz_id' => $quiz1->id,
            'question_text' => 'The vagus nerve is classified as cranial nerve number:',
            'options' => ['CN VIII', 'CN IX', 'CN X', 'CN XI'],
            'correct_answer' => 'CN X'
        ]);

        // Quiz 2: Skeletal System
        $quiz2 = Quiz::create([
            'title' => 'Bones of the Hand',
            'category' => 'Skeletal System',
            'difficulty' => 'Hard',
            'description' => 'Identify the carpal bones and phalanges.'
        ]);

        Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'Which of these is NOT a carpal bone?',
            'options' => ['Scaphoid', 'Lunate', 'Cuboid', 'Trapezium'],
            'correct_answer' => 'Cuboid'
        ]);
        Question::create([
            'quiz_id' => $quiz2->id,
            'question_text' => 'How many phalanges are in a typical human thumb?',
            'options' => ['1', '2', '3', '4'],
            'correct_answer' => '2'
        ]);

        // Quiz 3: Cardiovascular
        $quiz3 = Quiz::create([
            'title' => 'Heart Anatomy & Valves',
            'category' => 'Cardiovascular',
            'difficulty' => 'Easy',
            'description' => 'Identify the chambers and valves of the human heart.'
        ]);

        Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'Which chamber of the heart pumps oxygenated blood to the rest of the body?',
            'options' => ['Right Atrium', 'Right Ventricle', 'Left Atrium', 'Left Ventricle'],
            'correct_answer' => 'Left Ventricle'
        ]);
        Question::create([
            'quiz_id' => $quiz3->id,
            'question_text' => 'What valve separates the left atrium and left ventricle?',
            'options' => ['Tricuspid Valve', 'Mitral (Bicuspid) Valve', 'Aortic Valve', 'Pulmonary Valve'],
            'correct_answer' => 'Mitral (Bicuspid) Valve'
        ]);
    }
}
