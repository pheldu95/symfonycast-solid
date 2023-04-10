<?php

namespace App\Comment;

use App\Entity\Comment;
use App\Service\RegexSpamWordHelper;

class CommentSpamManager
{
    private CommentSpamCounterInterface $spamWordCounter;

    public function __construct(CommentSpamCounterInterface $spamWordCounter){

        $this->spamWordHelper = $spamWordCounter;
    }
    public function validate(Comment $comment): void
    {
        $content = $comment->getContent();
        $badWordsCount = $this->spamWordHelper->countSpamWords($content);

        if ($badWordsCount >= 2) {
            // We could throw a custom exception if needed
            throw new \RuntimeException('Message detected as spam');
        }
    }
}
