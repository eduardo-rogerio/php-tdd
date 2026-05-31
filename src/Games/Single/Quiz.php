<?php

namespace Games\Single;

class Quiz
{
    public function __construct(protected array $questions = [])
    {}

    public function addQuestions(Question $question): void
    {
        $this->questions[] = $question;
    }

    public function questions(): array
    {
        return $this->questions;
    }

    public function nextQuestion()
    {
        return $this->questions[0];
    }

    public function grade()
    {
        $correct = count($this->correctlyAnsweredQuestions());

        return ($correct / count($this->questions)) * 100;
    }

    public function correctlyAnsweredQuestions(): array
    {
        return array_filter($this->questions, fn($q) => $q->isCorrect());
    }
}