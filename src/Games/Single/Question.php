<?php
declare(strict_types=1);

namespace Games\Single;

class Question
{

    private mixed $answer;
    private bool $correct;

    /**
     * @param  string  $body
     * @param  mixed  $solution
     */
    public function __construct(
        protected string $body,
        protected mixed $solution,
    )
    {
    }

    public function answer(mixed $answer): void
    {
        $this->answer = $answer;
        $this->correct = $answer === $this->solution;
    }

    public function isCorrect(): bool
    {
        return $this->correct;
    }
}