<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        Question::truncate();
        Quiz::truncate();
        $categories = [
            'Skeletal System', 'Muscular System', 'Nervous System', 'Cardiovascular', 
            'Respiratory System', 'Digestive System', 'Urinary System', 'Endocrine System'
        ];

        $difficulties = ['Easy', 'Medium', 'Hard'];

        for ($i = 1; $i <= 20; $i++) {
            $category = $categories[array_rand($categories)];
            $difficulty = $difficulties[array_rand($difficulties)];
            
            $quiz = Quiz::create([
                'title' => "$category Specialist Quiz #$i",
                'category' => $category,
                'difficulty' => $difficulty,
                'description' => "Test your advanced knowledge of the $category in this comprehensive examination."
            ]);

            for ($j = 1; $j <= 10; $j++) {
                $options = [
                    "Correct Answer for Q$j",
                    "Distractor Option B",
                    "Distractor Option C",
                    "Distractor Option D"
                ];
                shuffle($options);

                Question::create([
                    'quiz_id' => $quiz->id,
                    'question_text' => "This is a specialized question about $category (Question #$j). What is the primary function or structure being discussed?",
                    'options' => $options,
                    'correct_answer' => "Correct Answer for Q$j"
                ]);
            }
        }
    }
}
