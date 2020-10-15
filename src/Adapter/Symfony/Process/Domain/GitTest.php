<?php

declare(strict_types=1);

namespace App\Adapter\Symfony\Process\Domain;

use App\Domain\Git as GitInterface;
use Traversable;

final class GitTest implements GitInterface
{
    public function cloneRepository(string $uri, string $repoName): void
    {
    }

    public function findCommitsByCommentFragment(string $repoName, string $searchPhrase): Traversable
    {
        yield from [];
    }
}