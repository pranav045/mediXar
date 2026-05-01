<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\StudyMaterial;
use Illuminate\Support\Str;

class StudyMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = [
            [
                'title' => 'Hemodynamics and Heart Valve Mechanics',
                'description' => 'A deep dive into the physics of blood flow and the mechanical properties of cardiac valves.',
                'content' => 'The study of hemodynamics involves the physical principles governing blood flow in the circulatory system. The heart valves—tricuspid, pulmonary, mitral, and aortic—play a critical role in ensuring unidirectional flow. This article explores the pressure gradients required for valve opening, the stress-strain relationships in valvular tissue, and the impact of stenosis on cardiac output...',
                'category' => 'Cardiovascular',
                'thumbnail' => 'articles/cardio.png',
                'read_time' => 12,
                'is_premium' => false
            ],
            [
                'title' => 'Synaptic Transmission and Neuroplasticity',
                'description' => 'Understanding how neurons communicate and the mechanisms behind memory and learning.',
                'content' => 'Synaptic transmission is the process by which signaling molecules called neurotransmitters are released by the axon terminal of a neuron. Long-term potentiation (LTP) is a persistent strengthening of synapses based on recent patterns of activity. These patterns of synaptic strength are the cellular basis of learning and memory...',
                'category' => 'Neurology',
                'thumbnail' => 'articles/neuro.png',
                'read_time' => 15,
                'is_premium' => true
            ],
            [
                'title' => 'Bone Remodeling and Fracture Healing',
                'description' => 'The cellular orchestration of bone tissue maintenance and the four stages of fracture repair.',
                'content' => 'Bone is a dynamic tissue that undergoes constant remodeling through the coordinated actions of osteoclasts (resorption) and osteoblasts (formation). Following a fracture, the body initiates a complex repair process: 1. Hematoma formation, 2. Fibrocartilaginous callus formation, 3. Bony callus formation, and 4. Bone remodeling...',
                'category' => 'Orthopedics',
                'thumbnail' => 'articles/ortho.png',
                'read_time' => 10,
                'is_premium' => false
            ],
            [
                'title' => 'The Enteric Nervous System: The Second Brain',
                'description' => 'Exploring the complex network of neurons that governs the gastrointestinal tract.',
                'content' => 'The enteric nervous system (ENS) is a quasi-autonomous part of the nervous system and includes a number of neural circuits that control motor functions, local blood flow, mucosal transport and secretions, and modulates immune and endocrine functions. Often called the "second brain," the ENS contains more neurons than the spinal cord...',
                'category' => 'Gastroenterology',
                'thumbnail' => 'articles/gastro.png',
                'read_time' => 8,
                'is_premium' => false
            ],
            [
                'title' => 'Glomerular Filtration and Electrolyte Balance',
                'description' => 'The physiology of the nephron and how the kidneys regulate blood pressure and pH.',
                'content' => 'The kidneys maintain homeostasis by filtering the blood, reabsorbing essential nutrients, and excreting waste. The glomerular filtration rate (GFR) is a key indicator of renal function. This article examines the counter-current multiplier system in the Loop of Henle and the role of ADH and Aldosterone in maintaining electrolyte balance...',
                'category' => 'Renal Science',
                'thumbnail' => 'articles/renal.png',
                'read_time' => 14,
                'is_premium' => true
            ]
        ];

        foreach ($materials as $m) {
            $m['slug'] = Str::slug($m['title']);
            StudyMaterial::create($m);
        }
    }
}
